<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Learn PHP</title>
</head>
<body>
  <?php
    error_reporting(E_ALL);
    ini_set('display_errors', 'on');
    mb_internal_encoding("UTF-8");

    // include 'code.php';
  ;?>

  <form action="" method="GET">
    <p>Выберите язык программирования:</p>
    <select name="test" id="">
      <option value="1"
        <?php
          if (!empty($_GET['test']) and $_GET['test'] === '1') {
            echo 'selected';
          }
        ?>
      >Python</option>
      <option value="2"
        <?php
          if (!empty($_GET['test']) and $_GET['test'] === '2') {
            echo 'selected';
          }
        ?>
      >PHP</option>
      <option value="3"
        <?php
          if (!empty($_GET['test']) and $_GET['test'] === '3') {
            echo 'selected';
          }
        ?>
      >Java</option>
    </select>
    <input type="submit" value="Потвердить">
  </form>

  <?php 
    var_dump(!empty($_GET['radio']));
    echo '<br>';
    var_dump($_GET);
    echo '<br>';
    var_dump(isset($_GET['test']));
  ;?>

  <?php
    // var_dump($_GET);
    // echo "<br>";
    if(isset($_GET['test'])) {
      if($_GET['test'] === '1') {
        echo "<h3>Pyhon</h3>";
      } else if ($_GET['test'] === '2') {
        echo "<h3>PHP</h3>";
      } else {
        echo "<h3>Java</h3>";
      }
    }


   
  ;?>


  
  
  
</body>
</html>