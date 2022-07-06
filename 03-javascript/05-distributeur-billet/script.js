//Distributeur de billets
//On veut simuler un distributeur de billets qui propose des billets de 500, 200, 100, 50, 20, 10 et 5 euros. Il peut également donner des pièces de 2 ou 1 euro(s).
//L'utilisateur doit saisir un montant puis le distributeur doit lui donner le bon compte de billets. On s'assurera que le montant soit bien un entier. Par exemple, si l'utilisateur veut retirer 1389 euros, on affichera :
//- 2 billets de 500 euros - 1 billet de 200 euros
//- 1 billet de 100 euros - 1 billet de 50 euros - 1 billet de 20 euros
//- 1 billet de 10 euros - 1 billet de 5 euros - 2 pièces de 2 euros
//N'oubliez pas le fameux modulo...


function distributeur(){
    var billet500 = 0;
    var billet200 = 0;
    var billet100 = 0;
    var billet50 = 0;
    var billet20 = 0;
    var billet10 = 0;
    var billet5 = 0;
    var piece2 = 0;
    var piece1 = 0;

    var demande = prompt("Qu'elle somme voulait vous ?");

    if (Number.isInteger(demande)){

        //Savoir le nombre de billets de 500 qu'on lui donne
        while (demande >= 500){
            demande = demande - 500;
            billet500++;
        }

        while (demande >= 200){
            demande = demande - 200;
            billet200++;
        }

        while (demande >= 100){
            demande = demande - 100;
            billet100++;
        }

        while (demande >= 50){
            demande = demande - 50;
            billet50++;
        }

        while (demande >= 20){
            demande = demande - 20;
            billet20++;
        }

        while (demande >= 10){
            demande = demande - 10;
            billet10++;
        }

        while (demande >= 5){
            demande = demande - 5;
            billet5++;
        }

        while (demande >= 2){
            demande = demande - 2;
            piece2++;
        }

        while (demande >= 1){
            demande = demande - 1;
            piece1++;
        }

        alert(demande + " " + billet500 + " billet de 500 \n" + demande + " " + billet200 + " billet de 200 \n" + demande + " " + billet100 + " billet de 100 \n" + demande + " " + billet50 + " billet de 50 \n" + demande + " " + billet20 + " billet de 20 \n" + demande + " " + billet10 + " billet de 10 \n" + demande + " " + billet5 + " billet de 5 \n" + demande + " " + piece2 + " pièces de 2 \n" + demande + " " + piece1 + " pièces de 1 \n");
    
    } else {
        alert("Veuillez saisir un nombre");
    }        

}




