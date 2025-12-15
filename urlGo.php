<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form method="post">
    <input type="text" name="url" placeholder="inter url here">
    <button type="submit" name="go">GO</button>
  </form>
  <?php
    if(isset($_POST['go'])){
      $url=trim($_POST['url']);

      if(!preg_match("~^https?://~i", $url)){
        $url = "https://" . $url;
      }

    if (filter_var($url, FILTER_VALIDATE_URL)){
        header("Location: $url");
        exit();
      }
      else{
        echo "<p style='color:red;'>Invalid URL</p>";
      }
    }
  ?>
</body>
</html>