<?php 

	/*
		True means that the function converts to database date format
		and False converts to form date format.
	*/
	function format_date($date, $type = false)
	{
		if ($date)
		{
			if ($date == '0000-00-00 00:00:00')
			{
				return '-----';
			}
			if ($type)
			{
				list($day, $month, $year) = explode("/", $date);
				return implode("-" , [$year, $month, $day]);
			}
			else
			{
				$date_splited = explode(" ", $date);
				list($year, $month, $day) = explode("-", $date_splited[0]);
				return implode("/", [$day, $month, $year]);
			}
		}
		else
		{
			return '-----';
		}
	}
?>