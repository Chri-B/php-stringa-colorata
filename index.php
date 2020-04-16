<?php
    /*
        SCOPO DEL GIOCO: Stampare una stringa verde se la variabile password passata in GET è uguale a “Boolean”,
        altrimenti stampare una stringa rossa.
    */

    $psw = $_GET['psw']; // prendo l'input
    if (strcmp($psw, 'Boolean') == 0) { // comparo l'input con la stringa boolean tramite funzione strcmp (case sensitive, restituisce 0 se stringhe coincidono)
        echo '<span style="background-color: lightgreen"> La psw inserita è corretta.'; // stampo a schermo scritta verde se stringhe coincidono
    } else {
        echo '<span style="background-color: rgb(255, 100, 100)"> La psw inserita è ERRATA.'; // stampo a schermo scritta rossa se stringhe non coincidono
    };

?>
