


<header>

    <nav>
        <div class="header-part header-reduce sticky">
            <!-- ===============TOP HEADER START============ -->
            <div class="header-top">
                <div class="head-container">
                    <div class="header-top-inner">
                        <div class="header-top-left">
                            <a href="#" class="top-cell"><img src="img/icon/fon.png" alt="Image not Found"> <span>+1234567890</span></a>
                            <a href="#" class="top-email"><span>info@example.com</span></a>
                        </div>
                        <!-- header-top left end -->
                        <div class="header-top-right">
                            <div class="social-top">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fab fa-dribbble" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            <div class="language-menu">
                                <a href="#" class="current-lang" id="lanId">English <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                                <ul class="language">
                                    <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Turkish</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Nederlands</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Français</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Deutsch</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Italiano</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- header-top-right end -->
                    </div>
                    <!-- head-top-inned end -->
                </div>
                <!-- head-container end -->
            </div>
            <!-- ===============TOP HEADER END============ -->

            <!-- =================MAIN NAVIGATION START============ -->
            <div class="header-bottom">
                <div class="container-fluid custom-padding">
                    <div class="main-nav">
                        <!-- left menu -->
                        <div class="left-menu">
                            <!-- logo start -->
                            <div class="logo">
                                <a href="index.html">
                                    <span class="text">LES DELICES</span>
                                </a>
                            </div>
                            <!-- logo end -->
                            <div class="menu-main">
                                <ul>
                                    <li class="has-child"><a href="index.php">Acceuil</a></li>
                                    <li class="mega-menu"><a href="category_product.php">Menu</a></li>
                                    <li class="has-child"><a href="cart.php">Boutique</a></li>
                                    <li class="has-child"><a href="#">Pages</a>
                                        <ul class="drop-nav">
                                            <li><a href="checkout.php"><i class="fa fa-angle-right"></i> Checkout</a></li>
                                            <?php
                                            if(isset($_SESSION['id_gerant'])){
                                                ?>
                                              <li><a href="profile.php"><i class="fa fa-angle-right"></i> Profile</a></li>
                                              <?php
                                            }
                                            ?>
                                            
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <!-- main-menu end -->
                        </div>
                        <!-- left menu end  -->
                        <!-- search bar -->
                        <div class="search-part">
                            <div class="search-box">
                                <form action="#">
                                    <input type="text" name="txt" placeholder="Search">
                                    <input type="submit" name="submit" value=" ">
                                </form>
                            </div>
                        </div>
                        <!-- ----------search input end------- -->
                        <!-- header right section start -->
                        <div class="header-info">
                            <div class="header-info-inner">
                                <div class="book-table header-collect book-md">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#bookatable"><img src="img/icon/chair.svg" alt="Image not Found"><span class="count-text">Book a Table</span></a>
                                </div>

                                <div class="shop-cart header-collect">
                                    <a href="#"><img src="img/icon/icon-basket.png" alt="Image not Found"> 2 <span class="count-text"> items - $ 20.89</span></a>
                                    <div class="cart-wrap">
                                        <div class="cart-blog">
                                            <div class="cart-item">
                                                <div class="cart-item-left">
                                                    <img src="img/product/7-600x600.png" alt="Image not Found" class="img-fluid">
                                                </div>
                                                <div class="cart-item-right">
                                                    <h6>Caramel Chesse Cake</h6>
                                                    <span>$ 14.00</span>
                                                </div>
                                                <a href="#"><span class="delete-icon"></span></a>
                                            </div>
                                            <div class="cart-item">
                                                <div class="cart-item-left">
                                                    <img src="img/product/pizza_2.png" alt="Image not Found" class="img-fluid">
                                                </div>
                                                <div class="cart-item-right">
                                                    <h6>Caramel Chesse Cake</h6>
                                                    <span>$ 14.00</span>
                                                </div>
                                                <a href="#"><span class="delete-icon"></span></a>
                                            </div>
                                            <div class="subtotal">
                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                    <h6>Subtotal :</h6>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                    <span>$ 140.00</span>
                                                </div>
                                            </div>
                                            <div class="cart-btn">
                                                <a href="cart.php" class="btn-black view">VIEW ALL</a>
                                                <a href="checkout.php" class="btn-main checkout">CHECK OUT</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- header-info end -->
                        <div class="menu-icon">
                            <a href="#" class="hambarger">
                                <span class="bar-1"></span>
                                <span class="bar-2"></span>
                                <span class="bar-3"></span>
                            </a>
                        </div>
                        <!-- mobile menu icon end -->
                    </div>
                    <!-- main nav end -->
                </div>
                <!-- container end -->
            </div>
            <!-- =================MAIN NAVIGATION END============ -->
            <!-- ============MOBILE NAVIGATION ========= -->
            <div class="footer__nav">
                <ul class="menus">
                    <div class="slider-menu"></div>
                    <li class="">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#M-cart">
                            <div class="menu-dev">
                                <img src="img/icon/shopping-cart.svg" class="mobile-nav-icon" alt="">
                            </div> <span>Cart</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#M-category">
                            <div class="menu-dev">
                                <img src="img/icon/menu.svg" class="mobile-nav-icon" alt="">
                            </div> <span>Category</span>
                        </a>
                    </li>
                    <li class="active-icon">
                        <a href="index.html">
                            <div class="menu-dev">
                                <img src="img/icon/home.svg" class="mobile-nav-icon" alt="">
                            </div> <span>Home</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#bookatable">
                            <div class="menu-dev">
                                <img src="img/icon/chair.svg" class="mobile-nav-icon" alt="">
                            </div> <span>Reservation</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="profile.php">
                            <div class="menu-dev">
                                <img src="img/icon/user.svg" class="mobile-nav-icon" alt="">
                            </div>
                            <span>Profile</span>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- ============MOBILE NAVIGATION END========= -->
        </div>
        <!-- header-part end -->
    </nav>
</header>
