<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exos-01</title>
</head>

<body>

    <form method="post" action="">
        <input type="radio" name="choix" id="plus" value="plus">
        <label for="plus">+</label>

        <input type="radio" name="choix" id="moins" value="moins">
        <label for="moins">-</label>

        <input type="radio" name="choix" id="division" value="division">
        <label for="division">/</label>

        <input type="radio" name="choix" id="multi" value="multi">
        <label for="multi">*</label> <br>
 
        <input type="number" name="number1" id="number1" value="<?= $number1; ?>">

        <input type="number" name="number2" id="number2" value="<?= $number2; ?>">

        <button>Calculer</button>
    </form>

    <?php
        if (!empty($_POST['number1']) || (!empty($_POST['number2']))) {

            if ($_POST["choix"] == "plus") {
                $sommePlus = $_POST['number1'] + $_POST['number2']; 
                echo $_POST['number1'] . ' + ' . $_POST['number2'] . " = " . $sommePlus;
            }

            if ($_POST["choix"] == "moins") {
                $sommeMoins = $_POST['number1'] - $_POST['number2'];
                echo $_POST['number1'] . ' - ' . $_POST['number2'] . " = " . $sommeMoins;
            }

            if ($_POST["choix"] == "division") {
                $sommeDivision = $_POST['number1'] / $_POST['number2'];
                echo $_POST['number1'] . ' / ' . $_POST['number2'] . " = " . $sommeDivision;
            }

            if ($_POST["choix"] == "multi") {
                $sommeMulti = $_POST['number1'] * $_POST['number2'];
                echo $_POST['number1'] . ' * ' . $_POST['number2'] . " = " . $sommeMulti;
            } 
        }
    ?>
</body>
</html>