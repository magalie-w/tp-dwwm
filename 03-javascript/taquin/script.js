var caseVideTop = 0;
var caseVideLeft = 0;

var generalTop = 0;
var generalLeft = 0;

$(".general").click(function () {
    caseVideTop = $(".caseVide").position().top;
    caseVideLeft = $(".caseVide").position().left;
    console.log(caseVideTop);
    console.log(caseVideLeft);

    generalTop = $(this).position().top;
    generalLeft = $(this).position().left;
    console.log(generalTop);
    console.log(generalLeft);

    if(((generalTop == (caseVideTop - 100) && generalLeft == caseVideLeft) || (generalTop == (caseVideTop + 100) && generalLeft == caseVideLeft)) || ((generalLeft == (caseVideLeft - 100) && generalTop == caseVideTop) || (generalLeft == (caseVideLeft + 100) && generalTop == caseVideTop))){
        $(this).css({
            top : caseVideTop,
            left : caseVideLeft,
        });

        $(".caseVide").css({
            top : generalTop,
            left : generalLeft,
        });
    }
});

function moveBlock(caseBlock) {
    generalTop = $(caseBlock).position().top;
    generalLeft = $(caseBlock).position().left;

    caseVideTop = $(".caseVide").position().top;
    caseVideLeft = $(".caseVide").position().left;

    if(((generalTop == (caseVideTop - 100) && generalLeft == caseVideLeft) || (generalTop == (caseVideTop + 100) && generalLeft == caseVideLeft)) || ((generalLeft == (caseVideLeft - 100) && generalTop == caseVideTop) || (generalLeft == (caseVideLeft + 100) && generalTop == caseVideTop))){
        $(caseBlock).css({
            top : caseVideTop,
            left : caseVideLeft,
        });

        $(".caseVide").css({
            top : generalTop,
            left : generalLeft,
        });
    }
}

$('#start').click(function () {
    for (var i = 1; i < 500; i++) {
        var random = Math.floor(Math.random() * 15) + 1;
        moveBlock(".case"+random);
        console.log(".case"+random);
    }
})
