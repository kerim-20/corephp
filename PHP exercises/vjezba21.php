<?php

$cars = array(
    //Prvi clan vanjskog niza
    array(
        // tri clana unutrasnjeg niza
        "Volvo", 
        15,
        25
    ),
    // drugi clan vanjskog niza
    array(
        "BMW",
        27,
        43
    ),
    // treci clan vanjskog niza
    array(
        "Mercedes",
        31,
        68
    )
);
echo "<ul>";
for($i = 0; $i < count($cars); $i++){
    for($j = 0; $j < count($cars[$i]); $j++){
        echo "<li>" . $cars[$i][$j] . "</li>";
    }
}
echo "</ul>";
/*Slijed koraka izvrsavanja vanjske i unutrasnje petlje*/
// Prva interacija vanjske petlje
 #prva iteracija unutrasnje petlje
 #Druga iteracija unutrasnje petlje
 #Treca iteracija unutransnje petlje
 #itd.....