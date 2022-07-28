<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RPG character</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

    <div class="container mx-auto w-[500px]">
        <h1 class="text-xl text-center">POO RPG</h1>

        <form action="" method="">

            <div class="border">  
                <input class="p-2" type="text" id="name" name="name" placeholder="Votre nom..">
            </div>

            <div>
                <input type="checkbox" id="random" name="random">
                <label for="random">Générer un personnage aléatoire</label>
            </div>

            <div>
                <label for="tribe">Votre tribu ?</label>
                <select name="tribe" id="tribe">
                    <option value="human">Humain</option>
                    <option value="dwarf">Nain</option>
                    <option value="elf">Elfe</option>
                </select>
            </div>
        </form>
    </div>
</body>
</html>