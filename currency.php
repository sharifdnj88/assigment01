<?php




$amount  = 115;
$type    =  "won";




switch($type){
    case 'dollar';
    $rate = 85.95;
    break;


    case 'cad';
    $rate = 67.67;
    break;

    case 'pound';
    $rate = 112.71;
    break;

    case 'euro';
    $rate = 94.62;
    break;

    case 'won';
    $rate = 0.070;
    break;    

    default :
    $rate = 0;
    break;
}




$bdt = $amount * $rate;
echo "<span style=\"color:darkgreen;font-weight:bold;margin-left:100px;font-size:30px;text-shadow: 0px 0px 10px rgba(0,0,0,0.3);\";> {$amount} {$type} = {$bdt} BDT  </span>";




?>