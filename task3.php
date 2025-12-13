<!--   Logical Statements and Operators         -->

<!-- leap year  -->
<!-- <?php 
$year = 2013;  

if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
    echo "This year is a leap year";
} else {
    echo "This year is not a leap year";
}
?> -->


<!-- temperature -->
<!-- <?php
$temperature = 27; 

if ($temperature < 20) {
    echo "It is wintertime!";
} else {
    echo "It is summertime!";
}
?> -->


<!-- It is summertime! -->
<!-- <?php
$firstInteger = 2;
$secondInteger = 2;

if ($firstInteger === $secondInteger) {
    $sum = ($firstInteger + $secondInteger) * 3;
    echo "($firstInteger + $secondInteger) * 3 = $sum";
} else {
    echo "It is summertime!";
}
?> -->


<!-- sum -->
<!-- <?php
$firstInteger = 10;
$secondInteger = 20;

if ($firstInteger + $secondInteger == 30) {
    $sum = ($firstInteger + $secondInteger) ;
    echo $sum;
} else {
    echo "fulse";
}
?> -->


<!-- multiple of 3 -->
<!-- <?php
$firstInteger = 30;

if ($firstInteger%3==0) {
    echo "True";
} else {
    echo "fulse";
}
?>  -->

<!-- integer value is in the range of [20-50]  -->
<!-- <?php
$num = 70;

if ($num>=20 && $num<=50) {
    echo "True";
} else {
    echo "fulse";
}
?>  -->


<!-- The largest number -->
<!-- <?php
$num1 = 1;
$num2 = 5;
$num3 = 9;

$largest = max($num1, $num2, $num3);
echo "The largest number is: $largest";
?> -->


<!-- Electricity -->
<!-- <?php
$units = 275; 
$bill = 0;

if ($units <= 50) {
    $bill = $units * 2.50;
} elseif ($units <= 150) {
    $bill = (50 * 2.50) + (($units - 50) * 5.00);
} elseif ($units <= 250) { 
    $bill = (50 * 2.50) + (100 * 5.00) + (($units - 150) * 6.20);
} else {
    $bill = (50 * 2.50) + (100 * 5.00) + (100 * 6.20) + (($units - 250) * 7.50);
}

echo "Total Electricity Bill for $units units: $bill JOD";
?> -->


<!-- calculator  -->
<!-- <?php
// Input numbers
$num1 = 12;
$num2 = 4;

// Choose the operation: "add", "subtract", "multiply", "divide"
$operation = "multiply";

$result = 0;

switch ($operation) {
    case "add":
        $result = $num1 + $num2;
        echo "$num1 + $num2 = $result";
        break;
    case "subtract":
        $result = $num1 - $num2;
        echo "$num1 - $num2 = $result";
        break;
    case "multiply":
        $result = $num1 * $num2;
        echo "$num1 × $num2 = $result";
        break;
    case "divide":
        if ($num2 != 0) {
            $result = $num1 / $num2;
            echo "$num1 ÷ $num2 = $result";
        } else {
            echo "Error: Division by zero is not allowed!";
        }
        break;
    default:
        echo "Invalid operation!";
}
?> -->

<!-- eligible age to vote -->
<!-- <?php
$age = 15; 

if ($age >= 18) {
    echo "You are eligible to vote.";
} else {
    echo "You are not eligible to vote.";
}
?> -->

<!-- a number is positive, negative or zero -->
<!-- <?php
$num = -1; 

if ($num == 0) {
    echo "the uum is 0";
} else if ($num > 0){
    echo "the uum is positiv";
}
  else echo "the uum is negative";
?> -->


<!-- average & score   -->
<?php
// $scores = [60, 86, 95, 63, 55, 74, 79, 62, 50];
$scores = [90, 96, 95, 93, 95, 94, 99, 92, 100];
// calculate average
$average = array_sum($scores) / count($scores);
// convert to integer for switch comparison
$avgInt = intval($average);

switch (true) {
    case ($avgInt>90):
        $grade = "A";
        break;

    case ($avgInt>80):
        $grade = "B";
        break;

    case ($avgInt>70):
        $grade = "C";
        break;

    case ($avgInt>60):
        $grade = "D";
        break;

    default:
        $grade = "F";
}

echo "Average Score: $average<br>";
echo "Grade: $grade";
?>
