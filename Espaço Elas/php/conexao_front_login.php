<?php
				if (isset($_POST['email']) == false || isset($_POST['senha']) == false) {
					die('Erro! Algum campo não foi encontrado.<br><br><a href="Login.php" target="_self"><button class="voltar">Voltar</button></a>');
				}

				if  (empty($_POST['email']) == true) {
					die('Insira um Email!<br><br><a href="Login.php" target="_self"><button class="voltar">Voltar</button></a>');
				}

				if  (empty($_POST['senha']) == true) {
					die('Insira uma Senha!<br><br><a href="Login.php" target="_self"><button class="voltar">Voltar</button></a>');
				}
				$email = $_POST['email'];
				$senha = $_POST['senha'];
?>