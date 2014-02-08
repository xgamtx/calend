<?php

class Controller_day_planning extends Controller
{
	public $model;
	
	function __construct()
	{
		$this->model=new Model_day();
		$this->view=new View();
	}
	function action_index()
	{
//		$this->helper->connect_DB();
//		$data=$this->helper->get_data();
//		foreach ($data as $param)
//			$this->models[]=new Model_day($param);

//		$data=$this->model->get_data('xx');
//		if ($data['result']=='ok')
		$this->view->generate('middle_planning/day_view', 'template_view',$this->model);
//		else
//			$this->view->generate('error', 'template_view',$data);
		
	}

}
?>