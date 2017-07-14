<?php require_once "config.php";
$nome = $_POST["name"];
$email = $_POST["email"];
$fone = $_POST["phone"];
$msg = $_POST["message"];

$query = "INSERT INTO empregador (nome, email, telefone, msg)VALUES ('$nome', '$email', '$fone', '$msg')";
$resultado = mysql_query($query,$conn)or die("Erro na selecao da tabela");
echo "<script>alert('enviado com sucesso');</script>";
header("Location: ../index.html");
?>