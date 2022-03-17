<?php


 /**
  * BMI Formula
  */

  echo "<span style=\"font-weight:bolder;text-decoration:underline;text-shadow: 0px 0px 10px rgba(0,0,0,0.3);margin-left:20px;font-size:18px\";> 14. BMI Formula : </span> <br>";

echo "";

function bmi( $weight , $height ){

    $bmi = $weight / ( $height*$height );

    if( $bmi < 18.5 ){
        echo "<h3 style=\"font-weight:bold;margin-left:100px;color:#F23E05\";> Your Weight is {$weight} kg <br> Height is {$height} meters & <br> You  are Underweight </h3>";
    }else if( $bmi >=18.5 & $bmi <= 24.9 ){
        echo "<h3 style=\"font-weight:bold;margin-left:100px;color:#000\";> Your Weight is {$weight} kg <br> Height is {$height} meters & <br> You  are weight is normal </h3>";
    }else if( $bmi >=25 & $bmi <= 29.9 ){
        echo "<h3 style=\"font-weight:bold;margin-left:100px;color:#000\";> Your Weight is {$weight} kg <br> Height is {$height} meters & <br> You  are OverWeight </h3>";
    }else if( $bmi >= 30 ){
        echo "<h3 style=\"font-weight:bold;margin-left:100px;color:red\";> Your Weight is {$weight} kg <br> Height is {$height} meters & <br> You  are Obesity </h3>";
    }else{
        echo "Invalid BMI";
    }
}





?>