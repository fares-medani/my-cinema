<?php

class Cinema {

    public $titre;

    public $date_sortir;

    public $auteur;

    public function __construct($titre, $date_sortir, $auteur)
    {
        $this->titre = $titre;
        $this->date_sortir = $date_sortir;
        $this->auteur = ucfirst($auteur);
    }

    public function welcome()
    {
        return "Bienvenue " . $this->auteur;
    }

    public function goodbay()
    {
        return "A bientot " . $this->auteur;
    }

    public function parler(string $mot)
    {
        return $this->auteur . " : " . ucfirst(trim($mot));
    }
}


$objet1 = new Cinema("Bad boy", "2020/12/09", "mick");
$objet2 = new Cinema("Avatar", "2020/12/09", "john doe");

echo $objet1->welcome() . " <br>";
echo $objet2->goodbay() . " <br>";
echo $objet1->parler("   salut comment tu vas   ") . " <br>";
echo $objet2->parler("oui ca va très bien e t chez toi ") . " <br>";
