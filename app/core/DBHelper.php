<?
Class DBHelper
{
	protected $mysql_hostname="";
	protected $mysql_user="root";
	protected $mysql_password="root";
	protected $mysql_database="Calendar";
	protected $mysql_connect;
	public $result;
	function connect_DB()
	{
		$mysqli = new mysqli($this->mysql_hostname, $this->mysql_user, $this->mysql_password, $this->mysql_database);
		if ($mysqli->connect_errno) {
			echo 'error_number='.$mysqli->connect_errno.'. Error:'.$mysqli->connect_error;
			$this->result=false;
		}
		else
		{
			$this->result=true;
			$mysqli->set_charset("cp1251");
			$this->mysql_connect=$mysqli;
		}
	}
	function isConnected()
	{
		return $this->result;
	}
	function get_data()
	{
	}
}
?>