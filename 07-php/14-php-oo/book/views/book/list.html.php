<?php require __DIR__.'/../partials/header.html.php'; ?>

    <div>
        <h2 class="text-center text-2xl">Liste des livres</h2>
    
        <div class="w-[990px] mx-auto flex justify-center flex-wrap space-x-4">
            
            <?php foreach ($books as $book) : ?>
                <div class="space-y-4">
                    <a href="<?= BASE_URL; ?>/book/<?= $book->id; ?>">
                        <img class="w-[300px]" src="img/<?= $book->img; ?>" alt=""/>

                        <div class="text-center">
                            <?= $book->name; ?>

                            <p class="font-bold"><?= $book->priceHT; ?> €</p>

                            <p> 
                            <span class="text-stone-500">Par <?= $book->autor; ?></span>
                            <span> <?= $book->date ?></span>
                        </p>
                            
                            <p>ISBN : <?= $book->isbn; ?></p>
                        </div>
                    </a>

                    <div class="flex justify-center space-x-4">
                        <div>
                            <a href="<?= BASE_URL; ?>/book/<?= $book->id; ?>/edit">
                                <button class="bg-zinc-300 p-3 border rounded">
                                    Modifier
                                </button>
                            </a>
                        </div>

                        <div>
                            <a href="<?= BASE_URL; ?>/book/<?= $book->id; ?>/delete">
                                <button class="bg-zinc-300 p-3 border rounded">Supprimer</button>
                            </a>
                        </div>
                    </div>
                </div>

            <?php endforeach; ?>
        </div>
    </div>

<?php require __DIR__.'/../partials/footer.html.php'; ?>
