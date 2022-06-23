<?xml version="1.0" encoding="UTF-8"?>
<Algo>
    <description courant="AFFICHERCALCUL 12 + 14" texte=""/>
    <extension extnom="inactif"/>
    <fonction fctcode="" fctetat="inactif"/>
    <F2 F2etat="inactif" F2defaut="" F2lignes="" F2para=""/>
    <repere repetat="inactif" repcode="-10#10#-10#10#2#2"/>
    <param totalAffichages="1000" maxBoucle="500000" totalBoucles="5000000" arrondiAuto="vrai" epaisseurLigne="2" nbDecimales="8" epaisseurPoint="2"/>
    <item code="200#declarationfonctions" algoitem="FONCTIONS_UTILISEES"/>
    <item code="100#declarationsvariables" algoitem="VARIABLES">
        <item code="1#NOMBRE#A" algoitem="A EST_DU_TYPE NOMBRE"/>
        <item code="1#NOMBRE#B" algoitem="B EST_DU_TYPE NOMBRE"/>
        <item code="1#NOMBRE#C" algoitem="C EST_DU_TYPE NOMBRE"/>
    </item>
    <item code="101#debutalgo" algoitem="DEBUT_ALGORITHME">
        <item code="5#A#1#pasliste" algoitem="A PREND_LA_VALEUR 1"/>
        <item code="19# On affecte une valeur à une variable" algoitem="// On affecte une valeur à une variable"/>
        <item code="5#B#2#pasliste" algoitem="B PREND_LA_VALEUR 2"/>
        <item code="5#A#B#pasliste" algoitem="A PREND_LA_VALEUR B"/>
        <item code="5#C#A + B#pasliste" algoitem="C PREND_LA_VALEUR A + B"/>
        <item code="5#B#A - C#pasliste" algoitem="B PREND_LA_VALEUR A - C"/>
        <item code="4#La variable A vaut #0" algoitem="AFFICHER &quot;La variable A vaut &quot;"/>
        <item code="19# On passe à la ligne" algoitem="// On passe à la ligne"/>
        <item code="3#A#1#pasliste" algoitem="AFFICHER A"/>
        <item code="3#B#1#pasliste" algoitem="AFFICHER B"/>
        <item code="3#C#1#pasliste" algoitem="AFFICHER C"/>
        <item code="20#12 + 14#0" algoitem="AFFICHERCALCUL 12 + 14"/>
    </item>
    <item code="102#finalgo" algoitem="FIN_ALGORITHME"/>
</Algo>
