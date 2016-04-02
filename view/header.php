<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset='UTF-8'>
	<meta name='viewport' content='width=device-width, initial-scale=1'>

	<!-- Bootstrap CSS & Theme -->
	<link rel='stylesheet' href='//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
	<link rel='stylesheet' href='//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css'>

	<!-- Custom CSS -->
	<link rel="stylesheet" href="css/style.css">

	<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
	<script src="js/vote.js"></script>
	<script src="js/edit.js"></script>

	<title>
	</title>
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <?php if(isset($_SESSION['user_id'])):?>
        <li><a href="view/logout.php">Logout</a></li>
        <?php else:?>
        <li><a href="view/login.php">Login</a></li>
        <?php endif;?>
        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


