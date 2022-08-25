<?php require __DIR__.'/../partials/header.html.php'; ?>

<a class="ml-[510px]" href="<?= BASE_URL; ?>/book">	&#8592; Retour</a>

<div class="text-center mx-auto w-[300px] space-y-3">
    <?php if ($success) { ?>
        <p class="text-green-500">Le livre a été modifié</p>
    <?php } ?>

    <?php if (!empty($errors)) { ?>
        <div class="text-center bg-red-300 p-5 rounded border border-red-800 text-red-800 my-4">
            <?php foreach ($errors as $error) { ?>
                <p><?= $error; ?></p>
            <?php } ?>
        </div>
    <?php } ?>

    <h1 class="text-2xl">Modifier un livre</h1>

    <form action="" method="post" class="space-y-4">
        <div>
            <input class="rounded w-[300px]" type="text" name="name" id="name" value="<?= $book->name; ?>">
        </div>

        <div>
            <input class="rounded w-[300px]" type="text" name="priceHT" id="priceHT" value="<?= $book->priceHT; ?>">
        </div>

        <div>
            <input class="rounded w-[300px]" type="text" name="autor" id="autor" value="<?= $book->autor; ?>">
        </div>

        <div>
            <input class="rounded w-[300px]" type="date" name="date" id="date" value="<?= $book->date; ?>">
        </div>

        <div>
            <input class="rounded w-[300px]" type="text" name="isbn" id="isbn" value="<?= $book->isbn; ?>">
        </div>

        <div>
            <button class="bg-red-500 p-4 border rounded">Modifier</button>
        </div>
    </form>
</div>
<?php require __DIR__.'/../partials/footer.html.php'; ?>