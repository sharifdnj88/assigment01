<?php

echo "<span style=\"font-weight:bolder;text-decoration:underline;text-shadow: 0px 0px 10px rgba(0,0,0,0.3);margin-left:20px;font-size:18px\";> 1. Result Function: </span> <br>";

$marks  = 90;

if( $marks >=0 && $marks <=32 ){
    echo "<h2 style=\"color:red;text-align:center;text-shadow: 0px 0px 10px rgba(0,0,0,0.3);\">Your Result: Failed.</h2>";
}else if( $marks >=33 && $marks <=50 ){
    echo "<h2 style=\"color:green;text-align:center;\">Your Result: <span style=\"color:maroon;text-shadow: 0px 0px 10px rgba(0,0,0,0.3);\";> GPA-3.0 or B Grade. </span> </h2>";
}else if( $marks >=50 && $marks <=60 ){
    echo "<h2 style=\"color:green;text-align:center;\">Your Result: <span style=\"color:maroon;text-shadow: 0px 0px 10px rgba(0,0,0,0.3);\";> GPA-3.50 or A- Grade. </span> </h2>";
}else if( $marks >=60 && $marks <=70 ){
    echo "<h2 style=\"color:green;text-align:center;\">Your Result: <span style=\"color:maroon;text-shadow: 0px 0px 10px rgba(0,0,0,0.3);\";> GPA-4.0 or A Grade. </span></h2>";
}else if( $marks >=70 && $marks <=80 ){
    echo "<h2 style=\"color:green;text-align:center;\">Your Result: <span style=\"color:maroon;text-shadow: 0px 0px 10px rgba(0,0,0,0.3);\";> GPA-5.0 or A+ Grade. </span></h2>";
}else if( $marks >=80 && $marks <=100 ){
    echo "<h2 style=\"color:green;text-align:center;\">Your Result: <span style=\"color:maroon;text-shadow: 0px 0px 10px rgba(0,0,0,0.3);\";> Golden-Plus. </span></h2>";
}else{
    echo "<h2 style=\"color:red;text-align:center;text-shadow: 0px 0px 10px rgba(0,0,0,0.3);\">Invalid Result !</h2>";
}




?>