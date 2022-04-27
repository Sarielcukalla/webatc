<!DOCTYPE html>
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
            <a href="index.php"><img id="Logo" src="./image/LOGO3.png"></a>
            <h1>Pharmacy</h1>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
                <i class="bi bi-list"></i>
            </button>
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item" data-bs-target=".show" aria-expanded="false">
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
            </div>
        </div>
    </nav>
    <div class="home-container">
    
        <div class="doctor">
            <img src="./image/pharmacy.png">
        </div>
        <div class="circle"></div>
        <!-- <div class="text">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-quote" viewBox="0 0 16 16">
                <path d="M12 12a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1h-1.388c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 9 7.558V11a1 1 0 0 0 1 1h2Zm-6 0a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1H4.612c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 3 7.558V11a1 1 0 0 0 1 1h2Z"/>
              </svg>

            <p>The pharmacy  that cares for</p><br>
            <p>the wellbeing of you and your family.</p> 
            <div class="box-text"></div>
        </div>
        -->



    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

</body>

</html>