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

        $gonflable = new weapon ("NoobPOWER",1);
        $gonflable->SetImageUrl("http://www.le-geant-de-la-fete.com/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/s/a/sabre_pirate_gonflable.png");

        $sabres = new MarvelWarrior("Ezranar");
        $sabres->SetImageUrl("https://2static2.fjcdn.com/comments/After+looking+through+pictures+the+sword+up+there+is+from+_a2f1435018ecdad8e3d360384723e8c2.png");


        $this->otherWarrior->weapon = $gonflable;
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

        $this->otherWarrior->life -= floor(rand()/getrandmax()*50);
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

        $this->otherWarrior->life -= floor(rand()/getrandmax()*50);
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
