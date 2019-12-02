<!DOCTYPE html>
<html lang="en">
<head>
  <title>Automatic Speedtests by @damianhog</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="img/speedtest/speed.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <!-- Load an icon library to show a hamburger menu (bars) on small screens -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
  <div class="topnav" id="myTopnav">
    <a href="speedtest.php" class="active">Speedtest</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
  </div>

<div class="container">
  <h1>Automatic Speedtests by @damianhog & speedtest.net</h1>
<?php
$date ="20";
$jan ="01-01";
$feb ="02-01";
$mae ="03-01";
$apr ="04-01";
$mai = "05-01";
$jun ="06-01";
$jul ="07-01";
$aug ="08-01";
$sep ="09-01";
$okt ="10-01";
$nov ="11-01";
$dez ="12-01";
$year ="2019";
$year ="2020";

$files = scandir('speedtest/');
sort($files); // this does the sorting
foreach($files as $file){

//chek if dir name is date
  if(strpos($file, $date) !== false){

    //check if dirname is the first day in month
    if(strpos($file, $jan) !== false){
      echo "<br><p class='speedlist'>January</p>";
    }else if(strpos($file, $feb) !== false){
      echo "<br><p class='speedlist'>February</p>";
    }else if(strpos($file, $mae) !== false){
      echo "<br><p class='speedlist'>March</p>";
    }else if(strpos($file, $apr) !== false){
      echo "<br><p class='speedlist'>April</p>";
    }else if(strpos($file, $mai) !== false){
      echo "<br><p class='speedlist'>May</p>";
    }else if(strpos($file, $jun) !== false){
      echo "<br><p class='speedlist'>June</p>";
    }else if(strpos($file, $jul) !== false){
      echo "<br><p class='speedlist'>July</p>";
    }else if(strpos($file, $aug) !== false){
      echo "<br><p class='speedlist'>August</p>";
    }else if(strpos($file, $sep) !== false){
      echo "<br><p class='speedlist'>September</p>";
    }else if(strpos($file, $okt) !== false){
      echo "<br><p class='speedlist'>October</p>";
    }else if(strpos($file, $nov) !== false){
      echo "<br><p class='speedlist'>November</p>";
    }else if(strpos($file, $dez) !== false){
      echo "<br><p class='speedlist'>December</p>";
    }else{
      //if not the first day in every month then keep going
    }
     echo '<p class="speedlist"><a href="speedtest/'.$file.'">'.$file.'</a></p>';
}else{
  //If not date in dir name then do nothing
}
}
?>
</div>

</body>
</html>
