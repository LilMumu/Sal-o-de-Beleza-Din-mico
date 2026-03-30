<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Conexão</title>
</head>
<body>
<?php
    	if (isset($_POST['nome']) == false || isset($_POST['email']) == false || isset($_POST['senha']) == false || isset($_POST['senha_confirm']) == false) {
				die('Erro! Algum campo não foi encontrado.<br><br><a href="Cadastro.php" target="_self"><button class="voltar">Voltar</button></a>');
			}

			if  (empty($_POST['nome']) == true) {
				die('Insira um Nome!<br><br><a href="Cadastro.php" target="_self"><button class="voltar">Voltar</button></a>');
			}

			if  (empty($_POST['email']) == true) {
				die('Insira um Email!<br><br><a href="Cadastro.php" target="_self"><button class="voltar">Voltar</button></a>');
			}

			if  (empty($_POST['senha']) == true) {
				die('Insira uma Senha!<br><br><a href="Cadastro.php" target="_self"><button class="voltar">Voltar</button></a>');
			}

			if  (empty($_POST['senha_confirm']) == true) {
				die('Confirme a Senha!<br><br><a href="Cadastro.php" target="_self"><button class="voltar">Voltar</button></a>');
			}
			
			$nome = $_POST['nome'];

			$email = $_POST['email'];

			$senha = $_POST['senha'];

			$senha_confirm = $_POST['senha_confirm'];

			if (!(filter_var($email, FILTER_VALIDATE_EMAIL))) {
				die('O Email é Inválido!<br><br><a href="Cadastro.php" target="_self"><button class="voltar">Voltar</button></a>');
			}
			
			if (strlen($senha) < 8 || (preg_match('/^[0-9]+$/', $senha) || (preg_match('/^[A-Za-z]+$/', $senha)))) {
				die('A senha deve ter no minímo 8 caracteres e ser composta por letras e números!<br><br><a href="Cadastro.php" target="_self"><button class="voltar">Voltar</button></a>');
			}

			if ($senha !== $senha_confirm) {
				die('A confirmação da senha não corresponde a senha!<br><br><a href="Cadastro.php" target="_self"><button class="voltar">Voltar</button></a>');
			}

			$cadastro = $nome.', '.$email.', '.$senha.'\r\n';


?>


    
</body>
</html>