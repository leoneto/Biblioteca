<?php
namespace br\com\neto\biblioteca\entities{
	class Usuario extends Pessoa{
		
		private $cpf;
			
		public function setCpf(){
			$this->cpf = $cpf;
		}
		public function getCpf(){
			return $this->cpf;
		}
	}
}