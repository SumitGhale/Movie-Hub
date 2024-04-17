<?php
include 'header.php';
include("database.php");

if ($conn instanceof mysqli) {
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
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
    <title>Filter page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../Css/filterpage.css">
</head>

<body>
    <div class="wrapper">
        <!-- title and search form  -->
        <div class="search">
            <div class="title">
                <form action="" method="GET">
                    <h1 id="main_text" class="text-center">Choose Your Favourite Movie</h1>
                    <div class="input-group">
                        <input type="text" name="search" value="<?php if (isset($_GET['search'])) {
                                                                    echo $_GET['search'];
                                                                } ?>" class="form-control search_bar" placeholder="Recipient's username">
                        <button type="submit" class=" btn btn-danger px-5"> Search </button>
                    </div>
                </form>
            </div>
        </div>

        <h1 class="fs-1 my-4 text-dark text-center">Movies</h1>
        <div class="container">

        <!-- filter form -->
            <div class="filters_and_movies">
                <form action="" method="GET">
                    <div class="filters">
                        <div class="filter_by">
                            Filter by
                        </div>
                        <div class="genres">
                            <h4>Genre</h4>
                            <!-- get all genres from database and display it -->
                            <?php
                            if ($conn instanceof mysqli) {
                                $sql = "SELECT * FROM genre";
                                $genreResult = mysqli_query($conn, $sql);
                            }

                            if ($genreResult->num_rows > 0) {
                                while ($genreRow = $genreResult->fetch_assoc()) {
                                    $checked = [];
                                    if (isset($_GET['genre'])) {
                                        $checked = $_GET['genre'];
                                    }
                            ?>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" value="<?php echo $genreRow['genre_id']; ?>" id="<?php echo $genreRow['genre_name']; ?>" <?php if (in_array($genreRow['genre_id'], $checked)) {
                                                                                                                                                                                        echo "checked";
                                                                                                                                                                                    } ?> name="genre[]">
                                        <label class="form-check-label" for="<?php echo $genreRow['genre_name'] ?>">
                                            <?php echo $genreRow['genre_name'] ?>
                                        </label>
                                    </div>
                            <?php
                                }
                            }
                            ?>
                            <button type="submit" class="btn btn-primary">Apply changes</button>
                        </div>
                    </div>
                </form>

                <!-- display movies  -->
                <div class="movies">
                    <?php
                    if ($conn instanceof mysqli) {
                        // check if the check box are checked. if checked get the id using GET and display movies accordingly
                        if (isset($_GET['genre'])) {

                            // get the checked genre and store it in an array
                            $checked = $_GET['genre'];
                            foreach ($checked as $checkedGenre) {
                                if ($conn instanceof mysqli) {

                                    // get all th movies of checked genres
                                    $sql = "SELECT m.*
                                    FROM movie AS m
                                    INNER JOIN movie_genre AS mg ON m.id = mg.id
                                    WHERE mg.genre_id = $checkedGenre;";
                                    $checkedGenreResult = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($checkedGenreResult) > 0) {
                                        while ($row = $checkedGenreResult->fetch_assoc()) {
                    ?>
                                            <!-- display the movie cards -->
                                            <div class="movieCard">
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
                                                    $genresArray = [];
                                                    if ($genresResult->num_rows > 0) {
                                                        while ($genreNameRow = $genresResult->fetch_assoc()) {
                                                            $genresArray[] = $genreNameRow['genre_name'];
                                                        }
                                                        $genres = implode(' / ', $genresArray);
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
                                        // if box checked and no movie related to the genre found 
                                    } else {
                                        echo "movie not found";
                                    }
                                }
                            }
                            // if searched by name.
                        } elseif (isset($_GET['search'])) {
                            $title = "%" . $_GET['search'] . "%";
                            $sql = "SELECT * FROM movie WHERE title LIKE ?";
                            $stmt = $conn->prepare($sql);
                            $stmt->bind_param('s', $title);
                            $stmt->execute();
                            $result = $stmt->get_result();
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    ?>
                                    <div class="movieCard">
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
                            } else {
                                echo "No movie found";
                            }
                            // if any checkbox not checked and no search value display all movies.
                        } else {
                            $sql = "SELECT * FROM movie ORDER BY RAND() LIMIT 10";
                            $result = mysqli_query($conn, $sql);
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                ?>
                                    <div class="movieCard">
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
                        }
                    } ?>
                </div>
            </div>
        </div>
        <?php include 'footer.php' ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>