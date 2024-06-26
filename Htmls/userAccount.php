<?php include 'header.php';
// session_start();
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Account</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../Css/userAccount.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <?php
    $user_id = $_SESSION['user_id'];
    $sql = "SELECT * FROM users WHERE id = $user_id";

    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            $first_name = $row['first_name'];
            $last_name = $row['last_name'];
            $email = $row['email'];

        }
    }
    ?>
    <!-- rectangle with profile image -->
    <div id="user_image_rectangle">
        <div id="profile_desc">
            <img id="profile_pic" src="../images/profilePic.jpg" alt="image">
        </div>

        <div class="topUserDetails">
            <div id="username">
                <h3><?php echo $first_name ?></h3><br>
                <h3><?php echo $last_name ?></h3>
            </div>
            <div class="useremail">
                <p><?php echo $email ?></p>
            </div>
        </div>

        <div class="logoutBtn">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#reg-modal">Logout</button>
        </div>

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
                        Your Reviews
                    </a>
                </li>
                <li>
                    <a href="#" id="account_settings_btn" class="nav-link link-body-emphasis side_btns">
                        Account Settings
                    </a>
                </li>
                <li>
                    <a href="#" id="logout_btn" class="nav-link link-body-emphasis side_btns" data-bs-toggle="modal" data-bs-target="#reg-modal">
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
                    <div class="profileTitle"><b>
                            <p>Edit your details</p>
                        </b></div>

                    <form method="post">

                        <div class="col-sm-6">
                            <label for="firstName" class="form-label ">First name</label>
                            <input type="text" name="firstName" class="form-control" id="firstName" value="<?php echo $first_name ?>" required="" fdprocessedid="dmr3i">
                            <div class="invalid-feedback">
                                Valid first name is required.
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <label for="lastName" class="form-label mt-3">Last name</label>
                            <input type="text" name="lastName" class="form-control" id="lastName" value="<?php echo $last_name ?>" required="" fdprocessedid="kxpm7">
                            <div class="invalid-feedback">
                                Valid last name is required.
                            </div>
                        </div>



                        <div class="col-12">
                            <label for="email" class="form-label mt-3">Email </label>
                            <input type="email" name="email" class="form-control" id="email" value="<?php echo $email ?>" fdprocessedid="w2fedd">
                            <div class="invalid-feedback">
                                Please enter a valid email address for shipping updates.
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary mt-3">Save changes</button>
                    </form>

                    <?php

                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        // Retrieve form data
                        $first_name = $_POST['firstName'];
                        $last_name = $_POST['lastName'];
                        $email = $_POST['email'];

                        // Update query
                        $sql = "UPDATE users SET first_name='$first_name', last_name='$last_name', email = '$email' WHERE id='$user_id'";

                        if ($conn->query($sql) === TRUE) {

                            echo "<meta http-equiv='refresh' content='0'>";  //Reloads the page after submit

                        } else {
                            $conn->error;
                        }
                    }
                    ?>
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

            <!-- your reviews  -->

            <div class="section" id="your_lists">
                <ol class="list-group list-group-numbered">

                    <?php
                    $USER_ID = $_SESSION['user_id'];
                    $sql = "SELECT *
                FROM review_table r
                JOIN users u ON r.user_id = u.id
                JOIN movie m ON r.movie_id = m.id
                WHERE u.id = $USER_ID";

                    $result = mysqli_query($conn, $sql);
                    if ($result->num_rows > 0) {
                        // Output data of each row
                        while ($row = $result->fetch_assoc()) { ?>
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold"><?php echo $row['title']; ?></div>
                                    <?php echo $row['user_review']; ?>
                                </div>
<<<<<<< HEAD
                                <form id="deleteReviewForm" method="post" action="delete_review.php">
                                    <button type="submit" name="deleteReview" style="background: none; border: none; padding: 0; margin: 0;">
                                        <i class="fa-solid fa-trash icon" style="margin-top: 15px; color: red; cursor: pointer;"></i>
                                    </button>
                                </form>
=======
                                <i class="fa-solid fa-trash icon" style="margin-top: 15px; color: red; cursor: pointer" data-review-id="<?php echo $row['review_id']; ?>"></i>

                                <script>
                                    // JavaScript to handle the click event on the delete icon
                                    document.querySelectorAll('.icon').forEach(icon => {
                                        icon.addEventListener('click', function() {
                                            const reviewId = this.getAttribute('data-review-id');
                                            const listItem = this.closest('li');
                                            // Send an AJAX request to the PHP script to delete the review
                                            fetch('delete_review.php?id=' + reviewId, {
                                                    method: 'POST'
                                                })
                                                .then(response => {
                                                    if (response.ok) {
                                                        // If deletion is successful, remove the review element from the DOM
                                                        listItem.remove();
                                                    } else {
                                                        // Handle error
                                                        console.error('Failed to delete review');
                                                    }
                                                })
                                                .catch(error => {
                                                    console.error('Error:', error);
                                                });
                                        });
                                    });
                                </script>
>>>>>>> 2e5b7adfbb4a12f92a020e60c59139110f532763
                            </li>

                    <?php    }
                    } ?>




                </ol>
            </div>

            <div class="section" id="account_settings">
                user account_settings
            </div>

            <!-- Logout -->
            <div class="section" id="logout">
            </div>
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
                            <button type="button" id="logoutBtn" class="btn btn-primary">Logout</button>
                            <script>
                                // Event listener for the logout button click
                                document.getElementById('logoutBtn').addEventListener('click', function() {
                                    // Redirect to the logout script
                                    window.location.href = 'login.php';
                                    session_start();
                                    $_SESSION = array();
                                    session_destroy();
                                });
                            </script>
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