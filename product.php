<!doctype html>
<html>
    <head>
		<link rel="icon" 
			type="image/png" 
			href="afb/favicon.ico">
        <link rel="stylesheet" type="text/css" href="webshopstyle.css">
        <title>Thijs' Webshop</title>
    </head>
    <body>
        <div id="content">
            <div id="top">
                <div id="logo">
                    <a href="/webshop"><img src="afb/logo.jpg"></a>
                </div>
                <div id="login">
                    <form action="login.php" method="POST">
						Login:<br>
                        <input type="text" name="nickname" placeholder="Gebruikersnaam">
                        <input type="password" name="password" placeholder="Wachtwoord"><br><br>
						Onthouden:<input type="checkbox">
                        <a href="vergeten.php">Vergeten?</a>&nbsp &nbsp &nbsp <a href="registreer.php">Registreer </a><button type="submit">Login</button>
                    </form>
                </div>
            </div>
			<div id=navigatie>
				<?php include("subgedeeltes/menu.php"); ?>
			</div>
            <div id="text">
                <center><h1>Product</h1></center>
				<a href="/webshop/producten.php"><button type="button">Terug</button></a>
				<div id="product">
					<img id="productImg" src="afb/producten/boek.jpg">
					<h1>Superboek</h1>
					<h1>€5,99</h1>
					<p id="productinfo">Dit boek leest als een trein, het is spannend maar ook vrolijk. Na het lezen van dit boek zal je leven beter zijn.<br><br>
					"Geweldig boek" -AD<br>
					"Wow!" -Bookshop.com<br>
					</p>
					<p id="voorraad">Op voorraad: Ja</p>
					<div id="koopdan"><form action="#">Aantal: <input type="text" name="aantal" value=1><button type="submit">Toevoegen aan winkelwagen</button></form></div>
				</div>
				<div id="gerelateerd">
					<a href="product.php?id=1"><div class="gerelateerdItem"><img src="afb/producten/boek.jpg"><br> Superboek<br>€5,99 <button>Winkelwagen</button></div></a>
					<a href="product.php?id=1"><div class="gerelateerdItem"><img src="afb/producten/boek.jpg"><br> Superboek<br>€5,99 <button>Winkelwagen</button></div></a>
					<a href="product.php?id=1"><div class="gerelateerdItem"><img src="afb/producten/boek.jpg"><br> Superboek<br>€5,99 <button>Winkelwagen</button></div></a>
				</div>
			</div>
		</div>
        <div id="ad"></div>
    </body>
</html>
