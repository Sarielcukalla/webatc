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

    <div class="container">
        <div class="site-section">
            <div class="title">
                <h1>About our pharmacy</h1>

            </div>
            <div class="image-about ">
                <img class="img-fluid rounded mx-auto d-block" src="./image/about  header.webp">
                <h2>Our <strong style="color:#75b239">History</strong></h2>
                <p class="py-4">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec mi auctor, blandit nisi ac,
                    venenatis erat. Proin aliquam auctor ipsum eu congue. Mauris consequat dolor id posuere posuere.
                    Curabitur in blandit eros. Donec at dui turpis. Curabitur faucibus est enim, quis facilisis enim
                    ultrices a. Vivamus sed tellus tortor. Fusce malesuada ante dui. Morbi dignissim sapien eu mattis
                    facilisis. Nunc vel enim nec risus rhoncus mollis at accumsan diam. Aliquam sed volutpat turpis.
                </p>
                <hr class="hr1" />
            </div>



        </div>
        <div class="site-section">
            <div class="container">
                <h2 class="section-header">Happy <strong style="color:#75b239 ;">Costumers</strong></h2>
                <p class="text-muted text-center">What people say</p>
                <div class="testimonial-view">
                    <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="testimonial-block">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="testimonial-block_user">
                                                <div class="testimonial-block_user_image">
                                                    <img src="https://i.imgur.com/R63flEo.jpg" alt="User">
                                                </div>
                                                <div class="testimonial-block_user_info">
                                                    <h2 class="testimonial-block_user_info_name">Krishna</h2>
                                                    <h4>Customer</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="testimonial-block_content">
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis
                                                    consequuntur repellendus nemo suscipit explicabo veniam
                                                    similique quaerat vitae! Alias reprehenderit aliquam temporibus
                                                    porro iste corrupti laboriosam nihil eos? Nemo ratione,
                                                    provident! Suscipit, accusantium. Molestias, reiciendis, in
                                                    nihil perferendis similique voluptas aliquam, nisi consectetur
                                                    eum, atque nemo sint. Nostrum, reprehenderit, quod.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="testimonial-block">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="testimonial-block_user">
                                                <div class="testimonial-block_user_image">
                                                    <img src="https://i.imgur.com/G8pFZ8p.jpg" alt="User">
                                                </div>
                                                <div class="testimonial-block_user_info">
                                                    <h2 class="testimonial-block_user_info_name">Himanshu</h2>
                                                    <h4>Customer</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="testimonial-block_content">
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis
                                                    consequuntur repellendus nemo suscipit explicabo veniam
                                                    similique quaerat vitae! Alias reprehenderit aliquam temporibus
                                                    porro iste corrupti laboriosam nihil eos? Nemo ratione,
                                                    provident! Suscipit, accusantium. Molestias, reiciendis, in
                                                    nihil perferendis similique voluptas aliquam, nisi consectetur
                                                    eum, atque nemo sint. Nostrum, reprehenderit, quod.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="testimonial-block">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="testimonial-block_user">
                                                <div class="testimonial-block_user_image">
                                                    <img src="https://i.imgur.com/XePzDSG.jpg" alt="User">
                                                </div>
                                                <div class="testimonial-block_user_info">
                                                    <h2 class="testimonial-block_user_info_name">Aliya</h2>
                                                    <h4>Customer</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="testimonial-block_content">
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis
                                                    consequuntur repellendus nemo suscipit explicabo veniam
                                                    similique quaerat vitae! Alias reprehenderit aliquam temporibus
                                                    porro iste corrupti laboriosam nihil eos? Nemo ratione,
                                                    provident! Suscipit, accusantium. Molestias, reiciendis, in
                                                    nihil perferendis similique voluptas aliquam, nisi consectetur
                                                    eum, atque nemo sint. Nostrum, reprehenderit, quod.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#testimonialCarousel" role="button" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only"></span>
                        </a>
                        <a class="carousel-control-next" href="#testimonialCarousel" role="button" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only"></span>
                        </a>
                    </div>

                </div>
                <hr class="hr1" />
            </div>

        </div>
        <div class="site-section">
            <h2>Our <strong style="color:#75b239;">Location</strong></h2>
            <div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 500px">
                <iframe src="https://maps.google.com/maps?q=manhatan&t=&z=13&ie=UTF8&iwloc=&output=embed"
                    frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>

        </div>
    </div>
    <footer style="margin-top: 25px;" class="site-footer bg-light">
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