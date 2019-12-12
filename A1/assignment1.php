<?php
$s = "00000011100";
$l = str_split($s);


$zero = 0;
$one = 0;

for ($i = 0; $i < count($l); $i++)  
{ 

    if ($s[$i] == '0') {
        $zero++;  
    } else {
        $one++;  
    } 
    if ($zero == 6 || $one == 6) {
        echo "Sorry, sorry!\n";
        exit();
    }
} 
echo "Good luck!\n";