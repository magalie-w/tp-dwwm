function choose() {
    do {
        var choice = prompt('Que voulez-vous boire ? Café (caf), thé (the) ou chocolat (cho) ?').toLowerCase();
    } while (choice != 'caf' && choice != 'the' && choice != 'cho');

    var sugar = prompt('Quelle dose de sucre souhaitez-vous ? 0, 1 ou 2');
    // Permet de s'assurer que le sucre est entre 0 et 2
    if (sugar != 0 && sugar != 1 && sugar != 2) {
        sugar = 0;
    }

    var milk = prompt('Souhaitez-vous du lait ? 0 ou 1');
    if (milk != 1) {
        milk = 0;
    }

    var price = 40;
    if (choice == 'cho') {
        price = 60;
    }
    price = price + sugar * 5 + milk * 15;

    var result = 'Votre ';

    switch (choice) {
        case 'caf':
            result += 'café'; // Votre café
        break;
        case 'the':
            result += 'thé'; // Votre thé
        break;
        case 'cho':
            result += 'chocolat'; // Votre chocolat
        break;
    }

    if (sugar == 0) {
        result += ' sans sucre'; // Votre café sans sucre
    } else if (sugar == 1) {
        result += ' sucré'; // Votre café sucré
    } else if (sugar == 2) {
        result += ' très sucré'; // Votre café très sucré
    }

    result += (milk == 1) ? ' avec lait' : ' sans lait'; // Votre café très sucré avec lait OU BIEN Votre café très sucré sans lait
    result += ' est prêt.'; // Votre café très sucré avec lait est prêt.

    alert('Vous devez payer ' + price + ' centimes. ' + result);
}
