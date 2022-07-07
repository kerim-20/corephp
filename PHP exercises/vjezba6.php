<?php
    // Godina rodjenja korisnika
    $godina_rodenja = 1978;
    // Trenutna godina dobivena funkcijom date
    $trenutna_godina = date('Y');
    // Broj godina korisnika
    $godine_korisnika = $trenutna_godina - $godina_rodenja;
    // ISpis na izlaz
    echo $godine_korisnika;
    echo "<h1>" . $godine_korisnika . "</h1>" ;


?>