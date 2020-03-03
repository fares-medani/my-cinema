<?php

class Repas{

    public string $nom;
    public float $prix;


    public function __construct($nom,$prix)
    {
      $this->nom = $nom;
      $this->prix = $prix;
    }
}

class Commande{

    public $repas;
    public $totale;
    public $client;

    public function __construct(array $repas,int $totale = 0, Client $client)
    {
        $this->repas = $repas;
        $this->totale = $totale;
        $this->client = $client;
    }

    public function ajouterdesRepas(Repas $repas)
    {
        // Ajouter un nouveau repas dans le tableau
        array_push($this->repas, $repas);

        // calculer le prix pour chaque repas ajouter
        $this->totale = $this->totale + $repas->prix;
    }

    public function afficherCommande()
    {
        return [
            "Repas" => $this->repas,
            "Total" => $this->totale,
            "Client" => $this->client
        ];
    }
}

class Client{

    public string $nom;
    public string $ville;

    public function __construct($nom,$ville)
    {
        $this->nom = $nom;
        $this->ville = $ville;
    }

    public function infoClient()
    {
        return "Non : ".$this->nom ."<br/>Ville : ".$this->ville;
    }

}


//Repas
$repas1 = new Repas("Burger", 9.50);
$repas2 = new Repas("Kebab", 13.30);
$repas3 = new Repas("Coca", 2.00);
$repas4 = new Repas("Pizza", 5.00);

//Clients
$client1 = new Client("fares","alger");
$client2 = new Client("john","paris");
$client3 = new Client("mick","Lyon");

//Commandes
$commande1 = new Commande([], 0, $client1);
$commande2 = new Commande([], 0, $client2);
$commande3 = new Commande([], 0, $client3);


$commande1->ajouterdesRepas($repas1);
$commande1->ajouterdesRepas($repas2);
$commande1->ajouterdesRepas($repas3);

echo "<pre>";
var_dump($commande1->afficherCommande());

//Backend (php)

//Frontend (html css js)