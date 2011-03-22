<?php
namespace br\com\neto\biblioteca\entities{
	class Prateleira{
		
		private $id;
		private $posicao;
			
		public function setId($id){
			$this->id = $id;
		}
		public function getId(){
			return $this->id;
		}
		public function setPosicao($posicao){
			$this->id = $id;
		}
		public function getPosicao(){
			return $this->id;
		}
	}
}