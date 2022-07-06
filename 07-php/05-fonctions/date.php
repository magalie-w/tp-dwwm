<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
</head>
<body>
    <div class="text-center">
    <?php

        // Si on veut changer le fuseau horaire
        date_default_timezone_set('Europe/Paris');

        // Formater la date à partir d'un timestamp
        echo 'On est le '.date('d m Y').'<br />'; // 05 07 2022
        echo 'Il est '.date('H \h i \m s'); // 17 h 21 m 17
    ?>
    </div>

    <div class="text-center">
        <p>Timestamp: <?= time(); ?></p>
        <p>Timestamp anniversaire: <?= strtotime('29 june 1998'); ?></p>
        <!-- 86400 est le nombre de secondes dans une journée -->
        <p>Nombre de jours entre 1998 et 2022: <?= (time() - strtotime('29 june 1998')) / 86400; ?></p>
        <p>Timestamp dans 1 mois: <?= strtotime('+ 1 month'); ?></p>
        <p>Dans 1 mois : <?= date('l d m Y', strtotime('+ 2 months')); ?></p>

        <p>Aujourd'hui nous sommes <?= date('l d M Y') . '. Il est ' . date('H \h i \m s \s'); ?>
        <p>Dans 10 jours il sera : <?= date(('l d M Y'), strtotime('+ 10 days')); ?></p>
        <p>Avant Noël, il reste : <?= ceil((strtotime('25 december ' .date('Y')) - time()) / (60 * 60 * 24)) . ' jours';?></p>
    </div>

    <div class="text-center">
        <h1>Correction</h1>
        <p>Timestamp dans 1 mois: <?= strtotime('+ 1 month'); ?></p>
        <p>Dans 1 mois : <?= date('l d m Y', strtotime('+ 2 months')); ?></p>
    </div>

    <div class="text-center">
        <p>Exo 1 : <?= date('l d F Y, \i\l \e\s\t h\hi \e\t s \s\e\c\o\n\d\e\s'); ?></p>
        <p>Exo 2 : <?= date('l', strtotime('+ 10 days')); ?></p>
        <?php
            $now = time();
            $christmas = strtotime('25 december '.date('Y'));
            $days = ($christmas - $now) / (60 * 60 * 24);
        ?>
        <p>Exo 3 : Noël est dans <?= ceil($days); ?> jours</p>
        <p>
            <?php
                $formatter = IntlDateFormatter::create('fr_FR', IntlDateFormatter::FULL, IntlDateFormatter::FULL);
                $formatter->setPattern('cccc dd MMMM Y');

                echo $formatter->format(time());
            ?>
        </p>
    </div>
</body>
</html>
