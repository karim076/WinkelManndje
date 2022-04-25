<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php require_once 'head.php'; ?>
  <title>DeveloperLand - Het meest leerzame prepark voor het hele gezin!</title>
</head>
<body>
  <header>
    <?php require_once 'header.php' ?>
  </header>
  <main>
    <div class="wrapper">
      <div class="row">
        <article>
          <h2 class="fun-for-family">De leukste dagen samen!</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores dolor id doloremque accusamus quod. Repellat cupiditate unde aperiam, ex fugiat beatae fuga. Esse distinctio rerum expedita fuga libero adipisci quis!</p>
        </article>
        <article>
          <h2 class="accessibility">Betaalbaar en toegankelijk</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores dolor id doloremque accusamus quod. Repellat cupiditate unde aperiam, ex fugiat beatae fuga. Esse distinctio rerum expedita fuga libero adipisci quis!</p>
        </article>
      </div>
      <div class="row2 groen">
        <article>
            <h2 class="rides">Bekijk onze geweldige tripjes</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores dolor id doloremque accusamus quod. Repellat cupiditate unde aperiam, ex fugiat beatae fuga. Esse distinctio rerum expedita fuga libero adipisci quis!</p>
        </article>
        <article>
            <h2 class="open-forever">Wij zijn &#8734; open!</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores dolor id doloremque accusamus quod. Repellat cupiditate unde aperiam, ex fugiat beatae fuga. Esse distinctio rerum expedita fuga libero adipisci quis!</p>
        </article>
      </div>
      <article class="emphasize">
        <h2>Koop nu je tickets</h2>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequatur, ad. Similique neque sequi quibusdam, harum ratione fugit quia cupiditate doloribus totam obcaecati perferendis asperiores necessitatibus, exercitationem pariatur magni, quaerat minima.</p>
        <p>
          <button><a href="cart.php">Bestel nu de tickets (&euro; 24,95)</a></button>
        </p>
        <p>
          Of neem een abonnement, want met slechts 4 bezoekjes ben je al voordeliger uit!
        </p>
        <p>
          <button><a href="cart.php">Bestel een abonnement (&euro; 99 per jaar)</a></button>
          </p>
      </article>
      <article>
        <h2>Merchandise</h2>
        <div class="row">
          <div class="product">
          <div class="sharmake">
            <img src="img/merchandise/Schermafbeelding 2022-04-13 131236.png" alt="B&C #E190 Heren T-Shirt">
          </div>
          <div>
            <span>HEREN T-SHIRT!</span>
            <a href="product.php"><button>Bestel nu (&euro; 17,50)</button></a>
          </div>
          </div>
          <div class="product">
            <div>
              <img src="img/merchandise/Schermafbeelding 2022-04-13 131430.png" alt="Een mok van DeveloperLand">
            </div>
            <div>
              <span>Under Armor Rival Fleece Hoodie</span>
              <a href="product.php"><button>Bestel nu (&euro; 73,00)</button></a>
            </div>
          </div>
          <div class="product">
            <div>
              <img src="img/merchandise/Schermafbeelding 2022-04-13 131630.png" alt="Jako Longsleeve Run 2.0 Heren">
            </div>
            <div>
              <span>Jako Longsleeve Run 2.0 Heren!</span>
              <a href="product.php"><button>Bestel nu (&euro; 23,90)</button></a>
            </div>
          </div>
        </div>
      </article>
    </div>
  </main>
  <footer>
    <div class="wrapper">
      <div class="copyright">
        &copy; 2020 - 2021 Karim, Sharmake&nbsp;&nbsp;All Rights Reserved
      </div>
    </div>
  </footer>
</body>
</html>