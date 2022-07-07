<?php
// Rad sa indeksima(indeksirani niz jer su indeksi)
$boje = array("crveni", "zeleni", "bijele", "plavo");

$recenica = "Danas sam prolazio kroz Sarajevo. Bilo mi je zaista prelijepo. Vidio sam " . $boje[0] . " tepih, " . $boje[1] . " park, lijepe, " . $boje[2] . " golubove i zaista " . $boje[3] . " nebo. ";

echo $recenica;

echo "<br><br>";
// Rad sa kljucevima(asocijativni niz,jer kljucevi su asocijacije)

$bojeNove = array("prvi"=>"crveni", "drugi"=>"zeleni", "treci"=>"bijele", "cetvrti"=>"plavo");

$recenicaNova = "Danas sam prolazio kroz Sarajevo. Bilo mi je zaista prelijepo. Vidio sam " . $bojeNove["prvi"] . " tepih, " . $bojeNove["drugi"] . " park, lijepe, " . $bojeNove["treci"] . " golubove i zaista " . $bojeNove["cetvrti"] . " nebo. ";

echo $recenicaNova;

//MVC - Model View Controller 