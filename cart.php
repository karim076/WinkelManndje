<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DeveloperLand - Het meest leerzame prepark voor het hele gezin!</title>

  <link rel="stylesheet" href="styles/main.css">
</head>
<body>
  <header>
    <div class="header-content">
      <div class="wrapper">
        <img src="imag/logo-big-v3.png" alt="Het logo van DeveloperLand met een draaimolen, kasteel, achtbaan en tot slot een gezin op de voorgrond." class="logo hidden-on-sm">
        <h1 class="hidden-on-lg">DeveloperLand</h1>
      </div>
    </div>
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

        foreach($winkelwagentje as $productId => $amount){
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
        &copy; 2020 - 2021  DeveloperLand&nbsp;&nbsp;All Rights Reserved
      </div>
    </div>
  </footer>
</body>
</html>