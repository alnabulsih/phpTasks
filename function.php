<!-- prime number -->
<!-- <?php
    $num = 5;
    // Output
    if (isPrime($num)) {
        echo "$num is a prime number";
    } else {
        echo "$num is not a prime number";
    }

    function isPrime($number) {
    if ($number <= 1) {
        return false;
    }

    for ($i = 2; $i < $number; $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }

    return true;
}
?> -->


<!-- reverseString -->
<!-- <?php
    function reverseString($text){
      $reversed = "";
      for($i = strlen($text)-1 ; $i>=0 ; $i--){
        $reversed .= $text[$i];
      }
      return $reversed;
    }

    $string = "remove";
    echo reverseString($string);
?> -->


<!-- isAllLowerCase -->
<!-- <?php 
    function isAllLowerCase($text){
      for($i = 0;$i < strlen($text); $i++){
        if(!ctype_alpha($text[$i]) || !ctype_lower($text[$i]))
          return false;
      }
      return true;
    }

    $string = "remove2";
    if(isAllLowerCase($string))
      echo "your string is OK";
    else 
      echo "your string NOT OK";
?> -->


<!-- swapVar -->
<!-- <?php
    function swapVar(&$num1 , &$num2){
      $swap =$num1;
      $num1 = $num2;
      $num2 = $swap;
    }

    $x = 5;
    $y = 10;

    swapVar($x , $y);
    echo "x = ". $x ."<br>". "y = ". $y;
?> -->


<!-- Armstrong num -->
<!-- <?php
    function isArmstrong($number){
      $sum = 0;
      $temp = $number ;

      while($temp>0){
        $digit = $temp % 10;
        $sum += $digit ** 3 ;
        $temp = intdiv($temp, 10); 
      }

      return $sum === $number ;
    }

    $num=407;
    if(isArmstrong($num)){
      echo "$num is Armstrong Number ";
    }  
    else{
      echo "$num is NOT Armstrong Number ";
    }
?> -->


<!-- Palindrome -->
<!-- <?php
    function isPalindrome($text){
      // Remove all non-alphanumeric characters and convert to lowercase
      $cleaned = strtolower(preg_replace("/[^A-Za-z0-9]/","",$text));
      $reversed = strrev($cleaned);
      return $cleaned === $reversed ;
    }

    $string = "Eva, can I see bees in a cave?";

    if(isPalindrome($string))
      echo "Yes, it is a palindrome";
    else
       echo "No, it is not a palindrome";
?> -->



<?php 
    function removeDuplicates($arr){
      return array_values(array_unique($arr));
    }

    $array1 = array(2,4,7,4,8,4);
    $array1 = removeDuplicates($array1);

    print_r($array1);
?>


