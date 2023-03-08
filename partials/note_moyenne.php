<?php

require __DIR__.'/../config/functions.php';

?>
<div class="border-2">
    <div class="bg-gray-100">
       <span> Notes moyennes</span>
    </div>
    <div class="flex flex-wrap justify-between">
        <div class="text-center w-1/3 flex flex-col py-4 space-y-2">
            <span class="text-yellow-400 text-xl"><?= $rst = avgNote() ?>/5</span>
            <div class="flex flex-wrap space-x-1 justify-center">
                <?php
                    for($y = 1; $y <= $rst; $y++) {  ?>
                        <i class="fa-solid fa-star text-yellow-400"></i>
                <?php } 
                if(substr($rst, 2,1) >= 5) { ?>
                    <i class="fa-regular fa-star-half-stroke text-yellow-400"></i>
                <?php }
                    for($g = 5; $g > $rst; $g--){  ?>
                        <i class="fa-solid fa-star"></i>
                        <!--@todo faire 2nd condition ?? -->
                <?php } ?>
            </div>
            <span><?= count($previews) ?> avis</span>
        </div>
        <div class="w-1/3">
            <div class="flex flex-wrap justify-center space-x-3 py-1">
                <div>
                    <span>5</span>
                    <i class="fa-solid fa-star text-yellow-400"></i>
                </div>
                <div class=" flex w-1/2 rounded border-1">
                    <div class="w-1/4 bg-yellow-400"> </div>
                    <div class="w-1/4 bg-gray-200"></div>
                    <div class="w-1/4 bg-gray-200"></div>
                    <div class="w-1/4 bg-gray-200"></div>
                </div>
                <span><?= countNote(5) ?></span>
            </div>
            <div class="flex flex-wrap justify-center space-x-3 py-1">
                <div>
                    <span>4</span>
                    <i class="fa-solid fa-star text-yellow-400"></i>
                </div>
                <div class=" flex w-1/2 rounded border-1">
                    <div class="w-1/4 bg-yellow-400"> </div>
                    <div class="w-1/4 bg-gray-200"></div>
                    <div class="w-1/4 bg-gray-200"></div>
                    <div class="w-1/4 bg-gray-200"></div>
                </div>
                <span><?= countNote(4) ?></span>
            </div>
            <div class="flex flex-wrap justify-center space-x-3 py-1">
                <div>
                    <span>3</span>
                    <i class="fa-solid fa-star text-yellow-400"></i>
                </div>
                <div class=" flex w-1/2 rounded border-1">
                    <div class="w-1/4 bg-yellow-400"> </div>
                    <div class="w-1/4 bg-gray-200"></div>
                    <div class="w-1/4 bg-gray-200"></div>
                    <div class="w-1/4 bg-gray-200"></div>
                </div>
                <span><?= countNote(3) ?></span>
            </div>
            <div class="flex flex-wrap justify-center space-x-3 py-1">
                <div>
                    <span>2</span>
                    <i class="fa-solid fa-star text-yellow-400"></i>
                </div>
                <div class=" flex w-1/2 rounded border-1">
                    <div class="w-1/4 bg-yellow-400"> </div>
                    <div class="w-1/4 bg-yellow-400"></div>
                    <div class="w-1/4 bg-gray-200"></div>
                    <div class="w-1/4 bg-gray-200"></div>
                </div>
                <span><?= countNote(2) ?></span>
            </div>
            <div class="flex flex-wrap justify-center space-x-3 py-1">
                <div>
                    <span>1</span>
                    <i class="fa-solid fa-star text-yellow-400"></i>
                </div>
                <div class=" flex w-1/2 rounded border-1">
                    <div class="w-1/4 bg-yellow-400"> </div>
                    <div class="w-1/4 bg-gray-200"></div>
                    <div class="w-1/4 bg-gray-200"></div>
                    <div class="w-1/4 bg-gray-200"></div>
                </div>
                <span><?= countNote(1) ?></span>
            </div>
        </div>
        <div class="w-1/3 flex flex-col items-center justify-center space-y-3">
            <span class="text-2xl">Laissez votre avis</span>
            <button class="bg-blue-400 p-2 rounded cursor-pointer">Noter</button>
        </div>
    </div>
</div>