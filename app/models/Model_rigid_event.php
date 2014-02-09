<?
Class Model_rigid_event extends Model
{
	public $h_start;
	public $h_end;
	public $m_start;
	public $m_end;
	public $name;
	public $id_calendar;
	public $colour;
	
	function __construct($data)
	{
		$temp=explode(':',$data->start);
		$this->h_start=$temp[0];
		$this->m_start=$temp[1];
		$temp=explode(':',$data->end);
		$this->h_end=$temp[0];
		$this->m_end=$temp[1];
		$this->name=$data->name;
		$this->colour=$data->colour;
	}
	
	function get_data($data)
	{
		return array('result'=>'ok');
	}
}
?>