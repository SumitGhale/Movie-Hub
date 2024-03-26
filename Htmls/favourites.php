<?php include 'header.php' ?>

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
        <div class="head">
            <div class="bg-black background"></div>
            <div class="title">
                <div class="title_line"></div>
                <h3 class="fs-1">Manage Your Favourites List</h3>
                <div class="title_line"></div>
            </div>
        </div>
        <div class="container">
            <div class="favourites_list">
                <div class="favourite">
                    <div class="image_and_desc">
                        <img src="../images/dune.png" alt="image">
                        <div class="desc">
                            <h4>Dune</h4>
                            <p>Release year: 2021</p>
                        </div>
                    </div>
                    <div class="likes_and_remove">
                        <i class="fa-solid fa-heart fs-2 text-danger"></i>
                        <p>Remove <i class="delete fa-solid fa-trash fs-2 text-secondary"></i></p>
                    </div>
                </div>
                <hr>
            </div>

            <div class="favourites_list">
                <div class="favourite">
                    <div class="image_and_desc">
                        <img src="../images/avengers.jpg" alt="image">
                        <div class="desc">
                            <h4>Avengers End Game</h4>
                            <p>Release year: 2021</p>
                        </div>
                    </div>
                    <div class="likes_and_remove">
                        <i class="fa-solid fa-heart fs-2 text-danger"></i>
                        <p>Remove <i class="fa-solid fa-trash fs-2 text-secondary"></i></p>
                    </div>
                </div>
                <hr>
            </div>

            <div class="favourites_list">
                <div class="favourite">
                    <div class="image_and_desc">
                        <img src="../images/conjuring.jpg" alt="image">
                        <div class="desc">
                            <h4>Conjuring</h4>
                            <p>Release year: 2021</p>
                        </div>
                    </div>
                    <div class="likes_and_remove">
                        <i class="fa-solid fa-heart fs-2 text-danger"></i>
                        <p>Remove <i class="fa-solid fa-trash fs-2 text-secondary"></i></p>
                    </div>
                </div>
                <hr>
            </div>

            <div class="favourites_list">
                <div class="favourite">
                    <div class="image_and_desc">
                        <img src="../images/fastandfurious.jpg" alt="image">
                        <div class="desc">
                            <h4>Fast And Furious</h4>
                            <p>Release year: 2021</p>
                        </div>
                    </div>
                    <div class="likes_and_remove">
                        <i class="fa-solid fa-heart fs-2 text-danger"></i>
                        <p>Remove <i class="fa-solid fa-trash fs-2 text-secondary"></i></p>
                    </div>
                </div>
                <hr>
            </div>

            <div class="favourites_list">
                <div class="favourite">
                    <div class="image_and_desc">
                        <img src="../images/madagascar.jpg" alt="image">
                        <div class="desc">
                            <h4>Madagascar</h4>
                            <p>Release year: 2021</p>
                        </div>
                    </div>
                    <div class="likes_and_remove">
                        <i class="fa-solid fa-heart fs-2 text-danger"></i>
                        <p>Remove <i class="fa-solid fa-trash fs-2 text-secondary"></i></p>
                    </div>
                </div>
                <hr>
            </div>

            <div class="favourites_list">
                <div class="favourite">
                    <div class="image_and_desc">
                        <img src="../images/oppenheimer.jpg" alt="image">
                        <div class="desc">
                            <h4>Oppenheimer</h4>
                            <p>Release year: 2021</p>
                        </div>
                    </div>
                    <div class="likes_and_remove">
                        <i class="fa-solid fa-heart fs-2 text-danger"></i>
                        <p>Remove <i class="fa-solid fa-trash fs-2 text-secondary"></i></p>
                    </div>
                </div>
                <hr>
            </div>
        </div>

        <?php include 'footer.php' ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script src="../js/favourite.js">
        
    </script>    
</body>

</html>