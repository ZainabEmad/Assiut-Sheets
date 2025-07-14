<?php 
// A. Say Hello:
    $S = trim(fgets(STDIN));
        echo "Hello, $S\n";

// B. Basic Data Types:
    $input = trim(fgets(STDIN));
    sscanf($input, "%d %ld %c %f %lf", $a, $b, $c, $d, $e);
        echo $a . "\n";
        echo $b . "\n";
        echo $c . "\n";
        echo $d . "\n";
        echo $e . "\n";

// C. Simple Calculator:
    $input = trim(fgets(STDIN));
        sscanf($input, "%d %d", $X, $Y);
        echo "$X + $Y = " . ($X + $Y) . "\n";
        echo "$X * $Y = " . ($X * $Y) . "\n";
        echo "$X - $Y = " . ($X - $Y) . "\n";

// D. Difference:
    $input = trim(fgets(STDIN));
        sscanf($input, "%d %d %d %d", $A, $B, $C, $D);
        $X = ($A * $B) - ($C * $D);
        echo "Difference = $X";

// E. Area of a Circle:
    $input = trim(fgets(STDIN));
        $R = (double)$input;
        $pi = 3.141592653;
        $area = $pi * ($R * $R);
        echo number_format($area, 9, '.', '');

//F. Digits Summation:
    $input = trim(fgets(STDIN));
    sscanf($input, "%d %d", $N, $M);
        $N = $N % 10;
        $M = $M % 10;
        echo $N + $M;

// G. Summation from 1 to N:
    $input = trim(fgets(STDIN));
    $N = (int)$input;
    $N = $N * ($N + 1) / 2;
    echo $N;

// H. Two numbers:
    $input = trim(fgets(STDIN));
    sscanf($input, "%lf %lf", $A, $B);
    echo "floor $A / $B = " . floor($A / $B) . "\n";
    echo "ceil $A / $B = " . ceil($A / $B) . "\n";
    echo "round $A / $B = " . round($A / $B) . "\n";

//I. Welcome for you with Conditions:
    $input = trim(fgets(STDIN));
    sscanf($input, "%d %d", $A, $B);
    echo ($A >= $B ? "Yes" : "No") . "\n";    

// J. Multiples:
    $input = trim(fgets(STDIN));
    sscanf($input, "%d %d", $A, $B);
    echo ($A % $B == 0 || $B % $A == 0 ? "Multiples" : "No Multiples") . "\n";

//K. Max and Min:
    $input = trim(fgets(STDIN));
    sscanf($input, "%d %d %d", $A, $B, $C);
    echo ($A <= $B && $A <= $C ? $A : ($B <= $A && $B <= $C ? $B : $C)) . " ";
    echo ($A >= $B && $A >= $C ? $A : ($B >= $A && $B >= $C ? $B : $C));

//L. The Brothers:
    $input1 = trim(fgets(STDIN));
    $input2 = trim(fgets(STDIN));
    sscanf($input1, "%s %s", $F1, $S1);
    sscanf($input2, "%s %s", $F2, $S2);
    echo ($S1 == $S2 ? "ARE Brothers" : "NOT");

//M. Capital or Small or Digit:
    $input = trim(fgets(STDIN));
    $X = $input[0];
    echo ($X >= '0' && $X <= '9' ? "IS DIGIT" : 
         ($X >= 'A' && $X <= 'Z' ? "ALPHA\nIS CAPITAL" : 
          "ALPHA\nIS SMALL"));

//N. Char:
    $input = trim(fgets(STDIN));
    $X = $input[0];
    echo ($X >= 'a' && $X <= 'z' ? chr(ord($X) - 32) : chr(ord($X) + 32));

//O. Calculator:
    $input = trim(fgets(STDIN));
    sscanf($input, "%d %c %d", $A, $S, $B);
    echo ($S == '+' ? ($A + $B) :
          $S == '-' ? ($A - $B) :
          $S == '*' ? ($A * $B) :
          $S == '/' && $B != 0 ? ($A / $B) : "Invalid operation or division by zero");

//P. First digit:
    $input = trim(fgets(STDIN));
    $X = (int)$input;
    echo (($X / 1000) % 2 == 0 ? "EVEN" : "ODD");
// Q. Coordinates of a Point:
    
    $input = trim(fgets(STDIN));
    sscanf($input,"%f %f", $X, $Y);
    echo ($X==0 && $Y ==0 ? 'Origem' :
         ($X!=0 && $Y ==0 ? 'Eixo X' :
         ($X==0 && $Y !=0 ? 'Eixo Y' :
         ($X > 0 && $Y > 0 ? 'Q1' :
         ($X < 0 && $Y > 0 ? 'Q2' :
         ($X < 0 && $Y < 0 ? 'Q3' :
          'Q4')))))
         );
    

