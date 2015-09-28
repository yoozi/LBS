<?php

require '../vendor/autoload.php';

use Yoozi\LBS\Query\Place;
use Yoozi\LBS\Search;

class multipleTest extends PHPUnit_Framework_TestCase
{
    public function testPushAndPop()
    {

		$place = new Place;
		$place->set('method', 'suggestion');
		$place->set('q', '尚德大厦');
		$place->set('region', '广州市');

		$search = new Search('E4805d16520de693a3fe707cdc962045', $place);

		var_dump($search->run()->toArray());

    }
}

?>