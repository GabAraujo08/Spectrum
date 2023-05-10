<?php
require_once 'vendor/autoload.php'; // Inclui a biblioteca TCPDF

// Cria um novo objeto TCPDF
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// Define o cabeçalho e rodapé do PDF
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);

// Adiciona uma nova página ao PDF
$pdf->AddPage();

// Obtém a mensagem do banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bdspectrum";
$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT mensagem FROM tb_mensagens WHERE id = " . $_GET['id'];
if (isset($_GET['id'])) {
    $sql = "SELECT mensagem FROM tb_mensagens WHERE id = " . $_GET['id'];
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $message = $result->fetch_assoc()['mensagem'];
        // ...
    } else {
        echo "Mensagem não encontrada";
    }
} else {
    echo "ID da mensagem não definido";
}
$result = $conn->query($sql);
$message = $result->fetch_assoc()['mensagem'];

// Define o conteúdo do PDF como a mensagem obtida do banco de dados
$pdf->Write(0, $message, '', 0, 'L', true, 0, false, false, 0);

// Define o nome do arquivo PDF gerado
$filename = "mensagem.pdf";

// Envia o arquivo PDF gerado para o navegador
$pdf->Output($filename, 'I');

// Fecha a conexão com o banco de dados
$conn->close();
?>
