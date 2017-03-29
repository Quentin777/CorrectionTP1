<h2>Liste des utilisateurs</h2>
<form class="form-inline" action="index.php?p=utilisateurs.service" method="post">
<select name="id" class="form form-control">
	<?php foreach (App::getInstance()->getTable('Service')->all() as $service): ?>
		<option value⁼"<?= $service->id; ?>">
			<?= $service->nom_du_service; ?>
		</option>
	<?php endforeach ?>
</select>
<input class="btn btn-primary" type="submit" value="filtrer">
</form>

<table class="table table-bordered">
	<thead>
		<tr>
			<td>Nom, prénom</td>
			<td>Age</td>
			<td>Adresse </td>
			<td>Numero de tel</td>
			<td>Service</td>
		</tr>
	</thead>
	<tbody>
		<?php foreach (App::getInstance()->getTable("Utilisateur")->toutAvecService() as $utilisateur): ?>
			<tr>
				<td><?= $utilisateur->identite; ?></td>
				<td><?= $utilisateur->age; ?></td>
				<td><?= $utilisateur->adresseComplete; ?></td>
				<td><?= $utilisateur->numero_de_telephone; ?></td>
				<td><?= $utilisateur->service; ?></td> <!-- service au lieu de services.id-->
			</tr>
		<?php endforeach ?>
	</tbody>
</table>