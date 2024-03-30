<?php include 'header.php';
include("database.php");

if (isset($_GET['id'])) {
  // Get and sanitize the product ID
  $productId = $_GET['id'];
  if ($conn instanceof mysqli) {
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT * FROM movie WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $productId);
    $stmt->execute();
    $result = $stmt->get_result();
  }
}



// session_start();

// if(!isset($_SESSION['logegdin']) || $_SESSION['loggedin'] !== true)
// {
//   header("location: login.php");
// }

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Each product</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="../Css/eachProduct.css">
</head>

<body>
  <?php
  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
  ?>
    <div class="poster_and_description">

      <!-- movie poster and description -->
      <div class="coverphoto">
        <img class="stImage" src="../images//<?php echo $row['image'] ?>" alt="image">
      </div>

      <div class="descriptionContainer">

        <!-- left section of the description container -->
        <div class="leftSection">
          <div class="filmDescription">
            <!-- above the horizontal line -->
            <div class="aboveLine">
              <div class="title">
                <h1 class="d-inline"><?php echo $row['title'] ?></h1>
                <p class="movieName d-inline"> <b><?php echo $row['release_date'] ?></b></p>
                <p class="m-0"> <i class="fa-solid fa-film"></i>
                  <?php
                  //code if the genre id was in the movie table and there were no movie_genre junction table
                  // $genreString = $row['genre_id'];
                  // $genres = explode(',', $genreString);
                  // $genres = array_map('trim', $genres);
                  // echo implode('/', $genres);

                  //code to echo genre name when we have the movie_genre junction table
                  $movieId = $row['id'];
                  $sql = "SELECT g.genre_name
                                                        FROM movie_genre AS mg
                                                        INNER JOIN genre AS g ON mg.genre_id = g.genre_id
                                                        WHERE mg.id = $movieId";

                  $genresResult = mysqli_query($conn, $sql);
                  $genresArray = [];
                  if ($genresResult->num_rows > 0) {
                    while ($genreNameRow = $genresResult->fetch_assoc()) {
                      $genresArray[] = $genreNameRow['genre_name'];
                    }
                    $genres = implode(' / ', $genresArray);
                    echo $genres;
                  }
                  ?>
                </p>
              </div>
              <div class="titleRight">
                <button type="button" class="btn btn-primary p-10"><i class="fa-solid fa-share-nodes"></i></button>
                <button type="button" class="btn btn-danger me-4 p-10">Add to watchlist +</button>
              </div>
            </div>

            <hr>

            <!-- bellow the horizontal line -->
            <div class="bellowLine">
              <!-- left section -->
              <div class="budget ms-3 mt-2">
                <p>
                  <i class="fa-solid fa-money-bill"></i>
                  BUDGET
                  <span class="amount">$ <?php echo $row['budget'] ?></span>
                </p>
              </div>
              <div class="sharingIocns fs-3 me-4">
                <i class="fa-brands fa-facebook text-primary"></i>
                <i class="fa-brands fa-youtube text-danger"></i>
                <i class="fa-brands fa-square-snapchat text-warning"></i>
                <i class="fa-brands fa-square-x-twitter text-info"></i>
              </div>
            </div>
          </div>

          <!-- summary of the movie: -->
          <div class="detailedInfo">
            <p class="summary_label">Summary</p>
            <hr>

            <h1 class="text-secondary">Storyline</h1>

            <p class="text-secondary"><?php echo nl2br($row['description']) ?>
            </p>
          </div>
        </div>

        <!-- right section of the description container -->
        <div class="rightSection">
          <img class="miniPoster" src="../images/<?php echo $row['poster_image'] ?>" alt="image">

          <div class="director mt-3">
            <h5 class="m-0">Director</h5>
            <p class="text-secondary">John Watts</p>
          </div>

          <div class="writers mt-3">
            <h5 class="m-0">Writers</h5>
            <p class="text-secondary">Erik Sommers, Stan Lee, John Doe</p>
          </div>

          <div class="cast mt-3">
            <h5 class="m-0">Cast</h5>
            <p class="text-secondary">Robert Downey Johnson, Robert Downey Junior</p>
          </div>

          <div class="Plot mt-3">
            <h5 class="m-0">Plot</h5>
            <p class="text-secondary">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit veniam fuga culpa magnam reprehenderit qui?John Watts</p>
          </div>
        </div>
      </div>
    </div>

    <!-- cards -->
    <div class="text-center m-4">
      <h2 class="underline_effect">Actors</h2>
    </div>

    <div class="actors">

      <div class="card" style="width: 18rem;">
        <img src="../images/MV5BNzIxNGU4M2ItZDdhMi00YmJjLThlNzItMmM0NTljM2RkMjA2XkEyXkFqcGdeQXVyMTA0OTI3NTYw._V1_.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5>Actor Name</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>

      <div class="card" style="width: 18rem;">
        <img src="../images/Kia.jpeg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5>Actor Name</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>

      <div class="card" style="width: 18rem;">
        <img src="../images/mathew.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5>Actor Name</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>

      <div class="card" style="width: 18rem;">
        <img src="../images/Amber.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5>Actor Name</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
    </div>

    <!-- Trailer -->
    <div class="text-center m-4">
      <h2 class="underline_effect">Link to Trailer</h2>
    </div>

    <div class="trailer">
      <iframe width="100%" height="100%" src=<?php echo $row['link_to_trailer'] ?> title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen>
      </iframe>
    </div>

    <!-- Reviews -->
    <div class="text-center m-4">
      <h2 class="underline_effect">Reviews</h2>
    </div>

    <div class="reviews">
      <div class="review col d-flex align-items-start">
        <div class="me-3">
          <img src="../images/Gordon.jpg" class="user" alt="image">
        </div>
        <div>
          <h3 class="fs-2 text-body-emphasis m-0">Bahadur</h3>
          <p class="publish_date text-secondary">26 feb, 2018 at 11:13am</p>
          <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
        </div>
      </div>

      <div class="review col d-flex align-items-start">
        <div class="me-3">
          <img src="../images/Gordon.jpg" class="user" alt="image">
        </div>
        <div>
          <h3 class="fs-2 text-body-emphasis m-0">Bahadur</h3>
          <p class="publish_date text-secondary">26 feb, 2018 at 11:13am</p>
          <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
        </div>
      </div>

      <div class="review col d-flex align-items-start">
        <div class="me-3">
          <img src="../images/Gordon.jpg" class="user" alt="image">
        </div>
        <div>
          <h3 class="fs-2 text-body-emphasis m-0">Bahadur</h3>
          <p class="publish_date text-secondary">26 feb, 2018 at 11:13am</p>
          <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
        </div>
      </div>
      <button type="button" class="btn btn-primary d-block m-auto my-2">Leave your review...</button>
    </div>
  <?php
  } ?>

  <?php include 'footer.php' ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>