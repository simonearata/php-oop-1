<?php

  class Movie
  {
    // variabili
    public $titolo;
    public $genere;
    public $durata;
    public $attori;
    public $regia;
    public $data;
    private $budget;
    static $biglietti = 200;

    // costruttore
    public function __construct($_titolo, $_genere)
    {
      $this->titolo = $_titolo;
      $this->genere = $_genere;
    }

    // metodo statico
    static function getBiglietti()
    {
      return self::$biglietti;
    }

    // metodo per titolo e genere film
    public function getInfo()
    {
      return "Titolo film: ".$this->titolo."<br>"."Genere film: ".$this->genere;
    }

    // metodo set per variabile privata
    public function setBudget($_budget)
    {
      $this->budget = $_budget;
    }

    //metodo get per stampare budget
    public function getBudget()
    {
      return $this->budget;
    }

  }


?>