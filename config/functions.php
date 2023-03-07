<?php

 $add_previews = [
    [
        'name' => 'Maxine Trochu',
        'comment' => 'tres bon',
        'note' => 5
    ],
    [
        'name' => 'Charlie Trochu',
        'comment' => 'bon',
        'note' => 4
    ],
    [
        'name' => 'Anna Webert',
        'comment' => 'moyen',
        'note' => 3
    ],
    [
        'name' => 'cachou',
        'comment' => 'mauvais',
        'note' => 4
    ],
];   

function avgNote(){
    global $add_previews;
    $sum = 0;
    foreach ($add_previews as $note){
        $nb = ($note['note']);
        $sum += $nb;
    }
    return round($sum/count($add_previews), 1);
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