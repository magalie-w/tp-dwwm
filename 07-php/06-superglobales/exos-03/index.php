<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exos-04</title>
</head>

<body>
    <?php
        $email = $_POST["email"] ?? null;
        $sujet = $_POST["sujet"] ?? null;
        $message = $_POST["message"] ?? null;
        $civilite = $_POST["civilite"] ?? null;

        var_dump($_POST);

        if (!empty($_POST)) {
            if (empty($email)) {
                echo "L'email est obligatoire";
            }

            if (!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "l'email est invalide";
            }

            if ((!$sujet) || !in_array($sujet, ["stage", "emploi", "projet"])) {
                echo "Le sujet est obligatoire";
            }

            if (!empty($message) && (strlen($message) <= 15)) {
                echo "Le message doit faire plus de 15 caractères";
            }
        }
    ?>

    <form method="post" action="">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="<?= $email; ?>">

        <label for="sujet">Sujet</label>
        <select name="sujet" id="sujet" value="<?= $sujet; ?>">
        <option value="">Choisir</option>
            <option <?= $sujet == 'stage' ? 'selected' : ''; ?> value="stage">Proposition de stage</option>

            <option <?= $sujet == 'emploi' ? 'selected' : ''; ?> value="emploi">Proposition d'emploi</option>

            <option <?= $sujet == 'projet' ? 'selected' : ''; ?> value="projet">Demande de projet</option>
        </select>

        <br>

        <label for="message">Message</label>
        <textarea id="message" name="message" value=<?= $message ?> rows="5" cols="33"></textarea>

        <br>

        <label for="civilite">Civilité</label>
        <input <?= $civilite == "madame" ? "selected" : ""; ?> type="radio" id="civilite" name="civilite" value="<?= $civilite; ?>" checked>
        Madame

        <input <?= $civilite == "monsieur" ? "selected" : ""; ?> type="radio" id="civilite" name="civilite" value="<?= $civilite; ?>">
        Monsieur

        <button>Envoyer</button>
    </form>    
</body>
</html>