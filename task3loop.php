<!-- displays 1-2-3-4-5-6-7-8-9-10 on one line -->
<!-- <?php

    for ($i = 1; $i <= 10; $i++) {
        if (!($i == 1))
            echo "-";
        echo $i;
    }

?> -->

<!-- add all the integers between 0 and 30 and display the total.  -->
<!-- <?php
    $sum = 0;
    for($i = 0;$i<=30;$i++){
      $sum+=$i;
    }
    echo $sum;
?> -->


<!-- crazy pattern 1
  A A A A A 
A A A B B 
A A C C C 
A D D D D 
E E E E E
-->
<!-- <?php
    for($i = 1 ; $i<=5 ; $i++){
      for($j = 1 ; $j<=5 ; $j++){
        if($i == 1)
          echo "A";
        elseif($i==2)
          echo $j <= 3 ? "A" : "B";
        elseif($i==3)
          echo $j <=2 ? "A" : "C";
         elseif ($i == 4)
          echo $j <= 1 ? "A" : "D";
          else
            echo "E";
        echo "&nbsp &nbsp";
      }
      echo "<br>";
    }
?> -->

<!-- crazy pattern 
  1 1 1 1 1 
1 1 1 2 2 
1 1 3 3 3 
1 4 4 4 4 
5 5 5 5 5

-->
<!-- <?php
    for($i = 1 ; $i<=5 ; $i++){
      for($j = 1 ; $j<=5 ; $j++){
        if($i == 1)
          echo "1";
        elseif($i==2)
          echo $j <= 3 ? "1" : "2";
        elseif($i==3)
          echo $j <=2 ? "1" : "3";
         elseif ($i == 4)
          echo $j <= 1 ? "1" : "4";
          else
            echo "5";
        echo "&nbsp &nbsp";
      }
      echo "<br>";
    }
?> -->


<!-- crazy pattern 3
1 0 0 0 0 
0 2 0 0 0 
0 0 3 0 0 
0 0 0 4 0 
0 0 0 0 5
-->
<!-- <?php
    for($i = 1 ; $i<=5 ; $i++){
      for($j = 1 ; $j<=5 ; $j++){
        if($i == 1)
          echo $j == 1 ? "1" : "0";
        elseif($i==2)
          echo $j == 2 ? "2" : "0";
        elseif($i==3)
          echo $j ==3 ? "3" : "0";
         elseif ($i == 4)
          echo $j == 4 ? "4" : "0";
          else
            echo $j == 5 ? "5" : "0";
        echo "&nbsp &nbsp";
      }
      echo "<br>";
    }
?> -->

<!-- $factorial -->
<!-- <?php
    $num = 5;
    $factorial =1;
    for($i = 1;$i <= $num; $i++){
       $factorial= $factorial * $i;
    }
    echo "the factorial for $num is $factorial";
?> -->

<!-- Fibonacci sequence  -->
<!-- <?php
    $num1 = 0;
    $num2 = 1;
    echo $num1 . ", " . $num2 . ", ";

    for($i = 2 ; $i<10 ;$i++){
      $next = $num1 + $num2 ;
      echo "$next, ";

      $num1 = $num2 ;
      $num2 = $next ;
    }
?> -->


<!-- count c -->
<!-- <?php
    $text = "Orange Coding Academy" ;
    $count = 0;

    for($i=0 ; $i < strlen($text) ; $i++){
      if (strtolower($text[$i]) == 'c') {
        $count++;
    }
    }
    echo $count;
?> -->

<!-- table -->
<!-- <?php
    echo "<table border>";
    for($i =1 ;$i<=6;$i++){
      echo"<tr>";
      for($j=1;$j<=5;$j++){
        echo "<td style='padding:3px'>" . $i . "*" . $j . "=" . $i*$j . "</td>";
      }
      echo"</tr>";
    }

    echo "</table>";
?> -->


<!-- FizzBuss -->
<!-- <?php 
    for($i = 1 ; $i<=50 ; $i++){
      if($i%3==0 && $i%5==0)
        echo "FizzBuzz";
      elseif($i%3==0)
        echo"Fizz";
      elseif($i%5==0)
        echo"Buzz";
        else
          echo " " . $i . " ";
    }
?> -->


<!-- Floyd triangle -->
<!-- <?php
    $count = 1;
    for($i = 1;$i<=5;$i++){
      for($j = 1 ;$j <= $i ; $j++){
        echo $count . " ";
        $count++;
      }
      echo "<br>";
    }
?> -->


<!-- crazy pattern 
     A 
    A B 
   A B C 
  A B C D 
 A B C D E 
  A B C D 
   A B C 
    A B 
     A

-->
<?php
    $spaces = 5;
    for($i = 1 ; $i<=5;$i++){
      $letter = ord("A");
      for($j = 1;$j<=$spaces;$j++)
        echo "&nbsp &nbsp";

      for($j = 1;$j<=$i;$j++){
        echo chr($letter) . "&nbsp &nbsp";
        $letter++;
      }
      $spaces--;
      echo "<br>";
    }
    $spaces = 2;
    for($i = 1 ; $i<=4;$i++){
      $letter = ord("A");
      for($j = 1;$j<=$spaces;$j++)
        echo "&nbsp &nbsp";

      for($j = 4;$j>=$i;$j--){
        echo chr($letter) . "&nbsp &nbsp";
        $letter++;
      }
      $spaces++;
      echo "<br>";
    }
?>

