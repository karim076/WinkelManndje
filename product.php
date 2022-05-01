<?php 
	session_start(); 
	error_reporting(E_ERROR | E_WARNING | E_PARSE);	
 	if(!isset($_SESSION['user_id']))
	{
	    $msg="Login om deze pagina te bereiken!"; 
	    header("Location: userItem/login.php?msg=$msg");
    	exit;
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php require_once 'head.php'; session_start(); ?>
</head>
<body>
  <header>
  <?php require_once 'header.php' ?>
  </header>
  <main>
    <div class="wrapper">
      <article>
        <h3>HEREN T-SHIRT HEREN!</h3>
      </article>
        <div class="details">
          <div class="img">
            <img src="img/merchandise/Schermafbeelding 2022-04-13 131236.png" alt="Een Mok">
          </div>
          <div class="msg">
            <p>Modern shirt met korte mouwen, gemaakt van 100% voorgekrompen en ringgesponnen<break>katoen met een zijdezachte touch (satijnlabel). De buisvormige snit zorgt voor een hoge<break>bewegingsvrijheid. Wasbaar tot 40 ° C.</p>
            <p><h2>100% katoen</h2><break>As: 99% katoen, 1% viscose<break>Sportgrijs: 85% katoen, 15% viscose<break>Ronde hals<break>Klassieke herensnit<break>185 g/m²<break>Korte mouwen<break>Enkelvoudige jersey<break>Nekband<break>Smalle ribgebreide kraag<break>Dubbel gestikte mouw- en onderzoom<break>Zijnaden<break>Ruime buisvormige snit<break>Wasbaar tot 40° C</p>
            <form method="POST" action="cart.php">
<<<<<<< Updated upstream
              <p>Aantalen</p>
              <input type="number" value='1' name="number" placeholder="aantallen">
=======
              <input type="number" name="number" placeholder="aantallen" id="aantallen">
>>>>>>> Stashed changes
              <input type="submit" value="Bestel nu (&euro; 17,50)" name="id-number">
              <input type="hidden" value="1" name="product_Id">
            </form>
          </div>
        </div>
    </div>
    <div class="wrapper">
      <article>
        <h3>UNDER ARMOUR RIVAL FLEECE HOODIE HEREN!</h3>
      </article>
        <div class="details">
          <div class="img">
            <img src="img/merchandise/Schermafbeelding 2022-04-13 131430.png" alt="Eeen Hoodie">
          </div>
          <div class="msg">
            <p>Dit wordt je nieuwe favoriete lichtgewicht lievelingshoodie om in te sporten. Hij is licht,<break>comfortabel en superzacht aan de binnenkant.</p>
            <p><h2>Productspecificaties</h2><break>80% katoen, 20% polyester<break>Losvallend: ruime pasvorm voor ultiem comfort<break>230 gram<break>Raglanmouwen<break>Geweven patch met logo<break>Superzachte, middelzware fleece van katoenmix met geruwde binnenkant voor extra warmte<break>Verstelbare capuchon met gekruiste constructie<break>Kangoeroezak aan de voorkant<break>Geribbelde manchetten en zoom aan de onderkant</p>
            <form method="POST" action="cart.php">
              <p>Aantalen</p>
              <input type="number" value="1" name="number" placeholder="aantallen">
              <input type="submit"value="Bestel nu (&euro; 73,00)">
              <input type="hidden" value="2" name="product_Id">
            </form>
          </div>
        </div>
    </div>
    <div class="wrapper">
      <article>
        <h3>JAKO LONGSLEEVE RUN 2.0 VROUWEN!</h3>
      </article>
        <div class="details">
          <div class="img">
            <img src="img/merchandise/Schermafbeelding 2022-04-13 131630.png" alt="Eeen Hoodie">
          </div>
          <div class="msg">
          <p>Dit heren T-shirt met lange mouwen heeft een comfortabele,<break>licht aansluitende snit. De mouw is iets langer, maar niet onnodig breed aan de schouders.<break>De nekband, zijnaden en dubbel stiksel zorgen voor een uitstekende vormvastheid,<break> wasbeurt na wasbeurt! Het materiaal voelt heel zacht aan en het lagere gewicht zorgt voor extra comfort.</p>
            <p><h2>Productspecificaties</h2><break>100% Polyester-Micromesh<break>Rug in Micro-Mesh<break>Ronde hals<break> Flatlocknaden<break>Materiaalmix Details<break>Details in Kontrastfarbe<break>Zippergarage</p>
            <form method="POST" action="cart.php">
<<<<<<< Updated upstream
              <p>Aantalen</p>
              <input type="number" value="1" name="number" placeholder="aantallen">
              <input type="submit" value="Bestel nu (&euro; 23,90)" name="id-number">
=======
              <input type="number" name="number" placeholder="aantallen">
              <input type="submit" value="Bestel nu (&euro; 23,90)" name="id-number" id="berekenen">
>>>>>>> Stashed changes
              <input type="hidden" value="3" name="product_Id">
            </form>
          </div>
        </div>
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