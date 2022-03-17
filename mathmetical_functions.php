<?php


echo "<span style=\"font-weight:bolder;text-decoration:underline;text-shadow: 0px 0px 10px rgba(0,0,0,0.3);margin-left:20px;font-size:18px\";> 13. Rectangle, Square, & The diameter of the circle : </span> <br>";



/**
 * Rectangle, Square, & The diameter of the circle Function
 */

 function getArea($type = 'r', $length , $width = null){

    $area       = '';
    $area_type  = '';

    switch($type){
        case 'r':
            $area       = $length * $width;
            $area_type  = 'Rectangle';
            break;

        case 's':
            $area       = $length * $length;
            $area_type  = 'Square';
            break;

        case 't':
            $area       = 0.5 * ( $length * $width );
            $area_type  = 'Triangle';
            break;

        case 'c':
            $area       = 3.1416 * ( $length * $length );
            $area_type  = 'Circle';
            break;

        default:
            $area = 'Undefined';
            $area_type = 'Undefined';
            break;

            
    }

    return "<span style=\"font-weight:bold;margin-left:100px\";> Area of this {$area_type} is {$area} </span>";
    

 }

 

?>