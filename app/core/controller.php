<?php
Class controller
{
	public $view;
	public $model;
	
	function __construct()
	{
		$this->view=new View();
		$this->model=new Model();
	}
	
	function action_index()
	{
	}
}
?>