<?php include('CreationJoueur.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<!-- <style><?php include('style.css'); ?></style> -->
<body >

    <div class="formplayer">
        
        <form method="post" action="index.php" >
            
            Joueur  1 <input type="text" name="player1" class="jou1"/> <br/>
       
            Joueur  2  <input type="text" name="player2" class="jou2"/> <br/>  
      
             <input type="submit" name="submit" class="boutton">
             <!-- <a href="./index.php" type="submit">submit</a> -->
        
            
        </form>
    </div>
</body>
</html>