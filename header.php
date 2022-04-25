<?php require_once 'backend/config.php';
?>

<div class="navbar">
    <div>
        <a class="active" href="<?php echo $base_url?>/index.php"><i class="fa fa-fw fa-home"></i> Home</a>
        <?php 
        error_reporting(E_ALL);
        if(isset($_SESSION['role']) === "3"): var_dump($_SESSION['role'])?>
            <a href="<?php echo $base_url?>/panel/adminPanel.php"><i class="fa fa-user-tie"></i> Adminpaneel</a>
        <?php endif;?>
        </div>
    <div class="left">
    <?php   error_reporting(E_ERROR | E_WARNING | E_PARSE);
        session_start();
        if(isset($_SESSION['user_id'])): ?>
            <i class="fa fa-fw fa-user"></i>Welcome,<?php echo $_SESSION['name'] ?>
            <a href="<?php echo $base_url?>/userItem/logout.php">Uitloggen</a>
        <?php else: ?>
            <a href="<?php echo $base_url?>/userItem/register.php"><i class="fas fa-user-plus"></i> register</a>
            <a href="<?php echo $base_url?>/userItem/login.php"><i class="fa fa-fw fa-user"></i> Login</a>
        <?php endif; ?>
    </div>
</div>
<div class="header-content">
    <div class="wrapper">
        <img src="<?php echo $base_url?>/img/logo.png" alt="Het logo van DeveloperLand met een draaimolen, kasteel, achtbaan en tot slot een gezin op de voorgrond." class="logo hidden-on-sm">
    </div>
</div>