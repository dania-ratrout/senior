<?php 
require_once('handlers/db.php');
require_once('handlers/data.php');
$products=getAll('products');
$categorys=getWhere('categorys', 'status = 1');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

    <!-- title -->
    <title>Waiting list</title>

    <!-- favicon -->
    <link rel="shortcut icon" type="image/png" href="assets/img/favicon.png">
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <!-- fontawesome -->
    <link rel="stylesheet" href="assets/css/all.min.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <!-- owl carousel -->
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    
    <!-- magnific popup -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!-- animate css -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- mean menu css -->
    <link rel="stylesheet" href="assets/css/meanmenu.min.css">
    <!-- main style -->
    
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/custom3.css">
    <!-- responsive -->
    <link rel="stylesheet" href="assets/css/myorder.css">
    <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Roboto:400,700"
    />
    <!-- https://fonts.google.com/specimen/Roboto -->
    <link rel="stylesheet" href="css/fontawesome.min.css" />
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="css/templatemo-style.css">
    <!--
    Product Admin CSS Template
    https://templatemo.com/tm-524-product-admin
    -->
</head>
<body>
    
    <!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->
    
    <!-- navbar -->
        <?php require_once("./layouts/navbar.php")?>
	<!-- end navbar -->

     
        
        <div class="myorder">
            <div class="container ">
            <?php 
                    if(isset($_SESSION['create'])){ ?>
                        <div class="aletr alert-success h-10
                         		d-flex justify-content-center align-items-center mb-5">
                            <?= $_SESSION['create']; ?>
                        </div>
                    <?php 
                        unset($_SESSION['create']);    
                }
                ?>
                <div class="row tm-content-row">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 tm-block-col">
                        <div class="tm-bg-primary-dark tm-block tm-block-products">
                            <div class="tm-product-table-container">
                                <table class="table table-hover tm-table-small tm-product-table">
                                    <thead>
                                        <tr>
                                            <th class="text-white" scope="col">&nbsp;</th>
                                            <th class="text-white" scope="col">PRODUCT NAME</th>
                                            <th class="text-white" scope="col">Category</th>
                                            <th class="text-white" scope="col">Img</th>
                                            <th class="text-white" scope="col">Price</th>
                                            <th class="text-white" scope="col">Description</th>
                                            <th class="text-white" scope="col">EXPIRE DATE</th>
                                            <th class="text-white" scope="col">&nbsp;</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($products as $product):?>
                                        <tr>
                                            <th scope="row"><input type="checkbox" /></th>
                                            <td class="tm-product-name text-white"><?= $product['name']?></td>
                                            <td class="text-white">- - </td>
                                            <td class="text-white product-image "><img src="<?= $product['img']?>" alt="" ></td>
                                            <td class="text-white"><?= $product['price']?>$</td>
                                            <td class="text-white"><?= $product['description']?></td>
                                            <td class="text-white"><?= $product['expire_date']?></td>
                                            <td >
                                                <a href="#" class="tm-product-delete-link">
                                                    <i class="far fa-trash-alt tm-product-delete-icon"></i>								
                                                </a>							  
                                            </td>
                                            <td>
                                                <a href="#" class="tm-product-delete-link accept-icon">
                                                    <i class="fas fa-check "></i>
                                                </a>							  
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- table container -->
                        
                            <button class="btn btn-primary btn-block text-uppercase ">
                            Delete selected products
                            </button>
                            <button class="btn  btn-block text-uppercase success-color ">
                            Accept selected products
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    >
                    
            
        <!-- footer -->
            <?php require_once("./layouts/footer.php")?>
        <!-- end footer -->
    
        <!-- js files -->
            <?php require_once("./layouts/scripts.php")?>
    </body>
</html>