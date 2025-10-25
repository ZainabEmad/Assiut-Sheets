<?php
//A - 1 to N
$N = trim(fgets(STDIN));
for($i = 1; $i <= $N ; $i++){
    if($i < $N){
    echo $i."\n";
    continue;
    }
     if($i == $N){
        echo $i;
    }
}

//B - Even Numbers
    $N = trim(fgets(STDIN));
    if(!is_numeric($N) || $N < 1){
        echo "Value of N invalid";
        exit;
    }
    $N = (int)$N;
    if($N == 1){
        echo "-1";
        exit;
    }
    for($i = 1; $i <= $N; $i++){
        if(($i % 2 ) == 0){
            echo $i . ($i < $N ? "\n" : "");
        }
    }

//C - Even, Odd, Positive and Negative
    $N = (int)trim(fgets(STDIN));
     if($N >= 1 && $N <= 1000){
    $input = trim(fgets(STDIN));
    $numbers = array_map('intval', explode(' ', $input));
   
    if(count($numbers) != $N){
        die("Number of values does not match N");
    }
    $even_count = 0;
    $odd_count = 0;
    $positive_count = 0;
    $negative_count = 0;
 
    foreach($numbers as $num){
        if($num % 2 == 0){
            $even_count++;
        }else if($num % 2 != 0){
            $odd_count++;
        }
        if($num > 0){
            $positive_count++;
        }else if($num < 0){
            $negative_count++;
        }
    }
    echo "Even: " . $even_count . "\n" . 
         "Odd: " . $odd_count . "\n" . 
         "Positive: " . $positive_count . "\n" . 
         "Negative: " . $negative_count;
    }else{
        echo "Value Of N Is invalid";
    }

// D - Fixed Password
       while($input = trim(fgets(STDIN))){
            $X = (int)$input;
            if($X == 1999){
                echo "Correct\n";
                exit(0);
            }else{
                echo "Wrong\n";
            }
        }

//E - Max
        $N = trim(fgets(STDIN));
        $input = trim(fgets(STDIN));
        $numbers = array_map('intval', explode(' ', $input));
        if(count($numbers) != $N){
            die("Number Of Values Not Match N");
        }
        $MaxNumber = $numbers[0];
        for($i = 0 ; $i < $N ; $i++){
            if($numbers[$i] > $MaxNumber){
                $MaxNumber = $numbers[$i];
            }
        }
        echo "$MaxNumber";

//F - Multiplication table
        $N = trim(fgets(STDIN));
        for($i = 1 ; $i <=12 ; $i++){
            echo "$N * $i = " . $N * $i . ($i < 12 ? "\n" : "") ;
        }

//G - Factorial
         $T = trim(fgets(STDIN));
    if($T < 1 || $T > 15){
        exit("Value Of N Must be between 1 to 15");
    }
        for($i = 0 ; $i < $T ; $i++){
            $N = trim(fgets(STDIN));
             $N = intval($N);
            if($N < 0 || $N > 20){
                echo "Value Of N Must be between 0 to 20";
                continue;
            }
        $factorial = 1;
        if($N > 1){
            for($j = 2 ; $j <= $N ; $j++){
                $factorial *= $j;
            }
        }
        echo "$factorial\n";
    }
// H - One Prime:

    $X = trim(fgets(STDIN));
    $Is_Prime = true;
    if ($X < 2) {
        $Is_Prime = false;
    }else if ($X == 2) {
        $Is_Prime = true;
    }else{
        for ($i = 2; $i <= sqrt($X); $i++) {
            if($X % $i == 0) {
                $Is_Prime = false;
                break;
        }
        }
    }
    if($Is_Prime){
        echo "YES";
    }else{
        echo "NO";
    }

// I. Palindrome:

    $N = (int)trim(fgets(STDIN));
    $Original_N = $N;
     $rev = 0;
     $Is_Palindrome = false;
    while ($N > 0){
        $digit = $N % 10 ;
        $rev = ($rev * 10) + $digit ;
        $N = (int)($N / 10);
    }
    echo $rev . "\n";
    if($rev == $Original_N){
        $Is_Palindrome = true;
    }
    if( $Is_Palindrome ){
        echo "YES";
    }else{
        echo "NO";
    }

// J. Primes from 1 to n

    $N = (int)trim(fgets(STDIN));
    for($i =2; $i <=$N; $i++){
        $is_Prime = true;
        if($N <= 1){
            $is_Prime = false;
    }else{
        for($j = 2; $j <= sqrt($i); $j++){
            if($i % $j == 0){
                $is_Prime = false;
                break;
            }

        }
    }
        if($is_Prime){
        echo "$i". " ";
        }
    }

// K. Divisors:
    $N = (int)trim(fgets(STDIN));
    for($i = 1; $i <= $N; $i++ ) {
        if($N % $i == 0) {
            echo "$i"."\n";
        }
    }


// L.GCD:
    $input = trim(fgets(STDIN));
    sscanf($input, "%d %d",$A, $B);
    while($B != 0){
        $temp = $B;
        $B = $A % $B;
        $A = $temp;
    }
    echo $A;
     

//M.Lucky Number:
    $input = trim(fgets(STDIN));
    sscanf($input, "%d %d", $A, $B);
    $lucky_numbers = [];
    $is_lucky = false;

    for($i = $A; $i <= $B; $i++) {
        $digits = str_split($i);
        $is_lucky = true;

        foreach($digits as $digit){
            if ($digit != '4' && $digit != '7') {
                $is_lucky = false;
                break;
            }
        }
        if($is_lucky){
            $lucky_numbers[] = $i;
        }
    }
    
    if(empty($lucky_numbers)){
        echo "-1";
    }else{
        echo implode( " ", $lucky_numbers);
    }


