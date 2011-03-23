<?php
namespace br\com\neto\biblioteca\entities{
	class Livro{
		/**
		 * @var unknown_type
		 */
		private $id;
		private $titulo;
		private $ano;
		private $edicao;
		private $pagina;
		private $quantidade;
		private $editora;
		private $autor;
			
		public function setId($id){
			$this->id = $id;
		}
		public function getId(){
			return $this->id;
		}
		public function setTitulo($titulo){
			$this->titulo = $titulo;
		}
		public function getTitulo(){
			return $this->titulo;
		}
		public function setAno($ano){
			$this->ano= $ano;
		}
		public function getAno(){
			return $this->ano;
		}
		public function setEdicao($edicao){
			$this->edicao = $edicao;
		}
		public function getEdicao(){
			return $this->edicao;
		}
		public function setPagina($pagina){
			$this->pagina = $pagina;
		}
		public function getPagina(){
			return $this->pagina;
		}
		public function setQuantidade($quantidade){
			$this->quantidade = $quantidade;
		}
		public function getQuantidade(){
			return $this->quantidade;
		}
		public function setEditora($editora){
			$this->editora = $editora;
		}
		public function getEditora(){
			return $this->editora;
		}
		public function setAutor($autor){
			$this->autor = $autor;
		}
		public function getAutor(){
			return $this->autor;
		}
		
	}
}