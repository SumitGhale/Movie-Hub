<?php include 'header.php' ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Account</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../Css/userAccount.css">
</head>

<body>
    <!-- rectangle with profile image -->
    <div id="user_image_rectangle">
        <div id="profile_desc">
            <img id="profile_pic" src="../images/mathew.jpg" alt="image">
            <div id="username">
                <h3>John Doe</h3>
                <p>Johnkumar@gmail.com</p>
            </div>
        </div>
        <button type="button" class="btn btn-primary">Logout</button>
    </div>

    <!-- profile options -->
    <div id="profile_details">
        <div class="d-flex flex-column flex-shrink-0 p-3 bg-white" style="width: 280px;">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                <span class="fs-4">Sidebar</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="#" id="profile_btn" class="nav-link active side_btns" aria-current="page">
                        Profile
                    </a>
                </li>
                <li>
                    <a href="#" id="watchlists_btn" class="nav-link link-body-emphasis side_btns">
                        Watchlists
                    </a>
                </li>
                <li>
                    <a href="#" id="yourlists_btn" class="nav-link link-body-emphasis side_btns">
                        Your Lists
                    </a>
                </li>
                <li>
                    <a href="#" id="account_settings_btn" class="nav-link link-body-emphasis side_btns">
                        Account Settings
                    </a>
                </li>
                <li>
                    <a href="#" id="logout_btn" class="nav-link link-body-emphasis side_btns myModal" data-bs-toggle="modal" data-bs-target="#reg-modal">
                        Logout
                    </a>
                </li>
            </ul>
            <hr>
        </div>

        <div class="sections">

            <!-- profile -->
            <div class="section" id="profile">
                <div class="row g-3">
                    <div class="col-sm-6">
                        <label for="firstName" class="form-label">First name</label>
                        <input type="text" class="form-control" id="firstName" placeholder="" value="" required="" fdprocessedid="dmr3i">
                        <div class="invalid-feedback">
                            Valid first name is required.
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <label for="lastName" class="form-label">Last name</label>
                        <input type="text" class="form-control" id="lastName" placeholder="" value="" required="" fdprocessedid="kxpm7">
                        <div class="invalid-feedback">
                            Valid last name is required.
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="username" class="form-label">Username</label>
                        <div class="input-group has-validation">
                            <span class="input-group-text">@</span>
                            <input type="text" class="form-control" id="username" placeholder="Username" required="" fdprocessedid="h2z37i">
                            <div class="invalid-feedback">
                                Your username is required.
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="email" class="form-label">Email <span class="text-body-secondary">(Optional)</span></label>
                        <input type="email" class="form-control" id="email" placeholder="you@example.com" fdprocessedid="w2fedd">
                        <div class="invalid-feedback">
                            Please enter a valid email address for shipping updates.
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" id="address" placeholder="1234 Main St" required="" fdprocessedid="fyysxg">
                        <div class="invalid-feedback">
                            Please enter your shipping address.
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="address2" class="form-label">Address 2 <span class="text-body-secondary">(Optional)</span></label>
                        <input type="text" class="form-control" id="address2" placeholder="Apartment or suite" fdprocessedid="1dkqqa">
                    </div>

                    <div class="col-md-5">
                        <label for="country" class="form-label">Country</label>
                        <select class="form-select" id="country" required="" fdprocessedid="doj4hm">
                            <option value="">Choose...</option>
                            <option>United States</option>
                        </select>
                        <div class="invalid-feedback">
                            Please select a valid country.
                        </div>
                    </div>

                    <div class="col-md-4">
                        <label for="state" class="form-label">State</label>
                        <select class="form-select" id="state" required="" fdprocessedid="8pjd6d">
                            <option value="">Choose...</option>
                            <option>California</option>
                        </select>
                        <div class="invalid-feedback">
                            Please provide a valid state.
                        </div>
                    </div>

                    <div class="col-md-3">
                        <label for="zip" class="form-label">Zip</label>
                        <input type="text" class="form-control" id="zip" placeholder="" required="" fdprocessedid="ypop05">
                        <div class="invalid-feedback">
                            Zip code required.
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </div>

            <!-- watchlists -->
            <div class="section" id="watchlists">
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
                </div>
            </div>

            <div class="section" id="your_lists">
                user your_lists
            </div>

            <div class="section" id="account_settings">
                user account_settings
            </div>

            <div class="section" id="logout">
                <div class="modal" id="reg-modal" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Logout ?</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>Are you sure you want to logout?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Logout</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'footer.php' ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="../js/userAccount.js"> </script>
</body>

</html>