var buttonCircle = document.getElementById("circle");
var buttonRect = document.getElementById("rect");
var square = document.getElementById("square");

buttonRect.addEventListener("click", function() {
    square.classList.toggle("rect");
    square.classList.remove("circle"); //Pour que la forme revient à son initiale sans prendre la forme de l'autre si on bascule entre les deux
});

buttonCircle.addEventListener("click", function() {
    if (square.classList.contains("circle")) { //On vérifie si le carré posséde lac lass circle
        square.classList.remove("circle"); //Si oui, on enlève la classe circle
    } else {
        square.classList.add("circle"); //on ajoute une classe .circle
        square.classList.remove("bg-red"); //on ajoute une classe .bg-red
    }
});