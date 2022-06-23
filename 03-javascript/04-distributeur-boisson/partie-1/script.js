//Distributeur de boissons
//On veut simuler un distributeur de boisson qui propose du thé, du café ou du chocolat. Chaque boisson peut être non sucrée, sucrée ou très sucrée avec une option de lait.
//- Le café et le thé coûtent 40 centimes, le chocolat 60 centimes
//- Une portion de sucre coûte 5 centimes (sucrée = 1 portion, très sucrée = 2 portions)
//- Le lait coûte 15 centimes
//L'utilisateur doit entrer caf, cho ou the (insensible à la casse) pour choisir sa boisson. Tant qu'il ne choisit pas une boisson valable, on lui repose la question. Il doit ensuite choisir la dose de sucre (0, 1 ou 2) et le lait (0 ou 1).
//On affichera ensuite les phrases suivantes :
//- Vous devez payer 50 centimes.
//- Votre café très sucré sans lait est prêt.


//Choix de boisson
var boisson = prompt("Qu'elle boisson souhaitez-vous").toLocaleLowerCase(); //.toLocaleLowerCase() Pour écrire avec des MAJ et min
var prixSucre = 0;
while (boisson != "caf" && boisson != "cho" && boisson != "the"){
    var boisson = prompt("Qu'elle boisson souhaitez-vous").toLocaleLowerCase();
       
} 

if (boisson == "caf"){
    alert("Vous avez choisi du café");
    var nomBoisson = "café";    
} else if (boisson == "the"){
    alert("Vous avez choisi du thé");
    var nomBoisson = "thé";
} else if (boisson == "cho"){
    alert("Vous avez choisi du chocolat chaud");
    var nomBoisson = "chocolat chaud";
}

//Choix de sucre
var sucre = prompt("Combien de sucre voulez-vous ? (0, 1 ou 2)");
if (sucre !=  0 && sucre != 1 && sugar !=2){
    sugar = 0;
}else if (sucre == 0){
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
