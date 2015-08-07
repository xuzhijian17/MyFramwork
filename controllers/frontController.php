<?php
class frontController{

	private $sController = 'Controller';
	private $sAction = 'Action';

	protected static $instance;

	private function __construct($value='')
	{
		# code...
	}
	private function __clone(){

	}
	public static function getInstance(){
		if(is_null(self::$instance)){
			self::$instance = new self();
		}
		return self::$instance;
	}
	public function dispatch(){
		$controller = 'index';
		$action = 'index';

		if (!empty($_GET)) {
			$controller = $_GET['Controller'];
			$action = $_GET['Action'];
		}

	}

	public function dispatchController($controller='index')
	{
		if (!empty($_REQUEST)) {
			$controller = $_REQUEST['controller'];
		}

		return $controller;
	}

	public function dispatchAction($action='index')
	{
		if (!empty($_REQUEST)) {
			$action = $_REQUEST['action'];
		}

		return $action;
	}

	public function run()
	{
		require '/controllers/'.$this->dispatchController().$this->sController.'.php';
		
		$sController = $this->dispatchController().$this->sController;
		$sAction = $this->dispatchAction().$this->sAction;

		$c = new $sController();
		$c->$sAction();
	}
}
