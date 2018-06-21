<?php

$current_page = "cornellian";

$carpediem_images = array("AdsSpread.jpg", "BookCover.jpg",
"ClubsSpreadStudentLife.jpg", "coverwgray.png",
"FeatureSpread.jpg", "InFocusBookCover.jpg",
"InsideIntroThemePage.jpg", "Lacrosse.jpg",
"SeniorPortraitsSpead.jpg", "SeniorSuperlativeFeature.jpg",
"SmallSectionIntro.jpg", "SportsFeatureandTeamPhotosSpread.jpg",
"SportsSectionDivider.jpg", "StudentLifeSectionIntroSpread.JPG",
"TableofContentsSpread.jpg", "TeacherFeature.JPG",
"TwoEventSpreadStudentLife.jpg", "UnderclassPortraits.jpg",
"YearbookStaffFeaturePage.jpg");

function create_gallery($image) {
  echo "<img class=\"galleryimg\" src=\"images/carpediem/" . $image . "\" alt=\"" . $image . "\">";
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

<h1>Carpe Diem Yearbook</h1>

<div id="pagebody">

<h2>Position: Editor-In-Chief</h2>
  <p>At Academic Magnet High School in North Charleston, South Carolina, I was
    a part of the Carpe Diem Yearbook Staff for my sophomore, junior, and senior
   years. Sophomore year, I was introduced to the production process of the book,
  with which I quickly fell in-love. I decided to continue puruing my interest in
 this by being appointed a Co-Editor of the 2014-2015 book as a junior--the first
  junior ever to have been in such a position.
<p>At the end of my run with the Carpe Diem Staff, I was the sole Editor-In-Chief
   of the book for my senior year, in the 2015-2016 book entitled "InFocus".
   Designing this book and its theme from beginning-to-end was something I
   thoroughly enjoyed, and took great pride-in. Below is a gallery, almost entirely
  comprised of designs from the 2016 "InFocus" book.
<p>After coming to Cornell, I was made aware of the paid opportunity to be a
part of the <a>Cornellian Yearbook</a> staff as a page designer, and was quickly accepted
for the position to be a part of the book's sesquincentennial (150th) volume.</p>

<h2>Gallery<h2>
  <div id="gallery">
  <?php
  foreach ($carpediem_images as $image) {
    create_gallery($image);
  } ?>
  </div>
&nbsp;
</div>

<?php include("footer.php"); ?>
</body>
</html>
