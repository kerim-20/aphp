<?php

class Vehicle{
    public $type;
    public $year;
    public $color;
    public $seats;

    public function __construct($type, $year, $color, $seats){
       $this->type  = $type;
       $this->year = $year;
       $this->color = $color;
       $this->seats = $seats;
    }

    public function upali(){
        return "Vozilo je upaljeno.";
    }
    public function kreni(){
        return "Vozilo se pokrenulo.";
    }
    public function stani(){
        return "Vozilo se zaustavilo.";
    }
    public function ubrzaj(){
        return "Vozilo je ubrzalo.";
    }
    public function uspori(){
        return "Vozilo je usporilo.";
    }
    public function skreni($gdje){
      if($gdje == 'lijevo'){
          return "Vozilo je skrenulo lijevo.";
      }else{
          return "Vozilo je skrenulo desno.";
      }
    }
    public function ugasi(){
        return "Vozilo se ugasilo.";
    }
}
// Instanciranje razlicitih prevoznih sredstava
$auto = new Vehicle('automobil', '2001', 'truhla visnja', '5');
$tenk = new Vehicle('tenk', '1945', 'maslinasta zelena', '3');
$romobil = new Vehicle('romobil', '2018', 'crna', '0');
$role = new Vehicle('role', '1998', 'plava', '0');
$podmornica = new Vehicle('podmornica', '1965', 'crna', '50');
$avion = new Vehicle('avion', '2005', 'bijela', '132');

// Specificnosti
    // auto - nema neke specificnosti
    // tenk - naoruzanje, pucanje, gusjenica, cijev, nema prozora, okret glave za 360 stepeni, ulazi se odozgo,KOPNO
    // romobil - nema sjedista, nema pogona, nema karoseriju
    // role - nema sjedista, nema pogona, nema karoseriju, nema volan,
    // Podmornica - rOnja, plOva, nema tockove,naoruzanje, periskop, radar VODA
    // avion - leti, krila, radar, autopilot, ne moze ici unazad, ZRAK

// Klasa PrevoznoSredstvo
// Klase Auto, Avion, podmornica, Tenk, Romobil, Role nasljeduju klasu prevozno sredstvo
// Klasa Putnicko, Teretno, Sportsko nasljeduju klasu Auto
// Klasa Mercedes, Audi, BMW nasljeduju klasu Putnicko
// Klasa BMW M4 nasljeduje klasu BMW





?>