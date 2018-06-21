<?php

$current_page = "index";

$main_sections = array("Cornellian Yearbook" => "cornellian", "BreakBooth [Creative Sprint]" => "breakbooth", "Apparel" => "apparel", "Carpe Diem Yearbook" => "carpediem");
$section_images = array("cornellian/096-097_Cultural_Events_NEW.png", "breakbooth/bbmodel.jpg", "apparel/330trapwgray.png", "carpediem/coverwgray.png");

function home_display($main_section, $section_name, $index, $imglist) {
  echo "<div class=\"homesec\">
      <img class=\"homecover\" src=\"images/" . $imglist[$index] . "\" alt=\"" . $main_section . " Cover Photo\">
      <div class=\"overlay\">
        <h3><a href=\"" . $section_name . ".php\">" . strtoupper($main_section) . "</a></h3>
      </div>
    </div>
    ";
}

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>Home | Grace Rieflin</title>
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all"/>
</head>
<body>

  <?php include("header.php"); ?>

  <div id="homebody">
    <?php
    $i = 0;
    foreach ($main_sections as $section => $name) {
      home_display($section, $name, $i, $section_images);
      $i += 1;
    }
     ?>

  </div>

</body>
</html>
