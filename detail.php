<?php
require_once('city.php');
require_once('country.php');
require_once('data.php');

$countryName = $_GET['name'];

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
  <div class="detailName">
    <?php echo $countryName; ?>
  </div>
</body>
</html>