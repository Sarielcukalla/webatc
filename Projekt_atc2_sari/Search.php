<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Pharmacy_Online</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel='stylesheet' type='text/css' media='screen' href='./main.css'>
    <link rel="icon" type="image/x-icon" href="./image/syrup.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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


    </nav>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script src="./main.js"></script>


    <?php
if (isset($_GET['btn'])) {
    include "Ldb.php";
    $data = array();

    $kerko = $_GET['Search'];
    $te_dhenat = mysqli_query($conn, "SELECT * FROM `product` where Product Like  '%$kerko%'");
    while ($row = mysqli_fetch_object($te_dhenat)) {
        $data[] = $row;
    }

    $arr = json_decode(json_encode($data), TRUE);
} ?>

    <div class="container cards-flex">
        <?php if (is_countable($arr) && count($arr) == 0) : ?>
        <div class="container image-404">
            <img class="rounded mx-auto d-block img-fluid" src="./image/404.png">
            <h1>Product not Found</h1>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut fugiat ipsam reprehenderit quis consectetur
                molestiae eveniet earum et laboriosam id aliquam ullam enim nemo minima fuga velit repudiandae, ipsum
                temporibus.</p>

        </div>
        <?php endif; ?>
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
                        <form class="form-submit" method="post">
                            <input type="hidden" name="pid" value="<?php echo $value['Barcode']; ?>">
                            <input type="hidden" name="pproduct" value="<?php echo $value['Product']; ?>">
                            <input type="hidden" name="pimage" value="<?php echo $value['image']; ?>">
                            <input type="hidden" name="pdescription" value="<?php echo $value['Description']; ?>">
                            <input type="hidden" name="pprice" value="<?php echo $value['Price']; ?>">
                            <button class="btn" name="submit" type="submit"><i class="bi bi-cart-plus"></i></button>
                        </form>

                    </div>
                </div>
            </div>
        </div>

        <?php endforeach; ?>
        <?php endif; ?>
    </div>
    <?php
if (isset($_POST['submit'])) {
    include("Ldb.php");
    $barcode = $_POST['pid'];
    $product = $_POST['pproduct'];
    $image = $_POST['pimage'];
    $description = $_POST['pdescription'];
    $price = $_POST['pprice'];

    $insertQuery = "INSERT INTO cards_product (Barcode, Product, Price, Description, image) 
VALUES ('$barcode', '$product', '$price', '$description', '$image'
)";
    if ($conn->query($insertQuery)) {
        echo "added";
    } else {
        echo "Error: " . $insertQuery . "<br>" . $conn->error;
    }
    $conn->close();
}
?>
</body>

</html>