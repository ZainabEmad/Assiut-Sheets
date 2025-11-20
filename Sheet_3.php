<?php
//A. Summation:
    $N = trim(fgets(STDIN));
    $number_line = trim(fgets(STDIN));
    $numbers = explode(" ", $number_line);
    if(count($numbers) != $N){
        exit;
    }
    $sum = 0;
    foreach($numbers as $number){
        $sum+=$number;
    }
    if($sum < 0){
        $sum = -$sum;
    }
    echo $sum;


//B. Searching:
    $N = trim(fgets(STDIN));
    $numbers_line = trim(fgets(STDIN));
    $numbers = explode(" ", $numbers_line);
    $X = trim(fgets(STDIN));
    if(count($numbers) != $N){
        exit;
    }
    $found = -1;
    foreach($numbers as $key => $number ){
        if($X == $number){
            $found = $key;
            break;
        }
    }
    echo $found;
   

//C. Replacement:
    $N = trim(fgets(STDIN));
    $numbers_line = trim(fgets(STDIN));
    $numbers = explode(" ", $numbers_line);
    if(count($numbers) != $N){
        exit;
    }
    $flag = 1;
    $num = 0;
    foreach($numbers as $number){
            if($number > 0){
                $num = "1";
            }if($number < 0){
                $num = "2";
            }if($number == 0){
                $num = "0";
            }
            if($flag){
                echo $num . " ";
            }
    }
    $flag = 0;


//D. Positions in array:
    $N = trim(fgets(STDIN));
    $numbers_line = trim(fgets(STDIN));
    $numbers = explode(" ", $numbers_line);
    if(count($numbers) != $N){
        exit;
    }
    foreach($numbers as $key => $number){
        if($number <= 10){
            echo "A[$key] = $number \n";
        }
    }


//E. Lowest Number:
    $N = trim(fgets(STDIN));
    $numbers_line = trim(fgets(STDIN));
    $numbers = explode(" ", $numbers_line);
    if(count($numbers) != $N){
        exit;
    }
    $min_value = PHP_INT_MAX;
    $min_index = -1;
    foreach($numbers as $key => $number){
        $num = $number;
        if($min_value > $num){
            $min_value = $num;
            $min_index = $key + 1;
        }
    }
    $result =  $min_value . " " . $min_index;
    echo $result;
  
    
//F. Reversing:
    $N = trim(fgets(STDIN));
    $numbers_line = trim(fgets(STDIN));
    $numbers = explode(" ", $numbers_line);
    if(count($numbers) != $N){
        exit;
    }
    $index = $N-1;
    $Reversing = '';
    for($i = $index; $i >= 0; $i--){
        $Reversing = $numbers[$i];
        if($i > 0){
             $Reversing .= " ";
        }
        echo $Reversing;
    }


//G. Palindrome Array:
    $N = (int)trim(fgets(STDIN));
    $numbers_line = trim(fgets(STDIN));
    $numbers = explode(" ", $numbers_line);
    if(count($numbers) != $N){
        exit;
    }
    $Original = $numbers;
    $index = $N - 1;
    $Reversing = '';
    $Is_Palindrome = false;
    for($i = $index; $i >= 0; $i--){
        if($i < $index){
            $Reversing .= " ";
        }
        $Reversing .= $numbers[$i];
    }
        $Original_str = implode(" ", $Original);
        if($Original_str === $Reversing){
            $Is_Palindrome = true;
        }
     echo $Is_Palindrome ? "YES" : "NO";


//H. Sorting:
//Bubble Sort Algorithm
    $N = trim(fgets(STDIN));
    $numbers_line = trim(fgets(STDIN));
    $numbers = explode(" ", $numbers_line);
    if(count($numbers) != $N){
        exit;
    }
    for($i = 0; $i < $N-1; $i++){
        for($j = 0; $j < $N-$i-1; $j++){
            if($numbers[$j] > $numbers[$j+1]){
                $temp = $numbers[$j];
                $numbers[$j] = $numbers[$j+1];
                $numbers[$j+1] = $temp;
            }
        }
    }
    echo implode(" ", $numbers);


