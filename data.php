<?php
class Data{
  protected $name;
  protected $spotImage;
  protected $goodPoint;
  protected $yourCount;
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

  public function getName() {
    return $this->name;
  }

  public function image() {
    echo $this->spotImage;
  }

  public function goodPoint() {
    return $this->goodPoint;
  }

  public static function count() {
    return self::$count;
  }

  public function setYourCount($yourCount) {
    $this->yourCount = $yourCount;
  }
}

$Hawaii = new Data("Hawaii","https://tabi-pocket-image.tabikobo.com/wp-content/uploads/2019/09/05151820/9hawaii_beach-1.jpg",5);
$Paris = new Data("Paris","https://storage.tenki.jp/storage/static-images/suppl/article/image/2/29/292/29233/1/large.jpg",4);
$Auckland = new Data("Auckland","https://cdn.britannica.com/99/61399-050-B867F67F/skyline-Auckland-New-Zealand-Westhaven-Marina.jpg",3);
$London = new Data("London","https://www.arukikata.co.jp/com_img/city/large/p_LON.jpg",4);
$city = array($Hawaii,$Paris,$Auckland,$London);