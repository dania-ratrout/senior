<?php  
    if(!isset($_SESSION)){ 
        session_start(); 
    } 
    require_once('./handlers/db.php');
    require_once('./handlers/function.php');


    if(isset($_SESSION['user'])){
        $role_name = getNameByRoleId('roles' ,$_SESSION['user'][0]['role_id'])[0]['name'];
    }

?>
<div class="top-header-area" id="sticker">
    <div class="container">
        <div class="col-lg-12 col-sm-12 text-center">
            <div class="main-menu-wrap">
                <!-- logo -->
                <div class="site-logo">
                    <a href="index.php">
                        <img class="w-75" src="assets/img/logo.png" alt="">
                    </a>
                </div>
                <!-- logo -->

                <!-- menu start -->
                <nav class="main-menu">
                    <ul>
                        <li class="current-list-item"><a href="index.php">Home</a></li>
                        <li><a href="Products.php">Products</a>
                            <ul class="sub-menu">
                                <li><a href="checkout.php">Check Out</a></li>
                                <li><a href="single-product.php">Single Product</a></li>
                                <li><a href="cart.php">Cart</a></li>
                            </ul>
                        </li>
                        <li><a href="news.php">News</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="about.php">About</a></li>
                        <?php if(isset($role_name)) {?>
                            <li><a href="#">Pages</a>
                                <ul class="sub-menu">
                                    <li><a href="profile.php">profile</a></li>
                                    <?php if ($role_name == "customer") {
                            ?>
                                        <li><a href="myorder.php">myorder</a></li>
                                    <?php
                        }?>
                                    <?php if ($role_name == "admin") {
                            ?>
                                        <li><a href="addNews.php">add news</a></li>
                                        <li><a href="addTeam.php">add Team</a></li>
                                        <li><a href="WaitingList.php">Waiting list</a></li>
                                        <li><a href="orderList.php">Order list</a></li>										
                                        <li><a href="404.php">404 page</a></li>
                                    <?php
                        }?>
                                    
                                    <?php if ($role_name == "product_owner") {
                            ?>
                                        <li><a href="addproduct.php">add product</a></li>

                                    <?php
                        }?>

                                </ul>
                            </li>
                        <?php }?>
                        <li>
                            <div class="header-icons">
                                <a class="shopping-cart" href="cart.php"><i class="fas fa-shopping-cart"></i></a>
                                <a class="mobile-hide search-bar-icon" href="#"><i class="fas fa-search"></i></a>
                                <i>	<a class="login" href="login.php"><i class="fas fa-user"></i></a>
                                    <ul class="sub-menu">
                                        <?php if(!empty($_SESSION['user'])){?>
                                            <li><?= $_SESSION['user'][0]['name'] ?></li>
                                            <li><a href="handlers/logout.php"> Logout</a></li>
                                        <?php } else { ?>
                                            <li><a href="login.php">Login</a></li>
                                            <li><a href="register.php">Register</a></li>
                                        <?php }  ?>
                                    </ul>										
                                </i>
                            </div>
                        </li>
                    </ul>
                </nav>
                <a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
                
                <!-- menu end -->
            </div>
        </div>
    </div>
</div>

  <!-- search area -->
  <div class="search-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <span class="close-btn"><i class="fas fa-window-close"></i></span>
                    <div class="search-bar">
                        <div class="search-bar-tablecell">
                            <h3>Search For:</h3>
                            <input type="text" placeholder="Keywords">
                            <button type="submit">Search <i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end search arewa -->
