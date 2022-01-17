<?php

//Classe
class Movie {

  public $titolo;
  public $genere;
  public $durata;
  public $anno;
  public $voto = '';

  //Costruttore
  function __construct($_titolo, $_genere)
  {
    $this->titolo = $_titolo;
    $this->genere = $_genere;
  }

  //metodi
  public function setVoto($valutazione){
    if ($valutazione <= 2.5) {
      $this->voto = "bassa";
    }
    if ($valutazione < 4) {
      $this->voto = "media";
    }
    if ($valutazione >= 4) {
      $this->voto = "alta";
    }
  }

  public function getVoto(){
    return $this->voto;
  }

}

//Variabili d'istanza
$avatar = new Movie("Avatar", "Sci-fi/Azione");
$avatar->durata = 162;
$avatar->anno = 2009;
$avatar->setVoto(4.5);

$interstellar = new Movie("Interstellar", "Sci-fi/Avventura");
$interstellar->durata = 169;
$interstellar->anno = 2014;
$interstellar->setVoto(3.5);

var_dump($avatar);
var_dump($interstellar);


?>