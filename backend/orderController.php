<?php 
session_start();
if(isset($_SESSION['user_id']))
{
    die("Kan niet registreren je bent al ingelogd");    
}

?>