<?php
	$arr = [
		[
			'name' => 'user1',
			'age'  => 30,
		],
		[
			'name' => 'user2',
			'age'  => 31,
		],
		[
			'name' => 'user3',
			'age'  => 32,
		],
	];


  echo 'Привет мир asdfas<br>';

	$str = 'a\\b c\\\\d e\\\\\\f';
	echo $str . "<br>";

	echo preg_replace('#[a-z]\\\\+[a-z]#', '!', $str);

	echo "<br>";
	echo "<br>";

	$cities = [
		[
			'country' => 'Россия',
			'city' =>    'Москва',
		],
		[
			'country' => 'Беларусь',
			'city' =>    'Минск',
		],
		[
			'country' => 'Россия',
			'city' =>    'Питер',
		],
		[
			'country' => 'Россия',
			'city' =>    'Владивосток',
		],
		[
			'country' => 'Украина',
			'city' =>    'Львов',
		],
		[
			'country' => 'Беларусь',
			'city' =>    'Могилев',
		],
		[
			'country' => 'Украина',
			'city' =>    'Киев',
		],
	];


	$result = [];
	foreach($cities as $city) {
		$result[$city['country']][] = $city['city'];
	}

	var_dump($result);
	echo "<br>";

	$items = [
		[
			'date'  => '2019-12-29',
			'event' => 'name1'
		],
		[
			'date'  => '2019-12-31',
			'event' => 'name2'
		],
		[
			'date'  => '2019-12-29',
			'event' => 'name3'
		],
		[
			'date'  => '2019-12-30',
			'event' => 'name4'
		],
		[
			'date'  => '2019-12-29',
			'event' => 'name5'
		],
		[
			'date'  => '2019-12-31',
			'event' => 'name6'
		],
		[
			'date'  => '2019-12-29',
			'event' => 'name7'
		],
		[
			'date'  => '2019-12-30',
			'event' => 'name8'
		],
		[
			'date'  => '2019-12-30',
			'event' => 'name9'
		],
	];


	$result2 = [];
	foreach($items as $date) {
		$result2[$date['date']][] = $date['event'];
	}

	var_dump($result2);
	echo "<br>";