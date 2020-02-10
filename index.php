<?php

  require_once("city.php");
  require_once("data.php");
  require_once('country.php');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Country site</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
</head>
<body>
  <p>行った都市の数<?php echo City::count(); ?>ヶ所</p>
  <p> <i class="far fa-thumbs-up">もしくは<i class="fas fa-globe-asia"></i></i>が多いほど他の方の満足度は高いです。<p>
  <form action="result.php" method="post">
  <div class="country">
    <?php foreach($travalInfo as $c): ?>
      <div class="oneCountry">
        <div class="countryImage">
          <img src="<?php echo $c->image();?>" class="spotImage">
        </div>
        <div class="countryInfo">
          <p><?php echo $c->name(); ?></p>
          <?php for($i = 1;$i < $c->goodPoint();$i++): ?>
            <?php if($c instanceof City): ?>
              <i class="far fa-thumbs-up"></i>
            <?php else: ?>
              <i class="fas fa-globe-asia"></i>
            <?php endif ?>
          <?php endfor ?>
        </div>
        <div class="countryReview">
          <input type="text"  value="0" name="<?php echo $c->name() ?>">
        </div>
      </div>
    <?php endforeach ?>
  </div>
  <input type="submit" class="countrySubmit" value="送信する">
  </form>
</body>
</html>