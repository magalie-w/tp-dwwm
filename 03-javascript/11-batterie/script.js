// on récupère les id html
var clap = document.getElementById("clap");
var hithat = document.getElementById("hithat");
var kick = document.getElementById("kick");
var openhat = document.getElementById("openhat");
var boom = document.getElementById("boom");
var ride = document.getElementById("ride");
var snare = document.getElementById("snare");
var tom = document.getElementById("tom");
var tink = document.getElementById("tink");


// AVEC LES TOUCHES
window.addEventListener("keydown", function (event) {

    if (event.key == "q") {
        //Active l'audio lorsque que l'on appuie sur la touche q
    setTimeout(function () {
        clap.play();
    }, 250);

        //Créer la class playing pour ajouter un effet css
        // document.getElementById("q");
        q.classList.add("playing");

        //On supprime la class playing lorsque la touche est relachée
        this.window.addEventListener("keyup", function (event) {
            this.document.getElementById("q");
            q.classList.remove("playing");
        });
        
    } else if (event.key == "s") {
        //Active l'audio lorsque que l'on appuie sur la touche s
    setTimeout(function () {
        hithat.play();
    }, 250);

        //Créer la class playing pour ajouter un effet css
        document.getElementById("s");
        s.classList.add("playing");
        
        //On supprime la class playing lorsque la touche est relachée
        this.window.addEventListener("keyup", function (event) {
            this.document.getElementById("s");
            s.classList.remove("playing");
        });

    } else if (event.key == "d") {
        //Active l'audio lorsque que l'on appuie sur la touche d
    setTimeout(function () {
        kick.play();
    }, 250);
        
        //Créer la class playing pour ajouter un effet css
        document.getElementById("d");
        d.classList.add("playing"); 

        //On supprime la class playing lorsque la touche est relachée
        this.window.addEventListener("keyup", function (event) {
            this.document.getElementById("d");
            d.classList.remove("playing");
        });
    
    } else if (event.key == "f") {
        //Active l'audio lorsque que l'on appuie sur la touche f
    setTimeout(function () {
        openhat.play();
    }, 250);

        //Créer la class playing pour ajouter un effet css
        document.getElementById("f");
        f.classList.add("playing");

        //On supprime la class playing lorsque la touche est relachée
        this.window.addEventListener("keyup", function (event) {
            this.document.getElementById("f");
            f.classList.remove("playing");
        });
    
    } else if (event.key == "g") {
        //Active l'audio lorsque que l'on appuie sur la touche g
    setTimeout(function () {
        boom.play();
    }, 250);

        //Créer la class playing pour ajouter un effet css
        document.getElementById("g");
        g.classList.add("playing");

        //On supprime la class playing lorsque la touche est relachée
        this.window.addEventListener("keyup", function (event) {
            this.document.getElementById("g");
            g.classList.remove("playing");
        });
    
    } else if (event.key == "h") {

        //Active l'audio lorsque que l'on appuie sur la touche h
    setTimeout(function () {
        ride.play();
    }, 250);

        //Créer la class playing pour ajouter un effet css
        document.getElementById("h");
        h.classList.add("playing");

        //On supprime la class playing lorsque la touche est relachée
        this.window.addEventListener("keyup", function (event) {
            this.document.getElementById("h");
            h.classList.remove("playing");
        });

    } else if (event.key == "j") {
            
        //Active l'audio lorsque que l'on appuie sur la touche j
    setTimeout(function () {
        snare.play();
    }, 250);

        //Créer la class playing pour ajouter un effet css
        document.getElementById("j");
        j.classList.add("playing");

        //On supprime la class playing lorsque la touche est relachée
        this.window.addEventListener("keyup", function (event) {
            this.document.getElementById("j");
            j.classList.remove("playing");
        });
    
    } else if (event.key == "k") {
        //Active l'audio lorsque que l'on appuie sur la touche k
    setTimeout(function () {
        tom.play();
    }, 250);

        //Créer la class playing pour ajouter un effet css
        document.getElementById("k");
        k.classList.add("playing");

        //On supprime la class playing lorsque la touche est relachée
        this.window.addEventListener("keyup", function (event) {
            this.document.getElementById("k");
            k.classList.remove("playing");
        });
    
    } else if (event.key == "l") {
        //Active l'audio lorsque que l'on appuie sur la touche l
    setTimeout(function () {
        tink.play();
    }, 250);

        //Créer la class playing pour ajouter un effet css
        document.getElementById("l");
        l.classList.add("playing");

        //On supprime la class playing lorsque la touche est relachée
        this.window.addEventListener("keyup", function (event) {
            this.document.getElementById("l");
            l.classList.remove("playing");
        });
    }    
});


