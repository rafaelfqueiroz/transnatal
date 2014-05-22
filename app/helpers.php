<?php 

	/*
		True means that the function converts to database date format
		and False converts to form date format.
	*/
	function format_date($date, $type = false)
	{
		if ($type)
		{
			if ($date)
			{
				list($day, $month, $year) = explode("/", $date);
				return implode("-" , [$year, $month, $day]);
			}
			else
			{
				return '0000-00-00';
			}
		}
		else
		{
			if ($date)
			{
				list($year, $month, $day) = explode("-", $date);
				return implode("/", [$day, $month, $year]);
			}
			else
			{
				return '00/00/0000';
			}
		}
	}
?>