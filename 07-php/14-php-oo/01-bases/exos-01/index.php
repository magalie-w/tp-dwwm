<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exos-01 : Car</title>
</head>

<body>
    <?php
    require "Car.php";

    $car1 = new Car("car1");
    $car1->roue = "4";

    $car2 = new Car("car2");
    $car2->roue = "4";

    ?>

<p></p>

</body>
</html>