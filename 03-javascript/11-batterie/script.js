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

window.addEventListener("keydown", function (event) {

    if (event.key == "q") {
        //Active l'audio lorsque que l'on appuie sur la touche q
        clap.play();

        //Créer la class playing pour ajouter un effet css
        document.getElementById("q");
        q.classList.add("playing");

        //On supprime la class playing lorsque la touche est relachée
        this.window.addEventListener("keyup", function (event) {
            this.document.getElementById("q");
            q.classList.remove("playing");
        });
        
    } else if (event.key == "s") {
        //Active l'audio lorsque que l'on appuie sur la touche s
        hithat.play();

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
        kick.play();
        
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
        openhat.play();

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
        boom.play();

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
        ride.play();

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
        snare.play();

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
        tom.play();

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
        tink.play();

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



