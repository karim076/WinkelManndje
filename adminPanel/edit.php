<!doctype html>
<html lang="nl">
    <head>
        <?php require_once '../head.php'; ?>
    </head>
<body>
    <?php require_once '../header.php'; ?>

    <div class="container">
        <h1>Aanpassen order</h1>

        <?php
            $id = $_GET['id'];

            require_once '../backend/conn.php';
            $query = "SELECT * FROM orders WHERE id = :id";
            $statement = $conn->prepare($query);
            $statement->execute([":id" => $id]);
            $order = $statement->fetch(PDO::FETCH_ASSOC);
        ?>
        <form action ="../backend/adminPaneel.php" method='POST'>
            <input type="hidden" name="action" value="edit">
            <input type="hidden" name="id" value="<?php echo $id; ?>">

            <div class="form-group">
                <label for="status_bestelling">Status Bestelling</label>
                <select name="status_bestelling" id="status_bestelling">
                <!-- <option Value=""> <//?php echo $order['status'] ?> </option> -->
                    <option Value="Inbehandeling">Inbehandeling</options>
                    <option Value="ophalen">ophalen</options>
                    <option Value="Verzenden">Verzenden</options>
                </select>
            </div>

            <input type="submit" value="Order opslaan">
        </form>
    </div>  
    </div>  
</body>
</html>