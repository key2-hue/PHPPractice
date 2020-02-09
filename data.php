<?php
class Data{
  protected $spotImage;
  protected $goodPoint;
  protected static $count = 0
  public function __construct($spotImage,$goodPoint) {
    $this->spotImage = $spotImage;
    $this->goodPoint = $goodPoint;
    self::$count++;
  }
}