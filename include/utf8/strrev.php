<?php

/**
* @version $Id: strrev.php,v 1.1 2006/02/25 13:50:17 harryf Exp $
* @package utf8
* @subpackage strings
*/

/**
* UTF-8 aware alternative to strrev
* Reverse a string
* @param string UTF-8 encoded
* @return string characters in string reverses
* @see http://www.php.net/strrev
* @package utf8
* @subpackage strings
*/
function utf8_strrev($str)
{
	preg_match_all('/./us', $str, $ar);
	return implode('', array_reverse($ar[0]));
}
