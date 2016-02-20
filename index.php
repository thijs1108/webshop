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
                    <form action="action_page.php">
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
                <center><h1>Over ons</h1></center>
				<h2>Wie zijn wij</h2>
				<div id="wiezijnwij">
					<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam faucibus et tellus non consequat. Praesent diam lectus, placerat eu tortor sed, consectetur scelerisque quam. Morbi at dui massa. In in nunc mi. Nullam fermentum sapien vestibulum orci porta, non fermentum sapien malesuada. Quisque gravida augue id felis rutrum pellentesque ut in dui. Morbi fringilla imperdiet metus, ut ullamcorper eros malesuada eu. Integer non neque nisl. Vestibulum at enim non mi facilisis imperdiet. Duis ullamcorper rutrum erat eu sollicitudin.
					</p>
				</div>
				<div id="img_wiezijnwij"><img src="afb/wiezijnwij.jpg" width="100%" height="250"></div>
				<h2>Locatie</h2>
				<div id="locatie">
					<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam faucibus et tellus non consequat. Praesent diam lectus, placerat eu tortor sed, consectetur scelerisque quam. Morbi at dui massa. In in nunc mi. Nullam fermentum sapien vestibulum orci porta, non fermentum sapien malesuada. Quisque gravida augue id felis rutrum pellentesque ut in dui. Morbi fringilla imperdiet metus, ut ullamcorper eros malesuada eu. Integer non neque nisl. Vestibulum at enim non mi facilisis imperdiet. Duis ullamcorper rutrum erat eu sollicitudin.
					</p>
				</div>
				<div id="locatieframe"><iframe
				  width="400"
				  height="300"
				  frameborder="0" style="border:0"
				  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAUrOgOvqahI38uJcDaI3yRW5sEjE5OVLo
					&q=Papendorpseweg+100+3528+BJ+Utrecht,Netherlands" allowfullscreen>
				</iframe>
				</div>
			</div>
		</div>
        <a href="http://kfc.com"><div id="ad"></div></a>
    </body>
</html>
