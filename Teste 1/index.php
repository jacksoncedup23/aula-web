<?php
	$dbHost = 'localhost';
	$dbUserName = 'id21921962_jackson';
	$dbPassword = 'Jackson@1';
	$dbName = 'id21921962_dbteste';
	
	$conexao = new mysqli($dbHost, $dbUserName, $dbPassword, $dbName);
	if($conexao->connect_errno)
	{
		echo "Erro";
	}
	else
	{
		echo "Conexao efetuada com sucesso!";
	}
	
	if(isset($_POST['submit']))
	{
	    print_r('Nome: ' . $_POST['nome']);
	    print_r('<br>');
	    print_r('E-mail: ' . $_POST['email']);
	    print_r('<br>');
	    print_r('Telefone: ' . $_POST['telefone']);
	    print_r('<br>');
	    print_r('Sexo: ' . $_POST['genero']);
	    print_r('<br>');
		
		$nome = $_POST['nome'];
		$email = $_POST['email'];
		$telefone = $_POST['telefone'];
		$genero = $_POST['genero'];
		$dt_nascimento = $_POST['data_nascimento'];
		$cidade = $_POST['cidade'];
		$estado = $_POST['estado'];
		$endereco = $_POST['endereco'];
	    
	    $result = mysqli_query($conexao, "INSERT INTO `usuario`(`NOME`, `EMAIL`, `TELEFONE`, `GENERO`, `DT_NASC`, `CIDADE`, `ESTADO`, `ENDERECO`) 
				VALUES ('$nome','$email','$telefone','$genero','$dt_nascimento','$cidade','$estado','$endereco')");
		
		if($result==1)
		{
		    echo($result);
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário | GN</title>
	<link href="estilo.css" type="text/css" rel="stylesheet">

</head>
<body>
    <div class="box">
        <form action="index.php" method="POST">
            <fieldset>
                <legend><b>Fórmulário de Clientes</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" placeholder="" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="email" name="email" id="email" class="inputUser" placeholder="" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" placeholder="" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <p>Sexo:</p>
                <input type="radio" id="feminino" name="genero" value="feminino" required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" id="masculino" name="genero" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" id="outro" name="genero" value="outro" required>
                <label for="outro">Outro</label>
                <br><br>
                <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                <input type="date" name="data_nascimento" id="data_nascimento" required>
                <br><br><br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" placeholder="" required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" placeholder="" required>
                    <label for="estado" class="labelInput">Estado</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" placeholder="" required>
                    <label for="endereco" class="labelInput">Endereço</label>
                </div>
                <br><br>
                <button type="submit" name="submit" id="submit">Enviar</button>
            </fieldset>
        </form>
    </div>
</body>
</html>