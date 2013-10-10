<?php

class ArrayClass
{
    public function sortArray(array $array)
    {
        ksort($array);
        return $array;
    }
}