<?php
namespace br\com\neto\biblioteca\entities{
	class Prateleira{
		
		private $id;
		private $posicao;
		private $livros;
			
		public function setId($id){
			$this->id = $id;
		}
		public function getId(){
			return $this->id;
		}
		public function setPosicao($posicao){
			$this->posicao = $posicao;
		}
		public function getPosicao(){
			return $this->posicao;
		}
		public function setLivros($livros){
			$this->livros = $livros;
		}
		public function getLivros(){
			return $this->livros;
	}
}
}