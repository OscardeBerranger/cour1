<?php

$truc = "";
for($i = 0; $i <10; $i++){
    $truc .= "machin ";
}

$secondes = 365*24*60*60;

$pourcentage = $secondes*0.2754;

$tableau = ["rouge", "bleu", "vert", "marron", "dauphin", "rose"];

$tableau2 = ["rouge", "bleu", "vert", "marron", "dauphin", "rose", "test"];

$animaux = [
    "dauphin"=>"bleu",
    "pieuvre"=>"violet",
    "castor"=>"marron"
];

$animauxDangereux = ["hyene", "autruche", "cobra", "requin", "crocodile"];

$animaux2 = [
    "dauphin"=>"bleu",
    "pieuvre"=>"blanc",
    "castor"=>"marron",
    "requin"=>"blanc",
    "dingo"=>"brun",
    "autruche"=>"noir",
    "crocodile"=>"vert"
];

$caracteres = "abcdefgh0123456789";
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

    <p><?php echo $truc;?></p>

    <p><?php echo $secondes;?></p>

    <p><?php echo $pourcentage;?></p>

<table>
    <tr>
        <th>Couleurs</th>
    </tr>


    <?php foreach ($tableau as $couleurs => $val){
        echo "<tr><td>$val</td></tr>";
    } ?>


    <tr>
        <th><br>Couleurs</th>
    </tr>
    <?php
    foreach ($tableau2 as $couleurs => $val){
        if (in_array($val, $tableau)){
            echo "<tr><td>$val</td></tr>";
        }
    }
    ?>



    <tr>
        <th>Animal</th>
    </tr>
    <tr>
    <?php
    foreach ($animaux as $animal => $couleur){
        echo "<td>$animal</td>";
    }
    ?>
    </tr>

    <tr>
        <th>Couleur</th>
    </tr>
    <tr>
    <?php
    foreach ($animaux as $animal => $couleur){
        echo "<td>$couleur</td>";
    }
    ?>
    </tr>



    <hr>


</table>

    <hr>

<table class = "table">
    <tr>
        <th>Animal</th>
    <tr>
        <?php
        foreach ($animaux2 as $animal => $couleur){
           echo "<td>$animal</td>";
        }
        ?>
    </tr>

        <th>Couleur</th>
    </tr>

    <tr>
        <?php
        foreach ($animaux2 as $animal => $couleur){

            echo "<td>$couleur</td>";
        }
        ?>
    </tr>
    </tr>

    <th>danger</th>
    </tr>

    <tr>
        <?php
        foreach ($animaux2 as $animal => $couleur){
            if (in_array($animal, $animauxDangereux))
            {echo "<td><div class='pastilleRouge'></div></td>";}
            else {echo "<td><div class='pastilleVerte'></div></td>";}
        }
        ?>
    </tr>
</table>

<?php
$aclr = str_split($caracteres);
$color = "#";

for($x = 0; $x <6; $x++){
    $value = rand(0, count($aclr)-1);
    $color.=$aclr[$value];
}
echo $color;
echo "<div class='sized' style='background-color:$color'></div>";
?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>