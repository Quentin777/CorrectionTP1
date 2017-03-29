<h2>Liste des utilisateurs</h2>
<p><a href="admin.php?p=utilisateurs.add">ajouter un utilisateur</a></p>

<table class="table table-bordered">
	<thead>
		<tr>
			<td>Nom, prénom</td>
			<td>Age</td>
			<td>Adresse </td>
			<td>Numero de tel</td>
			<td>Service</td>
			<td>actions</td>
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
				<td><form action="admin.php?p=utilisateurs.delete" method="post">
						<input type="hidden" name="id" value="<?= $utilisateur->id; ?>">
						<input class="btn btn-danger" type="submit">
					</form>
				</td>
			</tr>
		<?php endforeach ?>
	</tbody>
</table>