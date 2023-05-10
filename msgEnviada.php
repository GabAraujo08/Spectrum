

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/logomarca-spectrum.svg" type="image/x-icon" />
    <title>Mensagem enviada!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/empresa.css">
</head>
<style>

@font-face {
    font-family: 'Poppins';
    src: url('../Empresa/assets/fonts/Poppins-Medium.ttf');
}

.image {
    width: 50%;
    display: flex;
    justify-content: center;
    height: 100vh;
}

.container-fluid{
    display: flex;
    align-items: center;
}

img{
    width: 75%;
}

.texto{
    width: 50%;
}

h1{
    font-family: 'Poppins';
    font-style: normal;
    font-weight: 700;
    font-size: 3.0rem;
    line-height: 117%;
    color: #493A8B;
}


@media (max-width: 500px){
    img{
        width: 100%;
        
    }
    .image{
        height: unset;
        width: 100%;
    }
    .container-fluid{
        display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
    flex-direction: column;
    }

    .texto{
        width: 100%;
    }
}

</style>
<body>
    <div class="container-fluid">
        <div class="image">
            <img src="./assets/img/vetor-msgRecebida.svg" alt="">
        </div>
        <div class="texto">
            <h1>Obrigado sua mensagem foi enviada!, <a href="./index.php">clique aqui</a> para voltar ao início.</h1>
        </div>
    </div>
</body>

</html>