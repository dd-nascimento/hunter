<?php


require_once('conDB.php');

$stmt = $conn->prepare("SELECT * FROM dds_usuario ORDER BY id_user");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

var_dump($results);
?>