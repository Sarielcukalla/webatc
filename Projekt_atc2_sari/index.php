<?php
$cookie_name = "emri";
$cookie_value = "Paracetamol";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<?php
include("Ldb.php");

if (isset($_POST['rregj'])) {
    $Emri = $_POST['emri'];
    $mbiemri = $_POST['mbiemri'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $selectEmail = "SELECT 'email' FROM perdorues WHERE 'email' == $email";
    if ($selectEmail != null) {
  echo  '<div class="alert alert-danger" role="alert">
  A simple danger alert—check it out!
</div>';
    } else {
        $sql = "INSERT INTO perdorues (emri, mbiemeri, email, password)
    VALUES ('$Emri', '$mbiemri', '$email', '$password')";


        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
            // header("Location: http://localhost/phpmyadmin/index.php?route=/sql&db=urban&table=linjat&pos=0");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    $_SESSION['loggedin'] = true;
    $conn->close();
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Pharmacy_Online</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <link rel="icon" type="image/x-icon" href="./image/syrup.png">
</head>

<body>
    <nav class="navbar navbar-expand-lg  navbar-light p-3">
        <div class="container-fluid">
            <a style="color: rgb(138 214 126);" class="navbar-brand fs-3" href="./index.php">Pharma<span>cy</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class=" collapse  navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto ">
                    <li class="nav-item">
                        <a style="color: #86d47f;" class="nav-link mx-2 active" aria-current="page"
                            href="./index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="./shop.php">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="./aboutus.php">About Us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link mx-2 dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Products
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="./medical.php">Medical</a></li>
                            <li><a class="dropdown-item" href="./cream.php">Cream</a></li>
                            <li><a class="dropdown-item" href="./spray.php">Spray</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto d-none d-lg-inline-flex">
                    <li class="nav-item mx-2">
                        <a class="nav-link text-dark h5" href="" target="blank"><i class="bi bi-google"></i></a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link text-dark h5" href="" target="blank"><i class="bi bi-twitter"></i></a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link text-dark h5" href="" target="blank"><i class="bi bi-facebook"></i></a>
                    </li>
                </ul>

                <form id="show" method="GET" action="./search.php" class="d-flex">
                    <input name="Search" class="form-control mr-sm-2" type="search" placeholder="Search...">
                    <button class="btn btn-warning" data-bs-target=".show" aria-expanded="false" type="submit"
                        name="btn"><i class="bi bi-search"></i></button>


                </form>
            </div>
        </div>

        <button type="button" class="btn btn-success d-table  mx-auto" data-bs-toggle="modal"
            data-bs-target="#ModalForm">
           Login
        </button>

        <!-- Modal Form -->
        <div class="modal fade" id="ModalForm" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <!-- Login Form -->
                    <form action="">
                        <div class="modal-header">
                            <h5 class="modal-title">login</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="Username">Username<span class="text-danger">*</span></label>
                                <input type="text" name="username" class="form-control" id="Username"
                                    placeholder="Enter Username">
                            </div>

                            <div class="mb-3">
                                <label for="Password">Password<span class="text-danger">*</span></label>
                                <input type="password" name="password" class="form-control" id="Password"
                                    placeholder="Enter Password">
                            </div>
                            <div class="mb-3">
                                <input class="form-check-input" type="checkbox" value="" id="remember" required>
                                <label class="form-check-label" for="remember">Remember Me</label>
                                <a href="#" class="float-end">Forgot Password</a>
                            </div>
                        </div>
                        <div class="modal-footer pt-4">
                            <button type="button" class="btn btn-success mx-auto w-100">Login</button>
                        </div>
                        <p class="text-center">Not yet account, <a href="#">Signup</a></p>
                    </form>
                </div>
            </div>
        </div>
    </nav>

    <div class="container   header-container">
        <div class="image-header">
            <img class="img-fluid" src="./image/pharmacy-header.webp">
            <div class="text-header">
                <h1><span>Pharmative</span> Opens 24 Hours</h1>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt nihil eveniet <br> mollitia
                    accusantium. Nam quasi sed ut nihil consectetur itaque. Illo autem eos omnis?</p>
            </div>
            <a href="./shop.php" class="btn btn-primary px-5 py-3">Shop Now</a>
        </div>

        <div class="site-section py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="feature">
                            <span class="wrap-icon">
                                <i class="bi bi-shop-window"></i>

                            </span>
                            <a href="#">
                                <h3>Free Delivery</h3>
                            </a>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa laborum voluptates
                                excepturi neque labore. </p>

                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="feature">
                            <span class="wrap-icon">
                                <i class="bi bi-shop-window"></i>
                            </span>
                            <a href="#">
                                <h3>New Medicine Everyday</h3>
                            </a>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa laborum voluptates
                                excepturi neque labore. </p>

                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="feature">
                            <span class="wrap-icon">
                                <i class="bi bi-heart"></i>

                            </span>
                            <a href="#">
                                <h3>Medicines Guaranteed</h3>
                            </a>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa laborum voluptates
                                excepturi neque labore. </p>

                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="site-section">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-6">
                        <div class="title-section">
                            <h2>Our <strong style="color:#75b239;">Products</strong></h2>
                        </div>
                        <div class="block-3 products-wrap">
                            <div id="demo" class="carousel slide" data-bs-ride="carousel">

                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#demo" data-bs-slide-to="0"
                                        class="active"></button>
                                    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                                    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                                </div>


                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="./image/My project (2).png" alt=""
                                            class="rounded mx-auto d-block img-fluid">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="./image/pills.jpg " class="rounded mx-auto d-block img-fluid">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="./image/My project (4).png" alt=""
                                            class="rounded mx-auto d-block img-fluid">
                                    </div>
                                </div>

                                <button class="carousel-control-prev" type="button" data-bs-target="#demo"
                                    data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon"></span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#demo"
                                    data-bs-slide="next">
                                    <span class="carousel-control-next-icon"></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="title-section">
                            <h2 class="mb-5">Why <strong style="color:#75b239;">Us</strong></h2>
                            <div class="step-number d-flex mb-4">
                                <span>1</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae non unde ipsa quo
                                    placeat eveniet iure beatae culpa, quisquam velit reiciendis cum commodi consequatur
                                    dolorum excepturi magnam ex dolor obcaecati!</p>
                            </div>
                            <div class="step-number d-flex mb-4">
                                <span>2</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae non unde ipsa quo
                                    placeat eveniet iure beatae culpa, quisquam velit reiciendis cum commodi consequatur
                                    dolorum excepturi magnam ex dolor obcaecati!</p>
                            </div>
                            <div class="step-number d-flex mb-4">
                                <span>3</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae non unde ipsa quo
                                    placeat eveniet iure beatae culpa, quisquam velit reiciendis cum commodi consequatur
                                    dolorum excepturi magnam ex dolor obcaecati!</p>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

        </div>



    </div>
    <footer class="site-footer bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                    <div class="block-7">
                        <h3 class="footer-heading mb-4">About <strong>Us</strong></h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis praesentium ipsam iste
                            aliquam. Perspiciatis officiis labore non modi sunt dolorum, animi excepturi temporibus
                            corporis eos ad expedita est itaque rem?</p>
                    </div>
                </div>
                <div class="col-lg-3 mx-auto mb-5 mb-lg-0">

                    <h3 class="footer-heading mb-4">Navigation</h3>
                    <ul class="list-unstyled">
                        <li><a href="">Supplements</a></li>
                        <li><a href="">Vitamins</a></li>
                        <li><a href="">Diet & Nutrition</a></li>
                    </ul>

                </div>
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                    <div class="block-5 mb-5">
                        <h3 class="footer-heading mb-4">Contact Info</h3>
                        <ul class="list-unstyled">
                            <li>203 Fake St. Mountain View, San Francisco, California, USA</li>
                            <li>+2 392 3929 210</li>
                            <li>emailaddress@domain.com</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </footer>



    <script src="./main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>