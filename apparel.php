<?php

$current_page = "cornellian";

$apparel_images = array("full330.png", "trapdrawwgray.png", "clockwgray.png", "PNMShirtFinal.jpg", "stackwgray.png", "stackoverphlowshirt.png");

function create_gallery($image) {
  echo "<img class=\"galleryimg\" src=\"images/apparel/" . $image . "\" alt=\"" . $image . "\">";
}

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>Apparel | Grace Rieflin</title>
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all"/>
</head>
<body>


<?php include("header.php"); ?>

<h1>Apparel</h1>

<div id="pagebody">


  <h2>Gallery<h2>
    <div id="gallery">
    <?php
    foreach ($apparel_images as $image) {
      create_gallery($image);
    } ?>
  </div>
</div>
  <?php include("footer.php"); ?>

</body>
</html>
