<?php
namespace br\com\neto\biblioteca\dao{
	use br\com\neto\biblioteca\util\ConexaoMysql;
	use br\com\neto\biblioteca\entities\Biblioteca;

	class BibliotecaMysqlDao{
	
		public function getBibliotecaPorId($id){
			$stm = ConexaoMysql::getInstance()->prepare("Select * From biblioteca id Where id = ?");
   			$stm->execute(array($id));
   			
   			$obj = new $stm->fetchObject();
   			if($obj)
   			{
   				$biblioteca = new Biblioteca();
   				$biblioteca->setId  ($obj->id);
   				$biblioteca->setNome($obj->nome);
   				$biblioteca->setCnpj($obj->cnpj);
   				$biblioteca->setValorMulta($obj->valorMulta);
   				return $biblioteca;
   			}
   			throw new Exception("Registro não encontrado");
		}
		public function remove(Biblioteca $biblioteca){
			$stm = ConexaoMysql::getInstance()->prepare("DELETE FROM biblioteca WHERE id = ?");
			$stm->execute(array($biblioteca->getId()));	
		}
		public function save(Biblioteca $biblioteca){
			if($biblioteca->getId() > 0){
			$stm = ConexaoMysql::getInstance()->prepare("UPDATE biblioteca set nome = ?, cnpj= ?, valor_multa= ? WHERE id = ?");
			$stm->execute(array($biblioteca->getNome(), $biblioteca->getCnpj(), $biblioteca->getValorMulta(), $biblioteca->getId()));
			}
			else{
			$stm = ConexaoMysql::getInstance()->prepare("INSERT INTO biblioteca VALUES  nome = ?, cnpj = ?, valor_multa = ?");
			$stm->execute(array($biblioteca->getNome(), $biblioteca->getCnpj(), $biblioteca->getValorMulta()));
			$biblioteca->setId(ConexaoMysql::getInstance()->lastInsertId());
			}		
			}
			
			
		}
	}