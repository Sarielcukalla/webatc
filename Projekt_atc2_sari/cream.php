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

    include "Ldb.php";  
    $data =array();
    
    $te_dhenat=mysqli_query($conn,"SELECT * FROM `product` where Category = 'Cream'"); 
        while ($row=mysqli_fetch_object($te_dhenat)){
            $data[]=$row; 
    
           
    }
    
    $arr = json_decode(json_encode($data), TRUE);
 ?>
    <div class="container">
        <h1 class="mt-5 " style="font-weight: 549!important; text-align: center; color: #75b239; font-family:cursive">
            <?=$arr[0]['Category']?>
            <hr />
        </h1>

    </div>
    <div class="container cards-flex">

        <?php foreach($arr as $key => $value): ?>
        <div class="product-card">
            <div class="product-tumb">
                <img src="./image/<?php echo $value['image'] ?>">
            </div>
            <div class="product-details">
                <span class="product-catagory"><?php echo $value['Product'] ?></span>
                <h4><a class="btn btn-outline-success" href="./shop.php">Shop NOW</a></h4>
                <hr/>
                <p><?php echo $value['Description'] ?></p>
                <hr/>
                <div class="product-bottom-details">
                    <div class="product-price"><small><?php echo $value['Price'] ?></small></div>
                    <div class="product-links">
                        <a href=""><i class="bi bi-heart"></i></a>
                        <a href=""><i class="bi bi-shopping-cart"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <?php endforeach;?>

    </div>
    <div class="site-section bg-image overlay mb-1 mt-8"
        style="background-image:url(https://images.unsplash.com/photo-1532938911079-1b06ac7ceec7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8bWVkaWNpbmV8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60) ">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-3">
                    <h3 class="text-white">discount up to 55% OFF Every Sunday</h3>
                    <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis minus
                        blanditiis esse suscipit a ab commodi, explicabo nobis, aliquam asperiores impedit ut voluptatum
                        quos ex ipsum, totam deserunt at aliquid.</p>
                </div>
            </div>
        </div>
        ::after

    </div>
</body>

<script src="./main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

</html>