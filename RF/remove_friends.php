<?php
#Read the input file
$_fp = fopen("rf_input.txt", "r");

#read contents of the file line by line and store in an array $input
while( $line = fgets( $_fp ) ) {
    #Explode the input by space so that can know how many friends Christie have and how many wanted to delete
    $input[]=explode(" ",trim($line));
}

#As first line of input contains the number of test cases
$test_cases=trim($input[0][0]);

#Initiate $i=1 to start from first test case
$i=1;


while($test_cases){
    $test_cases--;

    #$n is the number of friends Christie have
    $n=(int)$input[$i][0];

    #$k is number of friends Christie wants to delete
    $k=(int)$input[$i++][1];


    $popularity_arr=$input[$i++];
    

    while($k){
        $k--;

        $del=false;


        for($flag=0;$flag<count($popularity_arr);$flag++){
            if($popularity_arr[$flag]<$popularity_arr[$flag+1]){

                #delete less popular friend
                unset($popularity_arr[$flag]);

                #To prevent the undefined offset notice
                $popularity_arr = array_values($popularity_arr);
                
                $del=true;
                break;
            }
        }

        #check if last friend's popularity is lesser than all others
        if($del==false)
            unset($popularity_arr[count($popularity_arr)-1]);
    }

    echo implode(" ",$popularity_arr)."\n";
}