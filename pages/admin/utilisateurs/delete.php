<?php

App::getInstance()->getTable('Utilisateur')->delete($_POST['id']);

header('Location: admin.php?p=utilisateurs');