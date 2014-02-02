<?php

class Controller_day_planning extends Controller
{
	public $models;
	
	function __construct()
	{
		$this->helper=new DBHelper_day();
//		$dat=array('0'=>array('start'=>'2012-10-12','end'=>'2013-11-11','name'=>'Вася'),'1'=>array('start'=>'2012-10-12','end'=>'2013-11-11','name'=>'Вася1'),'2'=>array('start'=>'2012-10-12','end'=>'2013-11-11','name'=>'Вася2'));
//		foreach ($dat as $param)
//			$this->models[]=new Model_day($param);
		$this->view=new View();
	}
	function action_index()
	{
		$this->helper->connect_DB();
		$data=$this->helper->get_data();
		foreach ($data as $param)
			$this->models[]=new Model_day($param);

//		$data=$this->model->get_data('xx');
//		if ($data['result']=='ok')
		$this->view->generate('middle_planning/day_view', 'template_view',$this->models);
//		else
//			$this->view->generate('error', 'template_view',$data);
		
	}

}
