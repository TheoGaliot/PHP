<?php

$exemple = rand(0, 100);

echo $exemple;
echo '<br />';

//  exo 1
// créez un tableau nommé $data
// ajoutez-y 100 valeurs aléatoires comprises entre 0 et 10

$data =[];

for ($i = 0 ; $i < 100 ; $i++) {
  $data[] = rand(0,10);
}

foreach ($data as $key => $value) {
  echo $key;
  echo '<br />';
  echo $value;
  echo '<br />';
}

// exo 2
// créez un tableau qui contient 50 mots différents
// réinitialiser un tableau vide dans $data
// ajoutez-y 100 tableaux ayant la stucture suivante :
//  - une clé "word" contenant un des 10 mots sélectionné au hasard
//  - une clé "count" contenant une valeur aléatoire comprise entre 0 et 10

$words=["nicolas", "a", "b", "c", "d", "e", "f", "g","h","i", "stephane", "evelyne", "tom", "patrick","maxime",
"k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z", "Lorem", "ipsum", "dolor", "sit", "amet", "consectetur", "adipisicing", "elit", "sed",
 "do", "eiusmod tempor"];

$data=[];
