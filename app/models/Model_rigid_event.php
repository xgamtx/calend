<?
Class Model_rigid_event extends Model
{
	protected $start;
	protected $end;
	protected $name;
	
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
	function getName()
	{
		return $this->name;
	}
	function getStartTime()
	{
		return $this->start;
	}
	function getEndTime()
	{
		return $this->end;
	}
}
?>