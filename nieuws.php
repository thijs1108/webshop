<!doctype html>
<html>
    <head>
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
                <center><h1>Nieuws</h1></center>
				Helaas is er nog geen nieuws
			</div>
		</div>
        <div id="ad"></div>
    </body>
</html>
