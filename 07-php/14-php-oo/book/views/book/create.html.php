<?php require __DIR__.'/../partials/header.html.php'; ?>

    <form action="" method="post">
        <div>
            <label for="name">Titre</label>
            <input type="text" name="name" id="name">
        </div>

        <div>
            <label for="priceHT">Prix HT</label>
            <input type="text" name="priceHT" id="priceHT">
        </div>

        <div>
            <label for="autor">Auteur</label>
            <input type="text" name="autor" id="autor">
        </div>

        <div>
            <label for="date">Date</label>
            <input type="date" name="date" id="date">
        </div>

        <div>
            <label for="isbn">ISBN</label>
            <input type="text" name="isbn" id="isbn">
        </div>
    </form>

<?php require __DIR__.'/../partials/footer.html.php'; ?>