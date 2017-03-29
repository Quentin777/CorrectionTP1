<?php

App::getInstance()->getTable('Service')->delete($_POST['id']);

header('Location: admin.php?p=services');