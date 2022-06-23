<?xml version="1.0" encoding="UTF-8"?>
<Algo>
    <description courant="AFFICHERCALCUL CHIFFRE * CHIFFRE" texte=""/>
    <extension extnom="inactif"/>
    <fonction fctetat="inactif" fctcode=""/>
    <F2 F2defaut="" F2para="" F2etat="inactif" F2lignes=""/>
    <repere repcode="-10#10#-10#10#2#2" repetat="inactif"/>
    <param epaisseurPoint="2" maxBoucle="500000" totalAffichages="1000" totalBoucles="5000000" arrondiAuto="vrai" nbDecimales="8" epaisseurLigne="2"/>
    <item algoitem="FONCTIONS_UTILISEES" code="200#declarationfonctions"/>
    <item algoitem="VARIABLES" code="100#declarationsvariables">
        <item algoitem="CHIFFRE EST_DU_TYPE NOMBRE" code="1#NOMBRE#CHIFFRE"/>
    </item>
    <item algoitem="DEBUT_ALGORITHME" code="101#debutalgo">
        <item algoitem="AFFICHER &quot;Saisir un nombre...&quot;" code="4#Saisir un nombre...#0"/>
        <item algoitem="LIRE CHIFFRE" code="2#CHIFFRE#pasliste"/>
        <item algoitem="AFFICHER &quot;Le carré de &quot;" code="4#Le carré de #0"/>
        <item algoitem="AFFICHER CHIFFRE" code="3#CHIFFRE#0#pasliste"/>
        <item algoitem="AFFICHER &quot; est &quot;" code="4# est #0"/>
        <item algoitem="AFFICHERCALCUL CHIFFRE * CHIFFRE" code="20#CHIFFRE * CHIFFRE#0"/>
    </item>
    <item algoitem="FIN_ALGORITHME" code="102#finalgo"/>
</Algo>
