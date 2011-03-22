<?php
namespace br\com\neto\biblioteca\entities{
	abstract class Pessoa{
		private $id;
		private $nome;
		
		public function setId(){
			$this->id = $id;
		}
		public function getId(){
			return $this->id;
		}
		public function setNome(){
			$this->nome = $nome;
		}
		public function getNome(){
			return $this->nome;
		}
	}
}