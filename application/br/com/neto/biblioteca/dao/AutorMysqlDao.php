<?php
namespace br\com\neto\biblioteca\dao {
	use br\com\neto\biblioteca\util\ConexaoMysql;

	use br\com\neto\biblioteca\entities\Autor;

	class AutorMysqlDao{
				
		public function getById($id){
			$sql = ConexaoMysql::getInstance()->prepare("SELECT * FROM autor WHERE id = ?");
			$sql->execute(array($id));
			
			$objeto = $sql->fetchObject();
			if($objeto){
				$autor = new Autor();
				$autor->setId($objeto->id);
				$autor->setNome($objeto->nome);
				
				return $autor;
			}		
			throw new Exception("Registro não encontrado");
		}
		public function remove(Autor $autor){
			$sql = ConexaoMysql::getInstance()->prepare("DELETE FROM autor WHERE id = ?");
			$sql->execute(array($autor->getId()));	
					
		}
		public function save(Autor $autor){
			if($autor->getId() > 0){
				
			$sql = ConexaoMysql::getInstance()->prepare("UPDATE autor set nome = ? WHERE id = ?");
			$sql->execute(array($autor->getNome(), $autor->getId()));
			}
			else{
			$sql = ConexaoMysql::getInstance()->prepare("INSERT INTO autor (nome) VALUES (?)");
			$sql->execute(array($autor->getNome()));		
			$autor->setId(ConexaoMysql::getInstance()->lastInsertId());
			}		
			
		}
	}	
}