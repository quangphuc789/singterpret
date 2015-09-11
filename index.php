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
			<a href="index.html" id="logo"><img src="images/singterpret.png" alt="logo"></a>
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
		<div style="text-align:center">
			<img src="images/languages.png">
		</div>
		<div style="font-size:30px;font-family:Cambria;color:white;margin:5px">
			Welcome to <img src="images/singterpret.png">
		</div>
		<div style="font-size:15px;font-family:Cambria;color:white;margin:5px">
			Your Marketplace for Freelance Interpreting Services
		</div>
		<div style="font-size:15px;font-family:Cambria;color:white;margin:5px">
			Medical checkups | Tourism | Business | More ..
		</div>
		<div style="font-size:15px;font-family:Cambria;color:white">
			<span class="badge">200,000+</span> Hours of services | <span class="badge">30+</span> Languages | <span class="badge">20+</span> Cities
		</div>
		<table style="margin:auto;font-family:Cambria;font-size:20px;color:white">
			<tr>
				<td style='padding:50px'>
					<button class="btn btn-default" onclick="customer_login()">Looking for Interpreters</button>
					<ul style="font-size:15px;font-family:Cambria;color:white;padding:20px">
						<li class="selected">Global wise</li>
						<li class="selected">Competitive & Transparent market prices</li>
						<li class="selected">Trusted & reviewable information</li>
						<li class="selected">Attractive discounts!</li>
					</ul>
				</td>
				<td style='padding:50px'>
					<button class="btn btn-default" onclick="interpreter_login()">Offering your service</button>
					<ul style="font-size:15px;font-family:Cambria;color:white;padding:20px">
						<li class="selected">Freelance on-demand basis</li>
						<li class="selected">Real-time bidding & fun</li>
						<li class="selected">Ease of mind for payment</li>
						<li class="selected">Attractive bonuses!</li>
					</ul>
				</td>
				<td style='padding:50px'>
					<div style='border:1px solid white;padding:15px;border-radius:5px'>
						<p>Already have an account?</p>
						<table>
							<tr>
								<td style="font-size:14px;padding:8px">Username</td>
								<td>
									<input id='username' type="text" class="form-control"></input>
								</td>
							</tr>
							<tr>
								<td style="font-size:14px;padding-left:8px">Password</td>
								<td>
									<input id='password' type="password" class="form-control"></input>
								</td>
							</tr>
							<tr>
								<td style="padding-top:15px;padding-left:5px">
									<button class="btn btn-default" onclick='fake_login()'>
										Login
									</button>
								</td>
								<td id="login-feedback" style="font-family:Cambria;font-size:14px;text-align:center">
								</td>
							</tr>
						</table>
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