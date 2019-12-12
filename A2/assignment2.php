<?php
$msg = "lov3333333asdafajfgnkdfn33333e";
// $msg = "lov3333333asdafaejfgnkdfn33333"; # Will O/P I love you, too!
// $msg = "lov3333333asdafajfgnkdfn33333"; # Will O/P Let us breakup!
$msg_arr = str_split($msg);

$love_occured = 0;
$l = $o = $v = $e = false;
for ($i = 0; $i < count($msg_arr); $i++)  
{ 
    if ($msg_arr[$i] == 'l') {
        $l = true;
        $l_index = $i;
    }
    if ($msg_arr[$i] == 'o') {
    	$o = true;
    	$o_index = $i;
    }
    if ($msg_arr[$i] == 'v') {
    	$v = true;
    	$v_index = $i;
    }
    if ($msg_arr[$i] == 'e') {
    	$e = true;
    	$e_index = $i;
    }
}

if ($l == true && $o == true && $v == true && $e == true) {
	if ($e_index > $v_index && $v_index > $o_index && $o_index > $l_index) {
		echo "I love you, too!\n";
	} else {
		echo "Let us breakup!\n";
	}
} else {
	echo "Let us breakup!\n";
}