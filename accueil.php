<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .signup-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #ff6600;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
            transition: background-color 0.3s ease;
        }

        .signup-button:hover {
            background-color: #e65c00;
        }

        .buy-now-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #f8f8f8; 
            color: #333; 
            text-decoration: none;
            border-radius: 5px; 
            margin-top: 20px; 
            transition: background-color 0.3s ease;
        }

        .buy-now-button:hover {
            background-color: #ddd; 
        }

        .button-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 20px; 
        }
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0; 
        }

        header {
            background-color: #f8f8f8; 
            color: #333;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .brand {
            font-size: 24px;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin-left: 20px;
        }

        nav ul li a {
            color: #333;
            text-decoration: none;
        }

        nav ul li a:hover {
            text-decoration: underline;
        }

        .panier-icon {
            height: 20px; 
            vertical-align: middle;
        }

        .slogan-section {
            background-image: url('bg2.jpeg'); 
            background-size: cover; 
            background-position: center; 
            color: #fff; 
            padding: 50px 20px; 
            text-align: left; 
        }

        .slogan-section h2 {
            font-size: 48px;
            font-weight: bold; 
        }

        .slogan-section p {
            font-size: 24px; 
            color: #ff6600; 
        }

        .buy-now-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #f8f8f8; 
            color: #333; 
            text-decoration: none;
            border-radius: 5px; 
            margin-top: 20px; 
        }

        .buy-now-button:hover {
            background-color: #ddd; 
        }

        .best-sellers-section {
            padding: 50px 20px;
            text-align: center;
            background-color: #fff9f4; 
            border-radius: 10px; 
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1); 
            margin-bottom: 50px; 
        }

        .best-sellers-section h2 {
            font-size: 36px;
            margin-bottom: 20px;
            color: #333; 
        }

        .best-seller {
            display: inline-block;
            margin: 0 20px;
            border: 2px solid #ddd; 
            border-radius: 10px;
            padding: 20px; 
            background-color: #f8f8f8; 
            margin-bottom: 20px; 
        }

        .best-seller img {
            width: 200px;
            height: 200px;
            margin-bottom: 10px;
            background-color: #fff9f4; 
            border-radius: 10px; 
            transition: transform 0.3s ease; 
        }

        .best-seller-price {
            font-weight: bold;
            color: #ff6600; 
            font-size: 24px;
        }

        .popular-products-section {
            padding: 50px 20px;
            text-align: center;
            background-color: #fff; 
            border-radius: 10px; 
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1); 
        }

        .popular-products-section h2 {
            font-size: 36px;
            margin-bottom: 40px; 
            color: #333; 
        }

        .popular-product {
            display: inline-block;
            margin: 0 20px 80px 0; 
            border: 2px solid #ddd;
            border-radius: 10px; 
            padding: 20px; 
            background-color: #f8f8f8; 
            width: calc(25% - 40px);
        }

        .popular-product img {
            width: 100%; 
            height: auto; 
            margin-bottom: 20px; 
            background-color: #fff; 
            border-radius: 10px; 
            transition: transform 0.3s ease; 
        }

        
        .popular-product img:hover {
            transform: scale(1.1); 
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
       <br><br><br>
    <section class="slogan-section">
        <h2 style="font-size: 48px;">Décorer votre vie</h2>
        <p style="font-size: 24px; color: #ff6600;">Vous changez l'aspect de vos objets</p>
        <p style="font-size: 24px; color: #ff6600;">avec nos autocollants</p>
        <div class="button-container">
        
        <a href="Boutique.php" class="buy-now-button">Acheter maintenant</a>
        <a href="signup.php" class="signup-button">Sign Up Now</a>
    </div>
    </section>
    <section class="best-sellers-section">
        <h2>Best Sellers</h2>
        <div class="best-seller">
            <img src="bs1.jpg">
            <div class="best-seller-price">20dt</div>
        </div>
        <div class="best-seller">
            <img src="bs2.jpg" >
            <div class="best-seller-price">15dt</div>
        </div>
        <div class="best-seller">
            <img src="bs3.jpg" >
            <div class="best-seller-price">30dt</div>
        </div>
    </section>
    <section class="popular-products-section">
        <h2>Les produits les plus populaires</h2>
        
        <div class="popular-product">
            <img src="pp4.jpg">
        </div>
        <div class="popular-product">
            <img src="pp5.jpg">
        </div>
        <div class="popular-product">
            <img src="pp6.png">
        </div>
        <div class="popular-product">
            <img src="pp7.png">
        </div>
        <div class="popular-product">
            <img src="pp8.jpg">
        </div>
        <div class="popular-product">
            <img src="pp9.jpg">
        </div>
        <div class="popular-product">
            <img src="pp10.jpg">
        </div>
        <div class="popular-product">
            <img src="pp11.png">
        </div>
        <div class="popular-product">
            <img src="pp12.jpg">
        </div>
        <div class="popular-product">
            <img src="pp13.jpg">
        </div>
        <div class="popular-product">
            <img src="pp14.png">
        </div>
        <div class="popular-product">
            <img src="pp15.jpg">
        </div>
        <div class="popular-product">
            <img src="pp16.jpg">
        </div>
        <div class="popular-product">
            <img src="pp17.jpg">
        </div>
        <div class="popular-product">
            <img src="pp18.jpg">
        </div>
        </div>
    </section>
    
<br><br><br><br><br>
<style>
    .special-offer {
        background-color: #ff6600;
        color: #fff;
        text-align: center;
        padding: 10px 0;
        font-size: 18px;
        font-family: Arial, sans-serif;
    }
</style>

<div class="special-offer">
    Profitez de notre offre spéciale: achetez 3 stickers et obtenez-en 1 gratuit! Offre limitée, ne la manquez pas!
</div>

    <script>
  function scrollToTop() {
      window.scrollTo({
          top: 0,
          behavior: "smooth"
      });
  }
  </script>
  </div>
</div>
    <div>
    <style>
    .faq-section {
        background-color: #f8f8f8;
        padding: 50px 20px;
        text-align: center;
    }

    .faq-questions {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }

    .faq-question {
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 5px;
        padding: 20px;
        margin: 10px;
        width: 300px;
        position: relative;
        overflow: hidden;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .faq-question:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 12px rgba(0, 0, 0, 0.1);
    }

    .faq-question h3 {
        margin-top: 0;
        font-size: 24px;
        color: #333;
        transition: color 0.3s;
    }

    .faq-question:hover h3 {
        color: #ff6600;
    }

    .faq-answer {
        font-size: 18px;
        color: #666;
    }

    @keyframes slideIn {
        0% {
            opacity: 0;
            transform: translateY(-50px);
        }
        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .faq-question {
        animation: slideIn 0.5s forwards;
    }
</style>

<section class="faq-section">
    <h1 style="font-size: 36px; margin-bottom: 20px;">Questions Fréquentes</h1>

    <div class="faq-questions">
        <div class="faq-question">
            <h3>Question 1: Comment passer une commande?</h3>
            <div class="faq-answer">
            Pour passer une commande, il vous suffit d'ajouter les stickers que vous aimez à votre panier et de finaliser votre achat en toute simplicité!
            </div>
        </div>

        <div class="faq-question">
            <h3>Question 2: Les stickers sont-ils étanches?</h3>
            <div class="faq-answer">
            Nos stickers sont aussi résistants que votre amour pour eux, ils survivront à toutes les aventures!
            </div>
        </div>

        <div class="faq-question">
            <h3>Question 3: Puis-je personnaliser mes stickers?</h3>
            <div class="faq-answer">
            Malheureusement, nos stickers sont déjà si parfaits qu'ils n'ont pas besoin de personnalisation supplémentaire!
            </div>
        </div>
    </div>
</section>

  <br><br><br><br><br><br><br>
  <style>
    .praises-section {
        background-color: #fff;
        padding: 50px 20px;
        text-align: center;
    }

    .praises {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }

    .praise {
        background-color: #f8f8f8;
        border: 1px solid #ddd;
        border-radius: 5px;
        padding: 20px;
        margin: 10px;
        width: 300px;
        position: relative;
        overflow: hidden;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .praise:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 12px rgba(0, 0, 0, 0.1);
    }

    .praise h3 {
        margin-top: 0;
        font-size: 24px;
        color: #333;
        transition: color 0.3s;
    }

    .praise:hover h3 {
        color: #ff6600;
    }

    .praise-text {
        font-size: 18px;
        color: #666;
    }

    @keyframes slideIn {
        0% {
            opacity: 0;
            transform: translateY(-50px);
        }
        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .praise {
        animation: slideIn 0.5s forwards;
    }

    .praises-title {
        font-size: 36px;
        margin-bottom: 20px;
        color: #333;
    }
</style>

<section class="praises-section">
<h1 style="font-size: 36px; margin-bottom: 20px;">ÉLOGES</h1>

    <div class="praises">
        <div class="praise">
            <h3>Super produit!</h3>
            <div class="praise-text">
                J'ai adoré les autocollants que j'ai commandés. Ils sont de très bonne qualité!
            </div>
        </div>

        <div class="praise">
            <h3>Service exceptionnel!</h3>
            <div class="praise-text">
                Le service clientèle a été très réactif et m'a aidé à choisir les meilleurs autocollants pour ma collection.
            </div>
        </div>

        <div class="praise">
            <h3>Rapport qualité-prix incroyable!</h3>
            <div class="praise-text">
                Je n'aurais jamais cru pouvoir obtenir autant d'autocollants uniques à un prix aussi abordable.
            </div>
        </div>
    </div>
</section>
<br><br><br><br><br><br><br><br><br><br>
  <span style="display: inline-block; width: 30%;margin-right: 20px;margin-left: 50px;text-align: center; font-size: 20px;"><strong>Liens rapide</strong></span>
  <span style="display: inline-block; width: 30%;margin-right: 20px;margin-left: 20px;text-align: center; font-size: 20px;"><strong>Produit</strong></span>
  <span style="display: inline-block; width: 20%;margin-right: 20px;margin-left: 20px;text-align: center; font-size: 20px;"><strong>Résaux sociaux</strong></span>
</div>
<div>
  <br>
  <span style="display: inline-block; width: 30%;margin-right: 20px;margin-left: 50px;text-align: center; font-size: 17px;"><a onclick="scrollToTop();">Accueil</a></span>
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
