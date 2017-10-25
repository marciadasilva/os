<?php

require_once('header.html');

$nome = $_POST['nome'];
$nome_fantasia = $_POST['nome-fantasia'];
$nome_social = $_POST['nome-social'];
$observacao = $_POST['observacao'];
$cpf_cnpj = $_POST['cpf-cnpj'];
$rg_ie = $_POST['rg-ie'];
$dt_alteracao = date('Y-m-d H:i:s');

$conn = new PDO("mysql:dbname=os; host=localhost", "root", "");


$stmt = $conn->prepare("INSERT INTO pessoa VALUES (null, '$nome', '$nome_fantasia', '$nome_social', '$observacao', $cpf_cnpj, $rg_ie, '$dt_alteracao');");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($results);

require_once('footer.html');

?>