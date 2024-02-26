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

    <div class="weapper">
        <!-- ======================================NAVIGATION SECTION================== -->
        <?php
        include ("components/header.php")
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
                                        Blog
                                    </h1>
                                    <P>Home - <span class="page-name">Blog</span></P>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <!-- ===================================CART PRODUCT START================== -->
            <!--=====================================
                    BLOG LIST PART START
        =======================================-->
            <section class="blog__list__sec">
                <div class="container">
                    <div class="row content__rev">
                        <div class="col-lg-4">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form class="form__grid blog__search">
                                        <input type="text" placeholder="Search...">
                                        <button class="search-btn"><i class="fas fa-search"></i></button>
                                    </form>
                                </div>
                                <div class="col-md-7 col-lg-12">
                                    <div class="blog__sidebar suggest__list">
                                        <h4>popular post</h4>
                                        <div class="blog__related">
                                            <div class="related__img">
                                                <a href="#"><img src="img/blog/insta_img2.jpg" alt="suggest-3"></a>
                                            </div>
                                            <div class="related__content">
                                                <div class="related__title">
                                                    <h6><a href="#">Lorem Ipsum is simply dummy text of the printing.</a></h6>
                                                </div>
                                                <div class="related__date">
                                                    <i class="fas fa-calendar-alt"></i>
                                                    <p>02 feb 2020</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="blog__related">
                                            <div class="related__img">
                                                <a href="#"><img src="img/blog/insta_img3.jpg" alt="suggest-3"></a>
                                            </div>
                                            <div class="related__content">
                                                <div class="related__title">
                                                    <h6><a href="#">Lorem Ipsum is simply dummy text of the printing.</a></h6>
                                                </div>
                                                <div class="related__date">
                                                    <i class="fas fa-calendar-alt"></i>
                                                    <p>02 feb 2020</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="blog__related">
                                            <div class="related__img">
                                                <a href="#"><img src="img/blog/insta_img4.jpg" alt="suggest-3"></a>
                                            </div>
                                            <div class="related__content">
                                                <div class="related__title">
                                                    <h6><a href="#">Lorem Ipsum is simply dummy text of the printing.</a></h6>
                                                </div>
                                                <div class="related__date">
                                                    <i class="fas fa-calendar-alt"></i>
                                                    <p>02 feb 2020</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5 col-lg-12">
                                    <div class="blog__sidebar blog__category">
                                        <h4>popular categories</h4>
                                        <ul>
                                            <li>
                                                <h6><a href="#">Technology</a></h6>
                                                <p>23</p>
                                            </li>
                                            <li>
                                                <h6><a href="#">Education</a></h6>
                                                <p>17</p>
                                            </li>
                                            <li>
                                                <h6><a href="#">Business</a></h6>
                                                <p>09</p>
                                            </li>
                                            <li>
                                                <h6><a href="#">Freelancing</a></h6>
                                                <p>12</p>
                                            </li>
                                            <li>
                                                <h6><a href="#">Programing</a></h6>
                                                <p>42</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-12">
                                    <div class="blog__sidebar blog__tag">
                                        <h4>Popular tags</h4>
                                        <ul>
                                            <li><a href="#">domain</a></li>
                                            <li><a href="#">cloud</a></li>
                                            <li><a href="#">web</a></li>
                                            <li><a href="#">payment</a></li>
                                            <li><a href="#">E-commerce</a></li>
                                            <li><a href="#">Sequerity</a></li>
                                            <li><a href="#">solution</a></li>
                                            <li><a href="#">offer</a></li>
                                            <li><a href="#">support</a></li>
                                            <li><a href="#">knowladge</a></li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-12 col-lg-8">
                            <div class="contant__details">
                                <div class="title__blog">
                                    <h2><a href="#">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a></h2>
                                </div>
                                <ul class="blog__meta">
                                    <li>
                                        <i class="far fa-user"></i>
                                        <p>Miron Hasan</p>
                                    </li>
                                    <li>
                                        <i class="far fa-calendar-alt"></i>
                                        <p>02 Feb 2020</p>
                                    </li>
                                    <li>
                                        <i class="far fa-folder-open"></i>
                                        <p>Technology</p>
                                    </li>
                                    <li>
                                        <i class="far fa-comments"></i>
                                        <p>37 Comment</p>
                                    </li>
                                    <li>
                                        <i class="far fa-share-square"></i>
                                        <p>21 Share</p>
                                    </li>
                                </ul>
                                <div class="blog__details__img">
                                    <img src="img/blog/1.jpg" alt="blog-1">
                                </div>
                                <div class="blog__description">
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus beatae veniam suscipit error unde voluptatibus pariatur eaque. Odit, ullam. Dolorum, dicta! Sunt molestias voluptates minima! <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore alias sapiente enim excepturi cumque impedit exercitationem similique eius iste soluta adipisci commodi quae, libero nulla necessitatibus harum accusantium temporibus ipsam, quidem molestiae atque repellat maxime et consectetur! Molestiae sapiente maiores inventore veritatis. Veritatis alias molestiae mollitia.</span></p>
                                </div>
                                <div class="blog__subtitle">
                                    <h4>How to manage your problem?</h4>
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur eos, sed eveniet dignissimos numquam provident nihil unde ullam quod molestiae nostrum! Totam iusto quibusdam, enim <a href="#">asperiores</a> neque
                                        pariatur voluptatum eos eum fuga, sequi, hic odit aspernatur earum? Ratione, atque incidunt.</p>
                                </div>
                                <div class="blog__quote">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id distinctio nulla velit est quidem repellendus esse non saepe cumque sapiente.</p>
                                    <span>jaurge anderson</span>
                                </div>
                                <ul class="blog__details__list">
                                    <li>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus quaerat tenetur, <a href="#">aperiam</a> odit, ratione eligendi nulla quae praesentium quo, a reiciendis inventore facilis veniam voluptates.</p>
                                    </li>
                                    <li>
                                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad ullam impedit, architecto porro voluptas sequi ab beatae saepe quo magnam</p>
                                    </li>
                                </ul>
                                <div class="blog__sidebar blog__tag">
                                    <h4>tags</h4>
                                    <ul>
                                        <li><a href="#">domain</a></li>
                                        <li><a href="#">cloud</a></li>
                                        <li><a href="#">web</a></li>
                                        <li><a href="#">payment</a></li>
                                        <li><a href="#">E-commerce</a></li>
                                        <li><a href="#">Sequerity</a></li>
                                        <li><a href="#">solution</a></li>
                                        <li><a href="#">offer</a></li>
                                        <li><a href="#">support</a></li>
                                        <li><a href="#">knowladge</a></li>
                                    </ul>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </section>
            <!--=====================================
                    BLOG LIST PART END
        =======================================-->


            <!-- ========================comment section start================ -->
            <section class="blog__user">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-lg-6">
                            <div class="user__comment">
                                <h4>Comments <span>(3)</span></h4>
                            </div>
                            <ul class="comment__list">
                                <li class="comment__item">
                                    <div class="comment">
                                        <a href="#"><img src="img/user/avatar-1.jpg" alt="comment-1"></a>
                                        <div class="comment__text">
                                            <ul class="comment__head">
                                                <li>
                                                    <a href="#">
                                                        <i class="far fa-user"></i> Miron hasan
                                                    </a>
                                                </li>
                                                <li>
                                                    <i class="far fa-calendar-alt"></i> 02 February 2020
                                                </li>
                                            </ul>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias eveniet quisquam vitae doloremque.</p>
                                        </div>
                                    </div>
                                    <div class="reply__comment">
                                        <a href="#">reply<i class="fas fa-long-arrow-alt-right"></i></a>
                                    </div>
                                </li>
                                <li class="comment__item ml-5">
                                    <div class="comment">
                                        <a href="#"><img src="img/user/avatar-2.jpg" alt="comment-1"></a>
                                        <div class="comment__text">
                                            <ul class="comment__head">
                                                <li>
                                                    <a href="#">
                                                        <i class="far fa-user"></i> Miron hasan
                                                    </a>
                                                </li>
                                                <li>
                                                    <i class="far fa-calendar-alt"></i> 02 February 2020
                                                </li>
                                            </ul>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias eveniet quisquam vitae doloremque.</p>
                                        </div>
                                    </div>
                                    <div class="reply__comment">
                                        <a href="#">reply<i class="fas fa-long-arrow-alt-right"></i></a>
                                    </div>
                                </li>
                                <li class="comment__item">
                                    <div class="comment">
                                        <a href="#"><img src="img/user/avatar-3.jpg" alt="comment-1"></a>
                                        <div class="comment__text">
                                            <ul class="comment__head">
                                                <li>
                                                    <a href="#">
                                                        <i class="far fa-user"></i> Miron hasan
                                                    </a>
                                                </li>
                                                <li>
                                                    <i class="far fa-calendar-alt"></i> 02 February 2020
                                                </li>
                                            </ul>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias eveniet quisquam vitae doloremque.</p>
                                        </div>
                                    </div>
                                    <div class="reply__comment">
                                        <a href="#">reply<i class="fas fa-long-arrow-alt-right"></i></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-12 col-lg-6">
                            <div class="comment__form">
                                <h4>Leave Your Qoute</h4>
                                <form class="form__input">
                                    <input type="text" placeholder="Your name">
                                    <input type="email" placeholder="Your email">
                                    <textarea placeholder="Your quote"></textarea>
                                    <button class="btn-main">
                                    <i class="fas fa-paper-plane"></i>
                                    <span>send quote</span>
                                </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- =====================comment section end=========== -->
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