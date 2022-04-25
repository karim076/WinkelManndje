<?php 
	session_start(); 
	error_reporting(E_ERROR | E_WARNING | E_PARSE);	
 	if(!isset($_SESSION['user_id']))
	{
	    $msg="Login om deze pagina te bereiken!"; 
	    header("Location: userItem/login.php?msg=$msg");
    	exit;
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php require_once 'head.php'; session_start(); ?>
</head>
<body>
  <header>
  <?php require_once 'header.php' ?>
  </header>
  <main>
    <div class="wrapper">
      <article>
        <h3>DeveloperLand mok</h3>
      </article>
        <div class="details">
          <div class="img">
            <img src="images/merchandise/mok.JPG" alt="Een Mok">
          </div>
          <div class="msg">
            <p><strong>Lorem ipsum dolor sit</strong> amet consectetur, adipisicing elit. Aperiam, rem.<br>
            <strong>ipsum dolor sit</strong> amet consectetur, adipisicing elit. Perferendis itaque <strong>possimus ipsam distinctio</strong> amet suscipit deleniti officia, soluta voluptates, reprehenderit natus iusto, adipisci fugiat mollitia.</p>
            <p>
              <button><a href="cart.php">Bestel nu de tickets (&euro; 24,95)</a></button>
            </p>
          </div>
        </div>
    </div>
  </main>
  <footer>
    <div class="wrapper">
      <div class="copyright">
        &copy; 2020 - 2021  DeveloperLand&nbsp;&nbsp;All Rights Reserved
      </div>
    </div>
  </footer>
</body>
</html>