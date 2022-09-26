<?php
namespace App\Libraries;

Class Hash
{
	public static function make($password)
	{
		return password_hash($password, PASSWORD_BCRYPT);
	}
	public static function Dcrypt($entered_password,$db_password)
	{
		if(password_verify($entered_password,$db_password))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
}
?>