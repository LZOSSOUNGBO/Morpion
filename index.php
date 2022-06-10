<?php 
session_start(); 
$_SESSION['player1'] = $_POST['player1'];
$_SESSION['player2'] = $_POST['player2'];
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Morpion</title>
	<link id="icone" rel="icon" href="./images/onglet.ico" type="image/ico" />
	<link rel="stylesheet" href="style.css" />

</head>

<body>

	<div id="field">
		<canvas id="canvas" width="400" height="400">
			<p>
			D�sol�, votre navigateur ne supporte pas Canvas. Mettez-vous � jour. Ou utilisez Firefox ou Google Chrome.
			</p>
		</canvas>
		
		<div id="scores">
			<h1>Morpion</h1>
			<!-- <form method="post" >
			
					Joueur 1: <input type="text" name="player1"/> <br/>  
					Joueur 2:  <input type="text" name="player2"/> <br/>  
				 
			</form> -->
			<p id="nbMatches">0 manche</p>
			<p class="scores-title">Scores</p>
			<p id="player1" class="player1"><strong>X</strong> Joueur 1 : <?php echo $_SESSION["player1"]; ?> <span id="score1">0</span></p>
			<p id="player2" class="player2"><strong>O</strong> Joueur 2 : <?php echo $_SESSION["player2"]; ?> <span id="score2">0</span></p>
			<p id="scoreMessages" class="messages"></p>
		</div>
	</div>
	<script type="text/javascript" src="./jquery.js"> </script>
	<script type="text/javascript" src="./script.js"> </script>

</body>

</html>




