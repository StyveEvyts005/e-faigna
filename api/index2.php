<?php
   $nom = $_GET["nom"];
   $numero = $_GET["num"];
   $montant = $_GET["mont"];
   $operateur = $_GET["op"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css" class="css">
    <title>E-faigna_paymant</title>
</head>
<body>
    <article>
        <h1>E-faigna</h1>
        <div class="info">
            <p class="payType" id="<?=$operateur?>">Payment par: <?=$operateur?></p>
            <div class="sous-info">
                <label>Nom dans le compte:</label>
                <span><?=$nom?></span> 
            </div>

            <div class="sous-info">
                <label>Numero:</label>
                <span  class="num" id="<?=$numero?>"><?=$numero?></span> 
            </div>

            <div class="sous-info">
                <label>Montant:</label>
                <span id="<?=$montant?>" class="mont"><?= number_format($montant)?> Ar</span> 
            </div>
           

            <div class="instruction">
                <p>Sur cette version le frais de retrait sera inclus dans votre payement.</p>
            </div>
    
           <button id="payCall">Payer</button>
        </div>
    </article>
      <p id="signature">-Créer par Boutika-</p>
    <script src="script2.js"></script>
</body>
</html>