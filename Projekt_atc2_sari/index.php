
        <?php
$cookie_name = "emri";
$cookie_value = "Paracetamol";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?><!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title></title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top  bg-white navbar-white">
        <div class="container-fluid">
            <a class="Logo" href="index.php"><img src="./image/logo.png"></a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
                <i class="bi bi-list"></i>
            </button>
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li id="Home" class="nav-item" data-bs-target=".show" aria-expanded="false">
                        <a class="nav-link" href="index.php">
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="bi bi-house"></i>&nbsp;Home
                        </a>
                    </li>


                    <li class="nav-item" data-bs-target=".show" aria-expanded="false">
                        <a class="nav-link" aria-expanded="false" href="#">
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="bi bi-bag"></i>&nbsp;Contact
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="bi bi-cart"></i>&nbsp;Product
                        </a>

                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <div class="row">
                                <ul data-bs-target=".show" aria-expanded="false" class="">
                                    <a href="#" class="dropdown-item" data-bs-target=".show" aria-expanded="false"
                                        id="1">Medical</a>


                                    <a href="#" class="dropdown-item" data-bs-target=".show" aria-expanded="false"
                                        id="1">Cream</a>

                                    <a href="#" class="dropdown-item" data-bs-target=".show" aria-expanded="false"
                                        id="1">Spray</a>


                                </ul>


                            </div>



                        </ul>

                    </li>
                </ul>
               
                <form method="GET" action="./Search.php" class="d-flex">
                    <input name="Search" class="form-control mr-sm-2" type="search" placeholder="Search...">
                    <button class="btn btn-outline-success" data-bs-target=".show" aria-expanded="false"
                        type="submit" name="btn"><i class="bi bi-search"></i></button>


                </form>
                <div class="center">
                    <button id="show-login">Login</button>
                </div>
                <div class="popup">
                    <div class="close-btn">&times;</div>
                    <div class="form">
                        <h2>Log in</h2>
                        <div class="form-element">
                    <label for="email">Email</label>
                    <input type="text" id="email" placeholder="Enter email">
                        </div>
                        <div class="form-element">
                            <label for="password">Password</label>
                            <input type="password"id="password" placeholder="Enter password">
                        </div>
                        <div class="form-element">
                            <input type="checkbox" id="remember-me">
                            <label for="remember-me">Remember me</label>
                        </div>
                        <div class="form-element">
                            <button>Sign in</button>
                        </div>
                        <div class="form-element">
                          <a href="" id="Forgot password">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>



    <div class="home-container">
        <div class="doctor">
            <img src="./image/pharmacy.png">
        </div>
        <div class="circle"></div>
     


<?php
if(!isset($_COOKIE[$cookie_name])) {
  echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
  
  echo  $_COOKIE[$cookie_name];
}
?>
<?php
echo hash('sha512','kokaelavamanit1')

?>
    </div>


<script src="./main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

</body>

</html>