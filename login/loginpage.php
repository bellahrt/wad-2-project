<?php

require_once 'common.php';
header('X-Frame-Options: SAMEORIGIN');
header('X-Content-Type-Options: nosniff');

$tmp_username = '';
$checked1 = 'checked';
$checked2 = '';
if (isset($_SESSION["register_fail"])){
    $tmp_username = $_SESSION["register_fail"];
	$checked1 = '';
	$checked2 = 'checked';
    unset ($_SESSION["register_fail"]);
}
$username='';
if (isset ($_SESSION["login_page"])){
	$username = $_SESSION["login_page"];
	unset ($_SESSION["login_page"]);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Login Page</title>
    
    <link rel="stylesheet" type="text/css" href="login.css">
	<script src="https://unpkg.com/vue@next"></script>
	<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
	<script>'https://fonts.googleapis.com/css?family=Open+Sans:600'</script>
</head>

<body>

<div class="container">
	<form action="process_login.php" method="post">
<div class="login-wrap">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" <?=$checked1?>><label for="tab-1" class="tab">Sign In</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up" <?=$checked2?>><label for="tab-2" class="tab">Sign Up</label>
		
		<div class="login-form" action="process_login.php" method="post">
			<div class="sign-in-htm">
				<div class="group">
					<label for="user" class="label" >Username</label>
					<input id="user" type="text" class="input" name="username">
					
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" type="password" class="input" data-type="password" name="password">
				</div>
				<div class="group">
					<input id="check" type="checkbox" class="check" checked>
					<label for="check"><span class="icon"></span> Keep me Signed in</label>
				</div>
				<div class="group">
					<input type="submit" class="button" value="Sign In">
					<?php printErrors(); ?>
				</div>
</form>

<form action="process_register.php" method="post">
				<!-- <div class="hr"></div> -->
				<div class="foot-lnk">
					<label for="tab-2">Don't Have An Account?</a>
				</div>
			</div>
			<div class="sign-up-htm">
				<div class="group">
					<label for="user" class="label">Username</label>
					<input id="user" type="text" class="input" name="username" value= '<?= $tmp_username?>'>
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" type="password"  name="password" class="input" data-type="password">
				</div>
				<div class="group">
					<label for="pass" class="label" >Repeat Password</label>
					<input id="pass" type="password" name="confirmPassword" class="input" data-type="password">
				</div>
				<div class="group">
					<label for="pass" class="label">Email Address</label>
					<input id="pass" type="text" class="input">
				</div>
				<div class="group">
					<input type="submit" class="button" value="Sign Up">
					<?php printErrorspw(); ?>
				</div>
				<!-- <div class="hr"></div> -->
				<div class="foot-lnk">
					<label for="tab-1">Already Member?</a>
				</div>
			</div>
		</div>
	</div>
</div>
</form>
</div>

</body>
</html>