<?xml version="1.0" encoding="UTF-8"?>
<Algo>
    <description courant="FIN_SINON" texte=""/>
    <extension extnom="inactif"/>
    <fonction fctcode="" fctetat="inactif"/>
    <F2 F2etat="inactif" F2defaut="" F2para="" F2lignes=""/>
    <repere repetat="inactif" repcode="-10#10#-10#10#2#2"/>
    <param epaisseurPoint="2" nbDecimales="8" epaisseurLigne="2" arrondiAuto="vrai" totalBoucles="5000000" maxBoucle="500000" totalAffichages="1000"/>
    <item code="200#declarationfonctions" algoitem="FONCTIONS_UTILISEES">
        <item code="19#1: Ecrire un algorithme qui demande à l'utilisateur" algoitem="//1: Ecrire un algorithme qui demande à l'utilisateur"/>
        <item code="19# son âge. Si l'utilisateur a moins de 18 ans, lui" algoitem="// son âge. Si l'utilisateur a moins de 18 ans, lui"/>
        <item code="19#dire qu'il est mineur, s'il a 18 ans ou plus, qu'il" algoitem="//dire qu'il est mineur, s'il a 18 ans ou plus, qu'il"/>
        <item code="19#est majeur." algoitem="//est majeur."/>
    </item>
    <item code="100#declarationsvariables" algoitem="VARIABLES">
        <item code="1#NOMBRE#age" algoitem="age EST_DU_TYPE NOMBRE"/>
    </item>
    <item code="101#debutalgo" algoitem="DEBUT_ALGORITHME">
        <item code="4#Quel âge as-tu ?#0" algoitem="AFFICHER &quot;Quel âge as-tu ?&quot;"/>
        <item code="2#age#pasliste" algoitem="LIRE age"/>
        <item code="6#age &lt; 18" algoitem="SI (age &lt; 18) ALORS">
            <item code="7#debutsi" algoitem="DEBUT_SI"/>
            <item code="4#Tu es mineur#0" algoitem="AFFICHER &quot;Tu es mineur&quot;"/>
            <item code="8#finsi" algoitem="FIN_SI"/>
            <item code="9#sinon" algoitem="SINON">
                <item code="10#debutsinon" algoitem="DEBUT_SINON"/>
                <item code="4#Tu es majeur#0" algoitem="AFFICHER &quot;Tu es majeur&quot;"/>
                <item code="11#finsinon" algoitem="FIN_SINON"/>
            </item>
        </item>
    </item>
    <item code="102#finalgo" algoitem="FIN_ALGORITHME"/>
</Algo>
