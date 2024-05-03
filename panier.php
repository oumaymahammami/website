<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panier</title>
    <link rel="stylesheet" href="style.css">
    <style>
       body {
            background-image: url('new.png'); 
            background-size: 1700px 550px;; 
            background-attachment: scroll; 
            background-repeat: no-repeat;
            margin: 0; 
            padding: 0; 
        }
        .text1 { margin-right: 700px; margin-left: 40px;font-weight: bold; font-size: 19px; }
        .accueil, .text3, .text4, .text5, .text6 { margin-right: 50px;font-weight: bold; }
    </style>
</head>
<body>
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
       <br><br><br><br><br>  
     <div class="round">
        <img src="shop1.png"alt="Image"style="width: 200px; height: 200px;  margin-left: 630px; margin: right 150px; ">
        <h3 style="text-align: center;font-family: 'Arial', sans-serif; ">Votre panier est vide </h3>
        <p style="text-align: center;font-family: 'Arial', sans-serif; ">Parcourez nos catégories et découvrez nos meilleures offres!</p>
        <div style="text-align: center;">
        <a href="Boutique.php">
        <button class="button" role="button"><strong>Commencer vos achats</strong></button></a>
        </div>
    </div>


    
    <script>
        function scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        }
        
      </script>
      <div>
        <br><br><br><br><br><br><br><br><br><br>
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
        <span style="display: inline-block; width: 30%;margin-right: 20px;margin-left: 50px;text-align: center; font-size: 17px;"><a onclick="scrollToTop();">Panier</a></span>
      </div>
      <div>
        <br>
        <span style="display: inline-block; width: 30%;margin-right: 20px;margin-left: 50px;text-align: center; font-size: 17px;"><a href="about.php">About</a></span>
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