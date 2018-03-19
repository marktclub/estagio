<?php
	class loginController extends Controller {

		public function index(){
			include('index');
		}

		public function sair(){
			unset($_SESSION['LOGIN']);
		}

		public function post_login(){
			$login = $_POST['login'];
			$senha = $_POST['senha'];

			// Considere que esse arquivo existe e tem tada a conexao com o banco de dados
			include('Conexao.php');

			$usuario = $BD->buscar("SELECT * FROM usuario WHERE login = '$login' AND senha = '{$senha}'");
			if($usuario):
				$_SESSION['USUARIO'] = $usuario;
				header('LOCATION: http://localhost/estagio/index.php');
			else:
				header('LOCATION: http://localhost/estagio/erro_ao_logar.php');
			endif;
		}
	}
