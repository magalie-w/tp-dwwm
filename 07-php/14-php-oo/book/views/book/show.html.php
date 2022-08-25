<?php require __DIR__.'/../partials/header.html.php'; ?>

    <div class="max-w-5xl mx-auto flex space-x-4">
        
    <a class="ml-[510px]" href="<?= BASE_URL; ?>/book">	&#8592; Retour</a>
        
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
