<?php
class Country{
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