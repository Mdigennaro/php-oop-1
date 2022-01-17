<?php

//Classe
class Movie {

  public $titolo;
  public $genere;
  public $durata;
  public $anno;
  public $valutazione;

}

//Variabili d'istanza
$avatar = new Movie();
$avatar->titolo = "Avatar";
$avatar->genere = "Sci-fi/Azione";
$avatar->durata = 162;
$avatar->anno = 2009;
$avatar->valutazione = 4.5;

$interstellar = new Movie();
$interstellar->titolo = "Interstellar";
$interstellar->genere = "Sci-fi/Avventura";
$interstellar->durata = 169;
$interstellar->anno = 2014;
$interstellar->valutazione = 3.5;

var_dump($avatar);
var_dump($interstellar);

?>