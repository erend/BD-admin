<?php

include_once 'db.php';

if (isset($_GET['id']) && count($_POST) > 0) {
	$changes = $_POST;
	foreach ($changes as $key => $value) {
		$changes[$key] = htmlspecialchars($value);
	}
	$changes['id'] = $_GET['id'];
	change_product($db, $changes);
} 

$items = get_products($db);

include_once 'table.php';

if (isset($_GET['id'])) {
	$item = get_product($db, $_GET['id']);
	include_once 'form.php';
}
