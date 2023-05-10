<?php
// conexão com o banco de dados
$conexao = mysqli_connect("localhost", "root", "", "bdspectrum");

// verifica se a conexão foi bem sucedida
if (!$conexao) {
    die("Erro ao conectar ao banco de dados: " . mysqli_connect_error());
}

// obtém os dados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];

// insere os dados no banco de dados
$sql = "INSERT INTO tb_mensagens (nome, email, assunto, mensagem) VALUES ('$nome', '$email', '$assunto', '$mensagem')";
if (mysqli_query($conexao, $sql)) {
    
    header('Location: ../msgEnviada.php ');
   
    // echo "Mensagem enviada com sucesso!";
    
} else {
    echo "Erro ao enviar mensagem: " . mysqli_error($conexao);
   
}

// fecha a conexão com o banco de dados
mysqli_close($conexao);
?>
