<?php

require 'src/model.php';

// Query userId in URL with $_GET - Variables HTTP GET : https://www.php.net/manual/fr/reserved.variables.get.php
$userId = intval($_GET['user_id']);

$user = getUser($userId);

$users = getUserFollowed ($userId);

require 'templates/userSubscriptions.php';