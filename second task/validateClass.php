<?php
/**
 * Created by PhpStorm.
 * User: Samuel
 * Date: 06.08.2017
 * Time: 16:09
 */

class validate {
	function isValidEmail($email)
	{
		if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
			return true;

		} else {

			return false;
		}
	}
	function isValidPhone($phone)
	{
		if (preg_match('/^\(?[0-9]{3}\)?|[0-9]{3}[-. ]? [0-9]{3}[-. ]?[0-9]{4}$/', $phone))
			{
			return true;

			}
			return false;
	}
}