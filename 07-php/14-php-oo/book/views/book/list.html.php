<?php require __DIR__.'/../partials/header.html.php'; ?>

    <div class="w-[990px] mx-auto flex justify-center flex-wrap space-x-4">
        <?php foreach ($books as $book) : ?>
            <h2>
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
            </h2>
        <?php endforeach; ?>
    </div>

<?php require __DIR__.'/../partials/footer.html.php'; ?>
