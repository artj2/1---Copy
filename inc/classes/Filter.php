 <!-- This filter has been made by https://github.com/KalobTaulien
 And is available at https://github.com/KalobTaulien/PHP-User-Data-Filters/blob/master/Filter.php
 Under the MIT licence -->
<!-- MIT License

Copyright (c) 2016

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE. -->

<?php

// If there is no constant defined called __CONFIG__, do not load this file 
if(!defined('__CONFIG__')) {
	exit('You do not have a config file');
}


class Filter 
{
	
	/**
	 *  @param	string	$string		String to filter before putting inside InnoDB
	 *  @return            			Filters and returns a valid string to put into the Database.
	 *  @note				If the $html arg is false, new lines (\n) will replaced with __BR__ and re-converted to \r\n afterwards.
	 * 					.. This is to ensure new lines are kept in place.
	 */
	public static function String( $string, $html = false ) {
		if(!$html) {
			$string = filter_var( $string , FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);
		} else {
			$string = filter_var( $string , FILTER_SANITIZE_FULL_SPECIAL_CHARS);
			
		}
		return $string;
	}
	
	/**
	 *  @param	string	$email		Email to filter before putting inside InnoDB
	 *  @return            			Filters and returns a valid or invalid email address
	 */
	public static function Email( $email ) {
		return filter_var( $email , FILTER_SANITIZE_EMAIL);
	}
	
	/**
	 *  @param	string	$url		String to filter before putting inside InnoDB
	 *  @return            			Filters and returns a valid or invalid URL
	 */
	public static function URL( $url ) {
		return filter_var( $url , FILTER_SANITIZE_URL);
	}
	
	/**
	 *  @param	int		$integer	The string to filter and turn into an integer 
	 *  @return	int					Returns an integer after being filtered. 
	 */
	public static function Int( $integer ) {
		return (int) $integer = filter_var( $integer , FILTER_SANITIZE_NUMBER_INT);
	}

}

?>