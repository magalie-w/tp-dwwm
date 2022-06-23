<?xml version="1.0" encoding="UTF-8"?>
<Algo>
    <description texte="" courant="AFFICHER prenom"/>
    <extension extnom="inactif"/>
    <fonction fctetat="inactif" fctcode=""/>
    <F2 F2etat="inactif" F2para="" F2defaut="" F2lignes=""/>
    <repere repetat="inactif" repcode="-10#10#-10#10#2#2"/>
    <param arrondiAuto="vrai" totalAffichages="1000" epaisseurPoint="2" epaisseurLigne="2" maxBoucle="500000" nbDecimales="8" totalBoucles="5000000"/>
    <item algoitem="FONCTIONS_UTILISEES" code="200#declarationfonctions">
        <item algoitem="//2 : Ecrire un algorithme demandant" code="19#2 : Ecrire un algorithme demandant"/>
        <item algoitem="//à l'utilisateur son prénom et l'afficher à l'écran" code="19#à l'utilisateur son prénom et l'afficher à l'écran"/>
    </item>
    <item algoitem="VARIABLES" code="100#declarationsvariables">
        <item algoitem="prenom EST_DU_TYPE CHAINE" code="1#CHAINE#prenom"/>
    </item>
    <item algoitem="DEBUT_ALGORITHME" code="101#debutalgo">
        <item algoitem="AFFICHER &quot;Bonjour, quel est ton prénom ?&quot;" code="4#Bonjour, quel est ton prénom ?#0"/>
        <item algoitem="LIRE prenom" code="2#prenom#pasliste"/>
        <item algoitem="AFFICHER &quot;Bonjour &quot;" code="4#Bonjour #0"/>
        <item algoitem="AFFICHER prenom" code="3#prenom#0#pasliste"/>
        <item algoitem="AFFICHER &quot;. Tes initiales sont &quot;" code="4#. Tes initiales sont #0"/>
        <item algoitem="prenom PREND_LA_VALEUR prenom.substr(0, 1)" code="5#prenom#prenom.substr(0, 1)#pasliste"/>
        <item algoitem="AFFICHER prenom" code="3#prenom#0#pasliste"/>
    </item>
    <item algoitem="FIN_ALGORITHME" code="102#finalgo"/>
</Algo>
