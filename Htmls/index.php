<?php

session_start();

if(!isset($_SESSION['logegdin']) || $_SESSION['loggedin'] !== true)
{
  header("location: login.php");
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Movie Hub</title>
  <link rel="stylesheet" href="../Css/header.css">
  <link rel="stylesheet" href="../Css/index.css">
  <link rel="stylesheet" href="../Css/footer.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <?php include 'header.php'; ?>
</head>

<body>



  <div class="frontScreen">
    <div class="frontScreenLeft">
      <img src="../images/posterone.jpg" alt="poster one">
    </div>

    <div class="frontScreenRight">

      <div class="rightScreen1"><img src="../images/avengers.jpg" alt="rightposter1"></div>
      <div class="rightScreen2"><img src="../images/dune.png" alt="rightposter2"></div>
      <div class="rightScreen3"><img src="../images/oppenheimer.jpg" alt="rightposter3"></div>

    </div>
  </div>

  <p class="titleText1">Know more from our reviews</p>

  <div class="releaseCategories">
    <button class="categoryBtn">Top rated</button>
    <button class="categoryBtn">Just released</button>
    <button class="categoryBtn">Upcoming</button>

  </div>

  <div class="galleryTop">

    <div class="movieCard">
      <img src="../images/conjuring.jpg" class="cardImage">
      <div class="cardBottom">
        <p class="movieTitle">The Conjuring</p>
        <p class="movieYearGenre">2018, Horror</p>
        <div class="stars">
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
        </div>
      </div>

    </div>

    <div class="movieCard">
      <img src="../images/madagascar.jpg" class="cardImage">
      <div class="cardBottom">
        <p class="movieTitle">Madagascar</p>
        <p class="movieYearGenre">2018, Action</p>
        <div class="stars">
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
        </div>
      </div>
    </div>

    <div class="movieCard">
      <img src="../images/madameweb.jpeg" class="cardImage">
      <div class="cardBottom">
        <p class="movieTitle">Madame Web</p>
        <p class="movieYearGenre">2018, Action</p>
        <div class="stars">
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
        </div>
      </div>
    </div>

    <div class="movieCard">
      <img src="../images/pussinboots.jpg" class="cardImage">
      <div class="cardBottom">
        <p class="movieTitle">Puss in Boots</p>
        <p class="movieYearGenre">2018, Action</p>
        <div class="stars">
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
        </div>
      </div>
    </div>

  </div>

  <div class="galleryBottom">

    <div class="movieCard">
      <img src="../images/fastandfurious.jpg" class="cardImage">
      <div class="cardBottom">
        <p class="movieTitle">Fast and Furious</p>
        <p class="movieYearGenre">2018, Action</p>
        <div class="stars">
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
        </div>
      </div>
    </div>

    <div class="movieCard">
      <img src="../images/transformers.jpg" class="cardImage">
      <div class="cardBottom">
        <p class="movieTitle">Transformers</p>
        <p class="movieYearGenre">2018, Action</p>
        <div class="stars">
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
        </div>
      </div>
    </div>

    <div class="movieCard">
      <img src="../images/vamprie.jpg" class="cardImage">
      <div class="cardBottom">
        <p class="movieTitle">The Vampire Diaries</p>
        <p class="movieYearGenre">2018, Action</p>
        <div class="stars">
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
        </div>
      </div>
    </div>

    <div class="movieCard">
      <img src="../images/dune.png" class="cardImage">
      <div class="cardBottom">
        <p class="movieTitle">Dune</p>
        <p class="movieYearGenre">2018, Action</p>
        <div class="stars">
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
        </div>
      </div>
    </div>
  </div>

  <div class="upcomingPoster">

    <p class="titleText2">Highly awaited</p>

    <div class="upcomingPosterImage">
      <img src="../images/superman.jpg" alt="posterImage">

      <div class="upcomingPosterDesc">

        <div class="upcomingTitle">
          <p>Batman vs Superman</p>
        </div>

        <div class="upcomingMiniDesc">
          <div class="upcomingMiniDesc1">
            <p>2 hr 31 mins</p>
          </div>
          <div class="upcomingMiniDesc2">
            <p>Action, Si-Fiction</p>
          </div>
          <div class="upcomingMiniDesc3">
            <p>March 16, 2016</p>
          </div>

        </div>

        <div class="upcomingMainDesc">
          <p>
          Bruce Wayne, a billionaire, believes that Superman is a threat to humanity after his battle in Metropolis. Thus, he decides to adopt his mantle of Batman and defeat him once and for all.After losing Vanessa (Morena Baccarin), the love of his life, 4th-wall breaking mercenary Wade Wilson aka Deadpool (Ryan Reynolds) must assemble a team and protect a young, full-figured mutant Russell Collins aka Firefist (Julian Dennison)
            from Cable (Josh Brolin).</p>
        </div>

        <div class="upcomingCasting">
           <p> <span class="boldText">Director: </span>David Leitch</p>
           <p> <span class="boldText">Writers: </span>Rhett Reese, Paul Wernick</p>
           <p> <span class="boldText">Stars: </span>Ryan Reynolds, Josh Brolin, Morena Baccarin</p>
        </div>

      </div>

    </div>

    <div class="upcomingButtons">

      <button class="upcomingBtn1">
        <span class="playIcon"><i class="fa-brands fa-youtube"></i></span>Watch Trailer</button>

      <button class="upcomingBtn2">
        <span class="addIcon"> <i class="fa-solid fa-circle-plus"></i></span>Add to Favourites</button>

    </div>

  </div>

  <p class="titleText3">Contact Us</p>

  <div class="contactUsPoster">
    <img src="../images/drstrange.png" alt="Contact Us Poster">
    <h1>Any Queries or Suggestions?</h1>
    <h2>Feel free to email us at : </h2>
    <h3>Urreviewmatters91@gmail.com</h3>
  </div>

  <?php include 'footer.php'; ?>


</body>

</html>