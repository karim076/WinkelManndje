<?php 
session_start();
if(isset($_SESSION['user_id']))
{
    die("Geen toegang!");    
}
$email_recipient = $_SESSION['email'];
$order_number = rand(100,100000) + "R" + rand(100,100000);

?>