// AU CLIC

// clap
document.getElementById("q").addEventListener("mousedown", function(event) {
    setTimeout(function () {
        clap.play();  
    }, 250);
    // ajout de la class au click
    q.classList.add("playing");
})

document.getElementById("q").addEventListener("mouseup", function(event) {
    // delete de la class au levé du click
    q.classList.remove("playing");
})

// hithat
document.getElementById("s").addEventListener("mousedown", function(event) {
    setTimeout(function () {
        hithat.play();
    }, 250);
    // ajout de la class au click
    s.classList.add("playing");
})

document.getElementById("s").addEventListener("mouseup", function(event) {
    // delete de la class au levé du click
    s.classList.remove("playing");
})


//  kick
document.getElementById("d").addEventListener("mousedown", function(event) {
    setTimeout(function () {
        kick.play();
    }, 250);
    // ajout de la class au click
    d.classList.add("playing");
})

document.getElementById("d").addEventListener("mouseup", function(event) {
    // delete de la class au levé du click
    d.classList.remove("playing");
})

// openhat
document.getElementById("f").addEventListener("mousedown", function(event) {
    setTimeout(function () {
        openhat.play();
    }, 250);
    // ajout de la class au click
    f.classList.add("playing");
})

document.getElementById("f").addEventListener("mouseup", function(event) {
    // delete de la class au levé du click
    f.classList.remove("playing");
})

// boom
document.getElementById("g").addEventListener("mousedown", function(event) {
    setTimeout(function () {
        boom.play();
    }, 250);
    // ajout de la class au click
    g.classList.add("playing");
})

document.getElementById("g").addEventListener("mouseup", function(event) {
    // delete de la class au levé du click
    g.classList.remove("playing");
})

// ride
document.getElementById("h").addEventListener("mousedown", function(event) {
    setTimeout(function () {
        ride.play();
    }, 250);
    // ajout de la class au click
    h.classList.add("playing");
})

document.getElementById("h").addEventListener("mouseup", function(event) {
    // delete de la class au levé du click
    h.classList.remove("playing");
})

// snare
document.getElementById("j").addEventListener("mousedown", function(event) {
    setTimeout(function () {
        snare.play();
    }, 250);
    // ajout de la class au click
    j.classList.add("playing");
})

document.getElementById("j").addEventListener("mouseup", function(event) {
    // delete de la class au levé du click
    j.classList.remove("playing");
})

// tom
document.getElementById("k").addEventListener("mousedown", function(event) {
    setTimeout(function () {
        tom.play();
    }, 250);
    // ajout de la class au click
    k.classList.add("playing");
})

document.getElementById("k").addEventListener("mouseup", function(event) {
    // delete de la class au levé du click
    k.classList.remove("playing");
})

// tink
document.getElementById("l").addEventListener("mousedown", function(event) {
    setTimeout(function () {
        tink.play();
    }, 250);
    // ajout de la class au click
    l.classList.add("playing");
})

document.getElementById("l").addEventListener("mouseup", function(event) {
    // delete de la class au levé du click
    l.classList.remove("playing");
})