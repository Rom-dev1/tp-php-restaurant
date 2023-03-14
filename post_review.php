<?php
    require __DIR__.'/config/functions.php';

    $name = sanitize($_POST['name'] ?? null);
    $comment = sanitize($_POST['comment'] ?? null);
    $notes = sanitize($_POST['notes'] ?? null);

    $valueNotes = ['1', '2', '3', '4', '5']
?>

<div class="border-2">
    <div class="bg-gray-100">
        <span>Publier un avis</span>
    </div>
    <div class="w-2/3 m-auto space-y-4 mt-4">
        <form class="flex space-x-4 text-end" action="" method="post">
            <div class="flex space-x-5 flex-col w-1/4 space-y-9">
                <label for="name">Nom</label>
                <label for="comment">Commentaire</label>
                <label for="notes">Notes</label>
                
            </div>
            <div class="flex flex-col w-3/4">
                <div class="space-y-9 w-full">
                    <input placeholder="Votre nom" class="border-gray-300 border-2 rounded w-full" type="text" name="name" id="name">
                    <textarea class="border-gray-300 border-2 rounded w-full " name="comment" id="comment" cols="50" rows="2">Votre commentaire</textarea>
                </div>
                
                <div class="flex space-x-4 text-center">
                    <?php foreach($valueNotes as $valueNote) { ?> 
                        <div>
                            <input class="rounded" method="post" type="radio" name="notes" id="notes" value="<?= $valueNote ?>">
                            <label class="color-black-300" for="notes"><?= $valueNote ?></label>
                        </div>
                    <?php } ?>
                </div>
                <button class="text-start p-3 bg-blue-400 rounded text-white w-fit my-5">Noter</button>
            </div>
           
        </form>
    </div>

</div>