<?php

require __DIR__.'/db.php';

// requete permettant de récupere l'ensemble de la table
$reviews = db()->query('SELECT * FROM reviews')->fetchAll();

   

// calcul note moyenne 
function avgNote($array, $value){
    $sum = 0;
    foreach ($array as $key){
        $note = $key[$value];
        $sum += $note;
    }
    return round($sum/count($array), 1);
}

// trouve le nombre d'occurence d'une meme note
function countNote($array, $value, $increment){
    $notes = [];
    foreach ($array as $key){
        $notes[] = $key[$value];
    }
    return  count(array_keys($notes, $increment));
}

// public static function dateToFrench($date, $format) 
// {
//     $english_days = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
//     $french_days = array('lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche');
//     $english_months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
//     $french_months = array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre');
//     return str_replace($english_months, $french_months, str_replace($english_days, $french_days, date($format, strtotime($date) ) ) );
// }
?>

<!-- $rst > 0.5 || $rst > 1.5 || $rst > 2.5 || $rst > 3.5 || $rst > 4.5 -->

