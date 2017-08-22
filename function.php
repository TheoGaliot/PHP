<?php

function addition ($a, $b) {
  return $a + $b;
}

$result = addition(2, 3);

echo $result;
echo "<br />\n";

// créer une fonction echoBoolean qui :
// - prend une variable paramètre
// - renvoie la chaine de caractères "vrai" si la variable est true
// - renvoie la chaine de caractère "faux" si la variable est false

// appelez cette fonction avec :
// - une valeur true et affichez le résultat
// - une valeur false et affichez le résultat


$boolean = true;
$boolean2 = false;

function echoBoolean($i){

  if ($i == true) {
    echo "vrai";
  } else {
    echo "faux";
  }
}

echo echoBoolean ($boolean);
echo "<br />\n";

echo echoBoolean ($boolean2);
echo "<br />\n";

//definition d'une fonction avec déclaration de type
function booleanToString4(bool $booleanValue) {
  return $booleanValue ? "vrai" : "faux";
}
