<?php
  echo 'Привет мир <br>';

  

	$test = null;

	if (isset($test)) {
		echo '+';
	} else {
		echo "-";
	}

	echo "<br>";

	if ($test) {
		echo "test is not null";
	} else {
		echo "test is null";
	}