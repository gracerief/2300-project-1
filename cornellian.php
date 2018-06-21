<?php

$current_page = "cornellian";

$cornellian_images = array("000_Velum", "001_Title_Page", "006-007_Letter_from_VP_Lombardi",
"008-009_Letter_from_President_Pollack", "036-037_Alternative_Summer",
"042-042_Construction", "046-047_Gorges", "050-051_Farmers_Market",
"060-061_AppleFest", "078-079_Historic_Snow_Day", "096-097_Cultural_Events_NEW",
"100-101_Johnson_Museum_Galas", "112-113_Libraries", "112-113_Libraries",
"162-163_Greek_Tri-Council_Intro", "174-175_Greek_Social_Life",
"196-197_Field_Hockey", "212-213_Womens_Tennis");

function create_gallery($image) {
  echo "<img class=\"galleryimg\" src=\"images/cornellian/" . $image . ".png\" alt=\"" . $image . "\">";
}

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>Cornellian Yearbook | Grace Rieflin</title>
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all"/>
</head>
<body>


<?php include("header.php"); ?>

<h1>Cornellian Yearbook</h1>

<div id="pagebody">

<h2>Position: Design Editor</h2>
  <p>Appointed as a second-semester freshman in April 2017, this position involved
    taking the design vision of the Editor-In-Chief, Karly Krasnow, to life.
    The 2017-2018 edition of the Cornellian Yearbook is the 150th volume of the
    publication, and as-such its attention to detail was paramount in creating
    this iconic edition. Using Adobe InDesign along with the Jostens PageWizard
    tool suite, I brought my assignments to life through sketches and drafts of
    over 40 unique spreads. As the head of the Design Team, I helped my 2 fellow
    hands-on designers in ensuring that our individual styles would be reflected
    in conjunction with the stylistic theme of the book.</p>
  <h2>Incoming Position: Editor-In-Chief (March 2018-May 2019)</h2>

<h2>Gallery<h2>
  <div id="gallery">
  <?php
  foreach ($cornellian_images as $image) {
    create_gallery($image);
  } ?>
  </div>
&nbsp;
</div>

<?php include("footer.php"); ?>
</body>
</html>
