<?php
class Common
{
	/*
	Date		: 11/01/2010
	Description : Convert from String type to Integer type
	*/
	function parseInt ($str)
	{
		if ((int)$str)
			return (int)$str;
		return false;
	}

	/*
	Date		: 11/01/2010
	Description : Convert from String type to Array type
	*/	
	public function setEmailToArray($emailList = "")
	{
		$arrEmail  = array();
		$arrLength = 0;
		$arr = explode(";", trim($emailList));
		for ($Idx = 0; $Idx < count($arr); $Idx ++)
		{
			if (trim($arr[$Idx]) != "")
			{
				$arrEmail[$arrLength ++] = $arr[$Idx];
			}
		}
		return $arrEmail;
	}
}
?>