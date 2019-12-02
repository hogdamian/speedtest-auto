<!DOCTYPE html>
<html>
<head>
  <title>Automatic Speedtests by @damianhog</title>
<link rel="stylesheet" type="text/css" href="speed.css">
<!-- Load an icon library to show a hamburger menu (bars) on small screens -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="topnav" id="myTopnav">
  <a href="../../speedtest.php" class="active">Speedtests</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
  <?php
  $files = glob("*.{jpg,png,gif}", GLOB_BRACE);
  for ($i = 0; $i < count($files); $i++) {
      $image = $files[$i];
      echo "<div class='row'>";
      echo "<div class='column'>";
      echo "<h3>Speedtest at ".$i.":00 o´clock.</h3>"; // show only image name if you want to show full path then use this code // echo $image."<br />";
      echo '<img src="' . $image . '" />' . "<br /><br />";
      echo "</div>";
      echo "</div>";
  }
  ?>
  <div class="row">
  <div class="column">
  <h3>Other Speedtests</h3>
  <a href="../../speedtest.php" class="myButton"><h3>Speedtests from a another day...</h3></a>
  </div>
  </div>
</body>
</html>

