<?xml version="1.0" encoding="UTF-8"?>
<Algo>
    <description courant="FIN_SINON" texte=""/>
    <extension extnom="inactif"/>
    <fonction fctcode="" fctetat="inactif"/>
    <F2 F2defaut="" F2para="" F2lignes="" F2etat="inactif"/>
    <repere repetat="inactif" repcode="-10#10#-10#10#2#2"/>
    <param epaisseurPoint="2" maxBoucle="500000" epaisseurLigne="2" arrondiAuto="vrai" nbDecimales="8" totalBoucles="5000000" totalAffichages="1000"/>
    <item code="200#declarationfonctions" algoitem="FONCTIONS_UTILISEES"/>
    <item code="100#declarationsvariables" algoitem="VARIABLES">
        <item code="1#NOMBRE#DOSE" algoitem="DOSE EST_DU_TYPE NOMBRE"/>
        <item code="1#NOMBRE#COVID" algoitem="COVID EST_DU_TYPE NOMBRE"/>
    </item>
    <item code="101#debutalgo" algoitem="DEBUT_ALGORITHME">
        <item code="4#Combien avez-vous de doses ?#0" algoitem="AFFICHER &quot;Combien avez-vous de doses ?&quot;"/>
        <item code="2#DOSE#pasliste" algoitem="LIRE DOSE"/>
        <item code="4#Avez-vous eu le COVID ?#0" algoitem="AFFICHER &quot;Avez-vous eu le COVID ?&quot;"/>
        <item code="2#COVID#pasliste" algoitem="LIRE COVID"/>
        <item code="6#DOSE >= 3 OU COVID == 1" algoitem="SI (DOSE >= 3 OU COVID == 1) ALORS">
            <item code="7#debutsi" algoitem="DEBUT_SI"/>
            <item code="4#On peut aller au restaurant si on a 3 doses ou le covid.#0" algoitem="AFFICHER &quot;On peut aller au restaurant si on a 3 doses ou le covid.&quot;"/>
            <item code="8#finsi" algoitem="FIN_SI"/>
            <item code="9#sinon" algoitem="SINON">
                <item code="10#debutsinon" algoitem="DEBUT_SINON"/>
                <item code="4#Vous n'avez pas assez de doses...#0" algoitem="AFFICHER &quot;Vous n'avez pas assez de doses...&quot;"/>
                <item code="11#finsinon" algoitem="FIN_SINON"/>
            </item>
        </item>
    </item>
    <item code="102#finalgo" algoitem="FIN_ALGORITHME"/>
</Algo>