// R. Age in Days:
   
   $N = intval(trim(fgets(STDIN)));
    $years = floor($N / 365);
    $remaning_val = $N % 365;
    $months = floor($remaning_val / 30);
    $days = $remaning_val % 30;
    echo "$years years\n$months months\n$days days";
    


// S. Interval
    
    $X = floatval(trim(fgets(STDIN)));
    echo ($X >=0 && $X <= 25 ? "Interval [0,25]":
         ($X > 25 && $X <= 50 ? "Interval (25,50]":
         ($X > 50 && $X <= 75 ? "Interval (50,75]":
         ($X > 75 && $X <= 100 ? "Interval (75,100]": 
        "Out of Intervals")))
         );
    

// T. Sort Numbers:
    
    $input = trim(fgets(STDIN));
    sscanf($input, "%i %i %i", $A, $B, $C);
    echo ($A >= $B && $A >= $C && $B <= $A && $B >= $C ? "$C\n$B\n$A\n\n$A\n$B\n$C" :  //CBA
         ($B >= $A && $B >=$C && $A <= $B && $A >=$C ? "$C\n$A\n$B\n\n$A\n$B\n$C":    //CAB
         ($C >= $A && $C >= $B && $A <= $B && $A <= $C ? "$A\n$B\n$C\n\n$A\n$B\n$C":    //ABC
         ($A >= $B && $A >=$C && $C <= $A && $C >= $B ? "$B\n$C\n$A\n\n$A\n$B\n$C":    //BCA
         ($B >= $A && $B >=$C && $C >= $A && $A <= $B ? "$A\n$C\n$B\n\n$A\n$B\n$C":    //ACB
         "$B\n$A\n$C\n\n$A\n$B\n$C")))));  //BAC
    

// U. Float or int:
    
    $N = floatval(trim(fgets(STDIN)));
    echo (floor($N) == $N ? "int " . floor($N) :
         ($N != floor($N) ? "float " . floor($N) ." ". number_format($N-floor($N),3,'.'," "):                                            
         "Not"));
         

// V. Comparison:
 
    $input = trim(fgets(STDIN));
    sscanf($input, "%i %c %f", $A,$S,$B);
    echo ($A > $B && $A>0 && $B>0 && $S == ">" ? "Right":
         ($A < $B && $A>0 && $B>0 && $S == "<" ? "Right":
         ($A > $B && $A<0 && $B<0 && $S == ">" ? "Right":
         ($A < $B && $A<0 && $B<0 && $S == "<" ? "Right" :
         ($A > $B && $A>0 && $B<0 && $S == ">" ? "Right":
         ($A < $B && $A<0 && $B>0 && $S == "<" ? "Right" :
         ($A == $B && $S == "=" ? "Right":
          "Wrong")))))));
 

//  W. Mathematical Expression:
  
    $input = trim(fgets(STDIN));
    sscanf($input, "%i %c %i  %c %i", $A, $S, $B, $Q, $C);
    if(($S == "+" && $A + $B == $C) ||
       ($S == "-" && $A - $B == $C) ||
       ($S == "*" && $A * $B == $C)){
        echo "Yes";
       }
       else if ($S == "+" && $A + $B <> $C){
        echo $C = $A + $B;
       }
        else if ($S == "-" && $A - $B <> $C){
        echo $C = $A - $B;
       }
        else if ($S == "*" && $A * $B <> $C){
        echo $C = $A * $B;
       }
  

//   X. Two intervals:
    
    $input = trim(fgets(STDIN));
    sscanf($input, "%i %i %i %i", $l1, $r1, $l2, $r2);
    if (max($l1, $l2) <= min($r1, $r2)) {
        echo max($l1, $l2) . " " . min($r1, $r2);
    }else {
        echo "-1";
    }
    

    // Y. The last 2 digits:
    
    $input = trim(fgets(STDIN));
    sscanf($input, "%d %d %d %d", $A, $B, $C, $D);
        if($A >= 2 && $B >= 2 && $C >= 2 && $D >= 2){
            $result = ($A * $B) % 100;
            $result = ($result * $C) % 100;
            $result = ($result * $D) % 100;
            echo sprintf("%02d", $result);
        }else{
        echo "Values Must Be Greater Than Of 2";
        }
    

    // Z. Hard Compare:
    
    $input = trim(fgets(STDIN));
    sscanf($input, "%d %d %d %d", $A, $B, $C, $D);
    if(($A >= 1) && ($B >= 1) && ($C >= 1) && ($D >= 1)){
        $left_log = $B * log($A);
        $right_log = $D * log($C);
        if($left_log > $right_log){
            echo "YES";
        }else{
            echo "NO";
        }
    }else{
        echo "Values Must Be Greater Than Of 0";
    }
?>