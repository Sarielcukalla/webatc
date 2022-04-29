<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title></title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <link rel='stylesheet' type='text/css' media='screen' href='./main.css'>
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


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>



<?php
if (isset($_GET['btn'])) {
    include "Ldb.php";  
    $data =array();
    
    $kerko = $_GET['Search'];
    $te_dhenat=mysqli_query($conn,"SELECT * FROM `product` where Product Like  '%$kerko%'"); 
        while ($row=mysqli_fetch_object($te_dhenat)){
            $data[]=$row; 
    
           
    }
    
    $arr = json_decode(json_encode($data), TRUE);
} ?> 
<div class="cards-flex">
<?php foreach($arr as $key => $value): ?>
 <div class="product-card">
		<div class="product-tumb">
			<img src="./image/<?php echo $value['image'] ?>" alt="">
		</div>
		<div class="product-details">
			<span class="product-catagory"><?php echo $value['Product'] ?></span>
			<h4><a href="">Women leather bag</a></h4>
			<p><?php echo $value['Description'] ?></p>
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

</body>

</html>