// N. Numbers Histogram:
    $S = trim(fgets(STDIN));
    $N = trim(fgets(STDIN));
    $input = trim(fgets(STDIN));
    $numbers = array_map("intval", explode(" ", $input));

    for($i = 0; $i < $N; $i++) {
        $result = '';
        for($j = 0; $j < $numbers[$i]; $j++){
            $result .= $S;
        }
        echo $result."\n";
    }

// O. Pyramid:
    $N = trim(fgets(STDIN));
    $star = '';
    for($i = 1; $i <= $N; $i++){
        for( $j = 1; $j <= $N; $j++){
            if($i == $j){
                $star .= "*";
            }
        }
        echo $star."\n"; 
    }

// P. Shape1:
    $N = trim(fgets(STDIN));
    for($i = $N; $i >= 1; $i--){
         $stars = '';
        for($j = 1; $j <= $i; $j++){
            $stars .= "*";
        }
         echo $stars."\n";
    }

// Q. Digits:
    $T = trim(fgets(STDIN));
    for ($i = 0; $i < $T; $i++) {
        $N = trim(fgets(STDIN));
        $digits = [];

        if($N == 0){
            echo "0\n";
            continue;
        }
        while($N > 0){
            $digit = $N % 10;
            $digits[] = $digit;
            $N = (int)($N / 10);
        }
        echo implode(" ", $digits) ."\n";
    }

// R. Sequence of Numbers and Sum:
    while($input = trim(fgets(STDIN))){
        sscanf($input, "%d %d", $N, $M);
        if($N <= 0 || $M <= 0){
            exit;
        }
        $start = min($N, $M);
        $end = max($N, $M);
        $sum = 0;
        for($i = $start; $i <= $end; $i++){
            $sum += $i;
            echo $i . " ";
        }
        echo "sum =".$sum ."\n";
    }
    

//S. Sum of Consecutive Odd Numbers:
    $T = trim(fgets(STDIN));
    for( $i = 0; $i < $T; $i++ ){
        $input = trim(fgets(STDIN));
        sscanf($input , "%d %d", $X, $Y);
        $start = min($X, $Y);
        $end = max($Y, $X);

        $sum = 0;
        for($j = ($start+1); $j < $end; $j++ ){
            if($j % 2 != 0){
                $sum +=$j;
            }
        }
         echo $sum."\n";
    }
   
//T. Shape2:
    $N = trim(fgets(STDIN));
    for($i = 1; $i <= $N; $i++){
        $space = $N - $i ;
        $stars = 2 * $i - 1;

        for($j = 1; $j <= $space; $j++){
            echo " ";
        }
         for($s = 1; $s <= $stars; $s++){
                echo "*";
        }
        echo "\n";
    }

//U. Some Sums
    $input = trim(fgets(STDIN));
    sscanf($input, "%d %d %d", $N, $A, $B);
    $summetion = 0;
    if(!(1 <= $A && $A <= $B && $B <= 36)){
        echo "Value Not Valid";
        exit;
    }
    for($i = 1; $i <= $N; $i++){
        $temp = $i;
        $sum = 0;
        while($temp > 0){
            $sum += $temp % 10;
            $temp = (int)($temp /10);
        }
            
        if($sum >= $A && $sum <= $B){
            $summetion += $i;
        }           
    }
    echo $summetion;

    
// PUM
    $N = trim(fgets(STDIN));
    $A = 1;
    $B = 2;
    $C = 3;
    for($i = 0; $i < $N; $i++){
        echo $A." ".$B." ".$C." "."PUM"."\n";
        $A += 4;
        $B += 4;
        $C += 4;
    }


//W. Shape3
    $N = trim(fgets(STDIN));
    for($i = 1; $i <= $N; $i++){
        $space = $N - $i;
        $stars = 2 * $i - 1;
        for($s = 0; $s < $space; $s++){
            echo " ";
        }
        for($j = 0; $j < $stars; $j++){
            echo "*";
        }
        echo "\n";
    }
      for($i = $N; $i >= 1; $i--){
        $space = $N - $i;
        $stars = 2 * $i - 1;
        for($s = 0; $s < $space; $s++){
            echo " ";
        }
        for($j = 0; $j < $stars; $j++){
            echo "*";
        }
        echo "\n";
    }


//X. Convert To Decimal 2:
    $T = trim(fgets(STDIN));
    for($i = 0; $i < $T; $i++){
        $N = trim(fgets(STDIN));
        $numbers = [];
        while($N > 0){
            $binary  = $N % 2;
            $N = (int)($N / 2);       
            if($binary == 1){
                 $numbers[] = $binary;
            }
             $power = 0;
             $sum = 0;
            foreach($numbers as $number){
                $decimal = $number * pow(2, $power);
                $power++;
                $sum += $decimal;
            }
        }
        echo $sum."\n";
    }


//Y. Easy Fibonacci:
    $N = trim(fgets(STDIN));
    $fib0 = 0;
    $fib1 = 1;
    $flag = 0;
    if($flag = 1 && $N == 1){
        echo $fib0;
    }
    if($flag = 1 && $N >= 2){
        echo $fib0 ." ". $fib1 ." ";
        for($i = 0; $i < ($N-2); $i++){
            $fib = $fib0 + $fib1;
            $fib0 = $fib1;
            $fib1 = $fib;
            if($flag = 1){
            echo $fib . " ";
            }
        }
    }


//Z. Three Numbers:
    $input = trim(fgets(STDIN));
    sscanf($input, "%d %d", $K, $S);
    $counter = 0;
    for($x = 0; $x < $K; $x++){
        for($y = 0; $y < $K; $y++){
            if($S-$x-$y >= 0 && $S-$x-$y <= $K){
                $counter++;
            }
        }
    }
    echo $counter;

?>
