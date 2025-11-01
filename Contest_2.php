<?php
//A. Timon and Pumbaa:
    $input = trim(fgets(STDIN));
    sscanf($input, "%d %d", $a, $b);
    if(($a - $b) >= 0){
        echo $a - $b;
    }else{
        echo "0";
    }



//C. Finding Minimums:
    $input = trim(fgets(STDIN));
    sscanf($input, "%d %d", $N, $K);
    $numbers_line = trim(fgets(STDIN));
    $numbers = explode(" ", $numbers_line);
    if(count($numbers) != $N){
        exit;
    }

    $min = 0;
    $flag = 1;
    $counter = 0;
    for($i = 0; $i < $N; $i++){
        $number = (int)$numbers[$i];
           if($flag){
                $min = $number;
                $flag = 0;
            }
            else if($min > $number){
                $min = $number;
           }
           $counter++;
           if($counter == $K || $i == $N-1){
                echo $min." ";
                $counter = 0;
                $flag = 1;
           }
    }
    

//D. Range Sum:
    $T = trim(fgets(STDIN));
    for($i=0; $i<$T; $i++){
        $input = trim(fgets(STDIN));
        sscanf($input, "%d %d", $L, $R);
        $start = min($L, $R);     //3
        $end = max($L, $R);         //6
        $sum_end = $end * ($end + 1) / 2;         //1+2+3+4+5+6 = 21
        $sum_start = ($start - 1) * $start / 2;    //1+2 = 3
        $range_sum = $sum_end - $sum_start;              //21 - 3 = 18
        echo $range_sum."\n";
    }
    


//E 



//F. Break Number:
    $N = trim(fgets(STDIN));
    $numbers_line = trim(fgets(STDIN));
    $numbers = explode(" ", $numbers_line);
    if(count($numbers) != $N){
        exit;
    }
    $counter = 0;
    $flag = 1;
     $max_breaks = 0;
    for($i = 0; $i < $N; $i++){
        $number = $numbers[$i];
        if($flag){
            while($number % 2 == 0){
                $counter++;
                $number = (int) $number / 2;
                $flag = 0;
            }
            $temp = $counter;
            $counter = 0;
            $flag = 1;
        }
        if($max_breaks < $temp){
            $max_breaks = $temp;
            continue;    
        }
    }
    echo $max_breaks;



?>