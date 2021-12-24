 
 <?php
 // Initialize the session
 session_start();
 
 // Check if the user is logged in, if not then redirect him to login page
 if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
	 header("location: login.php");
	 exit;
 }
 ?>
 
 <!DOCTYPE html>
 <html lang="en">
 <head>
 <meta charset="UTF-8">
 <title>Welcome</title>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 <style>
 body{ font: 14px sans-serif; text-align: center; }
 </style>
 </head>
 <body>
 <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
 <title>  Upload Example </title>
 </head>
 <body>
 <form action="upload.php" method="post" enctype="multipart/form-data">
 <h2>PHP Upload File</h2>
 <label for="file_name">Filename:</label>
 <input type="file" name="anyfile" id="anyfile">
 <input type="submit" name="submit" value="Upload">
 <p><strong>Note:</strong> Only .jpg, .jpeg, .gif, .png formats allowed to a max size of 5 MB.</p>
 </form>
 <p>
 <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
 <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
 </p>
 </body>
 </html>
