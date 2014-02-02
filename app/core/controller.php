<?php
Class controller
{
	public $view;
	public $model;
	public $helper;
	
	
	function __construct()
	{
		$this->view=new View();
	}
	
	function action_index()
	{
	}
}
?>