<?php
//EXO 1
// affectez un tableau vide à une variable
// en utilisant la notation array()
$tab = array();
// affectez un tableau vide à une variable
// en utilisant la notation []
$tab = [];
// affectez un tableau de 3 integers à une variable
// en utilisant la notation array()
$tab = array(1, 2, 3);
// affectez un tableau de 3 floats à une variable
// en utilisant la notation []
$tab = [1.0, 2.0, 3.0];
//FIN EXO 1

//EXO 2

// affectez un tableau de 3 strings à une variable
// en utilisant la notation array()
// en mettant chaque élément sur 1 ligne
// et en mettant la dernière virgule
$tab = array(
	'foo',
	'bar',
	'baz',
);
// affectez un tableau de 3 strings à une variable
// en utilisant la notation []
// en mettant chaque élément sur 1 ligne
// et en mettant la dernière virgule
$tab = [
	'foo',
	'bar',
	'baz',
];

// FIN EXO 2

// EXO 3
// affectez un tableau vide à une variable
// ensuite, ajoutez-lui 1 booléen, 1 integer et 1 string
$tab = [];
$tab[] = true;
$tab[] = 123;
$tab[] = 'foo';
var_dump($tab);
// affectez un tableau de 2 floats à une variable
// ensuite, ajoutez-lui 1 booléen, 1 integer et 1 string
$tab = [1.0, 2.0];
$tab[] = true;
$tab[] = 123;
$tab[] = 'foo';
var_dump($tab);

// FIN EXO 3

// EXO 4

// affectez un tableau de 5 valeurs (type de donnée libre)
// puis affichez le premier élément, le 3ème et le dernier
$tab = [
	'foo',
	'bar',
	'baz',
	'lorem',
	'ipsum',
];
echo $tab[0];
echo $tab[2];
echo $tab[4];
// FIN EXO 4

// EXO 5
$tab = ['foo', 'bar', 'baz', 'lorem', 'ipsum'];
// affichez le premier élement, le 3ème et le dernier
// en affectant la valeur de l'index à la variable $i
// et en se servant de $i comme index du tableau
$i = 0;
echo $tab[$i] . "\n";
$i = 2;
echo $tab[$i] . "\n";
$i = 4;
echo $tab[$i] . "\n";

$tab = ['foo', 'bar', 'baz', 'lorem', 'ipsum'];
// affichez le premier élement, le 3ème et le dernier
// en en se servant de $i comme index du tableau
// et en utilisant l'opérateur d'incrémentation (++)
$i = 0;
echo $tab[$i] . "\n";
$i++;
$i++;
echo $tab[$i] . "\n";
$i++;
$i++;
echo $tab[$i] . "\n";
// FIN EXO 5

// EXO 6
$tableau = [];
$tableau[] = 123;
$tableau[] = 3.14;
$tableau[] = 'foo bar baz';
$tableau[] = true;
$elements = count($tableau);
var_dump($tableau);
var_dump($elements);
// affichez le dernier élément du tableau en vous servant de la variable $elements
echo $tableau[$elements - 1] . "\n";

// FIN EXO 6

// EXO 7
$lignes = [
	[11, 'foo'],
	[12, 'bar'],
	[13, 'baz'],
];
// affichez le premier élément de chaque tableau
// en vous servant des indexes
$ligne = $lignes[0];
echo $ligne[0] . "\n";
$ligne = $lignes[1];
echo $ligne[0] . "\n";
$ligne = $lignes[count($lignes) - 1];
echo $ligne[0] . "\n";

//FIN EXO 7

// EXO 8
$tableau = [
	[11, 12, 13],
	[14, 15, 16],
	[17, 18, 19],
];
// affichez la valeur 13 du tableau
echo $tableau[0][2] . "\n";
//FIN EXO 8

// EXO 9
/*
affectez à une variable le tableau suivant
en utilisant l'entête comme clé alphanumérique
id   name        active
42   John Doe    true
*/
$user = [
	'id' => 42,
	'name' => 'John Doe',
	'active' => true,
];
echo 'id: ' . $user['id'] . "\n";
echo 'name: ' . $user['name'] . "\n";
echo 'active: ' . $user['active'] . "\n";
// FIN EXO 9

// EXO 10
/*
affectez à une variable le tableau suivant
en utilisant l'entête comme clé de chaque sous-tableau
id   name        active
42   John Doe    true
123  Lorem Ipsum false
255  Foo Bar     true
*/
$users = [
	[
		'id' => 42,
		'name' => 'John Doe',
		'active' => true,
	],
	[
		'id' => 123,
		'name' => 'Lorem Ipsum',
		'active' => false,
	],
	[
		'id' => 255,
		'name' => 'Foo Bar',
		'active' => true,
	],
];
var_dump($users);
// FIN EXO 10

//EXO 11

//FIN EXO 11
