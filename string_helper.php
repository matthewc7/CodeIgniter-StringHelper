<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('string_lower'))
{
	/**
	 * Format string into lower case.
	 * @param  string $text
	 * @return string      
	 */
	function string_lower($text)
	{
		return strtolower($text);
	}
}

if (!function_exists('string_upper'))
{
	/**
	 * Format string into upper case.
	 * @param  string $text
	 * @return string      
	 */
	function string_upper($text)
	{
		return strtoupper($text);
	}
}

if (!function_exists('string_title'))
{
	/**
	 * Format string into title case.
	 * @param  string $text
	 * @return string      
	 */
	function string_title($text)
	{
		return ucwords(strtolower($text));
	}
}


if (!function_exists('string_limit'))
{
	/**
	 * Limit the number of characters in a string. 
	 *
	 * <code>
	 * $string = string_limit('a brown dog jumped over a lazy fox', 10);
	 * //return "a brown do..."
	 * 
	 * $string = string_limit('a brown dog jumped over a lazy fox', 10, '...more');
	 * //return "a brown do...more"
	 * </code>
	 * 
	 * @param  string 	$text  
	 * @param  int 		$length
	 * @param  string 	$end   
	 * @return string
	 */
	function string_limit($text, $length, $end = '...')
	{
		if(strlen($text) > $length)
		{
			$substr = substr($text, 0, $length).$end;
		}
		else
		{
			$substr = $text;
		}

		return $substr;
	}
}


if (!function_exists('string_plural'))
{
	/**
	 * Convert the word into plural form.
	 *
	 * <code>
	 * $string = string_plural('query', 2);
	 * //return 'queries'.
	 * $string = string_plural('user', 2)
	 * //return 'users'.
	 * </code>
	 * 
	 * @param  string $text
	 * @return string      
	 */
	function string_plural($text, $count = 2)
	{
		$rest = substr($text, -1);

		if($count > 1 || $count == 0)
		{
			switch ($rest) {
				case 'y':
					return substr($text, 0, -1).'ies';
					break;
				case 'x':
				case 's':
				case 'h':
					return substr($text, 0, -1).'es';
					break;
				default:
					return $text.'s';
					break;
			}
		}

		return $text;
	}
}

if (!function_exists('string_format'))
{
	/**
	 * Format string
	 * @param  string $text      
	 * @param  string $separator 
	 * @return string
	 */
	function string_format($text, $separator = '_')
	{
		return preg_replace('/([^.a-z0-9]+)/i', $separator, $text);
	}
}


if (!function_exists('reverse_date'))
{
	/**
	 * Reformat MySQL datetime YYYY-MM-DD into DD-MM-YYYY. 
	 * @param  string $date
	 * @return string      
	 */
	function reverse_date($date)
	{
		$new_date = date("j-n-Y", strtotime($date));

		return $new_date;
	}
}