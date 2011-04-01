<?php
namespace br\com\neto\biblioteca\dao{
	use br\com\neto\biblioteca\util\ConexaoMysql;
	use br\com\neto\biblioteca\entities\Editora;

	class EditoraMysqlDao{
	
		public function getEditoraPorId($id){
			$stm = ConexaoMysql::getInstance()->prepare("Select * From editora id Where id = ?");
   			$stm->execute(array($id));
   			
   			$obj = new $stm->fetchObject();
   			if($obj)
   			{
   				$editora = new Editora();
   				$editora->setId  ($obj->id);
   				$editora->setNome($obj->nome);
   				$editora->setCnpj($obj->cnpj);
   				return $editora;
   			}
   			throw new Exception("Registro não encontrado");
		}
		public function remove(Editora $editora){
			$stm = ConexaoMysql::getInstance()->prepare("Delete From editora Where id = ?");
			$stm->execute(array($editora->getId()));	
		}
		public function save(Editora $editora){
			if($editora->getId() > 0){
			$stm = ConexaoMysql::getInstance()->prepare("UPDATE editora set nome = ?, cnpj = ? WHERE id = ?");
			$stm->execute(array($editora->getNome(),$editora->getCnpj(), $editora->getId()));
			}
			else{
			$stm = ConexaoMysql::getInstance()->prepare("INSERT INTO editora VALUES  nome = ?, cnpj = ?");
			$stm->execute(array($editora->getNome(),$editora->getCnpj()));		
			$editora->setId(ConexaoMysql::getInstance()->lastInsertId());
			}		
			}
			
			
		}
	}