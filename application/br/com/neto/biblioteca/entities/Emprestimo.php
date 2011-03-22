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
		private $livros;
			
		public function setId($id){
			$this->id = $id;
		}
		public function getId(){
			return $this->id;
		}
		public function setData(){
			$this->data;
		}
		public function getData(){
			$this->data;
		}
		public function setDataDevolucao(){
			$this->dataDevolucao = $dataDevolucao;
		}
		public function getDataDevolucao(){
			return $this->dataDevolucao;
		}
		public function setDataChegada(){
			$this->dataChegada = $dataChegada;
		}
		public function getDataChegada(){
			return $this->dataChegada;
		}
		public function setMulta(){
			$this->multa = $multa;
		}
		public function getMulta(){
		  return  $this->multa;
		}
		public function setBibliotecario(){
			$this->bibliotecario = $bibliotecario;
		}
		public function getBibliotecario(){
		  return  $this->bibliotecario;
		}
		public function setUsuario(){
			$this->usuario = $usuario;
		}
		public function getUsuario(){
		  return  $this->usuario;
		}
		public function setLivros(){
			$this->livros = $livros;
		}
		public function getLivros()	{
		  return  $this->livros;
		}
	}
}