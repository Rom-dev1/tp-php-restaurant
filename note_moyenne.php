<?php

require __DIR__.'/config/functions.php'

?>
<div class="border-2">
    <div class="bg-gray-100">
       <span> Notes moyennes</span>
    </div>
    <div class="flex flex-wrap justify-between py-4">
        <div class="text-center w-1/3 flex flex-col py-4 space-y-2">
            <span class="text-yellow-400 text-xl"><?= $rst = avgNote($reviews, 'note') ?>/5</span>
            <div class="flex flex-wrap space-x-1 justify-center">
                <?php
                    for($y = 1; $y <= $rst; $y++) {  ?>
                        <i class="fa-solid fa-star text-yellow-400"></i>
                <?php } 
                if(substr($rst, 2,1) >= 5) { ?>
                    <i class="fa-regular fa-star-half-stroke text-yellow-400"></i>
                <?php } 
                if (substr($rst, 2, 1) < 5) { 
                    for($g = 5; $g > ($rst); $g--){  ?>
                        <i class="fa-solid fa-star"></i>
                <?php }
                } else {
                    for($g = 5; $g > ceil($rst); $g--){ ?> 
                        <i class="fa-solid fa-star"></i>
                    <?php } ?>
                <?php } ?>
            </div>
            <span><?= count($reviews) ?> avis</span>
        </div>

        <div class="w-1/3">
            <?php for($i = 5; $i >=1; $i--) { ?>
                <div class="flex flex-wrap justify-center space-x-3 py-1 items-center h-[25px]">
                    <div>
                        <span class="text-sm"><?= $i ?></span>
                        <i class="fa-solid fa-star text-yellow-400 text-sm"></i>
                    </div>
                    <div class="flex w-3/4 rounded-md  overflow-hidden bg-gray-200 h-[15px] ">
                        <?php  for($y = 1; $y <= countNote($reviews, 'note', $i); $y++) { ?>
                            <div class="w-1/5 bg-yellow-400"> </div>
                        <?php } ?>
                    </div>
                    <span>(<?= countNote($reviews, 'note', $i) ?>)</span>
                </div>
            <?php } ?> 
        </div>
        <div class="w-1/3 flex flex-col items-center justify-center space-y-3">
            <span class="text-2xl">Laissez votre avis</span>
            <button class="bg-blue-400 p-2 rounded cursor-pointer">Noter</button>
        </div>
    </div>
</div>