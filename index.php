<?php

echo "<h2 style=\"font-weight:bolder;text-decoration:underline;text-shadow: 0px 0px 10px rgba(0,0,0,0.3);text-align:center;\";> Assigment-01 </h2> <br>";
echo "<br><br>";

include_once "./result.php";
include_once "./agecalculator.php";
include_once "./functions.php";




/**
 * AgeCalculator Function
 */

echo "<span style=\"font-weight:bolder;text-decoration:underline;text-shadow: 0px 0px 10px rgba(0,0,0,0.3);margin-left:20px;font-size:18px\";> 2. AgeCalculator: </span> <br>";


echo ageCal( 'Sharif', 1995 );
echo ageCal( 'Habib', 1993 );

echo "<br>";

/**
 * Dynamic Header Function
 */

echo "<span style=\"font-weight:bolder;text-decoration:underline;text-shadow: 0px 0px 10px rgba(0,0,0,0.3);margin-left:20px;font-size:18px\";> 3. Dynamic Heading: </span> <br>";

echo heading( 'My name is Sharif and I love PHP.', 'h1', 'center', 'operator mono', '22px' );

echo heading( 'My name is Sharif and I love PHP.', 'h1', 'center', 'impact', '22px', 'blue' );

/**
 * Currency Conveter
 */

echo "<span style=\"font-weight:bolder;text-decoration:underline;text-shadow: 0px 0px 10px rgba(0,0,0,0.3);margin-left:20px;font-size:18px\";> 4. Currency Conveter: </span> <br>";

include_once "./currency.php";

echo "<br><br>";

/**
 * Uppercase & Lowercase
 */

echo "<span style=\"font-weight:bolder;text-decoration:underline;text-shadow: 0px 0px 10px rgba(0,0,0,0.3);margin-left:20px;font-size:18px\";> 5. Uppercase & Lowercase : </span> <br>";

echo boroHat( 'my name sharif' );

echo "<br>";

echo strtoupper('<h2 style="margin-left:100px;font-size:22px";text-shadow: 0px 0px 10px rgba(0,0,0,0.3);margin-left:20px;font-size:18px> my name is sharif </h2>');

echo "<br>";

echo chotoHat( 'MY NAME IS SHARIF' );

echo "<br>";

echo strtolower('<h2 style="margin-left:100px;font-size:22px";text-shadow: 0px 0px 10px rgba(0,0,0,0.3);margin-left:20px;font-size:18px> MY NAME IS SHARIF </h2>');

echo "<br><br>";

/**
 * Capture Code
 */

echo "<span style=\"font-weight:bolder;text-decoration:underline;text-shadow: 0px 0px 10px rgba(0,0,0,0.3);\";> 6. Capture Code : </span> <br>";


$code = str_shuffle('0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%&*-+');

echo substr($code, 10, 6);

echo "<br><br>";

/**
 * OTP Code
 */

echo "<span style=\"font-weight:bolder;text-decoration:underline;text-shadow: 0px 0px 10px rgba(0,0,0,0.3);\";> 7. OTP Code : </span> <br>";

echo rand( 1000,999999 );

echo "<br><br>";

/**
 * Password Generate
 */

echo "<span style=\"font-weight:bolder;text-decoration:underline;text-shadow: 0px 0px 10px rgba(0,0,0,0.3);\";> 8. Password Generate : </span> <br>";

$name_2 = "Md Shariful Islam said";

echo password_hash( $name_2, PASSWORD_DEFAULT );
echo "<br><br>";



/**
 * Incremet & Decrement Loop
 */

echo "<span style=\"font-weight:bolder;text-decoration:underline;text-shadow: 0px 0px 10px rgba(0,0,0,0.3);margin-left:20px;font-size:18px\";> 9. Increment & Decrement Loop : </span> <br>";

include_once "./loop.php";

echo "<br><br>";

/**
 * USE for loop 3 & 4 Devided
 * Please check the Loop.php file.
 */

 /**
 * Multiplication Table or Namata
 * Please check the Loop.php file.
 */


include_once "./mathmetical_functions.php";

echo getArea('r', 20, 30);

echo "<br><br>";

include_once "./bmi.php";

bmi(75, 1.61544);
