<?php

?>

<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Singterpret</title>
	<script type="text/javascript" src="js/index.js"></script>
	<script type="text/javascript" src="js/util.js"></script>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!--[if IE 7]>
		<link rel="stylesheet" href="css/ie7.css" type="text/css">
	<![endif]-->
</head>
<body>
	<div class="header">
		<div>
			<a href="index.php" id="logo"><img src="images/singterpret.png" alt="logo"></a>
			<ul>
				<li class="selected">
					<a href="index.php">Home</a>
				</li>
				<li>
					<a href="#">About Us</a>
				</li>
				<li>
					<a href="#">More</a>
					<ul>
						<li>
							<a href="#">Contact Us</a>
						</li>
						<li>
							<a href="#">Our Blog</a>
						</li>
						<li>
							<a href="#">Careers</a>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</div>

	<div class="main" align="center">
		<table style="margin:auto">
			<tr>
				<td id="request-form">
					<div style='border:1px solid white;padding:15px;border-radius:5px'>
						<table style="margin:auto;font-family:Cambria;font-size:14px;color:white">
							<tr>
								<td>City</td>
								<td style="padding-left:10px;padding-bottom:2px;padding-right:10px">
									<input type="text" class="form-control"></input>
								</td>
							</tr>
							<tr>
								<td>Language 1</td>
								<td style="padding-left:10px;padding-bottom:2px;padding-right:10px">
									<input type="text" class="form-control"></input>
								</td>
							</tr>
							<tr>
								<td>Language 2</td>
								<td style="padding-left:10px;padding-bottom:2px;padding-right:10px">
									<input type="text" class="form-control"></input>
								</td>
							</tr>
							<tr>
								<td>Language 3</td>
								<td style="padding-left:10px;padding-bottom:2px;padding-right:10px">
									<input type="text" class="form-control"></input>
								</td>
								<td style="padding-right:5px"><i>Optional</i></td>
								<td><input type="checkbox"></input></td>
							</tr>
							<tr>
								<td>From</td>
								<td style="padding-left:10px;padding-bottom:2px;padding-right:10px">
									<input type="datetime-local" class="form-control"></input>
								</td>
							</tr>
							<tr>
								<td>To</td>
								<td style="padding-left:10px;padding-bottom:2px;padding-right:10px">
									<input type="datetime-local" class="form-control"></input>
								</td>
							</tr>
							<tr>
								<td>Location</td>
								<td style="padding-left:10px;padding-bottom:2px;padding-right:10px">
									<input type="text" class="form-control"></input>
								</td>
							</tr>
							<tr>
								<td>Number of Interpreters</td>
								<td style="padding-left:10px;padding-bottom:2px;padding-right:10px">
									<input type="number" min="1" value="1" class="form-control"></input>
								</td>
							</tr>
							<tr>
								<td style="padding-right:5px">
									<button class="btn btn-default">ADD</button>
								</td>
							</tr>
						</table>
					</div>
				</td>
				<td id="request-list">
				</td>
				<td id="population">
				</td>
			</tr>
		</table>
	</div>

	<div class="footer">
		<div>
			<ul>
				<li>
					<a href="#">Privacy Policy</a>
				</li>
				<li>
					<a href="#">Terms And Conditons</a>
				</li>
			</ul>
			<div class="connect">
				<a href="#" id="twitter">Twitter</a> <a href="#" id="facebook">Facebook</a> <a href="#" id="googleplus">Google+</a>
			</div>
		</div>
	</div>
</body>
</html>

<script type="text/javascript">
	// display_languages();
</script>