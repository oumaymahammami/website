
<html lang="en">
  <head>
   <meta charset="UTF-8">
   <title> Mon compte </title>
   <link rel="stylesheet" href="style.css">

  </head> 
<body >
<style>
            .text1 { margin-right: 700px; margin-left: 40px;font-weight: bold; font-size: 19px; }
        .accueil, .text3, .text4, .text5, .text6 { margin-right: 50px;font-weight: bold; }
    #login-form {
      width: 300px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    #login-form h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }
    #login-form input[type="text"],
    #login-form input[type="password"],
    #login-form input[type="submit"] {
      width: 100%;
            margin-bottom: 15px;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-sizing: border-box;
            font-size: 14px;
    }

    #login-form input[type="submit"] {
        background-color: #fbeee0;
        border: 2px solid #422800;
        border-radius: 30px;
        box-shadow: #422800 2px 2px 0 0;
        color: #422800;
        cursor: pointer;
        font-weight: 400;
        font-size: 15px;
        padding: 0 18px;
        line-height: 60px;
        text-align: center;
        text-decoration: none;
        user-select: none;
        -webkit-user-select: none;
        touch-action: manipulation;
    }

    #login-form input[type="submit"]:hover {
        background-color: #ffffff;
    }

input[type="submit"] {
        background-color: #fbeee0;
  border: 2px solid #422800;
  border-radius: 30px;
  box-shadow: #422800 2px 2px 0 0;
  color: #422800;
  cursor: pointer;
  display: inline-block;
  font-weight: 400;
  font-size: 15px;
  padding: 0 18px;
  line-height: 60px;
  text-align: center;
  text-decoration: none;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
    }
    #login-form input[type="submit"]:hover {
            background-color: #ffffff;
        }
    input[type="submit"]:hover {
        background-color: #ffffff;
    }
    .container {
        position: relative;
        border: 10px solid #000000; 
        padding: 200px; 
        width: 30%; 
        margin: 0 auto; 
        white-space: nowrap;
    }
    
    #main-content {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 100vh; 
    }

  
    #site-search {
        width: 300px;
        margin-bottom: 15px;
        padding: 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
    }
    section {
    margin-top: 20px;
    padding: 10px;
    text-align: center;
}

section p {
    margin-bottom: 10px;
    font-size: 16px;
    color: #333333;
}

section a {
    color: #007bff;
    text-decoration: none;
    font-weight: bold;
    margin-top: 10px;
    display: inline-block; 
}

section a:hover {
    text-decoration: underline;
}
.error-message {
  padding: 10px;
    margin-top: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: #f9f9f9;
    text-align: center;
    color: red;
    border-color: red;
}
.message {
  padding: 10px;
    margin-top: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: #f9f9f9;
    text-align: center;
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
	 <br><br><br><br>
<div class="video-container">
    <video autoplay muted loop id="video-bg2">
      <source src="Pink.mp4"type="video/mp4">
    </video>
  </div>
  <br><br><br><br><br><br><br><br>

  <h1 class="us2" style= align="center "  > <b> Stickers pour tous </b> </h1> 

	   <h3 align="center"; style="color:black" >Search a Sticker <label for="site-search"></label>
     <input type="search" id="site-search" name="q"
       aria-label="Search through site content">

     <button class="button" role="button">Search</button>
	 <h3 style="color: black;" align="center"> <b> <i> Le premier site web tunisien pour la vente de Stickers </b> </i> </h3>
   <br><br>
	 <hr style="color:black;">
	 <hr style="color:black;">
   <br><br><br><br><br><br><br><br>
	
<script> alert("you have to register before loging in") </script>

<?php


$message='';
$errors = array('username' => '', 'password' => '', 'connection' => '', 'loginFailed' => '');
$logOk = false;
$username = '';
$conn = mysqli_connect("localhost", "root", "", "projet");


if (isset($_POST['login'])) {
	if (!empty($_POST['username'])) {
    	$username = $_POST['username'];
   	 
	} else {
    	$errors['username'] = '<div  class="error-message">You need to put a username</div>';
	}
	if (!empty($_POST['password'])) {
    	$password = $_POST['password'];
   	 
	} else {
    	$errors['password'] = '<div  class="error-message">You need to put your password</div>';
	}

	if (!empty($username) && !empty($password)) {
    	$conn = mysqli_connect("localhost", "root", "", "projet");
    	if ($conn) {
        	$query = "SELECT username, password, id  FROM users1";
        	$sendRequest = mysqli_query($conn, $query);
        	$users = mysqli_fetch_all($sendRequest, MYSQLI_ASSOC);
        	mysqli_close($conn);
    	} else {
        	$errors['connection'] = 'Connection failed to the server, contact us if persist';
    	}
    	
    	foreach ($users as $user) {
   		
        	if ($username === $user['username'] && $password=== $user['password']) {
            	$logOk = true;
          	 
            	break;
        	}
    	}
    	if ($logOk) {
   		 
        	$message='<div  class="message"> Login successful </div>' ;
        	}
   		 
    	else{
      
        if (empty($username) || empty($password)) {
            $errors['loginFailed'] = "Please enter both username and password";
        } else {
            $errors['loginFailed'] = '<div  class="error-message">Incorrect email or password </div>';
        }
    }
	}
}


?>
    
    
     <section id="login-form">
    	<h1 class="us2" style= align="center " >Login</h1>
    	<form method="POST">
        
        	<input type="text" name="username" placeholder="Username (email)" value="<?= $username ?>">  <br><br>
        	<input type="password" name="password" placeholder="Password"><br><br>
        	<input type="submit" name="login" value="Login" id="submit-button">
    	</form>
	</section>
    
	<section>
    	<?php foreach ($errors as $error) : ?>
        	<p><?= $error ?></p>
    	<?php endforeach ?>
	</section>
  <section>
    <p>
        <?php echo $message ?>
    </p>
    <p>Don't have an account? <a href="signup.php">Sign up</a></p>
</section>
    
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
<div id="suggestions" style="display: none;">
    Suggestions:
    <ul id="suggestionList"></ul>
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
  <span style="display: inline-block; width: 30%;margin-right: 20px;margin-left: 50px;text-align: center; font-size: 17px;"><a onclick="scrollToTop();">Mon compte</a></span>
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
    
    
