<?php
include("../classes/user.class.php");
if (!empty($_POST)) {
    $options = [
        'cost' => 12,
    ];
 $hash = password_hash($_POST["password"], PASSWORD_BCRYPT, $options)."\n";
    $user = new User($_POST["fullname"], $_POST["username"], $hash, $_POST["email"]);
    echo $user->save();
}
?>
    <div class="page-header">
        <h1>
		<?php 
		if (isset($feedback)) {
			echo $feedback;
		} else {
		  echo "Please sign up!";
		} 
		?>
	</h1>
    </div>
    <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="username" class="col-sm-2 control-label">Username</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="username" placeholder="Username" name="username">
            </div>
        </div>
        <div class="form-group">
            <label for="fullname" class="col-sm-2 control-label">Full Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="fullname" placeholder="Full Name" name="fullname">
            </div>
        </div>
        <div class="form-group">
            <label for="email" class="col-sm-2 control-label">E-mail</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="email" placeholder="E-mail" name="email">
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
                <button type="submit" class="btn btn-primary">Sign up!</button>
            </div>
        </div>
        </form>
    </form>