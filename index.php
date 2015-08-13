<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

		<link href="style.css"  media="all" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<?php
		$address = explode("\n", file_get_contents('https://docs.google.com/spreadsheet/pub?key=0Ao9AwgenLRqIdDNCWGVGa3pZakNSNjRqWUhoNlk2SFE&output=csv'));

		$data = [];

		$message1 = explode(",", $address[23]);
		$message = $message1[2];
		


		for($i = 2; $i < 10; $i++) {
			$parts = explode(",", $address[$i]);
			
			if ($parts[1] == "")
				continue;

			$data[] = [
				'priority' => $parts[0],
				'region' => $parts[1],
				'link' => $parts[2],
				'prio_d1' => $parts[3],
				'prio_d2' => $parts[4],
				'prio_d3' => $parts[5],
				'prio_d4' => $parts[6],
				'for' => $parts[7],
				'against' => $parts[10],
				
				
			];
		}
		?>
		<div class="container">
			<div class="row">
				<div class="col-xs-2 fixed-width">
					<ul class="nav nav-pills">
						<li class="active">
							<a data-content="div_1" href="#">
								D1
							</a>
						</li>
						<li>
							<a data-content="div_2" href="#">
								D2
							</a>
						</li>
						<li>
							<a data-content="div_3" href="#">
								D3
							</a>
						</li>
						<li>
							<a data-content="div_4" href="#">
								D4
							</a>
						</li>
					</ul>
				</div>
				<div id="divisions" class="col-xs-10">
					<div id="div_1" class="row orders">
						<?php

						foreach ($data as $bat) {
						?>
						<a class="btn btn-primary" target="_blank" href="<?php echo $bat['link']; ?>">
							<h4><?php echo $bat['prio_d1']; ?></h4>
							<p><?php echo $bat['for']; ?></p>
							<p><?php echo $bat['region']; ?></p>
							<h6>PELEAR</h6>
						</a>
						<?php
						}
						?>
					</div>
					<div id="div_2" class="row orders" style="display: none;">
						<?php

						foreach ($data as $bat) {
						?>
						<a class="btn btn-primary" target="_blank" href="<?php echo $bat['link']; ?>">
							<h4><?php echo $bat['prio_d2']; ?></h4>
							<p><?php echo $bat['for']; ?></p>
							<p><?php echo $bat['region']; ?></p>
							<h6>PELEAR</h6>
						</a>
						<?php
						}
						?>
					</div>
					<div id="div_3" class="row orders" style="display: none;">
						<?php

						foreach ($data as $bat) {
						?>
						<a class="btn btn-primary" target="_blank" href="<?php echo $bat['link']; ?>">
							<h4><?php echo $bat['prio_d3']; ?></h4>
							<p><?php echo $bat['for']; ?></p>
							<p><?php echo $bat['region']; ?></p>
							<h6>PELEAR</h6>
						</a>
						<?php
						}
						?>
					</div>
					<div id="div_4" class="row orders" style="display: none;">
						<?php

						foreach ($data as $bat) {
						?>
						<a class="btn btn-primary" target="_blank" href="<?php echo $bat['link']; ?>">
							<h4><?php echo $bat['prio_d4']; ?></h4>
							<p><?php echo $bat['for']; ?></p>
							<p><?php echo $bat['region']; ?></p>
							<h6>PELEAR</h6>
						</a>
						<?php

						}
						?>
					</div>

					
				</div>
			</div>
		</div>
		
		<div class="center-block alert alert-info col-md-6" role="alert" style="width: 963px;float: left;margin: 5px 0 0 0;">
			<?php echo 'Mesaje del MoD: '.$message   ?>					
		</div>
		<!-- Latest compiled and minified jQuery JavaScript -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
		<script src="main.js"></script> <!-- Resource jQuery -->
	</body>
</html>
