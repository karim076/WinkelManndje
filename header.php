<?php require_once 'backend/config.php';
?>

<div class="navbar">
    <a class="active" href="<?php echo $base_url?>/index.php"><i class="fa fa-fw fa-home"></i> Home</a>
    <div class="left">
<?php   error_reporting(E_ERROR | E_WARNING | E_PARSE);
        session_start();
        if(isset($_SESSION['user_id'])): ?>
            <i class="fa fa-fw fa-user"></i>Welcome,<?php echo $_SESSION['name'] ?>
            <a href="<?php echo $base_url?>/userItem/logout.php">Uitloggen</a>
        <?php else: ?>
            <a href="<?php echo $base_url?>/userItem/register.php"><i class="fa-solid fa-user-plus"></i> register</a>
            <a href="<?php echo $base_url?>/userItem/login.php"><i class="fa fa-fw fa-user"></i> Login</a>
        <?php endif; ?>
    </div>
</div>
<div class="header-content">
    <div class="wrapper">
        <img src="<?php echo $base_url?>/img/logo.png" alt="Het logo van DeveloperLand met een draaimolen, kasteel, achtbaan en tot slot een gezin op de voorgrond." class="logo hidden-on-sm">
        <h1 class="hidden-on-lg">DeveloperLand</h1>
    </div>
</div>