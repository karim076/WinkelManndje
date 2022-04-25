<!DOCTYPE html>
<html lang="en">
<head>
  <?php require_once '../head.php' ; session_start();?>
  <link rel="stylesheet" href="../styles/login.css">
</head>
<body>
  <header>
    <?php require_once '../header.php'?>
  </header>
  <div class="center"><h2>Inloggen</h2></div>  
  <div class="container">
	<div class="screen">
		<div class="screen__content">
			<form class="login" method="POST" action="../backend/loginController.php">
				<div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="text" class="login__input" name="username" placeholder="Username" required>
				</div>
				<div class="login__field">
					<i class="login__icon fas fa-lock"></i>
					<input type="password" class="login__input" name="pass" placeholder="Wachtwoord" required>
				</div>
				<input type="submit" content="Log In Now" class="button login__submit">
				</button>				
			</form>
			<div class="social-login">
				<h3>Geen account</h3>
				<div class="social-icons">
					<a href="register.php">Klik hier</a>
				</div>
			</div>
		</div>
		<div class="screen__background">
			<span class="screen__background__shape screen__background__shape4"></span>
			<span class="screen__background__shape screen__background__shape3"></span>		
			<span class="screen__background__shape screen__background__shape2"></span>
			<span class="screen__background__shape screen__background__shape1"></span>
		</div>		
	</div>
</div>
<footer>
    <div class="wrapper">
      <div class="copyright">
        &copy; 2020 - 2021 DeveloperLand&nbsp;&nbsp;All Rights Reserved
      </div>
    </div>
  </footer>  
</body>
</html>