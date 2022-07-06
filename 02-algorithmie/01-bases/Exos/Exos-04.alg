<?xml version="1.0" encoding="UTF-8"?>
<Algo>
    <description texte="" courant="AFFICHERCALCUL ph * (1 + tva / 100)"/>
    <extension extnom="inactif"/>
    <fonction fctetat="inactif" fctcode=""/>
    <F2 F2lignes="" F2defaut="" F2etat="inactif" F2para=""/>
    <repere repcode="-10#10#-10#10#2#2" repetat="inactif"/>
    <param maxBoucle="500000" arrondiAuto="vrai" totalBoucles="5000000" totalAffichages="1000" nbDecimales="8" epaisseurPoint="2" epaisseurLigne="2"/>
    <item code="200#declarationfonctions" algoitem="FONCTIONS_UTILISEES">
        <item code="19#4 : Ecrire un algorithme qui calcule" algoitem="//4 : Ecrire un algorithme qui calcule"/>
        <item code="19#le prix TTC d'un prix HT" algoitem="//le prix TTC d'un prix HT"/>
    </item>
    <item code="100#declarationsvariables" algoitem="VARIABLES">
        <item code="1#NOMBRE#ph" algoitem="ph EST_DU_TYPE NOMBRE"/>
        <item code="1#NOMBRE#tva" algoitem="tva EST_DU_TYPE NOMBRE"/>
    </item>
    <item code="101#debutalgo" algoitem="DEBUT_ALGORITHME">
        <item code="4#Quel est le prix HT ?#0" algoitem="AFFICHER &quot;Quel est le prix HT ?&quot;"/>
        <item code="2#ph#pasliste" algoitem="LIRE ph"/>
        <item code="4#Quel est le taux de TVA (en %) ?#0" algoitem="AFFICHER &quot;Quel est le taux de TVA (en %) ?&quot;"/>
        <item code="2#tva#pasliste" algoitem="LIRE tva"/>
        <item code="20#ph * (1 + tva / 100)#0" algoitem="AFFICHERCALCUL ph * (1 + tva / 100)"/>
    </item>
    <item code="102#finalgo" algoitem="FIN_ALGORITHME"/>
</Algo>
