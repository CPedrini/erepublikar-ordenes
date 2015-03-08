<!DOCTYPE>
<html>
	<head>
		<title></title>
		<link href="reset.css"  media="all" rel="stylesheet" type="text/css" />
		<link href="style.css"  media="all" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<?php
		$address = explode("\n", file_get_contents('https://docs.google.com/spreadsheet/pub?key=0Ao9AwgenLRqIdDNCWGVGa3pZakNSNjRqWUhoNlk2SFE&output=csv'));

		$data = [];

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
		<div>
			<div class="cd-tabs">
				<nav>
					<ul class="cd-tabs-navigation">
						<li class="selected">
							<a data-content="D1" href="#0">
								<h3>D1</h3>
							</a>
						</li>
						<li>
							<a data-content="D2" href="#0">
								<h3>D2</h3>
							</a>
						</li>
						<li>
							<a data-content="D3" href="#0">
								<h3>D3</h3>
							</a>
						</li>
						<li>
						<a data-content="D4" href="#0">
								<h3>D4</h3>
							</a>
						</li>
					</ul> <!-- cd-tabs-navigation -->
				</nav>

				<ul class="cd-tabs-content">
					<li data-content="D1" class="selected">
						<?php

						foreach ($data as $bat) {
						?>
						<a target="_blank" href="<?php echo $bat['link']; ?>">
							<div class="btn">
								<div class="first">
									<h4><?php echo $bat['prio_d1']; ?></h4>
									<h5><?php echo $bat['for']; ?></h5>

									<h5><?php echo $bat['region']; ?></h5>
								</div>
								<div>
									<h6>PELEAR</h6>
								</div>
							</div>		
						</a>
						<?php
						}
						?>
					</li>

					<li data-content="D2">
						<?php

						foreach ($data as $bat) {
						?>
						<a target="_blank" href="<?php echo $bat['link']; ?>">
							<div class="btn">
								<div class="first">
									<h4><?php echo $bat['prio_d2']; ?></h4>
									<h5><?php echo $bat['for']; ?></h5>

									<h5><?php echo $bat['region']; ?></h5>
								</div>
								<div>
									<h6>PELEAR</h6>
								</div>
							</div>		
						</a>
						<?php
						}
						?>
					</li>

					<li data-content="D3">
						<?php

						foreach ($data as $bat) {
						?>
						<a target="_blank" href="<?php echo $bat['link']; ?>">
							<div class="btn">
								<div class="first">
									<h4><?php echo $bat['prio_d3']; ?></h4>
									<h5><?php echo $bat['for']; ?></h5>

									<h5><?php echo $bat['region']; ?></h5>
								</div>
								<div>
									<h6>PELEAR</h6>
								</div>
							</div>		
						</a>
						<?php
						}
						?>
					</li>

					<li data-content="D4">
						<?php

						foreach ($data as $bat) {
						?>
						<a target="_blank" href="<?php echo $bat['link']; ?>">
							<div class="btn">
								<div class="first">
									<h4><?php echo $bat['prio_d4']; ?></h4>
									<h5><?php echo $bat['for']; ?></h5>

									<h5><?php echo $bat['region']; ?></h5>
								</div>
								<div>
									<h6>PELEAR</h6>
								</div>
							</div>		
						</a>
						<?php
						}
						?>
					</li>
				</ul> <!-- cd-tabs-content -->
			</div> <!-- cd-tabs -->
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="main.js"></script> <!-- Resource jQuery -->
	</body>
</html>