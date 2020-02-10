<?php
require_once('travel.php');
class City extends Travel{
  public function __construct($name,$spotImage,$goodPoint) {
    parent::__construct($name,$spotImage,$goodPoint);
  }
}

