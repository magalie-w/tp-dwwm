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
            <div>
                <h2 class="bg-gray-200 rounded-t p-2">Note moyenne</h2>

                <div class="flex justify-around border items-center">
                    <div class="text-center">
                        <div class="text-amber-300">3.3/5</div>

                        <div class="flex">
                            <img src="img/star-regular.svg" width="20" alt="star avis" />

                            <img src="img/star-regular.svg" width="20" alt="star avis" />

                            <img src="img/star-regular.svg" width="20" alt="star avis" />

                            <img src="img/star-regular.svg" width="20" alt="star avis" />

                            <img src="img/star-regular.svg" width="20" alt="star avis" />
                        </div>

                        <div>4 avis</div>
                    </div>

                    <div>
                        <div class="flex items-baseline">
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

                        <div class="flex items-baseline">
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

                        <div class="flex items-baseline">
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

                        <div class="flex items-baseline">
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

                        <div class="flex items-baseline">
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

                    <div class="text-center">
                        <div>Laissez votre avis</div>

                        <div class="bg-blue-500 text-white rounded">Noter</div>
                    </div>
                </div>
            </div>

            <div class="mt-5">
                <h2 class="bg-gray-200 rounded-t p-2">Publier un avis</h2>

                <div class="flex justify-around border items-center">
                    
                    <form action="" method="post">
                        <div>
                            <label for="name">Nom</label>
                            <input type="text" name="name" id="name" placeholder="Votre nom">
                        </div>

                        <div>
                            <label>Commentaire</label>
                            <textarea rows="3" cols="30" name="review" id="review" placeholder="Votre commentaire"></textarea>
                        </div>

                        <div class="flex">
                            <legend>Note : </legend>

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
                    </form>
                </div>
            </div>
        </main>
    </div>
</body>
</html>