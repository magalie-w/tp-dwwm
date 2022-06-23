let isEmailOk= false;
let isPwdOk = false;
let resultat ;


// Vérifier l'eamil
function verifEmail(tag){
    let pattern = /^((?!\.)[\w\-_.]*[^.])(@\w+)(\.\w+(\.\w+)?[^.\W])$/i;

    let regex = new RegExp(pattern);

    if (tag.value.match(regex)){
        tag.style.border = "2px solid green";
        isEmailOk = true;
    } else{
        tag.style.border = "2px solid red";
        isEmailOk = false;
    }
}


// Vérifier le mot de passe
function verifPwd(tag) {
    let pattern = /^(?=.\d)(?=.[A-Z])(?=.[a-z])(?=.[^\w\d\s:])([^\s]){8,16}$/;
    let regex = new RegExp(pattern);
    let isPwdOk = false;

    if (tag.value.match(regex)) {
        tag.style.border = "3px solid green";
        console.log("Ca match");
        isPwdOk = true;

    } else {
        tag.style.border = "3px solid red";
        console.log("ca ne match pas");
        isPwdOk = false;

    }
}

// Captcha
function verifCalcul(tag){
    let btn = document.getElementById('btn-submit');
    if (resultat === parseInt(tag.value) && isEmailOk && isPwdOk){
        btn.disable = false;
    } else{
        btn.disable = true;
    }
}

function calcul(){
    let cap = document.getElementById('captcha_calcul');
    let a = getRandomArbitrary(-100, 101);
    let b = getRandomArbitrary(-100, 101);
    let str = `${a} + ${b}`;
    cap.innerHTML = str;
    resultat = eval(str);
}

function getRandomArbitrary(min, max){
    return Math.floor(Math.random() * (max - min) + min);
}

calcul();
