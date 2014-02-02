<?
Class DBHelper
{
	protected $mysql_hostname="";
	protected $mysql_user="root";
	protected $mysql_password="root";
	protected $mysql_database="click_gen";
	function connect_db()
	{
		$mysqli = new mysqli($this->mysql_hostname, $this->mysql_user, $this->mysql_password, $this->mysql_database);
		if ($mysqli->connect_errno) {
			return array('result'=>'error', 'error_number'=>$mysqli->connect_errno, 'error'=>$mysqli->connect_error);
		}
		else
			return arra('result'=>'ok', 'bd'=>$mysqli);
	}
	function get_data()
	{
	}
}
?>