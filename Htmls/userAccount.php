<?php include 'header.php' ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Account</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
        <button type="button" class="btn btn-primary">Primary</button>
    </div>

    <!-- profile options -->
    <div id="profile_details">
        <div class="d-flex flex-column flex-shrink-0 p-3 bg-body-tertiary" style="width: 280px;">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                <span class="fs-4">Sidebar</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="#" class="nav-link active" aria-current="page">
                        Home
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link link-body-emphasis">
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link link-body-emphasis">
                        Orders
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link link-body-emphasis">
                        Products
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link link-body-emphasis">
                        Customers
                    </a>
                </li>
            </ul>
            <hr>
        </div>

        <div id="user_details">
            user details
        </div>
    </div>
    <?php include 'footer.php' ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>