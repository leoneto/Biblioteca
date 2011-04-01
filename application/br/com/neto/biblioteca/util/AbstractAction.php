<?php
namespace br\com\neto\biblioteca\util{
	use br\com\neto\biblioteca\actions\AutorAction;

	abstract class AbstractAction{
		public abstract function render();
		
		public static function getAction($action){
			switch ($action){
				case 'autor':
					default:
						return  new AutorAction();
			}
		}
	}
}