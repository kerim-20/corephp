<?php

//Ispis na ekran/izlaz

echo "Ovo je ispis";
print "Ovo je ispis";
print ("Ovo je ispis");

if(print "Ovo je ispis!");
echo "<hr>";
// Jednostruki i dvostruki navodnici
echo "Ispis broj 1";
echo 'Ispis broj 2';
echo "<hr>";

$broj_godina = 35;
echo "<h3>broj godina je: $broj_godina </h3>";
echo '<h3>broj godina je: $broj_godina </h3>';

echo "<h3>broj godina je:" . $broj_godina . "</h3>";
echo '<h3>broj godina je:' . $broj_godina . ' </h3>';
echo "<hr>";
// Ispis za testiranje
var_dump($broj_godina);
echo "<hr>";
// Print_r ispis niza(u svrhe testiranja)
$niz = array(1,2,3,4,5,6);
print_r($niz);
echo "<hr>";

// Print_f Ispis (za evaluaciju promjenljivih u string)
$broj = 111;
printf("Cijeli broj: %d, Decimalni prikaz: %.3f, Binarni prikaz: %b",$broj, $broj,
$broj);
echo "<hr>";

//Promjenljive i konstante
$ime = "ITAcademy";
echo $ime;
echo "<br>";
$ime = "InternetAcademy";
echo $ime;
echo "<br>";

define("KOMPANIJA", "LINKgroup");
echo KOMPANIJA;
define("KOMPANIJA", "noviLINKgroup");//NECE I DA MOZE!
echo KOMPANIJA;

//Promjenljive se mogu mijenjati,konstante ne mogu!
    //Konstante nemaju dolar znak 
    //Nazivi se pisu velikim slovima

    //Tipovi podataka
    $broj = 13; //INTEGER
    $broj = "13,3"; //DECIMALNI,FLOAT
    $broj = "13"; //STRING TEKSTUALNI TIP
    $broj = '13';   //STRING ODNOSNO TEK.TIP
    $broj = true; //Boolean tacno-netacno
    $broj = false; //Boolean netacno-tacno

    // Tipovi podataka(slozeni)
    $niz = array(1,2,3,4);  //Niz
    echo $niz [0];
    echo $niz [1];
    echo $niz [2];
    echo $niz [3];

    // NI tamo,ni ovamo :D
    $niz = NULL;
    


