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
$date = date('y'); // get current year as two-digit string (e.g. "21")
$year = date('Y'); // get current year as four-digit string (e.g. "2021")
$months = [
  '01' => 'January',
  '02' => 'February',
  '03' => 'March',
  '04' => 'April',
  '05' => 'May',
  '06' => 'June',
  '07' => 'July',
  '08' => 'August',
  '09' => 'September',
  '10' => 'October',
  '11' => 'November',
  '12' => 'December',
];

$files = scandir('speedtest/');
sort($files);
foreach($files as $file) {
  if (strpos($file, $date) !== false) {
    $month = substr($file, 0, 2); // get month from filename
    if (isset($months[$month])) {
      echo "<br><p class='speedlist'>{$months[$month]}</p>";
    }
    $results = file_get_contents("speedtest/$file");
    list($download, $upload, $ping) = explode(',', $results);
    echo "Download: $download Mbps<br>";
    echo "Upload: $upload Mbps<br>";
    echo "Ping: $ping ms<br>";
  }
}
?>

</div>

</body>
</html>
