<?php

$term = $_GET['term']; //Term is a JS SuperGlobal var created by the autocomplete JS script


$requete = $bdd->prepare('SELECT * FROM membres WHERE pseudo LIKE :term'); //Search in Database for keyword
$requete->execute(array('term' => '%'.$term.'%'));
$array = array();


while($donnee = $requete->fetch()) {
    array_push($array, $donnee['pseudo']);
}

echo json_encode($array); //JSON conversion
//replace membres and pseudo at l6 and l12
?>