<!DOCTYPE html>
<html lang = "en">
	<head>
		<title>Penetration Testing Website</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css " />
		<link rel = "stylesheet" type = "text/css" href = "css/style.css" />
	</head>
<body>
	<nav style = "background-color:rgba(0, 0, 0, 0.1);" class = "navbar navbar-default">
		<div
		class = "container-fluid">
			<div class = "navbar-header">
				<a class = "navbar-brand" >Penetration Testing Website</a>
			</div>
		</div>
	</nav>	
	<ul id = "menu">
	<li><a href = "index.php">Home</a></li> |
	<li><a href = "login.php">Login</a></li> |
	<li><a href = "stages.php">Stages in Pentration Testing </a></li> |			
	<li><a href = "rulesandregulation.php">Attack Information</a></li>  |
	<li><a href = "aboutus.php">About us</a></li> |
	</ul>
	<div style = "margin-left:0;" class = "container">
		<div class = "panel panel-default">
			<div class = "panel-body">
				<strong><h3>Attack Information</h3></strong>
				<br />
				<strong><h4 style = "color:#ff0000;">1.  Injection attacks</h4></strong>
				<p> It is the attack in which some data will be injected into a web application to manipulate the application and fetch the required information.
				
				Example- SQL Injection, code Injection, log Injection, XML Injection etc.</p>
				<img  src = "images/sql.png" width = "400px" height = "400px" />
				<br />
				<strong><h4 style = "color:#ff0000;">2.  Phishing</h4></strong>
				<p>Phishing is a type of attack which attempts to steal sensitive information like user login credentials and credit card number. It occurs when an attacker is masquerading as a trustworthy entity in electronic communication.</p>
				<img  src = "images/phishing.png" width = "400px" height = "400px" />
				<br />
				<strong><h4 style = "color:#ff0000;">3.  Denial of Service</h4></strong>
				<p>It is an attack which meant to make a server or network resource unavailable to the users. It accomplishes this by flooding the target with traffic or sending it information that triggers a crash. It uses the single system and single internet connection to attack a server</p>
				<img  src = "images/dos.png" width = "400px" height = "400px" />
				<br />
				<strong><h4 style = "color:#ff0000;">4.Man in the middle attacks </h4></strong>
				<p>It is a type of attack that allows an attacker to intercepts the connection between client and server and acts as a bridge between them. Due to this, an attacker will be able to read, insert and modify the data in the intercepted connection.</p>
				<img  src = "images/mim.png" width = "400px" height = "400px" />
				<br />
				<strong><h4 style = "color:#ff0000;">5. DNS Spoofing</h4></strong>
				<p>DNS Spoofing is a type of computer security hacking. Whereby a data is introduced into a DNS resolver's cache causing the name server to return an incorrect IP address, diverting traffic to the attacker?s computer or any other computer. The DNS spoofing attacks can go on for a long period of time without being detected and can cause serious security issues.
				</p>
				<img  src = "images/dns.png" width = "400px" height = "400px" />
				<br />
				
			</div>
		</div>
	</div>
	<br />
	<br />
	<div style = "text-align:right; margin-right:10px;" class = "navbar navbar-default navbar-fixed-bottom">
		<label>&copy; Design By Sunny Kumar </label>
	</div>
</body>
<script src = "js/jquery.js"></script>
<script src = "js/bootstrap.js"></script>	
</html>
