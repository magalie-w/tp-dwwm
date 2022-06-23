//01 Grâce à la boucle for, écrire les nombres de 1 à 10
for (var i = 1; i < 10; i++){
    console.log(i);
}

//02 Grâce à la boucle for, afficher les nombres de 10 à 2
for (var i = 10; i > 2 ; i--){
    console.log(i);
}

//03 Grâce à la boucle for, afficher les nombres de 1 à 100 mais uniquement les nombres pairs
for (var i = 0; i < 100; i+=2){
    console.log(i);
}
    //03 CORRECTION
        // for (var i = 1; i <= 100; i++){
        //     if (i % 2 == 0){
        //         console.log(i);
        //     }
        // }

//04 Grâce à while, demandez à l'utilisateur s'il veut continuer sur le site, il doit répondre "oui", "non", "o" ou "n". Tant qu'il ne répond pas une de ces valeurs, lui reposer la question
function question (){
    var reponse = prompt('Voulez-vous continuer sur le site ?'); 
    
    while (reponse != 'oui' && reponse != 'o' && reponse != 'non' && reponse !='n'){
        var reponse = prompt('Voulez-vous continuer sur le site ?');       
    }
}

    //CORRECTION avec if 04

    var reponse = prompt('Voulez-vous continuer sur le site ?'); 
    
    while (reponse != 'oui' && reponse != 'o' && reponse != 'non' && reponse !='n'){
        var reponse = prompt('Voulez-vous continuer sur le site ?');       
    }