// I. Smallest Pair:
    $T = trim(fgets(STDIN));
    if($T >= 1 && $T <= 100){
        for($t = 0; $t < $T; $t++){
            $N = trim(fgets(STDIN));
            if($N >= 2 && $N <= 100){
                $numbers_line = trim(fgets(STDIN));
                $numbers = explode(" ", $numbers_line);
                if(count($numbers) != $N){
                    exit;
                }
                $smallest_pair = PHP_INT_MAX;
                for($i = 0; $i < $N; $i++){
                    for($j = $i+1; $j < $N; $j++){
                        $sum = $numbers[$i]+$numbers[$j]+($j+1)-($i+1);
                        if($smallest_pair > $sum){
                            $smallest_pair = $sum;
                        }
                    }
                }
        }
        echo $smallest_pair."\n";
        }
    }


//J. Lucky Array:
    $N = trim(fgets(STDIN));
    if($N >= 2 && $N <= 1000){
    $numbers_line = trim(fgets(STDIN));
    $numbers = explode(" ", $numbers_line);
    if(count($numbers) != $N){
        exit;
    }
    $counter = 0;
    $min_num = PHP_INT_MAX;
    foreach($numbers as $number){
        if($min_num > $number){
            $min_num = $number;
        }
    }
    foreach($numbers as $number){
        if($min_num == $number){
            $counter++;
        }
    }
    if($counter % 2 != 0){
        echo "Lucky";
    }else{
        echo "Unlucky";
    }
}


//K. Sum Digits:
    $N = trim(fgets(STDIN));
    $numbers_line = trim(fgets(STDIN));
    $numbers = array_map("intval", str_split($numbers_line));
    $sum = 0;
    if(count($numbers) != $N){
        exit;
    }
    $sum = 0;
    foreach($numbers as $number){
        if($number >= 0 && $number <= 9){
        $sum+=$number;
    }
    }
    echo $sum;


//L. Max Subarray?



//M. Replace MinMax:
    $N = trim(fgets(STDIN));
    $numbers_line = trim(fgets(STDIN));
    $numbers = array_map("intval", explode(" ", $numbers_line));
    if(count($numbers) != $N){
        exit;
    }
    $min_num = PHP_INT_MAX;
    $max_num = PHP_INT_MIN;
    $min_index = 0;
    $max_index = 0;

    for($i = 0; $i < $N; $i++){
        if($min_num > $numbers[$i]){
            $min_num = $numbers[$i];
            $min_index = $i;
        }

        if($max_num < $numbers[$i]){
            $max_num = $numbers[$i];
            $max_index = $i;
        }

    }
    if($min_index != $max_index){
            $temp = $numbers[$min_index];
            $numbers[$min_index] = $numbers[$max_index];
            $numbers[$max_index] = $temp;
        }
    echo implode(" ", $numbers);


// N.Check Code?


//O. Fibonacci:
    $N = trim(fgets(STDIN));
    if($N >= 1 && $N <= 50){
        $fib_array = [];
        $fib_array[0] = 0;
        $fib_array[1] = 1;

        for($i = 2; $i < $N; $i++){
            $fib_array[$i] =  $fib_array[$i-1] +  $fib_array[$i-2];
        }
    }
    echo  $fib_array[$N - 1];


//P. Minimize Number:
    $N = trim(fgets(STDIN));
    $numbers_line = trim(fgets(STDIN));
    $numbers = array_map("intval", explode(" ", $numbers_line));
    if(count($numbers) != $N){
        exit;
    }
    $counter  = 0;
    while(true){
        $all_even = true;
        foreach($numbers as $number){
            if($number % 2 != 0){
                $all_even = false;
                break;
            }
        }
        if(!$all_even){
            break;
        }
        for ($i = 0; $i < $N; $i++) {
        $numbers[$i] = (int)($numbers[$i] / 2);
        }
            $counter++;
        }
    
    echo $counter;


//R. Permutation with arrays:
    $N = trim(fgets(STDIN));
    $numbers_line_A = trim(fgets(STDIN));
    $numbers_A = array_map("intval", explode(" ", $numbers_line_A));
    $numbers_line_B = trim(fgets(STDIN));
    $numbers_B = array_map("intval", explode(" ", $numbers_line_B));
    if(count($numbers_A) != $N || count($numbers_B) != $N){
        exit;
    }
    for($i = 0; $i < $N-1; $i++){
        for($j = 0; $j < $N-$i-1; $j++){
            if($numbers_A[$j] > $numbers_A[$j+1]){
                $temp = $numbers_A[$j];
                $numbers_A[$j] = $numbers_A[$j+1];
                $numbers_A[$j+1] = $temp;
            }
            if($numbers_B[$j] > $numbers_B[$j+1]){
                $temp = $numbers_B[$j];
                $numbers_B[$j] = $numbers_B[$j+1];
                $numbers_B[$j+1] = $temp;
            }
        }

    }
    if($numbers_A == $numbers_B){
        echo "yes";
    }else{
        echo "no";
    }


