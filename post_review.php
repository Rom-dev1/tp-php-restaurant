<?php
    $name = sanitize($_POST['name'] ?? null);
    $review = sanitize($_POST['review'] ?? null);
    $notes = sanitize($_POST['notes'] ?? null);

    $valueNotes = ['1', '2', '3', '4', '5'];

    $errors = [];

    if(!empty($_POST)){

        if(mb_strlen($name) === 0 ){
            $errors['name'] = 'Votre nom est requis';
        }

        if(mb_strlen($review) === 0){
            $errors['review'] = 'Votre commentaire est requis';
        }

        if(!in_array($notes, $valueNotes)){
            $errors['notes'] = 'Saisir une note entre 1 et 5';
        }

        if(empty($errors)){
            $query = db()->prepare('INSERT INTO reviews (name, review, note) VALUES (:name, :review, :note)');
            $query->execute([
                'name' => $name,
                'review' => $review,
                'note'=> $notes,
            ]);
            header('location: index.php');
        }
    }
?>
<?php if (!empty($_POST) && empty($errors)) { ?>
    <div>
        <h2 class="text-green-800 p-3 font-semibold my-4 bg-green-200">Merci pour votre avis <?= $name; ?>.</h2>
        <a class="font-medium text-blue-600 dark:text-blue-500 hover:underline" href="index.php">Ajouter un autre commentaire</a>
    </div>
<?php } else { ?>
    <div class="border-2">
        <div class="bg-gray-100">
            <span>Publier un avis</span>
        </div>
        <?php if(!empty($errors)) { ?>
            <div class="bg-red-200 m-3 rounded">
                <ul class="p-4">
                <?php foreach($errors as $error) { ?>
                    <li class="text-red-800 text-sm font-semibold list-disc ml-5"><?= $error ?></li>
                <?php } ?>
                </ul>
            </div>
        <?php } ?>
        <div class="w-2/3 m-auto space-y-4 mt-4">
            <form class="flex space-x-4 text-end" action="" method="post">
                <div class="flex space-x-5 flex-col w-1/4 space-y-9">
                    <label for="name">Nom</label>
                    <label for="review">Commentaire</label>
                    <label for="notes">Notes</label>
                    
                </div>
                <div class="flex flex-col w-3/4">
                    <div class="space-y-9 w-full">
                        <input placeholder="Votre nom" class="border-gray-300 border-2 rounded w-full" type="text" name="name" id="name">
                        <textarea class="border-gray-300 border-2 rounded w-full " name="review" id="review" cols="50" rows="2" placeholder="Votre commentaire"></textarea>
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
<?php } ?>    