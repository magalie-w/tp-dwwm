<?xml version="1.0" encoding="UTF-8"?>
<Algo>
    <description courant="FIN_SI" texte=""/>
    <extension extnom="inactif"/>
    <fonction fctetat="inactif" fctcode=""/>
    <F2 F2defaut="" F2para="" F2etat="inactif" F2lignes=""/>
    <repere repcode="-10#10#-10#10#2#2" repetat="inactif"/>
    <param epaisseurLigne="2" maxBoucle="500000" nbDecimales="8" epaisseurPoint="2" totalAffichages="1000" totalBoucles="5000000" arrondiAuto="vrai"/>
    <item code="200#declarationfonctions" algoitem="FONCTIONS_UTILISEES"/>
    <item code="100#declarationsvariables" algoitem="VARIABLES">
        <item code="1#CHAINE#MOIS" algoitem="MOIS EST_DU_TYPE CHAINE"/>
        <item code="1#NOMBRE#PAIN" algoitem="PAIN EST_DU_TYPE NOMBRE"/>
        <item code="1#NOMBRE#POULET" algoitem="POULET EST_DU_TYPE NOMBRE"/>
        <item code="1#NOMBRE#FROMAGE" algoitem="FROMAGE EST_DU_TYPE NOMBRE"/>
    </item>
    <item code="101#debutalgo" algoitem="DEBUT_ALGORITHME">
        <item code="4#Saisir un mois (Janvier, Février, Mars, Avril, Mai, Juin, Juillet, Août, Septembre, Octobre, Novembre, Décembre)#0" algoitem="AFFICHER &quot;Saisir un mois (Janvier, Février, Mars, Avril, Mai, Juin, Juillet, Août, Septembre, Octobre, Novembre, Décembre)&quot;"/>
        <item code="2#MOIS#pasliste" algoitem="LIRE MOIS"/>
        <item code="2#PAIN#pasliste" algoitem="LIRE PAIN"/>
        <item code="2#POULET#pasliste" algoitem="LIRE POULET"/>
        <item code="2#FROMAGE#pasliste" algoitem="LIRE FROMAGE"/>
        <item code="6#PAIN ET (POULET OU FROMAGE)" algoitem="SI (PAIN ET (POULET OU FROMAGE)) ALORS">
            <item code="7#debutsi" algoitem="DEBUT_SI"/>
            <item code="4#OK pour le sandwich#0" algoitem="AFFICHER &quot;OK pour le sandwich&quot;"/>
            <item code="8#finsi" algoitem="FIN_SI"/>
        </item>
        <item code="6#MOIS == &quot;Janvier&quot; OU MOIS == &quot;Février&quot; OU MOIS == &quot;Mars&quot;" algoitem="SI (MOIS == &quot;Janvier&quot; OU MOIS == &quot;Février&quot; OU MOIS == &quot;Mars&quot;) ALORS">
            <item code="7#debutsi" algoitem="DEBUT_SI"/>
            <item code="4#Hiver#0" algoitem="AFFICHER &quot;Hiver&quot;"/>
            <item code="8#finsi" algoitem="FIN_SI"/>
        </item>
        <item code="6#MOIS == &quot;Avril&quot; OU MOIS == &quot;Mai&quot; OU MOIS == &quot;Juin&quot;" algoitem="SI (MOIS == &quot;Avril&quot; OU MOIS == &quot;Mai&quot; OU MOIS == &quot;Juin&quot;) ALORS">
            <item code="7#debutsi" algoitem="DEBUT_SI"/>
            <item code="4#Printemps#0" algoitem="AFFICHER &quot;Printemps&quot;"/>
            <item code="8#finsi" algoitem="FIN_SI"/>
        </item>
        <item code="6#MOIS == &quot;Juillet&quot; OU MOIS == &quot;Août&quot; OU MOIS == &quot;Septembre&quot;" algoitem="SI (MOIS == &quot;Juillet&quot; OU MOIS == &quot;Août&quot; OU MOIS == &quot;Septembre&quot;) ALORS">
            <item code="7#debutsi" algoitem="DEBUT_SI"/>
            <item code="4#Été#0" algoitem="AFFICHER &quot;Été&quot;"/>
            <item code="8#finsi" algoitem="FIN_SI"/>
        </item>
        <item code="6#MOIS == &quot;Octobre&quot; OU MOIS == &quot;Novembre&quot; OU MOIS == &quot;Décembre&quot;" algoitem="SI (MOIS == &quot;Octobre&quot; OU MOIS == &quot;Novembre&quot; OU MOIS == &quot;Décembre&quot;) ALORS">
            <item code="7#debutsi" algoitem="DEBUT_SI"/>
            <item code="4#Automne#0" algoitem="AFFICHER &quot;Automne&quot;"/>
            <item code="8#finsi" algoitem="FIN_SI"/>
        </item>
    </item>
    <item code="102#finalgo" algoitem="FIN_ALGORITHME"/>
</Algo>
