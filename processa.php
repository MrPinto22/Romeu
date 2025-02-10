<?php
$conn = new mysqli("localhost", "root", "", "formulario_romeu");

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cidade = $_POST['cidade'];
    $assunto = $_POST['assunto'];
    $mensagem = $_POST['mensagem'];

    $sql = "INSERT INTO formulario (nome, email, cidade, assunto, mensagem) VALUES ('$nome', '$email', '$cidade', '$assunto', '$mensagem')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>window.location.href='indexaltern.html';</script>"; 
        exit();
    } else {
        echo "Erro ao enviar: " . $conn->error;
    }
}

$conn->close();
?>
