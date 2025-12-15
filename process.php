<?php
if ($_SERVER["REQUEST_METHOD"] ==="POST") {
    $name=$_POST['username'];
    echo "welcome ".$name;
}
?>
