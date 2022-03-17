<?php



function heading($title = null, $type = 'h1', $align = 'center', $ff = 'impact', $fz = '14px', $color = 'red'){

    return "<{$type} style = \"text-align:{$align}; font-family:{$ff}; font-size:{$fz}; color:{$color}\";>{$title}</{$type}>";
}


function boroHat($txt){
    echo "<span style=\"text-transform:uppercase;color:red;font-size:22px;text-align:center;margin-left:100px;text-shadow: 0px 0px 10px rgba(0,0,0,0.3);\";>{$txt}</span>";
}

function chotoHat($txt){
    echo "<span style=\"text-transform:lowercase;color:red;font-size:22px;text-align:center;font-weight:bolder;text-shadow: 0px 0px 10px rgba(0,0,0,0.3);margin-left:100px\";>{$txt}</span>";
}


?>