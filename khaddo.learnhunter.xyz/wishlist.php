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
        require ("components/header.php");
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
                                    <h1>
                                        Wishlist
                                    </h1>
                                    <P>Home - <span class="page-name">Wishlist</span></P>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <!-- ===================================CART PRODUCT START================== -->
            <section>
                <div class="car-main-sec-bg mt-5">
                    <div class="container">
                        <div class="row">
                            <div class="table-responsive shop_cart_table">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="product-thumbnail">Image</th>
                                            <th class="product-name">Product</th>
                                            <th class="product-price">Price</th>
                                            <th class="product-stock">Stock</th>
                                            <th class="product-subtotal">Add Cart</th>
                                            <th class="product-remove">Remove</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="product-thumbnail">
                                                <a href="#">
                                                    <img src="img/product/4-600x600.png" class="cart-pd-img" alt="product1">
                                                </a>
                                            </td>
                                            <td class="product-name">
                                                <a href="#">Fresh Organic Strawberry</a>
                                            </td>
                                            <td class="product-price">$35.00</td>
                                            <td class="product-stock-status">
                                                <span class="badge rounded-pill bg-success">In Stock</span>
                                            </td>
                                            <td class="product-subtotal">
                                                <a href="#" class="btn-main">Add To Cart</a>
                                            </td>
                                            <td class="product-remove">
                                                <a href="#"><i class="fas fa-times"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="product-thumbnail">
                                                <a href="#">
                                                    <img src="img/product/6-600x600.png" class="cart-pd-img" alt="product2">
                                                </a>
                                            </td>
                                            <td class="product-name"><a href="#">Fresh Organic Grapes</a></td>
                                            <td class="product-price">$40.00</td>
                                            <td class="product-stock-status">
                                                <span class="badge rounded-pill bg-danger">Out Of Stock</span>
                                            </td>
                                            <td class="product-subtotal">
                                                <a href="#" class="btn-main">Add To Cart</a>
                                            </td>
                                            <td class="product-remove">
                                                <a href="#"><i class="fas fa-times"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="product-thumbnail">
                                                <a href="#">
                                                    <img src="img/product/7-600x600.png" class="cart-pd-img" alt="product3">
                                                </a>
                                            </td>
                                            <td class="product-name"><a href="#">Fresh Organic Cucumber</a></td>
                                            <td class="product-price">$52.00</td>
                                            <td class="product-stock-status">
                                                <span class="badge rounded-pill bg-success">In Stock</span>
                                            </td>
                                            <td class="product-subtotal">
                                                <a href="#" class="btn-main">Add To Cart</a>
                                            </td>
                                            <td class="product-remove">
                                                <a href="#"><i class="fas fa-times"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="6" class="py-4">
                                                <div class="row no-gutters align-items-center">

                                                    <div class="col-lg-8 col-md-6 text-left text-md-right">
                                                        <a href="index.php" class="btn-black ">CONTINUE SHOPPING</a>
                                                        <a href="checkout.php" class="btn-main">PROCEED TO CHECKOUT</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
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