<?php

#Faire les uses/namespaces;
#Define Search v2 -> Done
#Use SearchV2 with $term -> Done
#Echo le tableau de retour (en JSON) -> Done

function searchBis(PropertyRepository $repository, string $query, string $term)
{
    $properties = $repository->findLatest();
    dump($properties);
    $this->em->flush();
    $findProperties = array();
    foreach ($properties as $value) {
        if (strpos($value->getTitle(), $term) !== false) {
            array_push($findProperties, $value);
        }
    }
    unset($value);
    echo json_encode($findProperties);
}

$term = $_GET['term']; //Term is a JS SuperGlobal var created by the autocomplete JS script

searchBis();

?>