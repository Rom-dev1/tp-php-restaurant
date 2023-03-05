<?php

$add_previews = [
    [
        'name' => 'Maxine Trochu',
        'comment' => 'tres bon',
        'note' => '5'
    ],
    [
        'name' => 'Charlie Trochu',
        'comment' => 'bon',
        'note' => '4'
    ],
    [
        'name' => 'Anna Webert',
        'comment' => 'moyen',
        'note' => '3'
    ]
];

// public static function dateToFrench($date, $format) 
// {
//     $english_days = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
//     $french_days = array('lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche');
//     $english_months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
//     $french_months = array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre');
//     return str_replace($english_months, $french_months, str_replace($english_days, $french_days, date($format, strtotime($date) ) ) );
// }
?>

<?php

foreach ($add_previews as $previews ) { ?>

        <div class="flex space-y-8 w-3/4 m-auto">
            <div class="w-1/6 flex text-center items-center">
                <span class="bg-yellow-500 px-4 py-3 rounded-full text-white text-md object-fill"><?=substr($previews['name'], 0,1)?></span>
            </div>
            <div class="flex-col w-full border-2 rounded">
                <div class="bg-gray-200">
                    <span><?=$previews['name']?></span>
                </div>
                <div>
                    <span><?=$previews['comment']?></span>
                    <span><?=$previews['note']?></span>
                </div>
                <div>
                    <span><?= date('l d F o')?></span>
                </div>
            </div>
            
        </div>

<?php } ?>