<?php require_once('data.php') ?>
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
    <h2>各国の評価</h2>
    <?php foreach($city as $c): ?>
      <?php 
        $c->name();
        echo $_POST['count'];
      ?>

    <?php endforeach ?>
  </div>
</body>
</html>