//S. Search In Matrix:
    $input = trim(fgets(STDIN));
    sscanf($input,"%d %d", $N, $M);
    $A = [];
    for($i = 0; $i < $N; $i++){
        $line = trim(fgets(STDIN));
        $row = explode(" ", $line);
        $A[] = $row;
    }
    $X = trim(fgets(STDIN));
    $found = false;
    for($i = 0; $i < $N; $i++){
        for($j = 0; $j < $M; $j++){
            if($A[$i][$j] == $X){
                $found = true;
            }
        }
    }
    if($found){
        echo "will not take number";
    }
    else{
        echo "will take number";
    }


//T. Matrix:
    $N = trim(fgets(STDIN));
    $M = $N;
    $A = [];
    for($i = 0; $i < $N; $i++){
        $line = trim(fgets(STDIN));
        $row = explode(" ", $line);
        $A[] = $row;
    }
    $sum_main_diagonal = 0;
    $sum_anti_diagonal = 0;
    for($i = 0; $i < $N; $i++){
        for($j = 0; $j < $M; $j++){
            if($i == $j){
                $sum_main_diagonal+=$A[$i][$j];
            }
        }
        $sum_anti_diagonal+=$A[$i][$N-1-$i];
    }
    $abs_difference = $sum_main_diagonal - $sum_anti_diagonal;
    if($abs_difference < 0){
        $abs_difference = - $abs_difference;
    }
    echo $abs_difference;


// Is B a subsequence of A ?: ?



//V. Frequency Array:
    $input = trim(fgets(STDIN));
    sscanf($input, "%d %d", $N, $M);
    $input_line = trim(fgets(STDIN));
    $numbers = array_map("intval", explode(" ", $input_line));
    if(count($numbers) != $N){
        exit;
    }
    foreach($numbers as $number){
        if($number < 0 || $number > $M){
            exit;
        }
    }
    $freq = array_fill(0,$M + 1,0);
    for($i = 0; $i < $N; $i++){
        $num = $numbers[$i];
        $freq[$num]++;
       
    }
    for($i = 1; $i <= $M; $i++){
        echo $freq[$i]."\n";
        }

        
//W. Mirror Array:
    $input = trim(fgets(STDIN));
    sscanf($input, "%d %d", $N, $M);
    $numbers = [];
    $original = $numbers;
    for($i = 0; $i < $N; $i++){
        $line = trim(fgets(STDIN));
        $row = array_map("intval", explode(" ", $line));
        $numbers[] = $row;
    }
    $rev = '';
    for ($i = 0; $i < $N; $i++) {
        for($j = $M - 1; $j >= 0; $j--){
            $rev .= $numbers[$i][$j];
            if($j > 0){
                $rev .= ' ';
            }
        }
        $rev .= "\n";
    }
    echo $rev;



//X. 8 Neighbors:
    $input = trim(fgets(STDIN));
    sscanf($input, "%d %d", $N, $M);
    $numbers = [];
    for($i = 0; $i < $N; $i++){
        $line = trim(fgets(STDIN));
        $numbers[$i] = str_split($line);
    }
    $position = trim(fgets(STDIN));
    sscanf($position, "%d %d", $X, $Y);
    $X--;
    $Y--;

    $directions = [
        [-1,-1], [-1,0], [-1,1],
        [0,-1],           [0,1],
        [1,-1], [1,0], [1,1]
    ];
    $all_x = true;
    foreach($directions as $d){
        $nx = $X + $d[0];
        $ny = $Y + $d[1];

        if($nx > 0 && $nx < $N && $ny > 0 && $ny < $M){
            if($numbers[$nx][$ny] == "."){
                $all_x = false;
                break;
            }
        }
    }
    if($all_x){
        echo "yes";
    }else{
        echo "no";
    }

?>