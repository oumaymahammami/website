<html lang="en">
  <head>
  
   <meta charset="UTF-8">
   <title> signup </title>
   <link rel="stylesheet" href="style.css">

  </head> 
<body>
<style>
      
        .text1 { margin-right: 700px; margin-left: 40px;font-weight: bold; font-size: 19px; }
        .accueil, .text3, .text4, .text5, .text6 { margin-right: 50px;font-weight: bold; }
		#login-form {
        margin-top: 50px;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        width: 300px;
        margin-left: auto;
        margin-right: auto;
        background-color: #f9f9f9;
		
    }

    #login-form h1 {
        color: #333;
        text-align: center;
    }

    #login-form input[type="text"],
    #login-form input[type="email"],
    #login-form input[type="password"],
    #login-form input[type="submit"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 3px;
        box-sizing: border-box;
    }

    #login-form input[type="submit"] {
        background-color: #333;
        color: #fff;
        border: none;
        cursor: pointer;
    }

    #login-form input[type="submit"]:hover {
        background-color: #555;
    }
    #signup-form p {
        margin-top: 20px;
        font-size: 14px;
        color: #555;
    }

    #signup-form p a {
        color:blue;
        text-decoration: none;
    }

    #signup-form p a:hover {
        text-decoration: underline;
    }
    .message {
    padding: 10px;
    margin-top: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: #f9f9f9;
    text-align: center;
    color: red;
    border-color: red;
}

.message.success {
    color: green;
    border-color: green;
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


<?php
$conn = mysqli_connect("localhost", "root", "", "projet");

if ($conn) {
    


	if (isset($_POST['submit'])) {
   	 
    	$firstName =$_POST['firstName'];
    	$lastName = $_POST['lastName'];
    	$email = $_POST['email'];
    	$password = $_POST['password'];
  	 
      $query = "SELECT * FROM users1 WHERE username='$email' AND password='$password'";
      $result = mysqli_query($conn, $query);

      if (mysqli_num_rows($result) > 0) {
          echo '<div class="message">User already exists!</div>';
   	 
        } else {
        	$sql = "INSERT INTO users1 (firstname, lastname, username, password) VALUES ('" . $firstName . "','" . $lastName . "','" . $email . "','" . $password . "')";

        	$result = mysqli_query($conn, $sql);
        	echo '<div class="message success">You are registered!</div>';
        }
	}
} else {
	echo 'connection failed <br>';
}
mysqli_close($conn);




?>

 <br><br><br>   
<section id="login-form" style="text-align: center;" class="zoom-effect" onclick="toggleZoom(this)">
    	<h1  class="us2">Register</h1>
    	<form action="" method="POST">
        	<input type="text" name="firstName" placeholder="Your first name..."><br> <br>
        	<input type="text" name="lastName" placeholder="Your last name..."><br> <br>
        	<input type="email" name="email" placeholder="Your e-mail address..."><br> <br>
        	<input type="password" name="password" placeholder="Your password..."><br> <br>
       	 
        	<input type="submit" name="submit" value="Submit" id="submit-button">
    	</form>
      <p style="font-size: 14px;">Already have an account? <a href="Mon compte.php">Log in here</a></p>
	</section>
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
    }, 4000);}
    const searchInput = document.getElementById('searchInput');
    const stickers = document.querySelectorAll('.container');
    function filterStickers() {
    const searchText = searchInput.value.toLowerCase();
    stickers.forEach(sticker => {
      const stickerName = sticker.querySelector('.card-title h4').textContent.toLowerCase();
      if (stickerName.includes(searchText)) {
        sticker.parentNode.style.display = 'block'; 
      } else {
        sticker.parentNode.style.display = 'none'; 
      }
    });
  }
  searchInput.addEventListener('input', filterStickers);

  function toggleZoom(image) {
    image.classList.toggle('zoom-effect');
    setTimeout(function() {
        var title = document.getElementById('title');
        title.classList.remove('animated-title'); 
      }, 4000);
  }
  
</script>
	<br><br><br><br>
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
    
    
