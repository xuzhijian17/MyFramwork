<?php
require '/models/model.php';
require '/views/view.php';

class indexController{

	public $model;
	public $view;

	public function __construct($value='')
	{
		$this->model = new model();
		$this->view = new view();
	}

	public function indexAction($value='')
	{
		$this->view->assign('a','xzj');
		$this->view->assign('n','xzj1');
		$this->view->display('views/templates/index.html');
	}

	public function homeAction($value='')
	{
		$posts = $this->model->get_all_posts();
		var_dump($posts);
	}
}
