<?
Class DBHelper_day extends DBHelper
{
	function get_data($date="")
	{
		if ($date=='')
			$date=date("Y-m-d");
		if ($this->isConnected())
		{
			$result=$this->mysql_connect->query("Select * from event where `date`='$date' order by id asc");
			if ($result)
			{
				$data=array();
				while ($xx = $result->fetch_object())
					$data[]=$xx;
				mysqli_free_result($result);
				return $data;
			}
			else
				return false;
		}
		else
			echo 'fail';

	}
}
?>