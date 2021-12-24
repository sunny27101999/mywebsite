 
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
 <strong><h3>Penetration testing stages </h3></strong>
 <br />
 
 <p>The pen testing process can be broken down into five stages. </p>
 <img  src = "images/five.png" width = "600px" height = "400px" />
 <br />
 <strong><h4 style = "color:#ff0000;">1. Planning and reconnaissance</h4></strong>
 <p>The first stage involves:</p>
 
 <p>Defining the scope and goals of a test, including the systems to be addressed and the testing methods to be used.</p>
 <p>Gathering intelligence (e.g., network and domain names, mail server) to better understand how a target works and its potential vulnerabilities</p>
 
 <br />
 <strong><h4 style = "color:#ff0000;">2. Scanning</h4></strong>
 <p> The next step is to understand how the target application will respond to various intrusion attempts. This is typically done using:</p>
 
 <p>Static analysis – Inspecting an application’s code to estimate the way it behaves while running. These tools can scan the entirety of the code in a single pass.<p>
 <p>Dynamic analysis – Inspecting an application’s code in a running state. This is a more practical way of scanning, as it provides a real-time view into an application’s performance.
 </p>
 
 <br />
 <strong><h4 style = "color:#ff0000;">3. Gaining Access </h4></strong>
 <p>This stage uses web application attacks, such as cross-site scripting, SQL injection and backdoors, to uncover a target’s vulnerabilities. Testers then try and exploit these vulnerabilities, typically by escalating privileges, stealing data, intercepting traffic, etc., to understand the damage they can cause. </p>
 
 <br />
 <strong><h4 style = "color:#ff0000;">4. Maintaining access </h4></strong>
 <p> The goal of this stage is to see if the vulnerability can be used to achieve a persistent presence in the exploited system— long enough for a bad actor to gain in-depth access. The idea is to imitate advanced persistent threats, which often remain in a system for months in order to steal an organization’s most sensitive data.</p>
 
 <br />
 <strong><h4 style = "color:#ff0000;">5.  Analysis </h4></strong>
 <p>The results of the penetration test are then compiled into a report detailing:</p>
 
 <p>Specific vulnerabilities that were exploited</p>
 <p>Sensitive data that was accessed</p>
 <p>The amount of time the pen tester was able to remain in the system undetected</p>
 
<p> This information is analyzed by security personnel to help configure an enterprise’s WAF settings and other application security solutions to patch vulnerabilities and protect against future attacks. </p>
 
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
 
