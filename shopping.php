<?php 
session_start();
$connect = mysqli_connect("localhost", "root", "", "boutique");

if(isset($_POST["add_to_cart"]))
{
	if(isset($_SESSION["shopping_cart"]))
	{
		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
		if(!in_array($_GET["id"], $item_array_id))
		{
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
				'item_id'			=>	$_GET["id"],
				'item_name'			=>	$_POST["hidden_name"],
				'item_price'		=>	$_POST["hidden_price"],
				'item_quantity'		=>	$_POST["quantity"]
			);
			$_SESSION["shopping_cart"][$count] = $item_array;
		}
		else
		{
			echo '<script>alert("Item Already Added")</script>';
		}
	}
	else
	{
		$item_array = array(
			'item_id'			=>	$_GET["id"],
			'item_name'			=>	$_POST["hidden_name"],
			'item_price'		=>	$_POST["hidden_price"],
			'item_quantity'		=>	$_POST["quantity"]
		);
		$_SESSION["shopping_cart"][0] = $item_array;
	}
}

if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["item_id"] == $_GET["id"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
				echo '<script>alert("Item Removed")</script>';
				echo '<script>window.location="shopping.php"</script>';
			}
		}
	}
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boutique</title>
    <link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="style boutique.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
    <style>
       
      
        .text1 { margin-right: 700px; margin-left: 40px;font-weight: bold; font-size: 19px; }
        .accueil, .text3, .text4, .text5, .text6 { margin-right: 50px;font-weight: bold; }
    </style>
    <style>
        body {
            
            background-color: #f0f0f0;
            
        }
		#total {
        margin-top: 20px;
    }

    #cart-add {
        background-color: #f9f9f9;
        padding: 20px;
        border-radius: 5px;
    }

    .table-responsive {
        overflow-x: auto;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }

    th, td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #f2f2f2;
    }

    .text-danger {
        color: red;
    }

    .text-danger:hover {
        text-decoration: underline;
        cursor: pointer;
    }
	.add-to-cart-btn {
    background-color: #e65c00; 
    color: white; 
    padding: 1px 20px; 
    border: none; 
    text-align: center; 
    text-decoration: none; 
    display: inline-block; 
    font-size: 16px; 
    cursor: pointer; 
    border-radius: 5px;
}

.product-form {
        margin-bottom: 60px; 
        text-align: center; 
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
<br><br><br><br><br><br><br>
	<body>
	<div class="search-bar">
    <input type="text" id="searchInput" placeholder="Recherche de Stickers">
  </div>
  
  <div class="categories">
    <h5>Catégories de produits</h5>
    
    <div class="category">
      <h4>Stickers (200)</h4>
      <ul>
            <li><a href="engineering.php">Engineering</a></li>
            <li><a href="adventure_time.php">Adventure Time</a></li>
            <li><a href="quotes.php">Quotes</a></li>
            <li><a href="love.php">Love</a></li>
            <li><a href="one_piece.php">One piece</a></li>
            <li><a href="palestine.php">Palestine</a></li>
            <li><a href="jujutsu_kaisen.php">Jujutsu Kaisen</a></li>
            <li><a href="friends.php">Friends</a></li>
        </ul>
</div>
</div>
	
		<br />
		<div id="products-container">
			<?php
				$query = "SELECT * FROM products ORDER BY id ASC";
				$result = mysqli_query($connect, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>
			<div class="col-md-4">
				<form method="post" action="shopping.php?action=add&id=<?php echo $row["id"]; ?>" class="product-form">
					<div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">
                    <img src="image/<?php echo $row["image"]; ?>" class="img-responsive" /><br />


						<h4 class="text-info"><?php echo $row["name"]; ?></h4>

						<h4 class="text-danger">TND <?php echo $row["price"]; ?></h4>

						<input type="text" name="quantity" value="1" class="form-control" />

						<input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />

						<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />

						<input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success add-to-cart-btn" value="Ajouter au panier" />



					</div>
				</form>
			
			</div>
			<?php
					}
				}
			?>
			</div>
			<div style="clear:both"></div>
			<br />
			</div>
			<div id="total">
			<section id="cart-add" class="section-p1"> 
			<h3 Class="us2">Order Details</h3>
			<div class="table-responsive" >
				<table class="table table-bordered">
					<tr>
						<th width="40%">Item Name</th>
						<th width="10%">Quantity</th>
						<th width="20%">Price</th>
						<th width="15%">Total</th>
						<th width="5%">Action</th>
					</tr>
					<?php
					if(!empty($_SESSION["shopping_cart"]))
					{
						$total = 0;
						foreach($_SESSION["shopping_cart"] as $keys => $values)
						{
					?>
					<tr>
						<td><?php echo $values["item_name"]; ?></td>
						<td><?php echo $values["item_quantity"]; ?></td>
						<td>TND <?php echo $values["item_price"]; ?></td>
						<td>TND <?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
						<td><a href="shopping.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger "><strong>Remove</strong></span></a></td>
					</tr>
					<?php
							$total = $total + ($values["item_quantity"] * $values["item_price"]);
						}
					?>
					<tr>
						<td colspan="3" align="right" class="us2">Total</td>
						<td align="right">TND <?php echo number_format($total, 2); ?></td>
						<td></td>
					</tr>
					<?php
					}
					?>
						
				</table>
			</div>
			</section>
		</div>
		</div>
	
	</div>
	<br />
	<br><br><br><br><br><br>
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

$(document).ready(function(){
        $('#searchInput').on('keyup', function(){
            var searchText = $(this).val().toLowerCase();
            $('#products-container div.col-md-4').each(function(){
                var productTitle = $(this).find('h4').text().toLowerCase();
                if(productTitle.includes(searchText)){
                    $(this).show();
                } else {
                    $(this).hide();
                }
            });
        });
    });
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


	</body>
</html>

<?php

?>