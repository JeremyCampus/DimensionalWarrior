<?php

  require_once __DIR__ . "/../base/baseBattleField.php";
  require_once "warrior.php";


  class BattleField extends BaseBattleField
  {
    public static function createMyWarrior()
    {
      $Lloyd = new MarvelWarrior("Ezranar");
      $Lloyd->SetImageUrl("http://vignette3.wikia.nocookie.net/aselia/images/2/2e/Jude_Cut-in_(ToX2).png/revision/latest?cb=20140503053956");

      $sabres = new Weapon ("2 Sabres",120000000000);
      $sabres->SetImageUrl("http://2.bp.blogspot.com/-avvu5ApbONc/Ty5N3VETc3I/AAAAAAAACzs/j5IZDgioHk0/s1600/sabreentier.jpg");

      $Lloyd->setWeapon($sabres,INF);
      $Lloyd->saveNew();

    }
    public static function createOtherWarrior()
    {
      $squelettes = new PokemonWarrior("Big Boss Squelette");
      $squelettes->SetImageUrl("https://vignette.wikia.nocookie.net/aselia/images/e/e5/Sword_Dancer_Model.png/revision/latest?cb=20170805032315");

      $epeeRouille = new Weapon ("2 Sabres",120);
      $epeeRouille->SetImageUrl("https://vignette.wikia.nocookie.net/mogapedia/images/2/28/Grande_%C3%A9p%C3%A9e_us%C3%A9e.png/revision/latest?cb=20140516174413&path-prefix=fr");

      $squelettes->setWeapon($epeeRouille,5);
      $squelettes->saveNew();

    }
  }
