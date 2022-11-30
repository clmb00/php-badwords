<?php

    $paragraph = $_POST['paragraph'];
    $blocked_word = $_POST['blocked_word'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="#" type="image/x-icon">
  <title>PHP Badwords - Next Page</title>
</head>
<body>

  <p><?php echo $paragraph ?></p>
  <p><?php echo $blocked_word ?></p>
  
</body>
</html>