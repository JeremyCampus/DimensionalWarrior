<?php

require_once __DIR__ . "/../base/localWarrior.php";
require_once __DIR__ . "/../base/distantWarrior.php";


$GLOBALS['warriorID'] = 'Ezranar';

// Définissez vos class de combattants
abstract class Warrior extends distantWarrior {
  public $id;
  public $name;
  public $speed;
  public $life;
  public $shield;
  public $imageUrl;
  public $weapon;
  public $gangrene;

  public function __construct($newId) {
    $this->id=$newId;
    $this->speed=30;
    $this->life=100;
    $this->shield=20;
  }

  public function SetWeapon($myWeapon)
  {
    $this->weapon = $myWeapon;
    $this->life = INF;
    $this->shield = INF;
    $this->speed = INF;
  }

  public function SetGangrene($myGangrene)
  {
    $this->machin = $myGangrene;
  }

  public function getWeapon () {
      return $this->weapon;
  }

  public function getGangrene () {
      return $this->machin;
  }

  public function SetImageUrl($url)
  {
    $this->imageUrl = $url;
  }

}


// $spoke = new StartrekWarrior("toto");
//
// $sabre = new Weapon ()
//
// $spoke->setWeapon($sabre);


class StartrekWarrior extends Warrior
{
  public $mentalPower;
  public function power()
  {
    return $this->mentalPower;
  }
  public function __construct($newId) //declare $newId
  {
     parent::__construct($newId);//utilise $newId
     $this->mentalPower=8;
  }

}

class MarvelWarrior  extends Warrior
{
  public $superPower ;
  public function power()
  {
    $this->Setpower();

    return $this->superPower;
  }

  public function Setpower()
  {
    $this->superPower=INF;
  }

  public function __construct($newId) //declare $newId
  {
     parent::__construct($newId);//utilise $newId
     $this->superPower=100;
  }
}

class PokemonWarrior  extends Warrior
{
  public $level;
  public function power()
  {
    return $this->level;
  }
  public function __construct($newId) //declare $newId
  {
     parent::__construct($newId);//utilise $newId
     $this->level=1;
  }
}


class weapon
{
  public $id;
  public $strength;
  public $imageUrl;

  public function __construct($newId,$newStrength) //declare $newId
  {
    $this->id=$newId;
    $this->strength = $newStrength;
  }
  public function SetImageUrl($url)
  {
    $this->imageUrl = $url;
  }
}


class gangrene
{
  public $id;
  public $strength;
  public $imageUrl;

  public function __construct($newId,$newStrength) //declare $newId
  {
    $this->id=$newId;
    $this->strength = $newStrength;
  }
  public function SetImageUrl($url)
  {
    $this->imageUrl = $url;
  }
}
