<?xml version="1.0" encoding="UTF-8"?>
<Algo>
    <description texte="" courant="FIN_SINON"/>
    <extension extnom="inactif"/>
    <fonction fctcode="" fctetat="inactif"/>
    <F2 F2para="" F2lignes="" F2etat="inactif" F2defaut=""/>
    <repere repetat="inactif" repcode="-10#10#-10#10#2#2"/>
    <param epaisseurPoint="2" arrondiAuto="vrai" epaisseurLigne="2" maxBoucle="500000" totalBoucles="5000000" totalAffichages="1000" nbDecimales="8"/>
    <item code="200#declarationfonctions" algoitem="FONCTIONS_UTILISEES">
        <item code="19#2: Ecrire un algorithme qui demande à l'utilisateur" algoitem="//2: Ecrire un algorithme qui demande à l'utilisateur"/>
        <item code="19#son âge. S'il a entre 18 et 25, afficher qu'il a le" algoitem="//son âge. S'il a entre 18 et 25, afficher qu'il a le"/>
        <item code="19#droit à une promotion, sinon il doit payer le prix" algoitem="//droit à une promotion, sinon il doit payer le prix"/>
        <item code="19#normal." algoitem="//normal."/>
    </item>
    <item code="100#declarationsvariables" algoitem="VARIABLES">
        <item code="1#NOMBRE#AGE" algoitem="AGE EST_DU_TYPE NOMBRE"/>
    </item>
    <item code="101#debutalgo" algoitem="DEBUT_ALGORITHME">
        <item code="4#Quel est ton âge ?#0" algoitem="AFFICHER &quot;Quel est ton âge ?&quot;"/>
        <item code="2#AGE#pasliste" algoitem="LIRE AGE"/>
        <item code="6#AGE >= 18 ET AGE &lt;= 25" algoitem="SI (AGE >= 18 ET AGE &lt;= 25) ALORS">
            <item code="7#debutsi" algoitem="DEBUT_SI"/>
            <item code="4#Tu as le droit à une promotion#0" algoitem="AFFICHER &quot;Tu as le droit à une promotion&quot;"/>
            <item code="8#finsi" algoitem="FIN_SI"/>
            <item code="9#sinon" algoitem="SINON">
                <item code="10#debutsinon" algoitem="DEBUT_SINON"/>
                <item code="4#Vous devez payer le tarif normal#0" algoitem="AFFICHER &quot;Vous devez payer le tarif normal&quot;"/>
                <item code="11#finsinon" algoitem="FIN_SINON"/>
            </item>
        </item>
    </item>
    <item code="102#finalgo" algoitem="FIN_ALGORITHME"/>
</Algo>
