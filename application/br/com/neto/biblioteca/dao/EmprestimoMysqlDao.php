<?php
namespace br\com\neto\biblioteca\dao{
	use br\com\neto\biblioteca\util\ConexaoMysql;
	use br\com\neto\biblioteca\entities\Emprestimo;

	class EmprestimoMysqlDao{
	
		public function getEmprestimoPorId($id){
			$stm = ConexaoMysql::getInstance()->prepare("Select * From emprestimo id Where id = ?");
   			$stm->execute(array($id));
   			
   			$obj = new $stm->fetchObject();
   			if($obj)
   			{
   				$emprestimo = new Emprestimo();
   				$emprestimo->setId  ($obj->id);
   				$emprestimo->setData($obj->data);
   				$emprestimo->setDataProgramada($obj->dataProgramada);
   				$emprestimo->setDataDevolucao($obj->dataDevolucao);
   				$emprestimo->setMulta($obj->multa);
   				return $emprestimo;
   			}
   			throw new Exception("Registro não encontrado");
		}
		public function remove(Emprestimo $emprestimo){
			$stm = ConexaoMysql::getInstance()->prepare("Delete From emprestimo Where id = ?");
			$stm->execute(array($emprestimo->getId()));	
		}
		public function save(Emprestimo $emprestimo){
			if($emprestimo->getId() > 0){
			$stm = ConexaoMysql::getInstance()->prepare("UPDATE emprestimo set data = ?, data_programada = ?, data_devolucao = ?, multa = ? WHERE id = ?");
			$stm->execute(array($emprestimo->getData(),$emprestimo->getDataProgramada(),$emprestimo->getDataDevolucao(),$emprestimo->getId()));
			}
			else{
			$stm = ConexaoMysql::getInstance()->prepare("INSERT INTO emprestimo VALUES  data = ?, data_programada = ?, data_devolucao = ?, multa = ? ");
			$stm->execute(array($emprestimo->getData(),$emprestimo->getDataProgramada(),$emprestimo->getDataDevolucao()));		
			$emprestimo->setId(ConexaoMysql::getInstance()->lastInsertId());
			}		
			}
			
			
		}
	}