<?xml version="1.0" encoding="UTF-8"?>
<Algo>
    <description texte="" courant="FIN_SI"/>
    <extension extnom="inactif"/>
    <fonction fctetat="inactif" fctcode=""/>
    <F2 F2para="" F2defaut="" F2lignes="" F2etat="inactif"/>
    <repere repcode="-10#10#-10#10#2#2" repetat="inactif"/>
    <param maxBoucle="500000" arrondiAuto="vrai" epaisseurPoint="2" totalBoucles="5000000" totalAffichages="1000" epaisseurLigne="2" nbDecimales="8"/>
    <item algoitem="FONCTIONS_UTILISEES" code="200#declarationfonctions">
        <item algoitem="//4: Ecrire un algorithme qui affiche la saison en" code="19#4: Ecrire un algorithme qui affiche la saison en"/>
        <item algoitem="//donnant le numéro du mois." code="19#donnant le numéro du mois."/>
    </item>
    <item algoitem="VARIABLES" code="100#declarationsvariables">
        <item algoitem="mois EST_DU_TYPE NOMBRE" code="1#NOMBRE#mois"/>
    </item>
    <item algoitem="DEBUT_ALGORITHME" code="101#debutalgo">
        <item algoitem="AFFICHER &quot;Entre le chiffre d'un mois :&quot;" code="4#Entre le chiffre d'un mois :#0"/>
        <item algoitem="LIRE mois" code="2#mois#pasliste"/>
        <item algoitem="SI (mois &lt;= 3) ALORS" code="6#mois &lt;= 3">
            <item algoitem="DEBUT_SI" code="7#debutsi"/>
            <item algoitem="AFFICHER &quot;La saison est hiver&quot;" code="4#La saison est hiver#0"/>
            <item algoitem="FIN_SI" code="8#finsi"/>
        </item>
        <item algoitem="SI (mois >= 3 ET mois &lt;= 6) ALORS" code="6#mois >= 3 ET mois &lt;= 6">
            <item algoitem="DEBUT_SI" code="7#debutsi"/>
            <item algoitem="AFFICHER &quot;La saison est automne&quot;" code="4#La saison est automne#0"/>
            <item algoitem="FIN_SI" code="8#finsi"/>
        </item>
        <item algoitem="SI (mois > 6 ET mois &lt;= 9) ALORS" code="6#mois > 6 ET mois &lt;= 9">
            <item algoitem="DEBUT_SI" code="7#debutsi"/>
            <item algoitem="AFFICHER &quot;La saison est été&quot;" code="4#La saison est été#0"/>
            <item algoitem="FIN_SI" code="8#finsi"/>
        </item>
        <item algoitem="SI (mois > 9 ET mois &lt;= 12) ALORS" code="6#mois > 9 ET mois &lt;= 12">
            <item algoitem="DEBUT_SI" code="7#debutsi"/>
            <item algoitem="AFFICHER &quot;La saison est printemps&quot;" code="4#La saison est printemps#0"/>
            <item algoitem="FIN_SI" code="8#finsi"/>
        </item>
    </item>
    <item algoitem="FIN_ALGORITHME" code="102#finalgo"/>
</Algo>
