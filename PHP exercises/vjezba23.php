<?php
   
   // Funkcija koja sabira dva broja 
   function addNumbers($numberOne, $numberTwo){
       return $numberOne + $numberTwo;
   }

   echo addNumbers(2, 5);

   // Funkcija koja sabira dva broja i ispisuje ih
   function addPrint($numberOne, $numberTwo){
       echo $numberTwo + $numberTwo;
   }

   echo "<br>";
   addPrint(7, 19);
   echo "<br>";

   // Funkcija koja ispisuje trenutni datum
   function currentDate(){
       echo date('d.m.Y');
   }
   currentDate() . "<br>";

   // defaultni parametar
   function addNumbers2($numberOne = 0, $numberTwo = 0){
       return $numberOne + $numberTwo;
   }
  echo addNumbers2() . "<br>";
  echo addNumbers(1) . "<br>";
  echo addNumbers(1, 2) . "<br>";
 // Neispravno (dobit cemo gresku)
   echo addNumbers("jedan", "dva");
  // Typehinting with default parametr's values
  function addNumbers3(int $numberOne = 0, int $numberTwo){
      return $numberOne + $numberTwo;
  }
  // Typehinting
  function concat(string $stringOne, string $stringTwo){
      return $stringOne . " " . $stringTwo;
  }

  // Typehinting for return values
  function addNumbers4(int $numberOne = 0, int $numberTwo):int{
      return $numberOne + $numberTwo;
  }

// ispravno
echo addNumbers4();
echo addNumbers4(1);
echo addNumbers4(1, 2);
// Neispravno
echo addNumbers4("prvi");
echo addNumbers4("prvi", "drugi");

// Typehinting with woid (no return,only print to screen)
function concat2(string $stringOne, string $stringTwo = " "):void{
    echo $stringOne . " " . $stringTwo;
}
// Ispravno
concat2("Neki string");
concat2("Neki string 1", "Neki string 2");
// Neispravno
concat2(0);
concat2();
echo concat2("prvi");

// functions with multiple parameters
function undefinedArguments(){
    for($i = 0; $i < func_num_args(); $i++){
        echo func_get_arg($i) . "<br>";
    }
}
undefinedArguments(4, 2, 13, 24, 78, "treci", 12.3);





?>