<?php
namespace br\com\neto\biblioteca\entities{
	class Emprestimo{
		/**
		 * @var unknown_type
		 */
		private $id;
		private $data;
		private $dataDevolucao;
		private $dataChegada;
		private $multa;
		private $bibliotecario;
		private $usuario;
		private $livro;
			
		public function setId($id){
			$this->id = $id;
		}
		public function getId(){
			return $this->id;
		}
		public function setData($data){
			$this->data;
		}
		public function getData(){
			$this->data;
		}
		public function setDataDevolucao($dataDevolucao){
			$this->dataDevolucao = $dataDevolucao;
		}
		public function getDataDevolucao(){
			return $this->dataDevolucao;
		}
		public function setDataChegada($dataChegada){
			$this->dataChegada = $dataChegada;
		}
		public function getDataChegada(){
			return $this->dataChegada;
		}
		public function setMulta($multa){
			$this->multa = $multa;
		}
		public function getMulta(){
		  return  $this->multa;
		}
		public function setBibliotecario($bibliotecario){
			$this->bibliotecario = $bibliotecario;
		}
		public function getBibliotecario(){
		  return  $this->bibliotecario;
		}
		public function setUsuario($usuario){
			$this->usuario = $usuario;
		}
		public function getUsuario(){
		  return  $this->usuario;
		}
		public function setLivro($livro){
			$this->livro = $livro;
		}
		public function getLivro()	{
		  return  $this->livro;
		}
	}
}