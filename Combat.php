<?php

class Combat {
    
    public $name = "Combat";

    public $vie;

    public $attak;

    public $coup_point;

    public $coup_pied;

    public function __construct(string $name, int $vie, $attak, $coup_point, $coup_pied)
    {
        $this->name = $name;
        $this->vie = $vie;
        $this->attak = $attak;
        $this->coup_point = $coup_point; 
        $this->coup_pied = $coup_pied;
    }

    public function parler(string $mot)
    {
        return ucfirst(trim($mot));
    }

    public function attaque(Combat $combatant1,Combat $combatant2)
    {
        $combatant2->vie = $combatant2->vie - $combatant1->attak;
    }

    public function coup_point(Combat $combatant1,Combat $combatant2)
    {
        $combatant2->vie = $combatant2->vie - $combatant1->coup_point;
    }

    public function coup_pied(Combat $combatant1,Combat $combatant2)
    {
        $combatant2->vie = $combatant2->vie - $combatant1->coup_pied;
    }

    /**
     * @param Combat $combatant1
     * @param Combat $combatant2
     */
    public function magie(Combat $combatant1,Combat $combatant2)
    {
        $combatant2->vie = $combatant2->vie - 10;
    }

    public function __toString()
    {
        return  "Vie : ". $this->vie . " - " . $this->name . "<br>  ================= ";
    }
}

$user1 = new Combat("John", 100, 15, 10, 20);
$user2 = new Combat("Mick", 100, 20, 10, 20);

echo $user1;
echo $user2;

$user1->attaque($user1, $user2);
$user2->attaque($user2, $user1);

echo $user1;
echo $user2;

$user1->attaque($user1, $user2);
$user2->coup_pied($user2, $user1);

echo $user1;
echo $user2;

$user1->coup_pied($user1, $user2);
$user2->coup_point($user2, $user1);

echo $user1;
echo $user2;

$user1->magie($user1, $user2);
$user2->attaque($user2, $user1);

echo $user1;
echo $user2;

