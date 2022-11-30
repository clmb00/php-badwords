<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="#" type="image/x-icon">
  <title>PHP Badwords</title>
  <style>
    form > *{
      display: block;
      margin-bottom: 10px;
    }
    label, button{
      margin-top: 30px;
    }
  </style>
</head>
<body>

<!-- Gli animali (Animalia Linnaeus, 1758) o metazoi (Metazoa Haeckel, 1874) sono un regno del dominio degli eucarioti, comprendono in totale più di 1 800 000 specie di organismi classificati, presenti sulla Terra dal periodo ediacarano; il numero di specie via via scoperte è in costante crescita, e alcune stime portano fino a 40 volte superiore la numerosità reale[1]; delle 1,5 milioni di specie animali attuali, 900 000 sono appartenenti solo alla classe degli Insetti.[2] -->

  <form action="./next_page.php" method="POST">
    <label for="paragraph_id">Inserisci il testo: </label>
    <textarea name="paragraph" id="paragraph_id" cols="50" rows="10"></textarea>
    <label for="blocked_word_id">Inserisci la parola da censurare: </label>
    <input type="text" name="blocked_word" id="blocked_word_id">
    <button type="submit">Prosegui</button>
  </form>
  
</body>
</html>