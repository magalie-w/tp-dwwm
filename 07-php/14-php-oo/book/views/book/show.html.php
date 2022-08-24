<?php require __DIR__.'/../partials/header.html.php'; ?>

    <div class="max-w-5xl mx-auto flex space-x-4">
        
        <a class="px-4" href="<?= BASE_URL; ?>/book">Retour</a>
        
        <div>
            <img src="../img/<?= $book->img; ?>" alt=""/>
        </div>

        <div>
            <h1><?= $book->name; ?></h1>
            <p class="font-bold"><?= $book->priceHT; ?> €</p>

            <p class="text-stone-500">Par <?= $book->autor; ?></p>

            <p> <?= $book->date ?></p>
            
            <p>ISBN : <?= $book->isbn; ?></p>
        </div>

    </div>

<?php require __DIR__.'/../partials/footer.html.php'; ?>
