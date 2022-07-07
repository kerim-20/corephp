<?php

$auta = array('Fiat', 'Mercedes', 'Audi', 'Opel');

# Velicina niza (count ili size off)
echo  count($auta) . "<br>";

# Da li se nesto nalazi u nizu
echo in_array('Fiat', $auta) . "<br>";

# Bijela lista
if(in_array('Fiat', $auta)){
    echo "Ucitavam podatak... <br>";
}else{
    echo "Ne ucitavam podatak... <br>";
}

# Crna lista
if(in_array('Mercedes', $auta)){
    echo "ne ucitavam podatak...  <br>";
}else{
    echo "Ucitavam podatak... <br>";
}

# Ispis clan po clan niza (array_walk)
array_walk($auta,"print_r");

# Popunjavanje niza statickom vrijednoscu 
$statickiNiz = array_fill(0, 10, "Ne znamo sta su nizovi");
print_r($statickiNiz);
echo "<br>";

# Zamjena kljuceva/indeksa i vrijednosti
$laptopi = array('HP', 'Asus', 'Lenovo');
$laptopiFlipped = array_flip($laptopi);

print_r($laptopi);
print_r($laptopiFlipped);

$mobiteli = array('prvi' => 'Xiaomi', 'drugi' => 'samsung', 'treci' => 'Huawei');
$mobiteliFlipped = array_flip($mobiteli);

print_r($mobiteli);
print_r($mobiteliFlipped);

# Sortiranje niza
$brojevi = array(1, 7, 7, 25, 67, 99, 13, 2);
$brojeviAsoc = array("prvi" => 1, "drugi" => 7, "treci" => 8,
"cetvrti" => 25, "peti" => 67, "sesti" => 99, "sedmi" => 13, "osmi" => 2);

# Sortiranje niza po vrijednosti,rastuci red
print_r(sort($brojevi));

#Sortiranje niza po vrijednosti,opadajuci red
print_r(rsort($brojevi));

# Sortiranje asocijativnog niza,po vrijednosti,rastuci
print_r(asort($brojeviAsoc));

# Sortiranje asocijativnog niza,po vrijednosti,opadajuci
print_r(arsort($brojeviAsoc));

# Sortiranje asocijativnog niza,po kljucevima,rastuci
print_r(ksort($brojeviAsoc));

# Sortiranje  asocijativnog niza,po kljucevima,opadajuci
print_r(krsort($brojeviAsoc));

# Izbacivanje posljednjeg clana niza 
echo array_pop($auta) . "<br>";

# Dodavanje novog clana niza na kraj niza
array_push($auta, 'BMW');

# Izbacivanje prvog clana niza
array_shift($auta);

# Dodavanje novog clana niza na pocetak niza
array_unshift($auta, 'Opel');

# Mapiranje niza na proslijedene varijable
$gradovi = array('Sarajevo', 'Pariz', 'London');
list($bosnia, $france, $england) = $gradovi;
echo $bosnia . " " . $france . " " . $england . "<br>";

# Uzimanje kljuceva iz postojeceg niza u novi niz
$hrana = array('voce' => 'jabuka', 'povrce' => 'brokula', 'meso' => 'piletina');
$hranaKljucevi = array_keys($hrana);
var_dump($hranaKljucevi);

# Brisanje sekvence clanova niza
$brojeviSplice = array(0 ,1, 2, 3, 4, 5);
array_splice($brojeviSplice, 2,3);

# Mijenjanje sekvence clanova niza
array_splice($brojeviSplice, 2,3, 99);

# Uzimanje dijelova  niza u novi niz
$brojeviSlice = array(10, 20, 30, 40, 50);
$brojeviSliceIskinuto = array_slice($brojeviSlice, 1, 4);





?>