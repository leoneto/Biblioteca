<?php
set_include_path(
	get_include_path()
	. PATH_SEPARATOR .__DIR__ .'/../'
	. PATH_SEPARATOR .__DIR__ .'/../../utils'
	. PATH_SEPARATOR .__DIR__ .'/../../display-objects/'
	);
	
	require_once 'application/br/com/lcobucci/utils/autoloader/NamespaceAutoloader.php';
	br\com\lcobucci\utils\autoloader\NamespaceAutoloader::register();
	
use br\com\neto\biblioteca\util\AbstractAction;
$action = isset($_GET['action'])? $_GET['action'] : null;
AbstractAction::getAction($action)->render();	