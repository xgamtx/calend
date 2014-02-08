<?
function convertDateTime($n)
{
	$temp=explode(' ',$n);
	$date=explode('-',$temp[0]);
	return $temp[1].' '.$date[2].'-'.$date[1].'-'.$date[0];
}
require_once("app/models/Model_rigid_event.php");

Class Model_day extends Model
{
	public $date;
	public $helper;
	public $rigid_events;
	
	function __construct()
	{
		if (isset($_GET['d']))
			$this->date=$_GET['d'];
		else
			$this->date=date('Y-m-d');
		$this->helper=new DBHelper_day();
		$this->helper->connect_DB();
		$data=$this->helper->get_data($this->date);
		foreach ($data as $param)
			$this->rigid_events[]=new Model_rigid_event($param);
	}
	
	function get_data($data)
	{
		return array('result'=>'ok');
	}
}
?>