<?php
#Read the input file
$_fp = fopen("invasion_input.txt", "r");

#read contents of the file line by line and store in an array $input
echo "Input:"."\n";
while( $line = fgets( $_fp ) ) {

    #Explode the input by space so that can know how many friends Christie have and how many wanted to delete
    $input[]=$line;

    echo $line;
}

echo "\n\n\nOutput:\n";

$test_cases = (int)$input[0];

// echo "Test cases = ".$test_cases."\n";

for ($test_case = 1; $test_case <= $test_cases; $test_case++) {
	// echo "Test case number = ".$test_case."\n";
	$rage = 0;
	$sum = 0;
	for ($room=1; $room <= $input[$test_case]; $room++) {
		for ($wing_mate=1; $wing_mate <= $input[$test_case] ; $wing_mate++) {
			// echo "Room no = ".$room."  Rank = ".$wing_mate."\n";
			if ($room != $wing_mate) {
				// echo "i\n";
				$rage++;
			}
		}
		$sum += $rage;
		$rage = 0;
	}

	echo $sum."\n";
}