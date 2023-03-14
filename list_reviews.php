<?php

require_once __DIR__.'/config/functions.php'

?>

<?php

foreach ($reviews as $review ) { ?>

        <div class="flex m-auto space-x-4">
            <div  class="flex w-1/5 bg-yellow-400 rounded-full justify-center items-center max-w-[60px] max-h-[60px]">
                <span class="text-white text-xl"><?=substr($review['name'], 0,1)?></span>
            </div>
            <div class="w-4/5 flex-col border-2 rounded w-full">
                <div class="bg-gray-200">
                    <span><?=$review['name']?></span>
                </div>
                <div class="flex flex-col p-4">
                    <div>
                        <?php
                            for($y = 1; $y <= $review['note']; $y++) { ?>
                                <i class="fa-solid fa-star text-yellow-400"></i>
                        <?php } 
                            for($g = 5; $g > $review['note']; $g--) { ?>
                                <i class="fa-solid fa-star"></i>
                        <?php } ?>
                    </div>
                    <span><?=$review['review']?></span>
                </div>
                <div class="bg-gray-200 flex justify-end">
                    <span ><?= date('l d F o')?></span>
                </div>
            </div>
            
        </div>

<?php } ?>