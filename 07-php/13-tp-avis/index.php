<?php
    $avis = [
        [
            "name" => "Fiorella",
            "review" => "Très bon restaurant",
            "note" => "",
            "date" => "2022-02-09 11:43",
        ],
    ];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP Avis</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <link rel="stylesheet" href="style.cssœ">
</head>

<body>
    <div class="container mx-auto">
        <header>    
            <h1 class="text-3xl pt-5 pr-5 pb-5">Ch'ti Restaurant</h1>
        </header>

        <main>
            <!-- PREMIER BLOC -->
            <div>
                <h2 class="bg-gray-200 rounded-t p-2">Note moyenne</h2>

                <div class="flex justify-around border items-center pt-5 pb-5">

                    <!-- GAUCHE -->
                    <div class="text-center space-y-5">
                        <div class="text-amber-300 font-bold">3.3/5</div>

                        <div class="flex">
                            <img src="img/star-regular.svg" width="20" alt="star avis" />

                            <img src="img/star-regular.svg" width="20" alt="star avis" />

                            <img src="img/star-regular.svg" width="20" alt="star avis" />

                            <img src="img/star-regular.svg" width="20" alt="star avis" />

                            <img src="img/star-regular.svg" width="20" alt="star avis" />
                        </div>

                        <div>4 avis</div>
                    </div>

                    <!-- MILIEU -->
                    <div>
                        <div class="flex items-baseline space-x-2">
                            <div class="flex">
                                <span>5</span>

                                <span>
                                    <img src="img/star-solid.svg" width="20" alt="star" />
                                </span>
                            </div>

                            <div class="bg-amber-300 w-[150px] h-[10px] rounded"></div>

                            <div>
                                <span>(1)</span>
                            </div>
                        </div>

                        <div class="flex items-baseline space-x-2">
                            <div class="flex">
                                <span>4</span>

                                <span>
                                    <img src="img/star-solid.svg" width="20" alt="star" />
                                </span>
                            </div>

                            <div class="bg-amber-300 w-[150px] h-[10px] rounded"></div>

                            <div>
                                <span>(1)</span>
                            </div>
                        </div>

                        <div class="flex items-baseline space-x-2">
                            <div class="flex">
                                <span>3</span>

                                <span>
                                    <img src="img/star-solid.svg" width="20" alt="star" />
                                </span>
                            </div>

                            <div class="bg-amber-300 w-[150px] h-[10px] rounded"></div>

                            <div>
                                <span>(1)</span>
                            </div>
                        </div>

                        <div class="flex items-baseline space-x-2">
                            <div class="flex">
                                <span>2</span>

                                <span>
                                    <img src="img/star-solid.svg" width="20" alt="star" />
                                </span>
                            </div>

                            <div class="bg-amber-300 w-[150px] h-[10px] rounded"></div>

                            <div>
                                <span>(1)</span>
                            </div>
                        </div>

                        <div class="flex items-baseline space-x-2">
                            <div class="flex">
                                <span>1</span>

                                <span>
                                    <img src="img/star-solid.svg" width="20" alt="star" />
                                </span>
                            </div>

                            <div class="bg-amber-300 w-[150px] h-[10px] rounded"></div>

                            <div>
                                <span>(1)</span>
                            </div>
                        </div>
                    </div>

                    <!-- DROITE -->
                    <div class="text-center space-y-2">
                        <div>Laissez votre avis</div>

                        <div> 
                            <button class="bg-blue-500 text-white rounded p-2">Noter</button>

                        </div>
                    </div>
                </div>
            </div>

            <!-- DEUXIEME BLOC -->
            <div class="mt-5">
                <h2 class="bg-gray-200 rounded-t p-2">Publier un avis</h2>

                <div class="flex border justify-center pt-5 pb-5">
                    
                    <form action="" method="post" class="space-y-4 w-[500px]">
                        <div class="flex w-full items-center">
                            <label for="name" class="w-[145px]"></label>
                            <input type="text" name="name" id="name" placeholder="Votre nom" class="w-[500px]">
                        </div>

                        <div class="flex items-center space-x-3">
                            <label>Commentaire</label>
                            <textarea rows="1" cols="30" name="review" id="review" placeholder="Votre commentaire" class="w-[500px]"></textarea>
                        </div>

                        <div class="flex">
                            <legend class="w-[150px]">Note</legend>

                            <div class="w-full flex space-x-3">
                                <div>
                                    <input type="radio" id="note1" name="note" value="note1"
                                    checked>
                                    <label for="note1">1</label>
                                </div>

                                <div>
                                    <input type="radio" id="note2" name="note" value="note2">
                                    <label for="note2">2</label>
                                </div>

                                <div>
                                    <input type="radio" id="note3" name="note" value="note3">
                                    <label for="note3">3</label>
                                </div>

                                <div>
                                    <input type="radio" id="note4" name="note" value="note4">
                                    <label for="note4">4</label>
                                </div>

                                <div>
                                    <input type="radio" id="note5" name="note" value="note5">
                                    <label for="note5">5</label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="ml-[110px]">
                            <button class="bg-blue-500 text-white rounded p-2">Noter</button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- TROISIEME BLOC -->
            <div>
                <!-- AVIS -->
                <div class="mt-5 flex space-x-5">
                    <div>
                        <img src="img/circle-solid.svg" width="60px" alt="avatar" />
                    </div>

                    <div class="w-full border">
                        <div>
                            <h2 class="bg-gray-200 rounded-t p-2">Fiorella Mota</h2>
                        </div>

                        <div class="p-2">
                            <div class="flex">
                                <img src="img/star-regular.svg" width="20" alt="star avis" />
                                <img src="img/star-regular.svg" width="20" alt="star avis" />
                                <img src="img/star-regular.svg" width="20" alt="star avis" />
                                <img src="img/star-regular.svg" width="20" alt="star avis" />
                                <img src="img/star-regular.svg" width="20" alt="star avis" />
                            </div>

                            <div>Très bon restaurant</div>
                        </div>

                        <div>
                            <div class="bg-gray-200 rounded-b p-1 text-end">Mercredi 9 juillet 2022 à 11h43</div>
                        </div>
                    </div>
                </div>

                <!-- AVIS -->

                <?php
                    foreach ($avis as $index => $avis) { ?>
                    
                    <div class="mt-5 flex space-x-5">
                        <div>
                            <img src="img/circle-solid.svg" width="60px" alt="avatar" />
                        </div>

                        <div class="w-full border">
                            <div>
                                <h2 class="bg-gray-200 rounded-t p-2">
                                    <?php
                                        echo $avis["name"];
                                    ?>
                                </h2>
                            </div>

                            <div class="p-2">
                                <div class="flex">
                                    <img src="img/star-regular.svg" width="20" alt="star avis" />
                                    <img src="img/star-regular.svg" width="20" alt="star avis" />
                                    <img src="img/star-regular.svg" width="20" alt="star avis" />
                                    <img src="img/star-regular.svg" width="20" alt="star avis" />
                                    <img src="img/star-regular.svg" width="20" alt="star avis" />
                                </div>

                                <div>
                                    <?php
                                        echo $avis["review"];
                                    ?>
                                </div>
                            </div>

                            <div>
                                <div class="bg-gray-200 rounded-b p-1 text-end">
                                    <?php
                                        $dateTime = strtotime($avis["date"]);
                                        $dateTime = date("d m Y H\hi\m", $dateTime);
                                        echo $dateTime;
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </main>
    </div>
</body>
</html>