<?xml version="1.0" encoding="UTF-8"?>
<Algo>
    <description courant="AFFICHER TOTAL" texte=""/>
    <extension extnom="inactif"/>
    <fonction fctcode="" fctetat="inactif"/>
    <F2 F2defaut="" F2para="" F2lignes="" F2etat="inactif"/>
    <repere repetat="inactif" repcode="-10#10#-10#10#2#2"/>
    <param epaisseurPoint="2" maxBoucle="500000" epaisseurLigne="2" arrondiAuto="vrai" nbDecimales="8" totalBoucles="5000000" totalAffichages="1000"/>
    <item code="200#declarationfonctions" algoitem="FONCTIONS_UTILISEES"/>
    <item code="100#declarationsvariables" algoitem="VARIABLES">
        <item code="1#NOMBRE#PHOTOCOPIES" algoitem="PHOTOCOPIES EST_DU_TYPE NOMBRE"/>
        <item code="1#NOMBRE#TOTAL" algoitem="TOTAL EST_DU_TYPE NOMBRE"/>
    </item>
    <item code="101#debutalgo" algoitem="DEBUT_ALGORITHME">
        <item code="4#Combien voulez-vous faire de photocopies ?#0" algoitem="AFFICHER &quot;Combien voulez-vous faire de photocopies ?&quot;"/>
        <item code="2#PHOTOCOPIES#pasliste" algoitem="LIRE PHOTOCOPIES"/>
        <item code="6#PHOTOCOPIES &lt;= 10" algoitem="SI (PHOTOCOPIES &lt;= 10) ALORS">
            <item code="7#debutsi" algoitem="DEBUT_SI"/>
            <item code="5#TOTAL#PHOTOCOPIES * 2#pasliste" algoitem="TOTAL PREND_LA_VALEUR PHOTOCOPIES * 2"/>
            <item code="8#finsi" algoitem="FIN_SI"/>
        </item>
        <item code="6#PHOTOCOPIES > 10 ET PHOTOCOPIES &lt;= 30" algoitem="SI (PHOTOCOPIES > 10 ET PHOTOCOPIES &lt;= 30) ALORS">
            <item code="7#debutsi" algoitem="DEBUT_SI"/>
            <item code="5#TOTAL#10 * 2 + (PHOTOCOPIES - 10) * 1.5#pasliste" algoitem="TOTAL PREND_LA_VALEUR 10 * 2 + (PHOTOCOPIES - 10) * 1.5"/>
            <item code="8#finsi" algoitem="FIN_SI"/>
        </item>
        <item code="6#PHOTOCOPIES > 30" algoitem="SI (PHOTOCOPIES > 30) ALORS">
            <item code="7#debutsi" algoitem="DEBUT_SI"/>
            <item code="5#TOTAL#10 * 2 + 20 * 1.5 + (PHOTOCOPIES - 30) * 1#pasliste" algoitem="TOTAL PREND_LA_VALEUR 10 * 2 + 20 * 1.5 + (PHOTOCOPIES - 30) * 1"/>
            <item code="8#finsi" algoitem="FIN_SI"/>
        </item>
        <item code="3#TOTAL#0#pasliste" algoitem="AFFICHER TOTAL"/>
    </item>
    <item code="102#finalgo" algoitem="FIN_ALGORITHME"/>
</Algo>
