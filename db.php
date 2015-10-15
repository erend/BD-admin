<?php

$username = 'root';
$password = '';

try {
    $db = new PDO(
		'mysql:host=localhost;dbname=duck_store_new;charset=utf8;', $username, $password
	);
	$db->setAttribute(
		PDO::ATTR_ERRMODE, 
		PDO::ERRMODE_EXCEPTION
	);
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
    die();
}

function get_products($db)
{
	$stmt = $db->prepare("SELECT * FROM `products`");
	$stmt->execute();

	return $stmt->fetchAll(PDO::FETCH_ASSOC);

}

function get_product($db, $id) {
	$stmt = $db->prepare (
		"SELECT *
			FROM `products` 
		WHERE `products` . `id` = :id"
	);
	$stmt->bindParam(":id", $id);
	$stmt->execute();

	return($stmt->fetch(PDO::FETCH_ASSOC));
}

function change_product ($db, $changes) {
	$stmt = $db->prepare (
		"UPDATE `products` 
			SET  `title` = :title,
				 `description` = :description,
				 `price` = :price,
				 `category_id` = :category_id
		WHERE `id` = :id"
	);
	$stmt->execute($changes);
}

