<?php 
session_start();
if(!isset($_SESSION['user_id']))
{
    die("Geen toegang!");    
}
$email_recipient = $_SESSION['email'];
$order_number = rand(100,1000) + rand(0,100);
$id_Product = $_POST['id'];
//1. Verbinding
require_once 'conn.php';
$query = "INSERT INTO orders(email_recipient,order_number) 
              VALUES(:email_recipient,:order_number)
            --   SELECT product
            --   FROM orders
              RIGHT JOIN products 
              AS product 
              ON orders.product = products.product WHERE products.id = $id_Product";
    
//3. Prepare
$statement=$conn->prepare($query);
//4. Execute
$statement->execute
    ([
        ":email_recipient" => $email_recipient,
        ":order_number" => $order_number
    ]);
$msg = "Product is in behandeling";
header("location: $base_url/index.php?msg=$msg");
exit;
?>