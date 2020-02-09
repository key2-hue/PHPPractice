<?php

  require_once("data.php");
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Order site</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
  <p>行った国の数<?php echo Data::count(); ?>ヶ国</p>
  <div class="country">
    <?php foreach($city as $c): ?>
      <p><?php echo $c->name(); ?></p>
      <img src="<?php echo $c->image();?>" class="spotImage">
    <?php endforeach ?>
  </div>
</body>
</html>