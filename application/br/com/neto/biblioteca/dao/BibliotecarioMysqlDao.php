<?php
namespace br\com\neto\biblioteca\dao{
	use br\com\neto\biblioteca\util\ConexaoMysql;
	use br\com\neto\biblioteca\entities\Bibliotecario;

	class BibliotecarioMysqlDao{
	
		public function getBibliotecarioPorId($id){
			$stm = ConexaoMysql::getInstance()->prepare("Select * From bibliotecario id Where id = ?");
   			$stm->execute(array($id));
   			
   			$obj = new $stm->fetchObject();
   			if($obj)
   			{
   				$bibliotecario = new Bibliotecario();
   				$bibliotecario->setId  ($obj->id);
   				$bibliotecario->setNome($obj->nome);
   				$bibliotecario->setlogin($obj->login);
   				$bibliotecario->setsenha($obj->senha);
   				return $bibliotecario;
   			}
   			throw new Exception("Registro não encontrado");
		}
		public function remove(Bibliotecario $bibliotecario){
			$stm = ConexaoMysql::getInstance()->prepare("DELETE FROM bibliotecario WHERE id = ?");
			$stm->execute(array($bibliotecario->getId()));	
		}
		public function save(Bibliotecario $bibliotecario){
			if($bibliotecario->getId() > 0){
			$stm = ConexaoMysql::getInstance()->prepare("UPDATE bibliotecario set nome = ?, login= ?, senha= ? WHERE id = ?");
			$stm->execute(array($bibliotecario->getNome(), $bibliotecario->getlogin(), $bibliotecario->getsenha(), $bibliotecario->getId()));
			}
			else{
			$stm = ConexaoMysql::getInstance()->prepare("INSERT INTO bibliotecario VALUES  nome = ?, login = ?, senha = ?");
			$stm->execute(array($bibliotecario->getNome(), $bibliotecario->getlogin(), $bibliotecario->getsenha()));
			$bibliotecario->setId(ConexaoMysql::getInstance()->lastInsertId());
			}		
			}
			
			
		}
	}