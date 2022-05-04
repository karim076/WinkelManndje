<!doctype html>
<html lang="nl">
    <head>
        <?php require_once '../head.php'; ?>
    </head>
<body>
    <?php require_once '../header.php'; ?>

    <div class="container">
        <h1>Aanpassen order</h1>

        <form action ="../backend/adminController.php" method='POST'>
            <input type="hidden" name="action" value="edit">
            <input type="hidden" name="id" value="<?php echo $id; ?>">

            <div class="form-group">
                <input type="hidden" name="id" value="<?php echo $_POST['id'] ?>">
                <label for="status_bestelling">Status Bestelling</label>
                <select name="status" id="status_bestelling">
                    <option Value="1">Inbehandeling</options>
                    <option Value="2">ophalen</options>
                    <option Value="3">Verzenden</options>
                </select>
            </div>
            <input type="submit" class="submit" value="Order opslaan">
        </form>
    </div>  
    </div>  
</body>
</html>