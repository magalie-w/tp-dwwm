<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exos-01</title>
</head>

<body>
    <?php
        require "db.php";

        $name = $_POST["name"] ?? null;
        $message = $_POST["message"] ?? null;
        $success = false;

        $query = $db->query("SELECT * FROM contacts")->fetchAll();

        //On vérifie le formulaire si il est envoyer
        if (!empty($_POST)) {

            if (strlen($message) < 15) {
                echo "Le message doit contenir 15 caractères minimun";
            }

            $query = $db->prepare("INSERT INTO contacts (name, message) VALUES (:name, :message)");
            $success = $query->execute([
                ":name" => $name,
                ":message" => $message,
            ]);
        } else if (empty($name)) {
                echo "Le nom est vide";
            }
        
        
    ?>

    <h1>Formulaire</h1>

    <form action="" method="post">
        <div>
            <label for="name">Name </label>
            <input type="text" name="name" id="name">
        </div>

        <div>
            <label for="message">Message </label>
            <textarea name="message" id="message"></textarea>
        </div>

        <button>Valider</button>
    </form>
    
</body>
</html>