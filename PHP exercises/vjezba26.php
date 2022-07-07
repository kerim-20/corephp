<?php

function calculator($numberOne, $numbertwo, $operator){
    if($numberOne > 0 && $numbertwo > 0){

 
    switch($operator){
        case  '+':
            echo $numberOne + $numbertwo;
            break;
            case '-':
                echo $numberOne - $numbertwo;
                break;
                case '*':
                    echo $numberOne * $numbertwo;
                    break;
                    case '/':
                        echo $numberOne / $numbertwo;
                        break;
                        default:
                            echo "Wrong operator";
                            break;
    }
}else{
    echo "All numbers must be over zero.";
}
}
calculator(5, 89, "/");
?>