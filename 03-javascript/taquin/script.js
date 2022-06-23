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

    // 

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
