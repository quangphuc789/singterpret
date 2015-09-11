<?php

?>

<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Singterpret</title>
	<script type="text/javascript" src="js/customer.js"></script>
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
					<div style='border:1px solid white;padding:10px;border-radius:5px;margin:5px;height:500px'>
						<table style="margin:auto;font-family:Cambria;font-size:14px;color:white">
							<tr>
								<td style="padding-bottom:20px">
									<u>New Request</u>
								</td>
							</tr>
							<tr>
								<td>Country</td>
								<td style="padding-left:10px;padding-bottom:2px;padding-right:10px">
									<input id="country" type="text" class="form-control"></input>
								</td>
							</tr>
							<tr>
								<td>City</td>
								<td style="padding-left:10px;padding-bottom:2px;padding-right:10px">
									<input id="city" type="text" class="form-control"></input>
								</td>
							</tr>
							<tr>
								<td>Description</td>
								<td style="padding-left:10px;padding-bottom:2px;padding-right:10px">
									<input id="description" type="text" class="form-control"></input>
								</td>
							</tr>
							<tr>
								<td>Language 1</td>
								<td style="padding-left:10px;padding-bottom:2px;padding-right:10px">
									<input id="language-1" type="text" class="form-control"></input>
								</td>
							</tr>
							<tr>
								<td>Language 2</td>
								<td style="padding-left:10px;padding-bottom:2px;padding-right:10px">
									<input id="language-2" type="text" class="form-control"></input>
								</td>
							</tr>
							<tr>
								<td>Language 3</td>
								<td style="padding-left:10px;padding-bottom:2px;padding-right:10px">
									<input id="language-3" type="text" class="form-control"></input>
								</td>
								<td style="padding-right:5px"><i>Optional</i></td>
								<td><input type="checkbox"></input></td>
							</tr>
							<tr>
								<td>From</td>
								<td style="padding-left:10px;padding-bottom:2px;padding-right:10px">
									<input id="from" type="datetime-local" class="form-control"></input>
								</td>
							</tr>
							<tr>
								<td>To</td>
								<td style="padding-left:10px;padding-bottom:2px;padding-right:10px">
									<input id="to" type="datetime-local" class="form-control"></input>
								</td>
							</tr>
							<tr>
								<td>Location</td>
								<td style="padding-left:10px;padding-bottom:2px;padding-right:10px">
									<input id="location" type="text" class="form-control"></input>
								</td>
							</tr>
							<tr>
								<td>Number of Interpreters</td>
								<td style="padding-left:10px;padding-bottom:2px;padding-right:10px">
									<input id="number" type="number" min="1" value="1" class="form-control"></input>
								</td>
							</tr>
							<tr>
								<td></td>
								<td style="padding:15px">
									<button class="btn btn-default" onclick="fake_add_request()">ADD</button>
								</td>
							</tr>
						</table>
					</div>
				</td>
				<td style="width:30%">
					<div style='border:1px solid white;padding:10px;border-radius:5px;margin:5px;text-align:center;height:500px;overflow:auto'>
						<u style="font-family:Cambria;font-size:14px;color:white;padding-bottom:20px">
							Your Request List
						</u>
						<div id="request-list" style="margin:auto"></div>
					</div>
				</td>
				<td style="width:30%">
					<div style='border:1px solid white;padding:10px;border-radius:5px;margin:5px;text-align:center;height:500px;overflow:auto'>
						<u style="font-family:Cambria;font-size:14px;color:white;padding-bottom:20px">
							Market Demographics
						</u>
						<div id="population" style="margin:auto"></div>
					</div>
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