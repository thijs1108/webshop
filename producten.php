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
                <center><h1>Producten</h1></center>
				
				
				
					<div id=zoekform>
					<form id=bovensteform>
					<table>
					<tr>
					<div id=zoekboxenbutton>
					<td><input id=zoekterm maxlength=90 name=zoekterm size=30 type=text placeholder="Zoektermen ingeven"></td>
					<td><button id=zoekbutton type=button>Zoeken</button></td>
					</div>
					</tr>
					</table>
					</form>
					</div>

					<fieldset id=aantalperpagina>
					1367 Producten | Toon 
					<select id=aantal name=aantal>
					<option disabled>kies</option>
					<option>10</option>
					<option>20</option>
					<option>50</option>
					<option>100</option>
					</select>
					per pagina
					</fieldset>

					<div id=subcategorie>
					<table id=subcategorie-tabel>
					<tr><td ><a href="han.nl">Subcategorie 1</a></td></tr>
					<tr><td ><a href="han.nl">Subcategorie 2</a></td></tr>
					<tr><td ><a href="han.nl">Subcategorie 3</a></td></tr>
					<tr><td ><a href="han.nl">Subcategorie 4</a></td></tr>
					<tr><td ><a href="han.nl">Subcategorie 5</a></td></tr>
					</table>
					</div>


					<div id=productenoverzicht>
					<table id=tabel>

					<tr>
					<td class=productenintabel>
					<img src=afb/producten/thehobbit1.jpg alt="Dvd plaatje van de hobbit 1" width=100 height=100>
					<p>The hobbit part 1</p>
					<p class=prijs>&euro;9,99 <button type=button>In winkelwagen</button></p>
					</td>

					<td class=productenintabel>
					<img src=afb/producten/thehobbit3.jpg alt="Dvd plaatje van de hobbit 3" width=100 height=100>
					<p>The hobbit part 3</p>
					<p class=prijs>&euro;9,99 <button type=button>In winkelwagen</button></p>
					</td>

					<td class=productenintabel>
					<img src=afb/producten/thehobbitbox.jpg alt="Dvd plaatje van de hobbitbox" width=100 height=100>
					<p>The hobbit box</p>
					<p class=prijs>&euro;9,99 <button type=button>In winkelwagen</button></p>
					</td class>

					<td class=productenintabel>
					<img src=afb/producten/thehobbit.jpg alt="Dvd plaatje van de hobbit" width=100 height=100>
					<p>The hobbit</p>
					<p class=prijs>&euro;9,99 <button type=button>In winkelwagen</button></p>
					</td class>
					</tr>



					<tr>
					<td class=productenintabel>
					<img src=afb/producten/abbey.jpg alt="Dvd plaatje van abbey" width=100 height=100>
					<p>The hobbit part 1</p>
					<p class=prijs>&euro;9,99 <button type=button>In winkelwagen</button></p>
					</td>

					<td class=productenintabel>
					<img src=afb/producten/americansniper.jpg alt="Dvd plaatje van american sniper" width=100 height=100>
					<p>The hobbit part 3</p>
					<p class=prijs>&euro;9,99 <button type=button>In winkelwagen</button></p>
					</td>

					<td class=productenintabel>
					<img src=afb/producten/blueeyes.jpg alt="Dvd plaatje van blue eyes" width=100 height=100>
					<p>The hobbit box</p>
					<p class=prijs>&euro;9,99 <button type=button>In winkelwagen</button></p>
					</td class>

					<td class=productenintabel>
					<img src=afb/producten/fastfurious.jpg alt="Dvd van de fast furious" width=100 height=100>
					<p>The hobbit</p>
					<p class=prijs>&euro;9,99 <button type=button>In winkelwagen</button></p>
					</td class>
					</tr>


					<tr>
					<td class=productenintabel>
					<img src=afb/producten/gameofthrones.jpg alt="Dvd plaatje van game of thrones" width=100 height=100>
					<p>The hobbit part 1</p>
					<p class=prijs>&euro;9,99 <button type=button>In winkelwagen</button></p>
					</td>

					<td class=productenintabel>
					<img src=afb/producten/harrypotter.jpg alt="Dvd plaatje van harry potter" width=100 height=100>
					<p>The hobbit part 3</p>
					<p class=prijs>&euro;9,99 <button type=button>In winkelwagen</button></p>
					</td>

					<td class=productenintabel>
					<img src=afb/producten/jamesbond.jpg alt="Dvd plaatje van james bond" width=100 height=100>
					<p>The hobbit box</p>
					<p class=prijs>&euro;9,99 <button type=button>In winkelwagen</button></p>
					</td class>

					<td class=productenintabel>
					<img src=afb/producten/samba.jpg alt="Dvd van de samba" width=100 height=100>
					<p>The hobbit</p>
					<p class=prijs>&euro;9,99 <button type=button>In winkelwagen</button></p>
					</td class>
					</tr>


					<tr>
					<td class=productenintabel>
					<img src=afb/producten/sicario.jpg alt="Dvd plaatje van sicario" width=100 height=100>
					<p>The hobbit part 1</p>
					<p class=prijs>&euro;9,99 <button type=button>In winkelwagen</button></p>
					</td>

					<td class=productenintabel>
					<img src=afb/producten/starwars.jpg alt="Dvd plaatje van star wars" width=100 height=100>
					<p>The hobbit part 3</p>
					<p class=prijs>&euro;9,99 <button type=button>In winkelwagen</button></p>
					</td>

					<td class=productenintabel>
					<img src=afb/producten/thecliff.jpg alt="Dvd plaatje van de cliff" width=100 height=100>
					<p>The hobbit box</p>
					<p class=prijs>&euro;9,99 <button type=button>In winkelwagen</button></p>
					</td class>

					<td class=productenintabel>
					<img src=afb/producten/thewalk.jpg alt="Dvd van de the walk" width=100 height=100>
					<p>The hobbit</p>
					<p class=prijs>&euro;9,99 <button type=button>In winkelwagen</button></p>
					</td class>
					</tr>





					</table>
					</div>

				
				
				
				
			</div>
		</div>
        <div id="ad"></div>
    </body>
</html>
