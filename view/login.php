<?php
include ("../classes/user.class.php");
if (!empty($_POST)) {
    $login = User::login($_POST["username"], $_POST["password"]);
}

?>
 

<div class="page-header">
  <h1>Login</h1>
</div>
<form class="form-horizontal" action="" method="post">
	<div class="form-group">
		<label for="username" class="col-sm-2 control-label">Username</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="username" placeholder="Username" name="username">
		</div>
	</div>
	<div class="form-group">
		<label for="password" class="col-sm-2 control-label">Password</label>
		<div class="col-sm-10">
			<input type="password" id="password" name="password" class="form-control" placeholder="Password">
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			<button type="submit" class="btn btn-primary">Login!</button>
		</div>
	</div>
</form>