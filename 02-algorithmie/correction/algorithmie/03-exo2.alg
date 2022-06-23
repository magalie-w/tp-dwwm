<?xml version="1.0" encoding="UTF-8"?>
<Algo>
    <description courant="AFFICHER INITIAL" texte=""/>
    <extension extnom="inactif"/>
    <fonction fctetat="inactif" fctcode=""/>
    <F2 F2defaut="" F2para="" F2etat="inactif" F2lignes=""/>
    <repere repcode="-10#10#-10#10#2#2" repetat="inactif"/>
    <param epaisseurPoint="2" maxBoucle="500000" totalAffichages="1000" totalBoucles="5000000" arrondiAuto="vrai" nbDecimales="8" epaisseurLigne="2"/>
    <item algoitem="FONCTIONS_UTILISEES" code="200#declarationfonctions"/>
    <item algoitem="VARIABLES" code="100#declarationsvariables">
        <item algoitem="PRENOM EST_DU_TYPE CHAINE" code="1#CHAINE#PRENOM"/>
        <item algoitem="INITIAL EST_DU_TYPE CHAINE" code="1#CHAINE#INITIAL"/>
    </item>
    <item algoitem="DEBUT_ALGORITHME" code="101#debutalgo">
        <item algoitem="AFFICHER &quot;Bonjour, quel est ton prénom ?&quot;" code="4#Bonjour, quel est ton prénom ?#0"/>
        <item algoitem="LIRE PRENOM" code="2#PRENOM#pasliste"/>
        <item algoitem="AFFICHER &quot;Bonjour &quot;" code="4#Bonjour #0"/>
        <item algoitem="AFFICHER PRENOM" code="3#PRENOM#0#pasliste"/>
        <item algoitem="AFFICHER &quot;. Tes initiales sont &quot;" code="4#. Tes initiales sont #0"/>
        <item algoitem="INITIAL PREND_LA_VALEUR PRENOM.substr(-1, 1)" code="5#INITIAL#PRENOM.substr(-1, 1)#pasliste"/>
        <item algoitem="AFFICHER INITIAL" code="3#INITIAL#0#pasliste"/>
    </item>
    <item algoitem="FIN_ALGORITHME" code="102#finalgo"/>
</Algo>
