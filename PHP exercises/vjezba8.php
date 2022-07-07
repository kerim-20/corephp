<?php

# Operator dodjele = 
$varijabla = 'neka vrijednost';

# Aritmeticki operatori +,-,/,%,*
$varijabla1 = 5 + 10;
$varijabla2 = 10 - 5;
$varijabla3 = 10 / 5;
$varijabla4 = 10 * 5;
$varijabla5 = 23 % 4;

# Operatori poredenja <,>, <=, >= , ==, ===, !=, !==
if (10 > 5){ echo "Tacno1 <br>";}
if (5 < 10){ echo "Tacno2 <br>";}
if ( 5 <= 5){ echo "Tacno3 <br>";}
if (5 >= 5){ echo "Tacno4 <br>";}
if (5 == "5"){ echo "Tacno5 <br>";}
if (5 === "5"){ echo "Tacno6 <br>";}
if (5 != 10){ echo "Tacno7 <br>"; }
if (5 !== "5"){ echo "Tacno8 <br>"; }

# Spaceship operator <=>
if (5 <=> 5){ echo "Tacno9 <br>";}
if ( 6 <=> 5){ echo "Tacno10 <br>";}
if (5 <=> 6){ echo "Tacno11 <br>";}

# String operator . (konkatenacija stringa)
$varijabla6 = "String1" . "String2";

# Unarni operatori +=, -=, *=, %=, .=
$varijabla7 = $varijabla7 + 1;
$varijabla7 += 1;

$varijabla8 = $varijabla8 - 1;
$varijabla8 -= 1;

$varijabla9 = $varijabla9 / 1;
$varijabla9 /= 1;

$varijabla10 = $varijabla10 * 1;
$varijabla10 *= 1;

$varijabla11 = $varijabla11 % 1;
$varijabla11 %= 1;

$varijabla12 = $varijabla12 . "1";
$varijabla12 .= "1";

# Inkrement ++ | Dekrement --
$varijabla13 = 5;
$varijabla13 = $varijabla13 + 1;
$varijabla13++;

$varijabla14 = 7;
$varijabla14 = $varijabla14 - 1;
$varijabla14--;

$a = 10;
$x = ++$a;
echo $x; //X ce biti 11;
echo "<br>";
echo $a;

$b = 10;
$y = $b++;
echo $y; //Y ce biti 10
echo "<br>";
echo $b;

echo "<hr>";
$t = 4;
$r = $t--;
echo ($r++)+$t;
# Logicki operatoti &&, ||, ! 
if (5 === 10 && 3 ==3){ echo "Tacno12 <br>";}
if (5 === 10 || 3 == 3){ echo "Tacno13 <br>";}
if (!(3 == 3)){ echo "Tacno14 <br>";}

# Bit operatori << , >>, |, & , i jos nekoliko znakova

# Implicitna konverzacija podataka
$o = 4 + 4;
echo $o;

# >Eksplicitna konverzacija podataka
$p = 4 + (int)"4";
echo $p;

# Koji tip podataka je varijabla
echo gettype($p);
