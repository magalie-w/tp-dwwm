<?xml version="1.0" encoding="UTF-8"?>
<Algo>
    <description courant="AFFICHERCALCUL PRIXHT * (1 + TAUX / 100)" texte=""/>
    <extension extnom="inactif"/>
    <fonction fctetat="inactif" fctcode=""/>
    <F2 F2defaut="" F2para="" F2etat="inactif" F2lignes=""/>
    <repere repcode="-10#10#-10#10#2#2" repetat="inactif"/>
    <param epaisseurPoint="2" maxBoucle="500000" totalAffichages="1000" totalBoucles="5000000" arrondiAuto="vrai" nbDecimales="8" epaisseurLigne="2"/>
    <item algoitem="FONCTIONS_UTILISEES" code="200#declarationfonctions"/>
    <item algoitem="VARIABLES" code="100#declarationsvariables">
        <item algoitem="PRIXHT EST_DU_TYPE NOMBRE" code="1#NOMBRE#PRIXHT"/>
        <item algoitem="TAUX EST_DU_TYPE NOMBRE" code="1#NOMBRE#TAUX"/>
    </item>
    <item algoitem="DEBUT_ALGORITHME" code="101#debutalgo">
        <item algoitem="AFFICHER &quot;Quel est le prix HT ?&quot;" code="4#Quel est le prix HT ?#0"/>
        <item algoitem="LIRE PRIXHT" code="2#PRIXHT#pasliste"/>
        <item algoitem="AFFICHER &quot;Quel est le taux de TVA (en %) ?&quot;" code="4#Quel est le taux de TVA (en %) ?#0"/>
        <item algoitem="LIRE TAUX" code="2#TAUX#pasliste"/>
        <item algoitem="AFFICHERCALCUL PRIXHT * (1 + TAUX / 100)" code="20#PRIXHT * (1 + TAUX / 100)#0"/>
    </item>
    <item algoitem="FIN_ALGORITHME" code="102#finalgo"/>
</Algo>
