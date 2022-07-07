<?php
    $user_status = mt_rand(1, 4);
    
    $message = ($user_status <= 3 ) ? "Welcome User" : "Welcome Admin";
    echo $message;
//Primjer zasto termarni operator ne treba koristiti za provjeru vise uslova od true i falsa
    $message = ($user_status <= 3) ? (($user_status == 1) ? "Echo User 1" : (($user_status == 2) ? "Echo User2" : "Echo User3")) : "Echo Admin";
    echo $message;

    #Ternarni operator - samo kada je true ili false 2 
    # If ili IF-ELSE -Neki jednostavni upiti (isset,!empty) 3 stvari(jutro,dan,noc)
    #SWITCH - Sve komlikovanije od navedenog(3+ stvari)

?>