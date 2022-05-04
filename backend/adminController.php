<?php 
$_action = $_POST['action'];
$id = $_POST['id'];
$status = $_POST['status'];
if($_action == "edit")
{
    require_once 'conn.php';
    $query = "UPDATE orders SET status = :status 
              WHERE :id = $id";
    $statement = $conn->prepare($query);
    $statement->execute([
        ":status" => $status,
        ":id" => $id
    ]);
        header("Location: $base_url/adminPanel/adminPaneel.php?msg=succevolveranderd");
    }


?>