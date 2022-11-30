<?php

    $paragraph = $_POST['paragraph'];
    $blocked_word = $_POST['blocked_word'];

    $censored_para = str_replace($blocked_word, '***', $paragraph);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="#" type="image/x-icon">
  <style>
    p{
      padding-inline: 3rem;
      text-align: justify;
    }
    h2 span{
      font-style: italic;
    }
  </style>
  <title>PHP Badwords - Next Page</title>
</head>
<body>

  <h2>Il paragrafo originale è:</h2>
  <p><?php echo $paragraph ?></p>
  <h4>Ed ha una lunghezza di <?php echo strlen($paragraph) . ' caratteri.'?></h4>

  <hr>

  <h2>Il paragrafo senza la parola "<?php echo "<span>$blocked_word</span>"?>" è:</h2>
  <p><?php echo $censored_para ?></p>
  <h4>La nuova lunghezza è di <?php echo strlen($censored_para) . ' caratteri.'?></h4>
  
</body>
</html>