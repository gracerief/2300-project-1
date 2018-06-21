<?php

$current_page = "breakbooth";

$breakbooth_images= array("bbmodel", "laughwshoshanna", "postits1", "postits2");

function create_gallery($image) {
  echo "<img class=\"galleryimg\" src=\"images/breakbooth/" . $image . ".jpg\" alt=\"" . $image . "\">";
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

<h1>BreakBooth - Creative Sprint</h1>

<div id="pagebody">

<h2>Abstract</h2>
  <p>One October Sunday morning, I geared up to go do something I had often
    heard-of but never had the opportunity to do. A Creative Sprint is a
    short-term brainstorming power-session where you take a product from concept
    to prototype and beyond. The prompt provided for our day-long sprint was
    "Design a product that enables users to improve their mental health."</p>
  <p>After brainstorming the root issues we may be able to address, my team of
    4 other young ladies and I went out to interview and collect data from
    pedestrians in Ithaca's Collegetown area. Once we had gotten a good sample,
    we reconvened to think about what these people could genuinely use to better
    their mental healths.</p>
    <p>Deciding on our solution was a long process. We all went back-and-forth
      proposing various happiness-inducing products or ideas, but we could never
      quite consolidate them into one, concrete product. After many groups in the
      competition had already begun user-testing their prototypes, our group had
      a multi-faceted epiphany of what we could do.

      <img id="bodyimg" src="images/breakbooth/usingyourhands.jpg" alt="Teamwork Photo">
  <h2>The Product</h2>
    <p>Our product would be called BreakBooth--a physical structure easily moved
      around a campus like Cornell's that people could enter and view and listen
       to anonymous recordings from fellow Cornellians. The recommendations for
       viewing recordings is determined by several preliminary questions when
       entering the space.
  <h2>The Result</h2>
    <p> Through the struggles that we encountered over the course of the day, we
      were all just happy to have come up with a tangible and convincing solution.
       We presented the solution enthusiastically, and we had certainly grown to
        appreciate one anothers' strengths in the process of getting to that point.
    <p>After the panel of judges deliberated over the 8 groups' products, they
      returned with their verdict. WE WON FIRST PLACE!!! We were all taken by
      surprise, as the ther teams had made amazing prototypes and great solutions,
      but the judges told the BreakBooth team that our product is one that they
      could truly see coming to life and making a difference in efforts towards
      improved mental health.</p>

<h2>Gallery<h2>
  <div id="gallery">
    <?php
    foreach ($breakbooth_images as $image) {
      create_gallery($image);
    } ?>
  </div>
</div>
<br>

<?php include("footer.php"); ?>
</body>
</html>
