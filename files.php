<?php
$filename = "info.txt";

if (file_exists($filename)) {
    // Read file into an array (each line becomes an array element)
    $lines = file($filename);

    // Count the number of lines
    $lineCount = count($lines);

    echo "Number of lines in the file: $lineCount";
} else {
    echo "File not found!";
}
?>




<!-- <?php
echo'
    <table border="1">
    <tr>
      <td>
        salary of MR. A
      </td>
       <td>
        1000$
      </td>
    </tr>
    <tr>
      <td>
        salary of MR. B
      </td>
       <td>
        2000$
      </td>
    </tr>
    </table>
  ';
?> -->


<!-- <?php
  $filename = "php-basfilename:es.php";
  if(file_exists($filename)){
    $lastModified = filemtime($filename);
    echo "last modified" . date("l, js F, Y, g:ia",$lastModified);
  }else{
    echo "file is not exist";
  }
?> -->



<?php
// Start the session
session_start();

// Create a session variable
$_SESSION['userRole'] = "admin";

echo "Session variable 'userRole' is set. <br>";
echo "<a href='read_session.php'>Go to next page</a>";
?>

