<?php


class ArrayTest extends PHPUnit_Framework_TestCase
{
    public function testSort()
    {
        $array = new ArrayClass();
        $newArray = $array->sortArray(['kathy'=>'soup','alan'=>'pizza','charles'=>'chips']);
        //$this->assertEquals(['kathy'=>'soup','alan'=>'pizza','charles'=>'chips'],$newArray);
        $this->assertSame(['alan'=>'pizza','charles'=>'chips','kathy'=>'soup',],$newArray);
        
    }

}