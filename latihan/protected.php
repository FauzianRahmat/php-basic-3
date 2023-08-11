<?php

class Mobil 
{
  protected $roda = 4;

}

class MobilSport extends Mobil
{
  protected $maxSpeed;
}

$ferrari = new MobilSport;
echo $ferrari->roda ; // 4 

?>