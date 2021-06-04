<h1> Cours de PHP </h1>
<nav>
    <a href="#1">Chapitre 1</a>
    <a href="#2">Chapitre 2</a>
    <a href="#3">Chapitre 3</a>
    <a href="#4">Chapitre 4</a>
    <a href="#5">Chapitre 5</a>
    <a href="#6">Chapitre 6</a>
    <a href="#7">Chapitre 7</a>
    <a href="#8">Chapitre 8</a>
    <a href="#9">Chapitre 9</a>
    <a href="#10">Chapitre 10</a>
    <a href="#11">Chapitre 11</a>
    <a href="#12">Chapitre 12</a>
    <a href="#12">Chapitre 13</a>
    <a href="#14">Chapitre 14</a>
    <a href="#15">Chapitre 15</a>
</nav>

<style>
    nav a {
    padding: 1px 5px;
    text-align: center;
    font-size: 15px;
    font-weight: 500px;
    cursor: pointer;
    color: black;
    border-radius: 100px;
    border: 3px solid #a30707;   
    }

    h1 {
        text-align: center;
        color : crimson;
    }
    h2{
    background : crimson;
    text-align: center;
    color : black;

</style>

<h2 id= 1 >1. Affichage</h2>

<?php

// commentaire
/*  commentaire multi */ 

// afficher des element sur une page 

echo 'hello';

// ecrire du html dans du php

echo '</br>'; 
echo 'wesh la zone';

?>

<p>Voici un texte</p>

<?php 
// plusieur balise php 
?>

<hr>
<h2 id= 2 >2. Variable : Type, declaration, affecttion</h2>
<hr>

<?php

// cree une variable 
$prenom = 'Patrick';
// afficher : 
echo $prenom;
echo '</br>';

$a = 127;
gettype($a);
echo gettype($a);

echo '</br>';

$b = 1.5;
echo gettype($b); // double pour les float 

echo '</br>';

$c = 'du texte';
echo gettype($c);

echo '</br>';

$d = '127';
echo gettype($d);

echo '</br>';

$e = true;
echo gettype($e);

echo '</br>';

// modif des var 

$prenom = 'Nathan';
echo $prenom;
?>

<hr>
<h2 id= 3>3. Concatenation </h2>
<hr>

<?php

echo 'Bonjour ' . ' Tout le monde!<br>';
echo 'Bonjour ' . $prenom . ',  comment ca va ? <br>';

echo " bonjour $prenom tout le monde"; 

// ajouter une valeur a une variable 
$prenom .= ' Tony ';
echo $prenom;

?>

<hr>
<h2 id= 4>4. Guillemets et Quotes</h2>
<hr>

<?php
$message1 = 'aujoud\'huit';
$message2 = " aujourd'huit";

echo $message1 . '<br>' . $message2 . '<br>';
echo 'Bonjour comment ca va ' . $message1 . '? <br>';
echo "Bonjour comment ca va $message1 $prenom ? <br>";

?>

<hr>
<h2 id= 5 >5. Constantes</h2>
<hr>

<?php

// definir une constante : 
define('CAPITAL', 'Paris');

// L'afficher 
echo CAPITAL;

// on ne peut pas modif une constante 
/* define('CAPITAL', 'Lyons');
echo CAPITAL; */
echo '<br>';

// constant magique 
echo __FILE__; // Afficher l'emplacement du fichier 
echo '<br>';
echo __LINE__; // Afficher la ligne de code 
?>

<hr>
<h2 id= 6>6. Opérateurs Arithmétiques</h2>
<hr>

<?php

$a = 10;
$b = 2;

echo $a + $b . '<br>';
echo $a - $b . '<br>';
echo $a * $b . '<br>';
echo $a / $b . '<br>';

// ajout de b a a
$a += $b;
echo $a;

?>


<hr>
<h2 id= 7>7. Structure Conditionelles </h2>
<hr>

<?php

$a = 10;
$b = 5;
$c = 2;

// A > B
if($a > $b){
    echo "A est supp a B <br>";
}else{
    echo "B est supp a A <br> ";
}

// ET ==> AND ou && 
if($a > $b && $b > $c){
    echo "A supp a B et B supp a C <br>";
}

// OU ==> || ou OR 
if($a == 9 || $b > $c ){
    echo "A == 9 OU AORS B supp a C <br>";
}

// condition exclusive 
if($a == 10 XOR $b > $c ){
    echo "A == 10 OU ALORS B supp a C <br>";
}


if($a == 8  ){
    echo "A == 8 <br>";
}elseif($a != 10){
    echo "A est dif de 10 <br>";
}else {
    echo "Condition par défaut <br>";
}

// verification qi la var est défini ?
$var = 'qqchose<br>';
if(isset($var)){
    echo "oui <br>";
}else{
    echo "non <br>";
}

$vara = 1;
$varb = '1';

if ($vara == $varb){
    echo " Les variables sont équivalentes <br>";
}else {
    echo " Les variable ne sont pas équivalentes <br>";
}

// = ==> assignation == ==> comparaison de valeur === ==> comparaison de valeur et de type 

// condition switch 
$couleur = 'jaune';

// verification de la valeur de la var 
switch($couleur){
    case 'blue' : 
        echo " You like blue <br>";
    break;
    case 'rouge':
        echo " You like red <br>";
    break;
    case 'vert' : 
        echo " You like green";
    break;

    default : 
        echo "You don't like the color tested <br>";
    break;
}

/* 
Axe DW : Condition ternaires 
*/
?>

<hr>
<h2 id= 8>8. Fonction Predefinies </h2>
<hr>

<?php

$phrase = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum';
echo "$phrase <br>";

// Fonction pédéfinie pour voir le nombre de caratére d'une chaine 
echo iconv_strlen($phrase) . '<br>';

// Fonction prédefinie pour extraire une partie d'une chaine 
echo substr($phrase, 0 , 42) . '<br>';

// afficher l'année actuel 
echo date('Y');

// https://www.php.net/manual/fr/datetime.format.php

?>

<hr>
<h2 id= 9>9. Fonction Utilisateur </h2>
<hr>

<?php

// creation de fonction 
function bonjour(){
    echo "Bonjour <br>";
}

// je l'execute 
bonjour();

// Fonction avec un argument
function bonjour2($x){
    echo "Bonjour $x <br>" ;
}

bonjour2('Mathis');
bonjour2($prenom);

// variable locale: 
function JourSemaine(){
    $jour = "lundi <br>";
    return $jour;

}

// JourSemaine();
// echo $jour;
echo JourSemaine();

// fonction global 
$pays = 'France';

function affichagePays(){
    global $pays;
    echo $pays;
}

affichagePays();
?>

<hr>
<h2 id= 10>10. Structures Itérative (Boucle) </h2>
<hr>

<?php

// WHILE 
$i = 0; 
while ($i <= 5){
    if ($i == 5){
        echo "bonjour $i <br>";
    }
    else{
        echo "Bonjour $i --- <br>";
    }
    $i++;
}

// FOR 
for ($i = 0; $i <= 5; $i++){
    echo "Bonjour $i <br>";
}

// faire un select qui affiche les années d'aujourd'huit a 1920 grace a une boucle 
echo "<select>";
        for($date = date('Y'); $date >= 1920; $date--){
            echo "<option>$date</option> ";
        }
echo "</select>";
?>

<hr>
<h2 id= 11>11. Inclusion de fichers</h2>
<hr>

<?php 

// Include :  utiliser en ligne
include('./home.php');

// Require : utiliser en local 
require('./home.php');

echo 'suite du code <br>'
?>

<hr>
<h2 id= 12>12. Array</h2>
<hr>

<?php

// créeation de tabeau
$liste = array(
    'rouge',
    'bleu',
    'orange',
    'jaune',
    'rose',
);
// afficher le tableau
print_r($liste);
echo "<br>";
var_dump($liste);
echo "<br>";

// afficher un seul element 
echo "$liste[2] <br>";

// Autre maniére 
$table = ['France', 'Italie', 'Espagne', 'Angletere'];
print_r($table);
echo "<br>";

// boucle pour parcourire un tableau

foreach($table as $indice => $valeur){
    echo "$indice : $valeur <br>";

}
echo count($table) . '<br>' ;

// multie tab 

$tab_multi = array(0 => array('prenom' => 'Leo', 'nom' => 'Arezski'), 1 => array('prnom' => 'Tiphaine', 'nom' => 'Massip'));
print_r($tab_multi);
echo "<br>";

// achicher le premier prenom 
echo $tab_multi[0]['prenom'];
echo "<br>";

?>



<hr>
<h2 id= 13>13. classe / object</h2>
<hr>

<?php

// classe

class Utilisateur {
    public $prenom = 'Esteban';
    public $age = 19;
    public function pays(){
        return 'France';
    }
}

// création d'objet 
$utilisateur = new Utilisateur; 

// afficher les propriétées de l'objet
echo $utilisateur->prenom . '<br>';
echo $utilisateur->age . '<br>';
echo $utilisateur->pays() . '<br>';

?>


