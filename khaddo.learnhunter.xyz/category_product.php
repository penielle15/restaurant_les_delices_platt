<?php
session_start();
include("components/connexion.php");





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta name="author" content="learnhunter">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Food - Ordaring HTML Web Template">
    <meta name="keywords" content="html template, food, food ordaring, echomarch, food revewring,">
    <title>Food - Ordaring HTML Web Template</title>
    <!-- ====================Favicon============ -->
    <link rel="icon" sizes="32x32" href="img/favicon.png">
    <!-- ==================LINK ALL STYLE ARE HERE=============== -->
    <link href="font/icons.css" rel="stylesheet">
    <link rel="stylesheet" href="font/fontawesome/css/all.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/smoothproducts.css">
    <link rel="stylesheet" href="css/timePic.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>

<body>

    <div class='spinner__wrapper' id="spinner__wrapper">
        <img src="img/Pizza%20spinning.gif" alt="" class="spiner">
    </div>
    <!-- ==========================Preloder============= -->

    <div class="weapper">
        <!-- ======================================NAVIGATION SECTION================== -->
        <?php
        require ("components/header.php");''
        ?>
        <!-- =============mobile nav model==== -->
        <!-- ======cart model====== -->
        <div class="modal fade" id="M-cart" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
                    </div>

                    <div class="modal-body">
                        <div class="cart-blog mobile-cart-model">
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
                    <div class="success-wrapper"></div>
                </div>
            </div>
        </div>
        <!-- =======category model==== -->
        <div class="modal fade" id="M-category" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
                    </div>
                    <div class="modal-body">
                        <div class="cart-blog mobile-cart-model">
                            <div class="category-modal">
                                <ul class="category-list-m">
                                    <li class="category-list-m">
                                        <a href="#" class="category-link">
                                            <div class="cat-img"><img src="img/category/category-11.png" alt=""></div>
                                            <span class="cat-name-m">BBQ Category</span>
                                        </a>
                                    </li>
                                    <li class="category-list-m">
                                        <a href="#" class="category-link">
                                            <div class="cat-img"><img src="img/category/category3.png" alt=""></div>
                                            <span class="cat-name-m">BBQ Category</span>
                                        </a>
                                    </li>
                                    <li class="category-list-m">
                                        <a href="#" class="category-link">
                                            <div class="cat-img"><img src="img/category/category-22.png" alt=""></div>
                                            <span class="cat-name-m">BBQ Category</span>
                                        </a>
                                    </li>
                                    <li class="category-list-m">
                                        <a href="#" class="category-link">
                                            <div class="cat-img"><img src="img/category/category-33.png" alt=""></div>
                                            <span class="cat-name-m">BBQ Category</span>
                                        </a>
                                    </li>
                                    <li class="category-list-m">
                                        <a href="#" class="category-link">
                                            <div class="cat-img"><img src="img/category/category-44.png" alt=""></div>
                                            <span class="cat-name-m">BBQ Category</span>
                                        </a>
                                    </li>
                                    <li class="category-list-m">
                                        <a href="#" class="category-link">
                                            <div class="cat-img"><img src="img/category/category-55.png" alt=""></div>
                                            <span class="cat-name-m">BBQ Category</span>
                                        </a>
                                    </li>
                                    <li class="category-list-m">
                                        <a href="#" class="category-link">
                                            <div class="cat-img"><img src="img/category/category3.png" alt=""></div>
                                            <span class="cat-name-m">BBQ Category</span>
                                        </a>
                                    </li>
                                    <li class="category-list-m">
                                        <a href="#" class="category-link">
                                            <div class="cat-img"><img src="img/category/category5.png" alt=""></div>
                                            <span class="cat-name-m">BBQ Category</span>
                                        </a>
                                    </li>
                                    <li class="category-list-m">
                                        <a href="#" class="category-link">
                                            <div class="cat-img"><img src="img/category/category7.png" alt=""></div>
                                            <span class="cat-name-m">BBQ Category</span>
                                        </a>
                                    </li>
                                    <li class="category-list-m">
                                        <a href="#" class="category-link">
                                            <div class="cat-img"><img src="img/category/category-11.png" alt=""></div>
                                            <span class="cat-name-m">BBQ Category</span>
                                        </a>
                                    </li>
                                    <li class="category-list-m">
                                        <a href="#" class="category-link">
                                            <div class="cat-img"><img src="img/category/category-22.png" alt=""></div>
                                            <span class="cat-name-m">BBQ Category</span>
                                        </a>
                                    </li>
                                    <li class="category-list-m">
                                        <a href="#" class="category-link">
                                            <div class="cat-img"><img src="img/category/category-33.png" alt=""></div>
                                            <span class="cat-name-m">BBQ Category</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="success-wrapper"></div>
                </div>
            </div>
        </div>
        <!-- =============mobile nav model end==== -->
        <!-- ======================================NAVIGATION SECTION END================== -->
        <!-- Modal -->
        <div class="modal fade" id="bookatable" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
                    </div>
                    <div class="modal-body">
                        <div class="fs-wrapper">
                            <form class="fs-form" method="post">
                                <input type="hidden" name="action" value="flex-reservations-submit">
                                <input type="hidden" name="nonce" value="79835a9b53">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-left">
                                        <h2 class="center title ui-field-title">Reservation</h2>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-left">
                                        <label for="timepiker">Time:</label>
                                        <input type="text" class="input-field  timepicker" placeholder="Time">
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                        <div class=" number">
                                            <label for="pepole">Number Of Pepole:</label>
                                            <input type="number" class="input-field " required="required">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-left">
                                        <div class=" date">
                                            <label for="date">Date:</label>
                                            <input type="date" class="input-field field-date" name="fs_date" required="required">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                        <div class="text">
                                            <label for="phone">Phone Number:</label>
                                            <input type="text" class="input-field field-text" name="fs_phone" required="required">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-left">
                                        <div class="text">
                                            <label for="name">Full Name:</label>
                                            <input type="text" class="input-field field-text" name="fs_name" required="required">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-left">
                                        <div class=" textarea">
                                            <label for="details">Details:</label>
                                            <textarea class="input-field field-textarea" name="fs_message"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="submin-btn">
                                    <input type="submit" name="fs_submit" class="btn-main" value="BOOK A TABLE">
                                </div>
                           </div>
                      </div>
                    </form>
                    <div class="success-wrapper"></div>
                </div>
            </div>
        </div>

    </div>
    <!-- ==========================Book A Table  form====================== -->


    <!-- =======================================BOOK A TABLE END================ -->
    <!-- =======================================BODY SECTION START================ -->
    <div class="body-wraper">
        <div class="body-inner">
            <!-- ===============================SLIDER SECTION START============== -->
            <section>
                <div class="page-top-baner">
                    <div class="banner-sec-bg custom-padding">
                        <div class="row">
                            <div class="page-head-ban">
                                <div class="page-text">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <!-- ===================================CART PRODUCT START================== -->
            <section>
                <div class="cat-product-show-inner my-5">
                    <div class="container-fluid custom-padding">
                        <div class="row">
                            <div class="col-lg-3 col-md-3">
                                <div class="all-category-list">
                                    <h3 class="list-name">All Category</h3>
                                    <ul class="cat-list">
                                        <li><a href="#" class="cat-by-link active">Plats Africain</a></li>
                                        <li><a href="#" class="cat-by-link">Plats beninien </a> </li>
                                        <li><a href="#" class="cat-by-link">Desert </a></li>
                                        <li><a href="#" class="cat-by-link">Boisson </a></li>
                                        <li><a href="#" class="cat-by-link">Plat europeen </a></li>
                                       
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-9">
                                <div class="row">
                                    <div class="product">
                                        <div class="row product-menu">
                                            <div class="col-lg-3 col-md-6 col-sm-6 my-2 col-12 mix sushi">
                                                <div class="product-inner">
                                                    <div class="pruct-img-sec">
                                                        <div class="product-img">
                                                            <img src="img/product/4-600x600.png" alt="Image not found" class="pd-image">
                                                        </div>
                                                        <div class="product-details">
                                                            <div class="rating">
                                                                <ul>
                                                                    <li><span class="fas fa-star"></span></li>
                                                                    <li><span class="fas fa-star"></span></li>
                                                                    <li><span class="fas fa-star"></span></li>
                                                                    <li><span class="fas fa-star"></span></li>
                                                                    <li><span class="far fa-star"></span></li>
                                                                </ul>
                                                            </div>
                                                            <a href="#" class="product-name">
                                                                <h5>BBQ Chicken Breast</h5>
                                                            </a>
                                                            <p class="porduct-info">
                                                                Lorem Ipsum is simply dummy text.
                                                            </p>
                                                            <p class="price pt-2 ct-p"><del>$12.60</del> $8.00</p>

                                                            <div class="buy-sec pd-inside">
                                                                <ul class="buy-inner">
                                                                    <li>
                                                                        <a href="#" class="cart-btn"><span class="fas fa-heart"></span></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" class="cart-btn" data-bs-toggle="modal" data-bs-target="#exampleModal"><span class="fas fa-eye"></span></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" class="cart-btn"><span class="fas fa-shopping-cart"></span></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-xl">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="container">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="sp-loading"><img src="img/sp-loading.gif" alt=""><br>LOADING IMAGES</div>
                                                                        <div class="sp-wrap">
                                                                            <a href="img/product/11.png"><img src="img/product/11.png" alt=""></a>
                                                                            <a href="img/product/4-600x600.png"><img src="img/product/4-600x600.png" alt=""></a>
                                                                            <a href="img/product/6-600x600.png"><img src="img/product/6-600x600.png" alt=""></a>
                                                                            <a href="img/product/7-600x600.png"><img src="img/product/7-600x600.png" alt=""></a>
                                                                            <a href="img/product/8-600x600.png"><img src="img/product/8-600x600.png" alt=""></a>

                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-6">
                                                                        <div class="product-details">
                                                                            <h2 class="product-name-single">
                                                                                Organic Pizza whth vasitable.........
                                                                            </h2>
                                                                            <div class="pr-rt">
                                                                                <p class="price-single">$32</p>
                                                                                <div class="rating">
                                                                                    <ul>
                                                                                        <li><span class="fas fa-star"></span></li>
                                                                                        <li><span class="fas fa-star"></span></li>
                                                                                        <li><span class="fas fa-star"></span></li>
                                                                                        <li><span class="fas fa-star"></span></li>
                                                                                        <li><span class="far fa-star"></span></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <hr>
                                                                        <p class="product-descriotion">
                                                                            Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece
                                                                            of classical Latin literature from 45 BC, making it over 2000 years old.
                                                                        </p>
                                                                        <hr>
                                                                        <div class="cart_extra">
                                                                            <div class="cart-product-quantity">
                                                                                <div class="quantity">
                                                                                    <button class="qty-count qty-count--minus minus" data-action="minus" type="button">-</button>
                                                                                    <input class="product-qty qty" type="text" name="quantity" min="0" max="10" value="1" title="Qty" size="4">
                                                                                    <button class="qty-count qty-count--add plus" data-action="add" type="button">+</button>

                                                                                </div>

                                                                            </div>
                                                                            <div class="cart_btn">
                                                                                <button class="btn-main" type="button">Add to cart</button>
                                                                                <a class="add_wishlist" href="#"><i class="far fa-heart"></i></a>
                                                                            </div>
                                                                        </div>
                                                                        <ul class="product-meta list_none">
                                                                            <li>Category: <a href="#">Fresh Fruits</a>, <a href="#">Jiuce</a></li>
                                                                            <li>Tags: <a href="#" rel="tag">Fruits</a>, <a href="#" rel="tag">Natural</a>, <a href="#" rel="tag">Organic</a> </li>
                                                                        </ul>
                                                                        <div class="lh-social-share d-flex">
                                                                            <p class="share">Share:</p>
                                                                            <ul class="social-ul d-flex">
                                                                                <li><a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a></li>
                                                                                <li><a href="#" class="social-link"><i class="fab fa-twitter"></i></a></li>
                                                                                <li><a href="#" class="social-link"><i class="fab fa-instagram"></i></a></li>
                                                                                <li><a href="#" class="social-link"><i class="fab fa-linkedin"></i></a></li>
                                                                                <li><a href="#" class="social-link"><i class="fab fa-pinterest"></i></a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="brand-wrap">
                                                                            <h5 class="title-brand">Guaranteed Safe Checkout</h5>
                                                                            <img src="../demo2wpopal.b-cdn.net/poco/wp-content/uploads/2020/08/trust-symbols.png" data-src="" class="image-responsive lazyloaded">
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-6 my-2 col-12 mix salat">
                                                <div class="product-inner pizza">
                                                    <div class="pruct-img-sec">
                                                        <div class="product-img">
                                                            <img src="img/product/6-600x600.png" alt="Image not found" class="pd-image">
                                                        </div>
                                                        <div class="product-details">
                                                            <div class="rating">
                                                                <ul>
                                                                    <li><span class="fas fa-star"></span></li>
                                                                    <li><span class="fas fa-star"></span></li>
                                                                    <li><span class="fas fa-star"></span></li>
                                                                    <li><span class="fas fa-star"></span></li>
                                                                    <li><span class="far fa-star"></span></li>
                                                                </ul>
                                                            </div>
                                                            <a href="#" class="product-name">
                                                                <h5>Quattro Formaggi</h5>
                                                            </a>
                                                            <p class="porduct-info">
                                                                Lorem Ipsum is simply dummy text.
                                                            </p>
                                                            <p class="price pt-2 ct-p"><del>$12.60</del> $8.00</p>

                                                            <div class="buy-sec pd-inside">
                                                                <ul class="buy-inner">
                                                                    <li>
                                                                        <a href="#" class="cart-btn"><span class="fas fa-heart"></span></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" class="cart-btn" data-bs-toggle="modal" data-bs-target="#exampleModal"><span class="fas fa-eye"></span></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" class="cart-btn"><span class="fas fa-shopping-cart"></span></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-6 my-2 col-12 mix salat">
                                                <div class="product-inner">
                                                    <div class="pruct-img-sec">
                                                        <div class="product-img">
                                                            <img src="img/product/7-600x600.png" alt="Image not found" class="pd-image">
                                                        </div>
                                                        <div class="product-details">
                                                            <div class="rating">
                                                                <ul>
                                                                    <li><span class="fas fa-star"></span></li>
                                                                    <li><span class="fas fa-star"></span></li>
                                                                    <li><span class="fas fa-star"></span></li>
                                                                    <li><span class="far fa-star"></span></li>
                                                                    <li><span class="far fa-star"></span></li>
                                                                </ul>
                                                            </div>
                                                            <a href="#" class="product-name">
                                                                <h5>Breakfast Complete</h5>
                                                            </a>
                                                            <p class="porduct-info">
                                                                Lorem Ipsum is simply dummy text.
                                                            </p>
                                                            <p class="price pt-2 ct-p"><del>$12.60</del> $8.00</p>

                                                            <div class="buy-sec pd-inside">
                                                                <ul class="buy-inner">
                                                                    <li>
                                                                        <a href="#" class="cart-btn"><span class="fas fa-heart"></span></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" class="cart-btn" data-bs-toggle="modal" data-bs-target="#exampleModal"><span class="fas fa-eye"></span></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" class="cart-btn"><span class="fas fa-shopping-cart"></span></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-6 my-2 col-12 mix burger">
                                                <div class="product-inner">
                                                    <div class="pruct-img-sec">
                                                        <div class="product-img">
                                                            <img src="img/product/8-600x600.png" alt="Image not found" class="pd-image">
                                                        </div>
                                                        <div class="product-details">
                                                            <div class="rating">
                                                                <ul>
                                                                    <li><span class="fas fa-star"></span></li>
                                                                    <li><span class="fas fa-star"></span></li>
                                                                    <li><span class="fas fa-star"></span></li>
                                                                    <li><span class="fas fa-star"></span></li>
                                                                    <li><span class="far fa-star"></span></li>
                                                                </ul>
                                                            </div>
                                                            <a href="#" class="product-name">
                                                                <h5>Eggs Benedict</h5>
                                                            </a>
                                                            <p class="porduct-info">
                                                                Lorem Ipsum is simply dummy text.
                                                            </p>
                                                            <p class="price pt-2 ct-p"><del>$12.60</del> $8.00</p>

                                                            <div class="buy-sec pd-inside">
                                                                <ul class="buy-inner">
                                                                    <li>
                                                                        <a href="#" class="cart-btn"><span class="fas fa-heart"></span></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" class="cart-btn" data-bs-toggle="modal" data-bs-target="#exampleModal"><span class="fas fa-eye"></span></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" class="cart-btn"><span class="fas fa-shopping-cart"></span></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-6 my-2 col-12 mix burger">
                                                <div class="product-inner">
                                                    <div class="pruct-img-sec">
                                                        <div class="product-img">
                                                            <img src="img/product/11.png" alt="Image not found" class="pd-image">
                                                        </div>
                                                        <div class="product-details">
                                                            <div class="rating">
                                                                <ul>
                                                                    <li><span class="fas fa-star"></span></li>
                                                                    <li><span class="fas fa-star"></span></li>
                                                                    <li><span class="fas fa-star"></span></li>
                                                                    <li><span class="far fa-star"></span></li>
                                                                    <li><span class="far fa-star"></span></li>
                                                                </ul>
                                                            </div>
                                                            <a href="#" class="product-name">
                                                                <h5>Breakfast Complete</h5>
                                                            </a>
                                                            <p class="porduct-info">
                                                                Lorem Ipsum is simply dummy text.
                                                            </p>
                                                            <p class="price pt-2 ct-p"><del>$12.60</del> $8.00</p>

                                                            <div class="buy-sec pd-inside">
                                                                <ul class="buy-inner">
                                                                    <li>
                                                                        <a href="#" class="cart-btn"><span class="fas fa-heart"></span></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" class="cart-btn" data-bs-toggle="modal" data-bs-target="#exampleModal"><span class="fas fa-eye"></span></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" class="cart-btn"><span class="fas fa-shopping-cart"></span></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-6 my-2 col-12 mix dersest">
                                                <div class="product-inner">
                                                    <div class="pruct-img-sec">
                                                        <div class="product-img">
                                                            <img src="img/product/product2.png" alt="Image not found" class="pd-image">
                                                        </div>
                                                        <div class="product-details">
                                                            <div class="rating">
                                                                <ul>
                                                                    <li><span class="fas fa-star"></span></li>
                                                                    <li><span class="fas fa-star"></span></li>
                                                                    <li><span class="fas fa-star"></span></li>
                                                                    <li><span class="fas fa-star"></span></li>
                                                                    <li><span class="far fa-star"></span></li>
                                                                </ul>
                                                            </div>
                                                            <a href="#" class="product-name">
                                                                <h5>Vegetarian Pasta</h5>
                                                            </a>
                                                            <p class="porduct-info">
                                                                Lorem Ipsum is simply dummy text.
                                                            </p>
                                                            <p class="price pt-2 ct-p"><del>$12.60</del> $8.00</p>

                                                            <div class="buy-sec pd-inside">
                                                                <ul class="buy-inner">
                                                                    <li>
                                                                        <a href="#" class="cart-btn"><span class="fas fa-heart"></span></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" class="cart-btn" data-bs-toggle="modal" data-bs-target="#exampleModal"><span class="fas fa-eye"></span></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" class="cart-btn"><span class="fas fa-shopping-cart"></span></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-6 my-2 col-12 mix dersest">
                                                <div class="product-inner">
                                                    <div class="pruct-img-sec">
                                                        <div class="product-img">
                                                            <img src="img/product/product3.png" alt="Image not found" class="pd-image">
                                                        </div>
                                                        <div class="product-details">
                                                            <div class="rating">
                                                                <ul>
                                                                    <li><span class="fas fa-star"></span></li>
                                                                    <li><span class="fas fa-star"></span></li>
                                                                    <li><span class="fas fa-star"></span></li>
                                                                    <li><span class="fas fa-star"></span></li>
                                                                    <li><span class="far fa-star"></span></li>
                                                                </ul>
                                                            </div>
                                                            <a href="#" class="product-name">
                                                                <h5>Gluten-Free Pasta</h5>
                                                            </a>
                                                            <p class="porduct-info">
                                                                Lorem Ipsum is simply dummy text.
                                                            </p>
                                                            <p class="price pt-2 ct-p"><del>$12.60</del> $8.00</p>

                                                            <div class="buy-sec pd-inside">
                                                                <ul class="buy-inner">
                                                                    <li>
                                                                        <a href="#" class="cart-btn"><span class="fas fa-heart"></span></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" class="cart-btn" data-bs-toggle="modal" data-bs-target="#exampleModal"><span class="fas fa-eye"></span></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" class="cart-btn"><span class="fas fa-shopping-cart"></span></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-lg-3 col-md-6 col-sm-6 my-2 col-12 mix first-fd">
                                                <div class="product-inner">
                                                    <div class="pruct-img-sec">
                                                        <div class="product-img">
                                                            <img src="img/product/product1.png" alt="Image not found" class="pd-image">
                                                        </div>
                                                        <div class="product-details">
                                                            <div class="rating">
                                                                <ul>
                                                                    <li><span class="fas fa-star"></span></li>
                                                                    <li><span class="fas fa-star"></span></li>
                                                                    <li><span class="fas fa-star"></span></li>
                                                                    <li><span class="fas fa-star"></span></li>
                                                                    <li><span class="far fa-star"></span></li>
                                                                </ul>
                                                            </div>
                                                            <a href="#" class="product-name">
                                                                <h5>Quattro Formaggi</h5>
                                                            </a>
                                                            <p class="porduct-info">
                                                                Lorem Ipsum is simply dummy text.
                                                            </p>
                                                            <p class="price pt-2 ct-p"><del>$12.60</del> $8.00</p>

                                                            <div class="buy-sec pd-inside">
                                                                <ul class="buy-inner">
                                                                    <li>
                                                                        <a href="#" class="cart-btn"><span class="fas fa-heart"></span></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" class="cart-btn" data-bs-toggle="modal" data-bs-target="#exampleModal"><span class="fas fa-eye"></span></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" class="cart-btn"><span class="fas fa-shopping-cart"></span></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ===========================CART SECTION END======= -->


            <!-- =================================DELEVERY SECTION START============= -->
            <div class="middle_footer">
                <div class="container-fluid custom-padding">
                    <div class="row">
                        <div class="col-12">
                            <div class="shopping_info">
                                <div class="row justify-content-center">
                                    <div class="col-md-4 position-relative">
                                        <div class="icon_box icon_box_style2">
                                            <div class="box_icon">
                                                <i class="fas fa-truck"></i>
                                            </div>
                                            <div class="intro_desc">
                                                <h5>Free Delivery</h5>
                                                <p>Phasellus blandit massa enim elit of passage varius nunc.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 position-relative">
                                        <div class="icon_box icon_box_style2">
                                            <div class="box_icon">
                                                <i class="fas fa-dollar-sign"></i>
                                            </div>
                                            <div class="intro_desc">
                                                <h5>30 Day Returns Guarantee</h5>
                                                <p>Phasellus blandit massa enim elit of passage varius nunc.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="icon_box icon_box_style2">
                                            <div class="box_icon">
                                                <i class="far fa-life-ring"></i>
                                            </div>
                                            <div class="intro_desc">
                                                <h5>27/4 Online Support</h5>
                                                <p>Phasellus blandit massa enim elit of passage varius nunc.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- col-12 end -->
                    </div>
                    <!-- row end -->
                </div>
                <!-- container end -->
            </div>
            <!-- middle footer end -->
            <!-- =================================DELEVERY SECTION END============= -->
            <!-- =================================FOOTER SECTION START============= -->
            <section>
            <?php
              require ("components/footer.php");
            ?>
                <!-- footer end -->
            </section>
            <!-- =================================FOOTER SECTION END============= -->


        </div>
        <!-- body inner end  -->
    </div>

    <!-- =======================================BODY SECTION END================ -->

    <!-- ==================ALL SCRIPT ARE HERE======================= -->
    <script src="js/jquery-2.1.3.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/timePic.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/mixtup.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/smoothproducts.min.js"></script>
    <!-- ======================CUSTOME SCRIPT ARE HERE================== -->
    <script src="js/main.js"></script>

</body>

</html>