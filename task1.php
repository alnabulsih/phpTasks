<?php
// Redirect immediately
header("Location: https://www.w3schools.com/");
exit();
?>

<!-- <?
// Display PHP version
echo "<h2>PHP Version</h2>";
echo phpversion();

// Display full PHP configuration
echo "<h2>PHP Configuration Information</h2>";
phpinfo();
?> -->

<!-- <?php  
    $ip = $_SERVER['REMOTE_ADDR'];
    echo "Client IP Address: " . $ip;
?> -->

<!-- <?php
    echo basename($_SERVER['PHP_SELF']);
?> -->


<!-- <?php 
    $url = "https://www.w3schools.com/php/default.asp";
    $parts = parse_url($url);

    echo "scheme : " . $parts['scheme'] . "<br>";
    echo "host : " . $parts['host'] . "<br>";
    echo "path : " . $parts['path'] . "<br>";
?> -->


<!-- <?php
$string = "PHP Tutorial";

// Get first character
$firstChar = $string[0];

// Get the rest of the string
$rest = substr($string, 1);

// Output with first character in red
echo "<span style='color:red'>$firstChar</span>$rest";
?> -->



