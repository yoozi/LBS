<?php

use Yoozi\LBS\Query\Place;
use Yoozi\LBS\Search;

class multipleTest extends PHPUnit_Framework_TestCase
{
    public function testPushAndPop()
    {
		$place = new Place;
		$this->assertTrue(isset($place));
    }
}

?>