<?php

// tableau static etape 3
 $previews = [
    [
        'name' => 'Maxine Trochu',
        'comment' => 'tres bon',
        'note' => 2
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
    [
        'name' => 'Anna Webert',
        'comment' => 'moyen',
        'note' => 2
    ],
];



function avgNote(){
    global $previews;
    $sum = 0;
    foreach ($previews as $preview){
        $note = ($preview['note']);
        $sum += $note;
    }
    return round($sum/count($previews), 1);
}

function countNote($note){
    global $previews;
    $notes = [];
    foreach ($previews as $preview){
        $notes[] = $preview['note'];
    }
    $countNote = count(array_keys($notes, $note));
    return $countNote;
}