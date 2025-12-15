<?php
session_start();

$file = "visitors.txt";

// Create file if it doesn't exist
if (!file_exists($file)) {
    file_put_contents($file, 0);
}

// Count visitor only once per session
if (!isset($_SESSION['visited'])) {

    $_SESSION['visited'] = true;

    $count = file_get_contents($file);
    $count++;
    file_put_contents($file, $count);
}

// Read total visitors
$totalVisitors = file_get_contents($file);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Visitor Counter</title>
</head>
<body>
    <h2>Total Visitors</h2>
    <h1><?php echo $totalVisitors; ?></h1>
</body>
</html>
