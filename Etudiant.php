<?php

class Etudiant{
	
	public $nom;
	public $prenom;
	public $age;
	public $note;
	public $matier;
	public $niveau;

	public function __construct(string $nom, string $prenom, int $age, array $note,array $matier, string $niveau )
	{ 
		$this->name= $nom;
		$this->prenom= $prenom;
		$this->age= $age;
		$this->note= $note;
		$this->matier= $matier;
		$this->niveau= $niveau;
	}

	public function getNote(): array
	{
		return $this->note;
	}

	public function addNote(int $notes)
	{
		array_push($this->note , $notes);
	}

	public function removeLastNote()
	{
		array_pop($this->note);
	}
}

$etudiant1 = new Etudiant('john', 'doe', 19, [12, 13, 17], ["Francais", "Math", "Chimie"], "2nd");

echo "<pre>";
var_dump($etudiant1->getNote());

$etudiant1->addNote(11);

var_dump($etudiant1->getNote());

$etudiant1->removeLastNote();
$etudiant1->removeLastNote();

var_dump($etudiant1->getNote());

