<?php 
require_once('city.php');
require_once('data.php');
require_once('country.php');
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>Country result</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
</head>
<body>
  <div class="countryPoint">
    <h2 class="countryE">各国の評価</h2>
    <div class="countryAll">
      <?php foreach($travelInfo as $c): ?>
        <p class="countryName">
          <?php 
          $c->name();
          ?>
          <?php 
            $yourCount = $_POST[$c->getName()];
            $c->setYourCount($yourCount);
            echo $yourCount;
          ?>
          <?php for($i = 1;$i <= $yourCount;$i++): ?>
            <i class="far fa-thumbs-up"></i>
          <?php endfor ?>
        </p>
      <?php endforeach ?>
    </div>
  </div>
  <a href="index.php" class="back">前画面に戻る</a>
 </body>
</html>