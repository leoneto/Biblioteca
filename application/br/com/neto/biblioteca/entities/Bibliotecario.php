<?php
namespace br\com\neto\biblioteca\entities{
	class Bibliotecario extends Pessoa{
		
		private $login;
		private $senha;
			
		public function setLogin(){
			$this->login = $login;
		}
		public function getLogin(){
			return $this->login;
		}
		public function setSenha(){
			$this->senha = $senha;
		}
		public function getSenha(){
			return $this->senha;
		}
	}
}