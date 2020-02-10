<?php
require_once("city.php");
require_once("country.php");

$Hawaii = new City("Hawaii","https://tabi-pocket-image.tabikobo.com/wp-content/uploads/2019/09/05151820/9hawaii_beach-1.jpg",5);
$Paris = new City("Paris","https://storage.tenki.jp/storage/static-images/suppl/article/image/2/29/292/29233/1/large.jpg",4);
$Auckland = new City("Auckland","https://cdn.britannica.com/99/61399-050-B867F67F/skyline-Auckland-New-Zealand-Westhaven-Marina.jpg",3);
$London = new City("London","https://www.arukikata.co.jp/com_img/city/large/p_LON.jpg",4);


$Finland = new Country("Finland","https://www.jtb.co.jp/kaigai/area/finland/images/fb.jpg",5);
$Canada = new Country("Canada","https://www.lieugaksquare.com/ca/img/caofficial.jpg",3); 
$Australia = new Country("Australia","https://x.hankyu-travel.com/cms_photo_image/image_search_kikan5.php?p_photo_mno=00376-webbn-18418.jpg",4);
$travalInfo = array($Hawaii,$Paris,$Auckland,$London,$Finland,$Canada,$Australia);