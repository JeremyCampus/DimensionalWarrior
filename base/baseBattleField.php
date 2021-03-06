<?php


  class BaseBattleField
  {
      protected $myWarrior;
      protected $otherWarriors;
      protected $otherWarrior;
      protected $vsId;

      public function setVsId($v)
      {
        $this->vsId = $v;
        $this->otherWarrior = $this->otherWarriors[$v];
      }

      public function getMyWarrior()
      {
        return $this->myWarrior;
      }

      public function getOtherWarrior()
      {
        return $this->otherWarrior;
      }

      public function getOtherWarriors()
      {
        return $this->otherWarriors;
      }

      public function __construct($first, $second)
      {
        $this->myWarrior = $first;
        $this->otherWarriors = $second;
      }

      function warriorPower($w)
      {
        return 1;
        // return ($w->speed + $w->weapon->strength) * $w->power();
      }

      function myPowerRatio()
      {
        return 1;
        // return $this->warriorPower($this->myWarrior) / ($this->warriorPower($this->myWarrior) + $this->warriorPower($this->otherWarrior));
      }

      function myDefenceRatio()
      {
        return 1;

        // return $this->myWarrior->shield / ($this->myWarrior->shield + $this->otherWarrior->shield);
      }

      function permutWeapon()
      {
        // $we = $this->myWarrior->weapon;
        // $this->myWarrior->weapon = $this->otherWarrior->weapon;
        // $this->otherWarrior->weapon = $we;

        $gonflable = new weapon ("NoobPOWER",10);
        $gonflable->SetImageUrl("http://blog.boreal-kiss.net/wp/wp-content/uploads/2012/09/large.gif");
        $this->otherWarrior->weapon = $gonflable;

        $sabres = new weapon("METAL PAWAAAAAAAAAAAA", INF);
        $sabres->SetImageUrl("https://pa1.narvii.com/6471/1bed51fbf0b4c2427fd0ecc61d53079e7fb151d8_hq.gif");


        $this->myWarrior->weapon  = $sabres;

      }

      function save()
      {
        $this->myWarrior->save();
        $this->otherWarrior->save();
      }

      function iWin()
      {
        // if ( $this->myWarrior->weapon->strength < $this->otherWarrior->weapon->strength)
        // {
          $this->permutWeapon();
        // }

        $this->otherWarrior->life -= 10;
        // $this->otherWarrior->life += floor(rand()/getrandmax()*50);
        // $this->otherWarrior->life = 0;

        // and save
        $this->save();
      }

      function iLost()
      {
        // if ( $this->myWarrior->weapon->strength > $this->otherWarrior->weapon->strength)
        // {
          $this->permutWeapon();
        // }

        // $this->otherWarrior->life -= floor(rand()/getrandmax()*50);
        // $this->otherWarrior->life = 0;

        // and save
        $this->save();
      }

      static function getHost()
      {
        return '';
      }
      static function getHostJs()
      {
        return 'document.location.origin + document.location.pathname';
      }

  };

?>
