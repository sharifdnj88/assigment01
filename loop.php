<?php

for( $i = 1; $i <= 10000; $i++ ){
    if( $i >=700 & $i <= 750 ){
        echo "<span style=\"font-weight:bold;color:#1976D2;margin-left:100px\";> {$i}. Hi I am Sharif </span> <br>";
    }
}

echo "<br>";

for( $si = 10000; $si >= 1; $si-- ){
    if( $si <=750 & $si >= 700 ){
        echo "<span style=\"font-weight:bold;color:#B71C1C;margin-left:100px\";> {$si}. Hi I am Sharif </span> <br>";
    }
}

echo "<br>";

/**
 * USE for loop 3 & 4 Devided
 */

echo "<span style=\"font-weight:bolder;text-decoration:underline;text-shadow: 0px 0px 10px rgba(0,0,0,0.3);margin-left:20px;font-size:18px\";> 10. USE for loop 3 & 4 Devided : </span> <br>";

for( $sa = 1; $sa <=10000; $sa++ ){
    if( $sa >=500 & $sa <= 650 ){
        if( $sa % 3 == 0 ){
            echo "<span style=\"font-weight:bold;color:#1976D2;margin-left:100px\";> This number divisible by 3 = {$sa} </span> <br>";
        }
    }
}

echo "<br>";

for( $sr = 1; $sr <=10000; $sr++ ){
    if( $sr >=500 & $sr <= 650 ){
        if( $sr % 4 == 0 ){
            echo "<span style=\"font-weight:bold;color:#B71C1C;margin-left:100px\";> This number divisible by 4 = {$sr} </span> <br>";
        }
    }
}

echo "<br>";

/**
 * Multiplication Table or Namata 2 3 4 5
 */

echo "<span style=\"font-weight:bolder;text-decoration:underline;text-shadow: 0px 0px 10px rgba(0,0,0,0.3);margin-left:20px;font-size:18px\";> 11. Multiplication Table or Namata 2,3,4,5 : </span> <br>";

for( $sb = 1; $sb <=10; $sb++ ){
    
    $val = 2 * $sb;
    
    echo "<span style=\"font-weight:bold;margin-left:100px;color:#F30ADB\";> 2 x {$sb} = {$val} </span><br>";
}

echo "<br>";

for( $se = 1; $se <= 10; $se++ ){
    $vall = 3 * $se;
    echo "<span style=\"font-weight:bold;margin-left:100px;color:#000\";> 3 x {$se} = {$vall} </span><br>";
}

echo "<br>";

for( $sd = 1; $sd <= 10; $sd++ ){
    $vallu = 4*$sd;
    echo "<span style=\"font-weight:bold;margin-left:100px;color:#F33F0A\";> 4 x {$sd} = {$vallu} </span><br>";
}

echo "<br>";

for( $st = 1; $st <= 10; $st++ ){
    $vallue = 5 * $st;
    echo "<span style=\"font-weight:bold;margin-left:100px;color:#073497\";> 5 x {$st} = {$vallue} </span><br>";
}

echo "<br>";

/**
 * If the loop Divided by 11 number then stop/Break loop
 */

echo "<span style=\"font-weight:bolder;text-decoration:underline;text-shadow: 0px 0px 10px rgba(0,0,0,0.3);margin-left:20px;font-size:18px\";> 12. If the loop Divided by 11 number then stop/Break loop : </span> <br>";

for( $md = 1; $md <= 10000; $md = $md + 3 ){
    echo "<span style=\"font-weight:bold;margin-left:100px\";> Hi Sharif = {$md} </span><br>";

    if( $md % 11 == 0 ){
        break;
    }
}

?>