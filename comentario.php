<?php
	class Usuario extends Model {

        private $_nome;
        private $_email;
        private $_telefone;

		public function __construct($usuario = null){
			if($usuario):
				$this->_nome = $usuario->nome;
				$this->_email = $usuario->email;
				$this->_telefone = $usuario->telefone;
			endif;
		}

        public function cadastro($nome, $email, $telefone){
			$salvar = $this->insert([
                'nome' => $nome,
				'email' => $email,
				'telefone' => $telefone
            ]);
			if($salvar) return true;
			return false;
		}

        public function getNome(){
			return $this->_nome;
		}
		public function getEmail(){
			return $this->_email;
		}
		public function getTelefone(){
			return $this->_telefone;
		}

	}
