<?php
$filename = "counter.txt";

// If file does not exist, create it with 0
if (!file_exists($filename)) {
    file_put_contents($filename, 0);
}

// Read current count
$count = file_get_contents($filename);

// Increase count
$count++;

// Save new count
file_put_contents($filename, $count);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Website Counter</title>
</head>
<body>
    <h2>Page Refresh Counter</h2>
    <p>This page has been visited:</p>
    <h1><?php echo $count; ?></h1>
</body>
</html>
