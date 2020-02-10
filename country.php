<?php
require_once('travel.php');
class Country extends Travel{
  public function __construct($name,$spotImage,$goodPoint) {
    parent::__construct($name,$spotImage,$goodPoint);
  }

}