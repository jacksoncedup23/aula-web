<?php

function saudacao( $nome = '' ) {
	date_default_timezone_set('America/Sao_Paulo');
	$hora = date('H');
	if( $hora >= 6 && $hora <= 12 )
		return 'Bom dia' . (empty($nome) ? '' : ', ' . $nome);
	else if ( $hora > 12 && $hora <=18  )
		return 'Boa tarde' . (empty($nome) ? '' : ', ' . $nome);
	else
		return 'Boa noite' . (empty($nome) ? '' : ', ' . $nome);
}


if (isset($_POST['nome']) ) {
    $mensagem = "<Strong>Bem-vindo!</strong>";
    $nome = $_POST['nome'];
} else
{
    $mensagem = "Você não fez login!";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jackson Eduardo da Veiga | SISTEMA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background: linear-gradient(90deg, rgba(0, 212, 255, 1) 0%, rgba(11, 82, 221, 1) 100%);
        }
        .formulario {
            background-color: rgba(0, 0, 0, 0.7);
            margin: 100px 38% 0 38%;
            width: 24%;
            min-width: 250px;
            padding: 40px;
            border-radius: 15px;
            color: white;

        }
    </style>
</head>

<body>
    <div class="formulario">
        <h1>
            <?php
                echo $mensagem;
                if (isset($nome)){
                    echo "<br><br>";
                    echo saudacao($nome);
                    echo "<br><br>";
                    echo '<a class="btn btn-primary mt-5" href="index.html" role="button"
                                aria-controls="help">
                                Voltar
                            </a>';
                    
                } else 
                {
                    echo '<a class="btn btn-danger mt-5" href="index.html" role="button"
                                aria-controls="help">
                                Fazer login
                            </a>';
                }
            ?>
        </h1>
    </div>

</body>

</html>
