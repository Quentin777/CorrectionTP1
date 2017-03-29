<?php 
namespace App\Entity; // nom du dossier actuel
use Core\Entity\Entity;
/**
* class pour stocker un enregistrement de la table Utilisateurs
*/
class UtilisateurEntity extends Entity // Entity == Core\entity\entity
{
	public function getAge()
	{
		return (int)((time()-strtotime($this->date_de_naissance))/(60*60*24*365));
		//return $this->date_de_naissance;	
	}

	public function getIdentite()
	{
		return strtoupper($this->nom).', '.ucfirst($this->prenom); // nom en maj, debut prenom maj
	}

	public function getAdresseComplete()
	{
		return $this->adresse.' '.$this->code_postale;
	}

}
?>