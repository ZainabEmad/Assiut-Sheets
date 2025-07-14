<?php 
// A. Winter Sale:

    $input = trim(fgets(STDIN));
    sscanf($input, "%d %d",$X, $P);
    if($X >= 1 && $P >= 1){
        $Original_Price = (($P * 100)/(100 - $X));
        echo sprintf("%.2f",$Original_Price);
    }else{
        echo "Values are Invalid";
    }


// B. Memo and Momo:

    $input = trim(fgets(STDIN));
    sscanf($input, "%d %d %d",$a, $b, $k);
    echo ($a%$k == 0 && $b%$k == 0 ? "Both":
         ($a%$k == 0 && $b%$k != 0 ? "Memo":
         ($a%$k != 0 && $b%$k == 0 ? "Momo":
         "No One")));


// C. Next Alphabet:

    $input = trim(fgets(STDIN));
    $C = $input[0];
    if($C == 'z'){
        echo 'a';
    }else{
        echo chr(ord($C) + 1);
    }


// D. Ali Baba and Puzzles:

    $input = trim(fgets(STDIN));
    sscanf($input,"%d %d %d %d",$a, $b, $c, $d);
    if(($d == $a + $b - $c) || ($d == ($a + $b) * $c)||
       ($d == $a - $b + $c) || ($d == ($a - $b) * $c) ||
       ($d == $a * $b + $c) || ($d == $a * $b - $c)) {
        echo "YES";
      }else if(($a + ($b * $c) == $d) || $a - ($b * $c) == $d){
         echo "YES";
      }
      else{
        echo "NO";
      }
        

// E. Interval Sweep:
    $input = trim(fgets(STDIN));
    sscanf($input,"%d %d", $a, $b);
    $n = $a + $b;
    if($n == 0){
        echo "NO";
    }else if($n % 2 == 0){
        if($a == $b){
            echo "YES";
        }else{
            echo "NO";
        }
    }else if($n % 2 != 0){
        if(abs($a - $b) == 1){
            echo "YES";
        }else{
            echo "NO";
        }
    }




// F. Adding Bits:

    $input = trim(fgets(STDIN));
    sscanf($input, "%d %d", $A, $B); 
    echo ($A ^ $B );


// G. Katryoshka:

    $input = trim(fgets(STDIN));
    sscanf($input, "%d %d %d", $n, $m, $k);
    $result = ($n + $m)/2;
    if($n == 0){
        echo "0";
    }
    else{
        $result = ($n + $m) >> 1;
        if($n < $result && $n < $k){
        echo $n;

         }else if($k < $result){
            echo $k;
        }else{
            echo $result;
        }
    }
        

    // H. Data Type Guessing:
    
    $input = trim(fgets(STDIN));
    sscanf($input, "%d %d %d", $n, $k, $a);
    if($a == 0){
        echo "Error: Division by zero";
        exit;
    }
    $result = ($n * $k)/$a;
    if($result == floor($result )){
    if($result >= (-2147483648) && $result <= 2147483647){
        echo "int";
    }else if($result >= -9223372036854775808 && $result <= 9223372036854775807){
        echo "long long";
    }
    }else if($result != floor($result ) ){
        echo "double";
    }


// I. Lucky Numbers:

$N = trim(fgets(STDIN));
if($N >= 10 && $N <= 100){
    $N1 = floor($N/10);
    $N2 = $N % 10;
    if($N1 == 0 || $N2 == 0){
        echo "YES";
        exit;
    } 
    if($N1 % $N2 == 0 || $N2 % $N1 == 0){
        echo "YES";
    }else{
        echo "NO";
    }
}
    
?>