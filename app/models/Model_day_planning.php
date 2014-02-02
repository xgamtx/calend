<?
function convertDateTime($n)
{
	$temp=explode(' ',$n);
	$date=explode('-',$temp[0]);
	return $temp[1].' '.$date[2].'-'.$date[1].'-'.$date[0];
}
Class Model_day extends Model
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