//Distributeur de boissons - 2
//- Ajouter un bouton qui permet de lancer l'action de distribuer une boisson
//- Créer un objet distributeur qui contiendra la monnaie du distributeur, les doses de café / thé / chocolat ainsi que les doses de sucre
//- Chaque distribution réduira le nombre de doses (café, thé, chocolat et sucre) mais augmentera la tirelire
//- Ajouter une action permettant de voir le montant dans la tirelire
//- Ajouter une action permettant de remplir la machine, on demandera au technicien ce qu'il souhaite ajouter (café, thé, chocolat ou sucre) ainsi que la quantité
//- Panne aléatoire: La machine tombe en panne aléatoirement (entre 15 et 20 distributions). Si c'est le cas, on ne peut plus se servir mais on ajoutera une action permettant de réparer la machine (Il faudra un booléen ? Et une valeur aléatoire ?)

//Objet pour initialiser les données
var distributeur = {
    monnaie : 100,
    dosesCaf : 10,
    dosesThe : 10,
    dosesChoco : 10,
    dosesSucre: 10
};

//Panne aléatoire
var min = 15;
var max = 20;
var panne = Math.floor(Math.random() * (max - min + 1)) + min;
var compter = 1;
var fonctionne = true;
console.log(panne);
function acheter(){
    

    //Si la machine fonctionne on peut acheter
    if (fonctionne == true){

        //Choix de boisson
        var boisson = prompt("Qu'elle boisson souhaitez-vous");
        var prixSucre = 0;

        while (boisson != "caf" && boisson != "cho" && boisson != "the"){
            var boisson = prompt("Qu'elle boisson souhaitez-vous"); 
        } 

        if (boisson == "caf"){
            alert("Vous avez choisi du café");
            var nomBoisson = "café";    
            distributeur["dosesCaf"]--;

        } else if (boisson == "the"){
            alert("Vous avez choisi du thé");
            var nomBoisson = "thé";
            distributeur["dosesThe"]--;

        } else if (boisson == "cho"){
            alert("Vous avez choisi du chocolat chaud");
            var nomBoisson = "chocolat chaud";
            distributeur["dosesChoco"]--;
        }

        //Choix de sucre
        var sucre = prompt("Combien de sucre voulez-vous ? (0, 1 ou 2)");
        if (sucre == 0){
            alert("Vous avez choisi sans sucre");
            var doseSucre = "sans sucre";
        } else if (sucre == 1) {
            alert("Vous avez choisi un peu de sucre");
            var doseSucre = "un peu de sucre";
        } else if (sucre == 2) {
            alert("Vous avez choisi très sucré");
            var doseSucre= "très sucré";
        }

        //Choix de lait
        var lait = prompt("Combien de lait voulez-vous ? (0 ou 1)");
        if (lait == 0) {
            alert("Vous avez choisi sans lait");
            var doseLait = "sans lait";
        } else if (lait == 1) {
            alert("Vous avez choisi avec du lait");
            var doseLait = "avec lait";
        }

        //Prix café, thé, chocolat
        if (boisson == "caf" || boisson == "the"){
            prixBoisson = 40;
        } else  if (boisson == "cho") {
            prixBoisson = 60;
        }

        //Prix sucre et lait
        prixSucre = sucre * 5;
        prixLait = lait * 15;

        //Prix de la boisson
        var prix = prixBoisson + prixSucre + prixLait;

        //Résumer de la commande
        alert ("Vous avez choisi la boisson " + nomBoisson + " avec " + doseSucre + " et " + doseLait + "\n" + "Vous devez payer " + prix + "cts");

        distributeur["monnaie"] += prix;

        distributeur["dosesSucre"] -= sucre;

        compter++;
        
        if (compter == panne){
            fonctionne = false;
            //Le nombre panne change à chaque fois qu'il est tombé en panne et réparé
            panne = Math.floor(Math.random() * (max - min +1)) + min;
        }

    } else{ //Sinon on ne peut pas acheter
        alert ("La machine est en panne !");
    }
} 

//Fonction pour réparer la machine
function reparer(){
    fonctionne = true;
    alert("La machine est réparer");
}

//Afficher la somme de la tirelire
function tirelire(){
    alert(distributeur.monnaie);
}


//Remplir le distributeur
function remplir(){
    var boisson = prompt("Qu'elle boisson voulez-vous ajouter ?");

    if (boisson == "caf"){
        var nbCaf = prompt("Combien de doses souhaites-vous ajouter ?");
        distributeur["dosesCaf"]+= nbCaf;
        alert("Vous avez ajouté " + nbCaf + " café(s)");

    } else if (boisson == "the"){
        var nbThe = prompt("Combien de doses souhaites-vous ajouter ?");
        distributeur["dosesThe"]+= nbThe;
        alert("Vous avez ajouté " + nbThe + " thé(s)");

    } else if (boisson == "choco"){
        var nbChoco = prompt("Combien de doses souhaites-vous ajouter ?");
        distributeur["dosesChoco"]+= nbChoco;
        alert("Vous avez ajouté " + nbChoco + " chocolat(s)");

    } else {
        alert("Veuillez entrer une boisson valide");
    }
}

function quantite(){
    alert(distributeur.monnaie + " " + distributeur.dosesCaf + " " + distributeur.dosesThe + " " + distributeur.dosesChoco + " " + distributeur.dosesSucre);
}
