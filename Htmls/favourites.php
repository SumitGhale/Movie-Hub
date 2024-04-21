<?php
include 'header.php';
include("database.php");

if ($conn instanceof mysqli) {
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
} ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Favourites</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../Css/favourites.css">
</head>

<body>
    <div class="wrapper">
        <div class="search">
            <div class="title">
                <h1 id="main_text" class="text-center">Choose Your Favourite Movie</h1>
            </div>
        </div>


        <div class="container">
            <div class="favourites_list mt-5">
                <?php
                if ($conn instanceof mysqli) {
                    $sql = "SELECT m.*
                    FROM movie AS m
                    INNER JOIN favorites AS f ON m.id = f.movie_id
                    WHERE f.user_id = ?";
                    $stmt = $conn->prepare($sql);
                    $user_id = 17;
                    $stmt->bind_param('i', $user_id);
                    $stmt->execute();
                    $result = $stmt->get_result();

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                ?>
                            <div class="favourite mb-2">
                                <div class="image_and_desc">
                                    <img src="../images/<?php echo $row['poster_image'] ?>" alt="image">
                                </div>
                                <div class="likes_and_remove">
                                    <div class="desc mt-2">
                                        <h4><?php echo $row['title'] ?></h4>
                                        <p>Release year: <?php echo $row['release_date'] ?></p>
                                    </div>
                                    <form action="crud.php" method="POST">
                                        <input type="hidden" name="row_id" value="<?php echo $row['id'] ?>">
                                        <button type="submit" class="btn btn-danger mb-2">Remove</button>
                                    </form>
                                </div>
                            </div>
                <?php   }
                    }
                } ?>
            </div>
        </div>

        <?php include 'footer.php' ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script src="../js/favourite.js">

    </script>
</body>

</html>