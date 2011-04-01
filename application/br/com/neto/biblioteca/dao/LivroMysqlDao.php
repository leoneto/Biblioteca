<?php
namespace br\com\neto\biblioteca\dao{
	use br\com\neto\biblioteca\util\ConexaoMysql;
	use br\com\neto\biblioteca\entities\Livro;

	class LivroMysqlDao{
	
		public function getLivroPorId($id){
			$stm = ConexaoMysql::getInstance()->prepare("Select * From livro id Where id = ?");
   			$stm->execute(array($id));
   			
   			$obj = new $stm->fetchObject();
   			if($obj)
   			{
   				$livro = new Livro();
   				$livro->setId ($obj->id);
   				$livro->setTitulo($obj->titulo);
   				$livro->setAno($obj->ano);
   				$livro->setEdicao($obj->edicao);
   				$livro->setPagina($obj->pagina);
   				$livro->setQuantidade($obj->quantidade);
   				return $livro;
   			}
   			throw new Exception("Registro não encontrado");
		}
		public function remove(Livro $livro){
			$stm = ConexaoMysql::getInstance()->prepare("Delete From livro Where id = ?");
			$stm->execute(array($livro->getId()));	
		}
		public function save(Livro $livro){
			if($livro->getId() > 0){
			$stm = ConexaoMysql::getInstance()->prepare("UPDATE livro set data = ?, data_programada = ?, data_devolucao = ?, multa = ? WHERE id = ?");
			$stm->execute(array($livro->getData(),$livro->getDataProgramada(),$livro->getDataDevolucao(),$livro->getId()));
			}
			else{
			$stm = ConexaoMysql::getInstance()->prepare("INSERT INTO livro VALUES  data = ?, data_programada = ?, data_devolucao = ?, multa = ? ");
			$stm->execute(array($livro->getData(),$livro->getDataProgramada(),$livro->getDataDevolucao()));		
			$livro->setId(ConexaoMysql::getInstance()->lastInsertId());
			}		
			}
			
			
		}
	}