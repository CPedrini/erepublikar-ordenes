jQuery(document).ready(function($){
	var links = $('.nav a');

	links.on('click', function(event){
		event.preventDefault();
		var selectedItem = $(this).parents('li');
		var selectedLink = $(this);

		if( !selectedItem.hasClass('active') ) {
			var selectedDivision = $('#' + selectedLink.data('content'));
			
			$('#divisions > div').not(selectedDivision).hide();
			selectedDivision.show();

			selectedItem.parents('ul').find('li').not(selectedItem).removeClass('active');
			selectedItem.addClass('active');
		}
	});
});