<?php

class Math 
{
	public static function add($num1, $num2)
	{
		return $num1 + $num2;
	}

    public static function multiply($num1,$num2)
    {

        if(is_numeric($num1) && is_numeric($num2)) {
            return $num1 * $num2;
        }

        throw new InvalidArgumentException;
        
    }

}