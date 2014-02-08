<?
Class Model_rigid_event extends Model
{
	public $start;
	public $end;
	public $name;
	
	function __construct($data)
	{
		$this->start=convertDateTime($data->start);
		$this->end=convertDateTime($data->end);
		$this->name=$data->name;
	}
	
	function get_data($data)
	{
		return array('result'=>'ok');
	}
}
?>