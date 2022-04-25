<!DOCTYPE html>
<html lang="en">
<head>
  <?php require_once '../head.php' ?>
  <link rel="stylesheet" href="../styles/login.css">
  <title>DeveloperLand - Het meest leerzame prepark voor het hele gezin!</title>
</head>
<body>
  <header>
    <?php require_once '../header.php' ?>
  </header>
  <main>
    <div class="center"><h2>registreren</h2></div> 
    <?php  
    if(isset($_SESSION['logged'])): ?>
      <div><?php echo $_SESSION['logged']; ?></div>
    <?php endif;?>
    <div class="container">
    <div class="screen">
      <div class="screen__content">
        <form class="login" method="POST" action="../backend/registerController.php">
          <div class="login__field">
            <i class="login__icon fas fa-user"></i>
            <input type="text" class="login__input" name="username" placeholder="Username" required>
          </div>

          <div class="login__field">
            <i class="login__icon fas fa-user"></i>
            <input type="text" class="login__input" name="name" placeholder="naam" required>
          </div>

          <div class="login__field">
            <i class="login__icon fas fa-envelope"></i>
            <input type="email" class="login__input" name="email" placeholder="Email" required>
          </div>
          
          <div class="login__field">
            <i class="login__icon fas fa-lock"></i>
            <input type="password" class="login__input" name="pass" placeholder="Wachtwoord" required>
          </div>

          <input type="submit"  class="button login__submit">
          </button>				
        </form>
        <div class="social-login">
          <h3>Al een account</h3>
          <div class="social-icons">
            <a href="login.php">Klik hier</a>
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
</main>
<footer>
    <div class="wrapper">
      <div class="copyright">
        &copy; 2020 - 2021 Karim, Sharmake&nbsp;&nbsp;All Rights Reserved
      </div>
    </div>
  </footer>  
</body>
</html>