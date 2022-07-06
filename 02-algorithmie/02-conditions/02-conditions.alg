<?xml version="1.0" encoding="UTF-8"?>
<Algo>
    <description courant="FIN_SINON" texte=""/>
    <extension extnom="inactif"/>
    <fonction fctetat="inactif" fctcode=""/>
    <F2 F2para="" F2etat="inactif" F2defaut="" F2lignes=""/>
    <repere repcode="-10#10#-10#10#2#2" repetat="inactif"/>
    <param maxBoucle="500000" epaisseurLigne="2" epaisseurPoint="2" totalAffichages="1000" nbDecimales="8" arrondiAuto="vrai" totalBoucles="5000000"/>
    <item code="200#declarationfonctions" algoitem="FONCTIONS_UTILISEES"/>
    <item code="100#declarationsvariables" algoitem="VARIABLES">
        <item code="1#NOMBRE#dose" algoitem="dose EST_DU_TYPE NOMBRE"/>
        <item code="1#NOMBRE#covid" algoitem="covid EST_DU_TYPE NOMBRE"/>
    </item>
    <item code="101#debutalgo" algoitem="DEBUT_ALGORITHME">
        <item code="4#Combien avez-vous de doses ?#0" algoitem="AFFICHER &quot;Combien avez-vous de doses ?&quot;"/>
        <item code="2#dose#pasliste" algoitem="LIRE dose"/>
        <item code="4#Avez-vous eu le covid ?#0" algoitem="AFFICHER &quot;Avez-vous eu le covid ?&quot;"/>
        <item code="2#covid#pasliste" algoitem="LIRE covid"/>
        <item code="6#dose >= 3 OU covid == 1" algoitem="SI (dose >= 3 OU covid == 1) ALORS">
            <item code="7#debutsi" algoitem="DEBUT_SI"/>
            <item code="4#On peut aller au restaurant si on a 3 doses ou le covid.#0" algoitem="AFFICHER &quot;On peut aller au restaurant si on a 3 doses ou le covid.&quot;"/>
            <item code="8#finsi" algoitem="FIN_SI"/>
            <item code="9#sinon" algoitem="SINON">
                <item code="10#debutsinon" algoitem="DEBUT_SINON"/>
                <item code="4#Vous n'avez pas assez de doses..#0" algoitem="AFFICHER &quot;Vous n'avez pas assez de doses..&quot;"/>
                <item code="11#finsinon" algoitem="FIN_SINON"/>
            </item>
        </item>
    </item>
    <item code="102#finalgo" algoitem="FIN_ALGORITHME"/>
</Algo>
