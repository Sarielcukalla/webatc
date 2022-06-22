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
//   echo  '<div class="alert alert-danger" role="alert">
//   A simple danger alert—check it out!
// </div>';
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
                        <a class="nav-link mx-2" href="./store.php">Store</a>
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
            <i class="bi bi-person-circle"></i>
        </button>


        <div class="modal fade" id="ModalForm" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                    <form action="" method="POST">
                        <div class="modal-header">
                            <h5 class="modal-title">Login</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="Username">Username<span class="text-danger">*</span></label>
                                <input required type="text" name="emri" class="form-control" id="Username"
                                    placeholder="Enter Username">
                            </div>

                            <div class="mb-3">
                                <label for="Password">Password<span class="text-danger">*</span></label>
                                <input required type="password" name="password" class="form-control" id="Password"
                                    placeholder="Enter Password">
                            </div>
                            <div class="mb-3">
                                <input class="form-check-input" type="checkbox" value="" id="remember" required>
                                <label class="form-check-label" for="remember">Remember Me</label>
                                <a href="#" class="float-end">Forgot Password</a>
                            </div>
                        </div>
                        <div class="modal-footer pt-4">
                            <button type="submit" class="btn btn-success mx-auto w-100">Login</button>
                        </div>
                        <p class="text-center">Not yet account, <a href="#">Sign up</a></p>
                    </form>
                </div>
            </div>
        </div>
    </nav>

    <div class="bg-white py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-0">
                    <span class="store_a"><a href="index.php">Home</a></span>
                    <span class="mx-2 mb-0">/</span>
                    <strong class="text-black">Store</strong>
                </div>
            </div>
        </div>
    </div>

    <?php
    include "Ldb.php";
    $data = array();

    $cardsProduct = mysqli_query($conn, "SELECT * FROM `cards_product`");
    while ($row = mysqli_fetch_object($cardsProduct)) {
        $data[] = $row;
    }
    $arr = json_decode(json_encode($data), TRUE);?>
    <div class="container cards-flex">
        <?php if (is_countable($arr) && count($arr) >= 1) : ?>
        <?php foreach ($arr as $key => $value) : ?>
        <div class="product-card">
            <div class="product-tumb">
                <img src="./image/<?php echo $value['image'] ?>">
            </div>
            <div class="product-details">
                <span class="product-catagory"><?php echo $value['Product'] ?></span>
                <hr />
                <p><?php echo $value['Description'] ?></p>
                <hr />
                <div class="product-bottom-details">
                    <h4><a class="btn" href="./shop.php">Shop Now</a></h4>
                    <div class="product-price"><small><?php echo $value['Price'] ?></small></div>
                    <div class="product-links">
                    </div>
                </div>
            </div>
        </div>

        <?php endforeach; ?>
        <?php endif; ?>
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