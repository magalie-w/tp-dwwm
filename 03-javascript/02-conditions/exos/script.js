function verifierAge (){

    var age = prompt("Quel est ton âge ?");

    if (age < 13){
        console.log("Interdit");
    } else if (age >= 13 && age <= 17){
        console.log("Bientôt dans " + (18 - age) + "an(s)");
    } else {
        console.log("Autorisé");
    }
}


function preparer(){

    var frigo = {
        tomate: 3,
        oeuf: 4,
        pain: 1,
        jambon: 2,
        poulet: 1,
        fromage: 1
    };

    if (frigo.pain >= 1 && frigo.jambon >= 1 && frigo.tomate >= 1 || frigo.fromage >= 1){
        console.log("Je peux faire un sandwish");
        //Terniaire : (frigo.tomate >= 1) ? frigo.tomate-- : frigo.fromage--;
    } else if (frigo.poulet >= 1){
        console.log("Je peux manger le poulet");
    } else if (frigo.oeuf >= 3){
        console.log("Je peux manger une omelette");
    } else{
        console.log("Je mange des chips");
    }

    console.log(frigo);
}