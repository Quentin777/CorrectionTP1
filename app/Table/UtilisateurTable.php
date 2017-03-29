<?php 
namespace App\Table; // nom du dossier actuel
use Core\Table\Table;
/**
* class pour la table services
*/
class UtilisateurTable extends Table // Table == Core\Table\Table
{
	public function toutAvecService()
	{
		return $this->query("SELECT utilisateurs.id,
									utilisateurs.nom,
									utilisateurs.prenom,
									utilisateurs.adresse,
									utilisateurs.date_de_naissance,
									utilisateurs.code_postale,
									utilisateurs.numero_de_telephone,
									services.nom_du_service as service
							FROM utilisateurs 
							LEFT JOIN services
								ON services_id = services.id
									");
	}

	public function toutParService($id)
	{
		return $this->query("SELECT utilisateurs.id,
									utilisateurs.nom,
									utilisateurs.prenom,
									utilisateurs.adresse,
									utilisateurs.date_de_naissance,
									utilisateurs.code_postale,
									utilisateurs.numero_de_telephone,
									services.nom_du_service as service
							FROM utilisateurs 
							LEFT JOIN services
								ON services_id = services.id
							WHERE services.id = ?
									", [$id]);
	}

}
?>