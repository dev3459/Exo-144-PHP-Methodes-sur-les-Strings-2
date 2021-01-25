<?php
//Exo 1
$string = "Aujourd'hui il fait -1000 degrès";
addslashes($string);

//Exo 2
$stringMini = "texte de mon choix";
echo strtoupper($stringMini) . "<br>";
echo ucfirst($stringMini) . "<br>";
echo ucwords($stringMini) . "<br>";

$stringUper = "TEXTE DE MON CHOIX";
echo strtolower($stringUper) . "<br>";
echo lcfirst($stringUper) . "<br>";

//Exo 3
$stringCount = "Je fais actuellement une formation chez UP-TO Fourmies pour obtenir un diplôme équivalent au BAC+2. On va peut être faire une formation BAC+4";
echo str_word_count($stringCount) . "<br>";

//Exo 4
$stringExplode = "Gaetan Maxime Theo Alicia Coco Christine";
$mots = explode(" ", $stringExplode);

foreach($mots as $mot){
    echo $mot . "<br>";
}

//Exo 5
$stringImplode = ["Gaetan", "Maxime", "Theo", "Alicia", "Coco", "Christine"];
echo implode(" ", $stringImplode) . "<br>";

//Exo 6
$stringReverse = "Ceci est une phrase renverser";
echo strrev($stringReverse) . "<br>";

//Exo 7
$stringBalise = "<strong>Hello, </strong> nous apprenons <span style='color: blue;'>PHP</span>";
echo $stringBalise . "<br>";
echo strip_tags($stringBalise) . "<br>";

//Exo 8
$stringSlapsh = "Bonjour, cela fait moins de 500 caractères de longueur !";
$count = strlen($stringSlapsh);
if ($count < 500){
    echo "|" . $stringSlapsh;
}else{
    echo $stringSlapsh;
}
echo "<br>";
//Exo 9
$arrayString = "Ceci est une phrase !";
for($i = 0; $i < strlen($arrayString); $i++){
    echo $arrayString[$i] . "<br>";
}

//Exo 10
$StringReplace = "Chaine de texte a remplacer";
echo substr_replace($StringReplace, "World", 10)."<br>";

//Exo 11
$StringFound = "Cherche test dans la chaine !";
echo "test se trouve à la position ". strpos($StringFound, "test")."<br>";


//Exo 12
echo "Cherche se trouve à la position " . strpos($StringFound, "Cherche")."<br>";

//Exo 13
echo "remplacer se trouve à la position " . strrpos($StringFound, "!");