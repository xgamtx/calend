<?
Class Model_day extends Model
{
	public $start_datetime;
	public $end_datetime;
	public $name;
	
	function __construct($data)
	{
		$this->start_date_time=$data['start'];
		$this->end_date_time=$data['end'];
		$this->name=$data['name'];
	}
	
	function get_data($data)
	{
		return array('result'=>'ok');
	}
}
?>