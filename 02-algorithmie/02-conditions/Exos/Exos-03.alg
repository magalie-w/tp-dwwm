<?xml version="1.0" encoding="UTF-8"?>
<Algo>
    <description courant="FIN_SI" texte=""/>
    <extension extnom="inactif"/>
    <fonction fctcode="" fctetat="inactif"/>
    <F2 F2lignes="" F2defaut="" F2etat="inactif" F2para=""/>
    <repere repcode="-10#10#-10#10#2#2" repetat="inactif"/>
    <param epaisseurLigne="2" nbDecimales="8" arrondiAuto="vrai" maxBoucle="500000" totalBoucles="5000000" epaisseurPoint="2" totalAffichages="1000"/>
    <item code="200#declarationfonctions" algoitem="FONCTIONS_UTILISEES">
        <item code="19#3: Un magasin facture 2 euros les 10 premières" algoitem="//3: Un magasin facture 2 euros les 10 premières"/>
        <item code="19#photocopies, 1.50 euros les 20 suivantes et 1 euros" algoitem="//photocopies, 1.50 euros les 20 suivantes et 1 euros"/>
        <item code="19#au-delà. Ecrivez un algorithme qui demande à" algoitem="//au-delà. Ecrivez un algorithme qui demande à"/>
        <item code="19#l’utilisateur le nombre de photocopies à faire puis" algoitem="//l’utilisateur le nombre de photocopies à faire puis"/>
        <item code="19#afficher le montant total." algoitem="//afficher le montant total."/>
    </item>
    <item code="100#declarationsvariables" algoitem="VARIABLES">
        <item code="1#NOMBRE#copies" algoitem="copies EST_DU_TYPE NOMBRE"/>
        <item code="1#NOMBRE#prix" algoitem="prix EST_DU_TYPE NOMBRE"/>
        <item code="1#NOMBRE#total" algoitem="total EST_DU_TYPE NOMBRE"/>
    </item>
    <item code="101#debutalgo" algoitem="DEBUT_ALGORITHME">
        <item code="4#Combien de photocopie faut-il ?#0" algoitem="AFFICHER &quot;Combien de photocopie faut-il ?&quot;"/>
        <item code="2#copies#pasliste" algoitem="LIRE copies"/>
        <item code="6#copies &lt;= 10" algoitem="SI (copies &lt;= 10) ALORS">
            <item code="7#debutsi" algoitem="DEBUT_SI"/>
            <item code="5#prix#2#pasliste" algoitem="prix PREND_LA_VALEUR 2"/>
            <item code="5#total#prix * copies#pasliste" algoitem="total PREND_LA_VALEUR prix * copies"/>
            <item code="3#total#0#pasliste" algoitem="AFFICHER total"/>
            <item code="8#finsi" algoitem="FIN_SI"/>
        </item>
        <item code="6#copies > 10 ET copies &lt; 30" algoitem="SI (copies > 10 ET copies &lt; 30) ALORS">
            <item code="7#debutsi" algoitem="DEBUT_SI"/>
            <item code="5#prix#1.50#pasliste" algoitem="prix PREND_LA_VALEUR 1.50"/>
            <item code="5#total#prix * copies#pasliste" algoitem="total PREND_LA_VALEUR prix * copies"/>
            <item code="3#total#0#pasliste" algoitem="AFFICHER total"/>
            <item code="8#finsi" algoitem="FIN_SI"/>
        </item>
        <item code="6#copies >= 30" algoitem="SI (copies >= 30) ALORS">
            <item code="7#debutsi" algoitem="DEBUT_SI"/>
            <item code="5#prix#1#pasliste" algoitem="prix PREND_LA_VALEUR 1"/>
            <item code="5#total#prix * copies#pasliste" algoitem="total PREND_LA_VALEUR prix * copies"/>
            <item code="3#total#0#pasliste" algoitem="AFFICHER total"/>
            <item code="8#finsi" algoitem="FIN_SI"/>
        </item>
    </item>
    <item code="102#finalgo" algoitem="FIN_ALGORITHME"/>
</Algo>
