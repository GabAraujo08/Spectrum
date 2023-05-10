<!DOCTYPE html>
<html>

<head>
    <title>Exibindo Dados da Tabela</title>

    <link rel="shortcut icon" href="assets/img/logomarca-spectrum.svg" type="image/x-icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Assunto</th>
                    <th scope="col">Mensagem</th>
                </tr>
            </thead>
            <tbody>

                <?php
                // faz a conexão com o banco de dados
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "bdspectrum";
                $conn = new mysqli($servername, $username, $password, $dbname);

                // verifica se a conexão foi bem sucedida
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // faz a consulta no banco de dados
                $sql = "SELECT id, nome, email, assunto, mensagem FROM tb_mensagens";
                $result = $conn->query($sql);

                // verifica se há resultados
                if ($result->num_rows > 0) {
                    // exibe os dados em uma tabela
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["nome"] . "</td>";
                        echo "<td>" . $row["email"] . "</td>";
                        echo "<td>" . $row["assunto"] . "</td>";
                        echo "<td>";
                        echo "<a href='gerar_pdf.php?id=" . urlencode($row["id"]) . "&msg=" . urlencode($row["mensagem"]) . "' target='_blank'>Gerar PDF</a>";


                        echo "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "Não há dados na tabela";
                }

                // fecha a conexão com o banco de dados
                $conn->close();
                ?>
            </tbody>
        </table>
    </div>




</body>

</html>
