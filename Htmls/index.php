<?php
include("database.php");
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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <?php include 'header.php'; ?>
  
<?php
  if ($_SESSION['loggedin'] !== true) {
  header("location: login.php");
} ?>


  <style>
    /* Defining CSS styles for active buttons */
    .categoryBtn.active {
      background-color: red;
      color: white;
    }
  </style>

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
    <button id="toprated_button" class="categoryBtn" onclick="highlightButton(this)">Top Rated</button>
    <button id="justreleased_button" class="categoryBtn" onclick="highlightButton(this)">Just Released</button>
    <button id="upcoming_button" class="categoryBtn" onclick="highlightButton(this)">Upcoming</button>

  </div>

  <div class="galleryTop">

    <?php
    $sql = "SELECT * FROM movie ORDER BY RAND()";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
    ?>
        <div class="movieCard" id="<?php echo $row['status'] ?>">

          <img src="../images/<?php echo $row['image'] ?>" class="cardImage">
          <div class="cardBottom">
            <p class="movieTitle"><?php echo $row['title'] ?></p>
            <?php
            $movieId = $row['id'];
            // query to get genre name from the genre table using the junction table
            $sql = "SELECT g.genre_name
                                                        FROM movie_genre AS mg
                                                        INNER JOIN genre AS g ON mg.genre_id = g.genre_id
                                                        WHERE mg.id = $movieId";

            $genresResult = mysqli_query($conn, $sql);
            if ($genresResult->num_rows > 0) {
              $genresArray = [];
              while ($genreNameRow = $genresResult->fetch_assoc()) {
                //get all the genres of the movie and add it to the array
                $genresArray[] = $genreNameRow['genre_name'];
              }
              $genres = implode(' / ', $genresArray);
            } else {
              $genres = "No genres found";
            }
            ?>
            <p class="movieYearGenre"><?php echo $row['release_date'] ?>, <?php echo $genres ?></p>

            <div class="stars">
              <?php
              for ($i = 1; $i <= 5; $i++) {
                if ($i <= $row['ratings']) {
                  echo '<i class="fa-solid fa-star"></i>';
                } else {
                  echo '<i class="fa-regular fa-star"></i>';
                }
              }
              ?>
            </div>
            <a class="btn btn-primary ms-3" href="../Htmls/eachProduct.php?id=<?php echo $row['id'] ?>" role="button">View more...</a>
          </div>
        </div>
    <?php
      }
    }
    ?>
  <p class="text-center"> 1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9...more</p>

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
        <a href="https://www.youtube.com/watch?v=0WWzgGyAH6Y"><span class="playIcon"><i class="fa-brands fa-youtube"></i></span>Watch Trailer</a></button>

      <button class="upcomingBtn2">
        <span class="addIcon"> <i class="fa-solid fa-circle-plus"></i></span>Add to Favourites</button>

    </div>

  </div>

  <p class="titleText3">Contact Us</p>

  <div class="contactUsPoster">
    <img src="../images/drstrange.png" alt="Contact Us Poster">
    <h1>Any Queries or Suggestions?</h1>
    <h2 class="text-light">Feel free to email us at : </h2>
    <h3 class="text-light">Urreviewmatters91@gmail.com</h3>
  </div>

  <?php include 'footer.php'; ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

<script>
  // Function to show movie cards based on status
  function showMovies(status) {
    // Hide all movie card divs
    document.querySelectorAll('.movieCard').forEach(card => {
      card.style.display = 'none';
    });

    // Show movie cards based on status
    var movieCards = document.querySelectorAll('#' + status + '.movieCard');
    movieCards.forEach(card => {
      card.style.display = 'block';
    });
  }

  // Event listeners for filter buttons
  document.getElementById('toprated_button').addEventListener('click', function() {
    showMovies('top_rated');


  });

  document.getElementById('justreleased_button').addEventListener('click', function() {
    showMovies('just_released');

  });

  document.getElementById('upcoming_button').addEventListener('click', function() {
    showMovies('upcoming');

  });
</script>


<script>
  // JavaScript function to highlight the clicked button
  function highlightButton(button) {
    // Remove 'active' class from all buttons
    document.querySelectorAll('.categoryBtn').forEach(btn => {
      btn.classList.remove('active');
    });

    // Add 'active' class to the clicked button
    button.classList.add('active');
  }
</script>

</html>