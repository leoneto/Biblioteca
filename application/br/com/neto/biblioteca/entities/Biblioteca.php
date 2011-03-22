<?php
namespace br\com\neto\biblioteca\entities{
	class Biblioteca extends Pessoa{
		
		private $cnpj;
			
		public function setCnpj(){
			$this->cnpj = $cnpj;
		}
		public function getNome(){
			return $this->cnpj;
		}
	}
}