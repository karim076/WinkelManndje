<!DOCTYPE html>
<html lang="en">
<head>
  <?php require_once 'head.php'; session_start();?>
</head>
<body>
  <header>
    <?php require_once 'header.php' ?>
  </header>
  <main>
    <div class="wrapper">
      <article>
        <h2>Winkelwagentje</h2>
        <div>
          <span>Dit zijn alle producten die u gaat bestellen. Controleer een laatste keer of alles klopt en ga daarna verder met de grote groene knop.</span>
          <?php

require_once 'backend/config.php';  

$winkelwagentje = [
    6 => 2,
    7 => 1,
];

$hoeveelInWinkelwagentje = count($winkelwagentje);

$totalPrice = 0;

?>
<table>
    <thead>
        <tr>
            <th>Product</th>
            <th>Description</th>
            <th>Price</th>
            <th>Amount</th>
            <th>Total Price</th>
        </tr>
    </thead>
    <tbody>

    <?php
        $productId = 1;
        foreach($winkelwagentje as $productId => $amount){
          require_once 'backend/conn.php';  
            $stmt = $db->prepare("SELECT * FROM products WHERE id = ". $productId .";");
            $stmt->execute();
            $product = $stmt->fetch(PDO::FETCH_ASSOC);
            $totalProductPrice = $product['price'] * $amount;
            $totalPrice = $totalPrice + $totalProductPrice;

            ?>
            <tr>
                <td><?php echo $product['name']; ?></td>
                <td><?php echo $product['description']; ?></td>
                <td>&euro;<?php echo $product['price']; ?>,-</td>
                <td><?php echo $amount ?></td>
                <td>&euro;<?php echo $totalProductPrice; ?>,-</td>
            </tr>
            <?php
        }
    ?>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>&euro;<?php echo $totalPrice; ?>,-</td>
    </tr>
    </tbody>
</table>
          <button><a href="payment.php">Dit is correct, verder naar betaling</a></button>
        </div>
      </article>
    </div>
  </main>
  <footer>
    <div class="wrapper">
      <div class="copyright">
        &copy; 2020 - 2021  Karim, Sharmake&nbsp;&nbsp;All Rights Reserved
      </div>
    </div>
  </footer>
</body>
</html>