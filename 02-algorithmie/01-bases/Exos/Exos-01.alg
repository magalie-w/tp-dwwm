<?xml version="1.0" encoding="UTF-8"?>
<Algo>
    <description courant="AFFICHERCALCUL A + B" texte=""/>
    <extension extnom="inactif"/>
    <fonction fctcode="" fctetat="inactif"/>
    <F2 F2para="" F2etat="inactif" F2defaut="" F2lignes=""/>
    <repere repcode="-10#10#-10#10#2#2" repetat="inactif"/>
    <param epaisseurLigne="2" nbDecimales="8" maxBoucle="500000" totalBoucles="5000000" epaisseurPoint="2" arrondiAuto="vrai" totalAffichages="1000"/>
    <item code="200#declarationfonctions" algoitem="FONCTIONS_UTILISEES">
        <item code="19#1 : Ecrire un algorithme demandant à l'utilisateur" algoitem="//1 : Ecrire un algorithme demandant à l'utilisateur"/>
        <item code="19#deux nombres A et B. Afficher le résultat de A + B" algoitem="//deux nombres A et B. Afficher le résultat de A + B"/>
    </item>
    <item code="100#declarationsvariables" algoitem="VARIABLES">
        <item code="1#NOMBRE#A" algoitem="A EST_DU_TYPE NOMBRE"/>
        <item code="1#NOMBRE#B" algoitem="B EST_DU_TYPE NOMBRE"/>
    </item>
    <item code="101#debutalgo" algoitem="DEBUT_ALGORITHME">
        <item code="4#Saisir un nombre..#0" algoitem="AFFICHER &quot;Saisir un nombre..&quot;"/>
        <item code="2#A#pasliste" algoitem="LIRE A"/>
        <item code="4#Saisir un autre nombre..#0" algoitem="AFFICHER &quot;Saisir un autre nombre..&quot;"/>
        <item code="2#B#pasliste" algoitem="LIRE B"/>
        <item code="3#A#0#pasliste" algoitem="AFFICHER A"/>
        <item code="4# + #0" algoitem="AFFICHER &quot; + &quot;"/>
        <item code="3#B#0#pasliste" algoitem="AFFICHER B"/>
        <item code="4# = #0" algoitem="AFFICHER &quot; = &quot;"/>
        <item code="20#A + B#0" algoitem="AFFICHERCALCUL A + B"/>
    </item>
    <item code="102#finalgo" algoitem="FIN_ALGORITHME"/>
</Algo>
