<?php 

  $pass = '12345';

  var_dump($_POST);

  echo "<br>";

  $year = $_POST['year'];
  $month = $_POST['month'];
  $day = $_POST['day'];

  $birthday = date('w', mktime(0, 0, 0, $month, $day, $year));

  $weeks = ['воскресенье', 'пон', 'вт', 'среда', 'чт', 'пт', 'суб'];

  echo "Вы родились в $weeks[$birthday]";  
  

;?>