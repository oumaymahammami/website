<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adventure Time</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style boutique.css">
</head>
<body>
    <style>
       
      
       .text1 { margin-right: 700px; margin-left: 40px;font-weight: bold; font-size: 19px; }
        .accueil, .text3, .text4, .text5, .text6 { margin-right: 50px;font-weight: bold; }
        body {
            
            background-color: #f0f0f0;
            
        }
    </style>
     <div>
        <br>
         <span class="text1">Stick.it_up</span>
         <span ><a href="accueil.php" class="text3">Accueil</a></span>
         <span ><a href="Boutique.php" class="text3">Boutique</a></span>
         <span>
           <a href="Mon compte.php" class="text4">Mon compte</a></span>
           </span>
         <span>
       
         <a href="contact.php" class="text5">Contact</a></span>
         <span>
           <a href="about.php" class="text6">About</a>
           <a href="panier.php">
           <img src="panier.png" alt="Image"style="width: 20px; height: 20px;">
         </a>
       </span>
     </div>
	 <br><br><br><br>
<table>
  <tr>
  <td>
<div class="container">
  <div class="card">
    <img src="Asset 26mdpi.png" alt="" class="zoom-effect" onclick="toggleZoom(this)">
    <div class="row">
      <h4>Quotes</h4>
      <h3>1 TND</h3>
      <DIV CLASS="bbtn"> 
      <a href="shopping.php">Ajouter au panier</a>
      </DIV>
  </div>
</div>
</td>
  </tr>
 <tr> 
 <td>
<div class="container">
  <div class="card">
    <img src="Asset 33mdpi.png" alt="" class="zoom-effect" onclick="toggleZoom(this)">
    <div class="row">
      <h4>Quotes</h4>
      <h3>1 TND</h3>
      <DIV CLASS="bbtn"> 
      <a href="shopping.php">Ajouter au panier</a>
      </DIV>
  </div>
</div>
</td>
<td>
<div class="container">
  <div class="card">
    <img src="Asset 4mdpi (1).png" alt="" class="zoom-effect" onclick="toggleZoom(this)">
    <div class="row">
      <h4>Quotes</h4>
      <h3>1 TND</h3>
      <DIV CLASS="bbtn"> 
      <a href="shopping.php">Ajouter au panier</a>
      </DIV>
  </div>
</div>
</td>
<td>
<div class="container">
  <div class="card">
    <img src="Asset 19mdpi (1).png" alt="" class="zoom-effect" onclick="toggleZoom(this)">
    <div class="row">
      <h4>Quotes</h4>
      <h3>1 TND</h3>
      <DIV CLASS="bbtn"> 
      <a href="shopping.php">Ajouter au panier</a>
      </DIV>
  </div>
</div>
</td>
</tr>
<tr> 

</tr>
</table>
<div class="another-background">
  <div class="image-container">
    <div>
      <img src="tunis.png" alt="Image 1"style="width: 100px; height: 100px; margin-left: 150px; margin: right 150px;">
      <p><strong>Livraison sur toute la Tunisie</strong></p>
      <br>
      <p>Nous assurons la livraison de votre commande dans toute la Tunisie</p>
      <p> quelle que soit votre localisation</p>
      <br><br><br><br><br>
    </div>
    <div>
      <img src="yes.png" alt="Image 2"style="width: 100px; height: 100px;margin-left: 150px; margin-right: 150px;">
      <p><strong>Meilleur qualité</strong></p>
      <br>
      <p>Nous garantissons la plus haute qualité disponible sur le marché</p>
      <br><br><br><br><br><br><br><br><br><br>
    </div>
    <div>
      <img src="tag.png" alt="Image 3"style="width: 100px; height: 100px;margin-left: 150px; margin-right: 150px;">
      <p><strong>Meilleures offres</strong></p>
      <br>
      <p>Nous offrons les meilleures offres disponibles</p>

      <br><br><br><br><br><br><br><br><br><br>
    </div>
    
  </div>
</div>
<script>
  function scrollToTop() {
      window.scrollTo({
          top: 0,
          behavior: "smooth"
      });
  }
  function toggleZoom(image) {
  image.classList.toggle('zoom-effect');
  setTimeout(function() {
      var title = document.getElementById('title');
      title.classList.remove('animated-title'); 
    }, 4000);
}

</script>

<div>
  <br><br><br><br>
  <span style="display: inline-block; width: 30%;margin-right: 20px;margin-left: 50px;text-align: center; font-size: 20px;"><strong>Liens rapide</strong></span>
  <span style="display: inline-block; width: 30%;margin-right: 20px;margin-left: 20px;text-align: center; font-size: 20px;"><strong>Produit</strong></span>
  <span style="display: inline-block; width: 20%;margin-right: 20px;margin-left: 20px;text-align: center; font-size: 20px;"><strong>Résaux sociaux</strong></span>
</div>
<div>
  <br>
  <span style="display: inline-block; width: 30%;margin-right: 20px;margin-left: 50px;text-align: center; font-size: 17px;"><a href="accueil.php">Accueil</a></span>
  <span style="display: inline-block; width: 30%;margin-right: 20px;margin-left: 20px;text-align: center; font-size: 17px;"><a href="Boutique.php">Stickers</a></span>
  <span style="display: inline-block; width: 20%;margin-right: 20px;margin-left: 20px;text-align: center; font-size: 17px;"><a href="https://www.instagram.com/stick.it_up/">Instagram</a></span>
</div>
<div>
  <br>
  <span style="display: inline-block; width: 30%;margin-right: 20px;margin-left: 50px;text-align: center; font-size: 17px;"><a href="Mon compte.php">Mon compte</a></span>
  <span style="display: inline-block; width: 30%;margin-right: 20px;margin-left: 20px;text-align: center; font-size: 17px;"><a href="Boutique.php">Stickers pack</a></span>
  <span style="display: inline-block; width: 20%;margin-right: 20px;margin-left: 20px;text-align: center; font-size: 17px;"><a href="https://www.instagram.com/stick.it_up/">Facebook</a></span>
</div>
<div>
  <br>
  <span style="display: inline-block; width: 30%;margin-right: 20px;margin-left: 50px;text-align: center; font-size: 17px;"><a href="panier.php">Panier</a></span>
</div>
<div>
  <br>
  <span style="display: inline-block; width: 30%;margin-right: 20px;margin-left: 50px;text-align: center; font-size: 17px;"><a onclick="scrollToTop();">About</a></span>
</div>
<div>
  <br>
  <span style="display: inline-block; width: 30%;margin-right: 20px;margin-left: 50px;text-align: center; font-size: 17px;"><a href="contact.php">Contact</a></span>
</div>
<br><br><br>
<hr>
<div>
  <br><br><br><br>
  <span style="display: inline-block; width: 30%;margin-right: 20px;margin-left: 50px;text-align: center; font-size: 19px;">Copyright&copy;2024 Stick.it_up</span>
  <span style="display: inline-block; width: 60%;margin-right: 0px;margin-left: 10px;text-align: right; font-size: 17px;">Powered by Stick.it_up</span>
  <br><br><br><br>
</div>
</body>
</html>