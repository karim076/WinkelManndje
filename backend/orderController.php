<?php 
session_start();
if(!isset($_SESSION['user_id']))
{
    die("Geen toegang!");    
}
$email_recipient = $_SESSION['email'];
$order_number = rand(100,1000) + rand(10,10000);
$id_Product = $_POST['id'];
$product = $_SESSION['product'];


    //1. Verbinding
require_once 'conn.php';
$query = "INSERT INTO orders(product,email_recipient,order_number) 
          VALUES(:product,:email_recipient,:order_number)";
    
//3. Prepare
$statement=$conn->prepare($query);
//4. Execute
$statement->execute
    ([
        ":product" => $product,
        ":email_recipient" => $email_recipient,
        ":order_number" => $order_number
    ]);
$msg = "Product is in behandeling";
unset($_SESSION['product']);
header("location: $base_url/index.php?msg=$msg");

exit;
?>