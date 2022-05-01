<?php

session_start();

$_action = $_POST['action'];
$nameProduct = 'T-shirt';
$price = $_POST['price'];
$amount = $_POST['amount'];
$totalProductPrice = $_POST['totalProductPrice'];
$status = "In behandeling";
$order_number = '';



if($_action == "order_create")
    {
        require_once 'conn.php';
        $query = "INSERT INTO orders (status, product, email_recipient, order_number)
        VALUES(:status, :product, :email_recipent, :order_number)";
        $statement = $conn->prepare($query);
        $statement->execute([
            ":product" => $nameProduct,
            ":status" => $status,
            ":order_number" => $order_number,
            ":email_recipient" => $email_recipient
        ]);
        header("Location: ../payment/php?msg=order opgeslagen");
    }
?>