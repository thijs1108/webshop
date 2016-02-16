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
                    <img src="logo.jpg">
                </div>
                <div id="login">
                    <form action="action_page.php">
						Login:<br>
                        <input type="text" name="nickname" placeholder="Gebruikersnaam">
                        <input type="password" name="password" placeholder="Wachtwoord"><br><br>
						Onthouden:<input type="checkbox">
                        <a href="vergeten.php">Vergeten?</a>&nbsp &nbsp &nbsp <a href="registreer.php">Registreer </a>&nbsp &nbsp &nbsp <input type="submit" value="Login">
                    </form>
                </div>
            </div>
			<div id=navigatie>
				<ul>
					<li><a href=http://han.nl>Nieuws</a></li>
					<li id=huidig><a href=http://han.nl>Acties</a></li>
					<li><a href=http://han.nl>Over ons</a></li>
					<li><a href=http://han.nl>Vacatures</a></li>
					<li class="dropdown"><a class=drop href=http://han.nl>Webshop</a>
						<div class=dropdown-content>
							<a class=uitklapmenu href="http://han.nl">Producten</a>
							<a class=uitklapmenu href="http://han.nl">Winkelwagen</a>
							<a class=uitklapmenu href="http://han.nl">Afrekenen</a>
						</div>
					</li>
				</ul>
			</div>
            <div id="text">
                <center><h1>Over ons</h1></center>
				<h2>Wie zijn wij</h2>
				<div id="wiezijnwij">
					<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam faucibus et tellus non consequat. Praesent diam lectus, placerat eu tortor sed, consectetur scelerisque quam. Morbi at dui massa. In in nunc mi. Nullam fermentum sapien vestibulum orci porta, non fermentum sapien malesuada. Quisque gravida augue id felis rutrum pellentesque ut in dui. Morbi fringilla imperdiet metus, ut ullamcorper eros malesuada eu. Integer non neque nisl. Vestibulum at enim non mi facilisis imperdiet. Duis ullamcorper rutrum erat eu sollicitudin.
					</p>
					<img src="#">
				</div>
			</div>
        <div id="ad">advertentie</div>
    </body>
</html>
