<?php 
  session_start(); 
  

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="header">
	<h2>Ви зайшли до облікового запису</h2>
</div>
<div class="content">
  	

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Ласкаво просимо <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="index.html" style="color: red;">повернутися до головної сторінки</a> </p>
    <?php endif ?>
</div>
		
</body>
</html>