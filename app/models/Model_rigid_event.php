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
	
	function __construct($data=null)
	{
		if (isset($data->start))
		{
			$temp=explode(':',$data->start);
			$this->h_start=$temp[0];
			$this->m_start=$temp[1];
		}
		else
		{
			$this->h_start='00';
			$this->m_start='00';
		}
		if (isset($data->end))
		{
			$temp=explode(':',$data->end);
			$this->h_end=$temp[0];
			$this->m_end=$temp[1];
		}
		else
		{
			$this->h_end='00';
			$this->m_end='00';
		}
		if (isset($data->name))
			$this->name=$data->name;
		else
			$this->name='Без названия';
		if (isset($data->colour))
			$this->colour=$data->colour;
		else
			$this->colour='#f0f0ff';
	}
	
//	function get_data($data)
//	{
//		return array('result'=>'ok');
//	}
	
}
?>