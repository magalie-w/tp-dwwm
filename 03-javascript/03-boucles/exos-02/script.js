//On veut créer un jeu du "C'est plus, c'est moins".
//Le principe est simple .
//L'utilisateur arrive sur la page web, on lui demande de saisir un nombre entre 1 et 100. Il doit trouver le bon nombre, tant qu'il ne l'a pas trouvé, on lui indique si le nombre à trouver est plus grand ou plus petit que celui qu'il a saisi.
//S'il trouve le bon nombre, la partie s'arrête
//S'il retourne sur la page, le nombre doit changer

var min = 1;
var max = 100;
var nombre = Math.floor(Math.random() *(max - min + 1)) + 1//(1 = + min); //0.991234 * 100 = 99 + 1 => 100
var compte = 1;

while (reponse != nombre){
    var reponse = prompt("Donnez un chiffre entre 1 et 100");
    compte++;
    
    if (reponse > nombre){
        alert("C'est plus petit que " + reponse);
    } else if (reponse < nombre){
        alert("C'est plus grand " + reponse);
    }

}

alert("C'est good, le chiffre est " + reponse + " en " + compte + " fois");

