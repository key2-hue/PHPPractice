<?php
class Data{
  protected $name;
  protected $spotImage;
  protected $goodPoint;
  protected static $count = 0;
  public function __construct($name,$spotImage,$goodPoint) {
    $this->name = $name;
    $this->spotImage = $spotImage;
    $this->goodPoint = $goodPoint;
    self::$count++;
  }
  public function name() {
    echo $this->name;
  }
  public function image() {
    echo $this->spotImage;
  }
  public static function count() {
    return self::$count;
  }
}

$Hawaii = new Data("Hawaii","https://tabi-pocket-image.tabikobo.com/wp-content/uploads/2019/09/05151820/9hawaii_beach-1.jpg",5);
$paris = new Data("Paris","https://storage.tenki.jp/storage/static-images/suppl/article/image/2/29/292/29233/1/large.jpg",4);
$city = array($Hawaii,$paris);