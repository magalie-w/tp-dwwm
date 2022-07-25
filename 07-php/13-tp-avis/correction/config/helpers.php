<?php

require 'config/db.php';

/**
 * Permet de faire un select en SQL.
 */
function select($sql) {
    global $db;

    return $db->query($sql)->fetchAll();
}

/**
 * Permet de faire un insert en SQL.
 */
function insert($sql, $bindings = []) {
    global $db;

    $query = $db->prepare($sql);

    return $query->execute($bindings);
}

/**
 * Permet de récupèrer une donnée dans un formulaire.
 */
function post($key) {
    return $_POST[$key] ?? null;
}

/**
 * Permet de vérifier qu'un formulaire est soumis.
 */
function submit() {
    return !empty($_POST);
}

/**
 * Formate une date US en FR
 */
function format_date($string) {
    $date = date('l j F Y à H\hi', strtotime($string));

    $date = str_replace(
        ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'],
        ['lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche'],
        $date
    );

    $date = str_replace(
        ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
        ['janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre'],
        $date
    );

    return $date;
}

/**
 * Moyenne des avis
 */
function reviews_avg($reviews) {
    if (count($reviews) == 0) {
        return 0;
    }

    return array_sum(array_column($reviews, 'note')) / count($reviews);
}

/**
 * Nombre d'avis pour une note donnée
 */
function reviews_count_note($reviews, $note) {
    $count = 0;

    foreach ($reviews as $review) {
        if ($review['note'] == $note) {
            $count++;
        }
    }

    return $count;
}

/**
 * Pourcentage d'avis pour une note donnée
 */
function reviews_percentage_note($reviews, $note) {
    if (count($reviews) == 0) {
        return 0;
    }

    return reviews_count_note($reviews, $note) * 100 / count($reviews);
}
