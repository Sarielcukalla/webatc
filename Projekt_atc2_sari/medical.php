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
                                <a style="color: #86d47f;" class="nav-link mx-2 active" aria-current="page" href="./index.php">Home</a>
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
                                    <li><a class="dropdown-item" href="#">Medical</a></li>
                                    <li><a class="dropdown-item" href="#">Cream</a></li>
                                    <li><a class="dropdown-item" href="#">Spray</a></li>
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
                        
                <form id="show" method="GET" action="./Search.php" class="d-flex">
                    <input name="Search" class="form-control mr-sm-2" type="search" placeholder="Search...">
                    <button class="btn btn-warning" data-bs-target=".show" aria-expanded="false" type="submit" name="btn"><i
                            class="bi bi-search"></i></button>
        
        
                </form>
                    </div>
                </div>
        
        
               
        
        
        
                <!-- 
                <div class="center">
                    <button id="show-login">Login</button>
                </div>
                <form method="POST" action="" class="d-flex">
                    <div class="container popup">
                        <div class="close-btn">&times;</div>
                        <div class="form">
                            <h2>Log in</h2>
        
                            <div class="form-element">
                                <label for="name">Name</label>
                                <input type="text" name="emri" id="name" placeholder="name">
                            </div>
                            <div class="form-element">
                                <label for="mbiemer">Mbiemeri</label>
                                <input type="text" name="mbiemri" id="mbiemeri" placeholder="Mbiemeri">
                            </div>
                            <div class="form-element">
                                <label for="email">Email</label>
                                <input type="text" id="email" name="email" placeholder="Enter email">
                            </div>
        
                            <div class="form-element">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" placeholder="Enter password">
                            </div>
                            <div class="form-element">
                                <input type="checkbox" id="remember-me">
                                <label for="remember-me">Remember me</label>
                            </div>
                            <div class="form-element">
                                <button type="submit" name="rregj">Sign up</button>
                            </div>
                            <div class="form-element">
                                <a href="" id="Forgot password">forgot password</a>
                            </div>
                        </div>
                    </div>
                </form>
                </div> -->
            </nav>
            
            <?php
// if (isset($_GET['btn'])) {
    include "Ldb.php";  
    $data =array();
    
    $kerko = "Medical";
    $te_dhenat=mysqli_query($conn,"SELECT * FROM `product` where Category = '$kerko'"); 
        while ($row=mysqli_fetch_object($te_dhenat)){
            $data[]=$row; 
    
           
    }
    
    $arr = json_decode(json_encode($data), TRUE);
// } ?>
        </body>
 
</html>