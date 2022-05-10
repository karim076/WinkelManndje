<?php 
session_start();
if(!isset($_SESSION['user_id']))
{
    die("Geen toegang!");    
}

$id = $_POST['id'];
$status = $_POST['status'];

require_once 'conn.php';
$query = "UPDATE (id, status) FROM orders
          SET status = :status 
          WHERE :id = $id"
          ;
$statement = $conn->prepare($query);
$statement->execute([
    ":status" => $status,
    ":id" => $id
]);
header("Location: $base_url/adminPanel/adminPaneel.php?msg=succevolveranderd");


?>