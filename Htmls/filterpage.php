<?php include 'header.php' ?>

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
        <div class="title">
            <img class="background" src="../images/dune.png" alt="image">
            <div class="title_line"></div>
            <h1 id="main_text">Choose Your Favourite Movie</h1>
            <div class="title_line"></div>
        </div>


        <h1 class="fs-1 my-4 text-light text-center">Movies</h1>
        <div class="container">
            <div class="filters_and_movies">
                <div class="filters">
                    <div class="filter_by">
                        Filter by
                    </div>
                    <div class="genres">
                        <h4>Genre</h4>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" value="" id="comics">
                            <label class="form-check-label" for="comics">
                                Comics
                            </label>
                        </div>

                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" value="" id="romance">
                            <label class="form-check-label" for="romance">
                                Romance
                            </label>
                        </div>

                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" value="" id="thriller">
                            <label class="form-check-label" for="thriller">
                                Thriller
                            </label>
                        </div>

                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" value="" id="fiction">
                            <label class="form-check-label" for="fiction">
                                Fiction
                            </label>
                        </div>

                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" value="" id="non_fiction">
                            <label class="form-check-label" for="non_fiction">
                                Non fiction
                            </label>
                        </div>

                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" value="" id="comedy" checked>
                            <label class="form-check-label" for="comedy">
                                Comedy
                            </label>
                        </div>
                        <button type="button" class="btn btn-primary">Apply changes</button>
                    </div>
                </div>
                <div class="movies">
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
            </div>
        </div>
        <?php include 'footer.php' ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <Script>
        let heading = document.querySelector('#main_text');

        window.addEventListener('scroll', () =>{
            let value = window.scrollY;
            console.log("i am here" + value);
            heading.style.marginTop = value * 2.5 + 'px';
        })
    </Script>
</body>

</html>