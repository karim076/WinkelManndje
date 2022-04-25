<!DOCTYPE html>
<html lang="en">
<head>
  <?php require_once '../head.php' ?>
  <link rel="stylesheet" href="../styles/login.css">
</head>
<body>
  <header>
    <?php require_once '../header.php' ?>
  </header>
  <div class="container">
	<div class="screen">
		<div class="screen__content">
			<form class="login">
				<div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="text" class="login__input" name="username" placeholder="Username">
				</div>
				<div class="login__field">
					<i class="login__icon fas fa-lock"></i>
					<input type="password" class="login__input" name="pass" placeholder="Wachtwoord">
				</div>
				<input type="submit" content="Log In Now" class="button login__submit">
				</button>				
			</form>
		</div>
		<div class="screen__background">
			<span class="screen__background__shape screen__background__shape4"></span>
			<span class="screen__background__shape screen__background__shape3"></span>		
			<span class="screen__background__shape screen__background__shape2"></span>
			<span class="screen__background__shape screen__background__shape1"></span>
		</div>		
	</div>
</div>  
</body>
</html>