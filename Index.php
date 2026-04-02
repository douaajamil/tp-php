<?php
$nom = $_POST['nom'] ?? "";
$prenom = $_POST['prenom'] ?? "";
$age = $_POST['age'] ?? 0;
$Etablissement = $_POST['Etablissement'] ?? "";

$note1 = $_POST['note1'] ?? 0;
$note2 = $_POST['note2'] ?? 0;
$note3 = $_POST['note3'] ?? 0;
?>
<html>
<head>
    <title>Formulaire </title>
</head>
<body>

<form action="" method="post">
     <input type="text" name="nom" ><br>
     <input type="text" name="prenom" ><br>
     <input type="text" name="Etablissement" ><br>
     <input type="number" name="age" required><br>
     <input type="number" name="n1" min="0" max="20" required ><br>
     <input type="number" name="n2" min="0" max="20" required ><br>
     <input type="number" name="n3" min="0" max="20" required><br>
     <input type="submit" name="valider" value="Envoyer">
</form>
</body>
</html>
<?php 
echo "<br><b>EX 1</b><br>"; 
define("Etablissment","FPK");
if (isset($_POST ['valider']))
    {
        $nom=$_POST ['nom'];
        $prenom=$_POST ['prenom'];
        $age=$_POST ['age'];
        $note1=$_POST ['n1'];
        $note2=$_POST ['n2'];
        $note3=$_POST ['n3'];
    }
$somme=$note1 + $note2 + $note3;
$moyenne=$somme/3;

echo "nom: $nom <br>";
echo "prenom: $prenom <br>";
echo "age: $age <br>";
echo "Etablissement: $Etablissement <br>";
echo "n1: $note1 <br>";
echo "n2: $note2 <br>";
echo "n3: $note3 <br>";
echo "somme: $somme <br>";
echo "moyenne: $moyenne <br>";
if ($moyenne >= 16) {
    $mention = "Excellent <br>";
} elseif ($moyenne >= 14) {
    $mention = "Bien <br>";
} elseif ($moyenne >= 12) {
    $mention = "Assez bien <br>";
} elseif ($moyenne >= 10) {
    $mention = "Passable <br>";
} else {
    $mention = "Echec <br>";
}
echo $mention;
if($age >=16){
    echo"majeur <br>";
}else{
    echo "mineur <br>";
}
if($moyenne >=10){
    echo"admis <br>";
}else{
    echo"non admis <br>";
}
echo "<br><b>EX 2</b><br>";
switch ($mention) {
    case "Excelent": echo "Felicitation <br>";break;
    case "Bien": echo "Bon travail <br>";break;
    case "Assez bien": echo "Efforts satisfaisants <br>";break;
    case "Passable": echo "Peut mieux faire <br>";break;
    case "Echec": echo "Doit redoubler d'effort <br>";break;
}
$notes=[$note1,$note2,$note3];
    for($i = 0; $i < 3; $i++){
        echo $notes[$i];
    }


$i=1;
while($i <= $age){
    echo $i ."";
    $i++;
}
 echo "<br>";
$matieres = ["PHP", "HTML", "CSS"];
$notesmatieres = [$note1, $note2, $note3];
foreach($matieres as $index => $matiere){
    echo $matiere . " : " . $notesmatieres[$index] ."<br>";
}
echo "<br><b>EX 3</b><br>";
$n = $note1; 
//Table de multiplication
echo "<b>Table de multiplication de $n</b><br>";
for($i = 1; $i <= 10; $i++){
    echo "$n x $i = " . ($n * $i) . "<br>";
}

//Triangle d’étoiles
echo "<br><b>Triangle d'étoiles</b><br>";
for($i = 1; $i <= $n; $i++){
    for($j = 1; $j <= $i; $j++){
        echo "*";
    }
    echo "<br>";
}

// Carré d’étoiles
echo "<br><b>Carré d'étoiles</b><br>";
for($i = 1; $i <= $n; $i++){
    for($j = 1; $j <= $n; $j++){
        echo "*";
    }
    echo "<br>";
}

// Nombres pairs
echo "<br><b>Nombres pairs</b><br>";
for($i = 1; $i <= $n; $i++){
    if($i % 2 == 0){
        echo $i . " ";
    }
}

//Somme de 1 à n
$s = 0;
for($i = 1; $i <= $n; $i++){
    $s += $i;
}
echo "<br><br>Somme de 1 à $n = $s <br>";

//Pair ou impair
if($n % 2 == 0){
    echo "$n est pair<br>";
}else{
    echo "$n est impair<br>";
}

echo "<br><b>EX 4</b><br>";
/*
Algorithme :

Début

    f0 ← 0
    f1 ← 1

    Afficher F0 = 0
    Afficher F1 = 1

    Pour i de 2 à 99 faire
        f ← f0 + f1
        Afficher Fi = f
        f0 ← f1
        f1 ← f
    FinPour

Fin
*/
function fibonacci(){
    $f0 = 0;
    $f1 = 1;

    // affichage des deux premiers termes
    echo "F0 = $f0 <br>";
    echo "F1 = $f1 <br>";

    // boucle pour calculer les 100 termes
    for($i = 0; $i < 100; $i++){

        // calcul du terme
        $f = $f0 + $f1;

        // affichage
        echo "F$i = $f <br>";

        // mise à jour
        $f0 = $f1;
        $f1 = $f;
    }
}

fibonacci();
?>

