var a = 10 + 4;
var b = 20 + a;
var c = 10 * 2;

//On a à c = 34
c += a;

//vaut 35
b++;

//vaut 34
console.log(b++);
//vaut 36 car il est incrémenté
console.log(++b);

//Division
var d = 10 / 2; //affiche 5

//Modulo (Reste division)
var e = 10 % 3; //affiche 1
console.log(e);

//puissance
console.log(10 ** 2);


//Les boucles (for et while)
//Le fort a 3 instructions
// - Initialisation (i = 0)
// - Conditions jusqu'à (i < 10)
// - Incrémentaion (i++ ou i = i + 1)
for(var i = 0; i < 10; i++){
    console.log(i);
}

//Le for permet de parcourir un tableau
//On créer une variable product
var products = ["Café", "Thé"];
for (var product of products){
    console.log(product);
}

//Le while
//On dit que weather est true quand il fait beau
var weather = true;
while (weather == true){
    console.log("Je sors dehors");
    weather = confirm("Fait- il beau ?");
}

//Le do while
var night = false;
do{
    console.log("On voit rien");
    night = confirm("Fait-il nuit");
} while (night);


//Comparaison avec ===
"45" == 45; //true
"45" === 45; //false
//On peut convertir une chaîne en nombre
//Le ou 0 permet de s'assurer qu'il tape un nombre
var nombre = parseInt(prompt("Nombre ?")) || 0;