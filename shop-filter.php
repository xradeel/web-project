﻿<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <title>Evara - eCommerce HTML Template</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <link rel="shortcut icon" type="image/x-icon" href="assets/imgs/theme/favicon.svg">
    <link rel="stylesheet" href="assets/css/maind134.css?v=3.4">
</head>

<body>
    <?php
    require("components/quick-view.php");
    require("components/header-one.php");
    require("components/header-mobile.php");
    ?>
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="index.php" rel="nofollow">Home</a>
                    <span></span> Shop
                    <span></span> Filters
                </div>
            </div>
        </div>
        <section class="mt-50 mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <a class="shop-filter-toogle" href="#">
                            <span class="fi-rs-filter mr-5"></span>
                            Filters
                            <i class="fi-rs-angle-small-down angle-down"></i>
                            <i class="fi-rs-angle-small-up angle-up"></i>
                        </a>
                        <div class="shop-product-fillter-header">
                            <div class="row">
                                <div class="col-lg-2 col-md-4 mb-lg-0 mb-md-5 mb-sm-5">
                                    <h5 class="mb-20">Categories</h5>
                                    <ul class="categor-list">
                                        <li class="cat-item text-muted"><a href="shop-grid-left.php">Jacket</a>(125)</li>
                                        <li class="cat-item text-muted"><a href="shop-grid-left.php">Jeans</a>(68)</li>
                                        <li class="cat-item text-muted"><a href="shop-grid-left.php">Sweatshirts</a>(284)</li>
                                        <li class="cat-item text-muted"><a href="shop-grid-left.php">Trousers</a>(274)</li>
                                        <li class="cat-item text-muted"><a href="shop-grid-left.php">Kitwears</a>(152)</li>
                                        <li class="cat-item text-muted"><a href="shop-grid-left.php">Sportswear</a>(302)</li>
                                        <li class="cat-item text-muted"><a href="shop-grid-left.php">Accessories</a>(168)</li>
                                    </ul>
                                </div>
                                <div class="col-lg-2 col-md-4 mb-lg-0 mb-md-5 mb-sm-5">
                                    <h5 class="mb-20">Manufacturers</h5>
                                    <ul class="categor-list">
                                        <li class="cat-item text-muted"><a href="shop-grid-left.php">Adidas</a>(125)</li>
                                        <li class="cat-item text-muted"><a href="shop-grid-left.php">Armani</a>(68)</li>
                                        <li class="cat-item text-muted"><a href="shop-grid-left.php">Burberry</a>(274)</li>
                                        <li class="cat-item text-muted"><a href="shop-grid-left.php">Chanel</a>(152)</li>
                                        <li class="cat-item text-muted"><a href="shop-grid-left.php">Prada</a>(302)</li>
                                        <li class="cat-item text-muted"><a href="shop-grid-left.php">Bootstrap</a>(32)</li>
                                        <li class="cat-item text-muted"><a href="shop-grid-left.php">Helixx</a>(312)</li>
                                    </ul>
                                </div>
                                <div class="col-lg-2 col-md-4 mb-lg-0 mb-md-5 mb-sm-5">
                                    <h5 class="mb-20">Price range</h5>
                                    <ul class="categor-list">
                                        <li class="cat-item text-muted"><a href="shop-grid-left.php">All</a></li>
                                        <li class="cat-item text-muted"><a href="shop-grid-left.php">$0.00 - $20.00 </a></li>
                                        <li class="cat-item text-muted"><a href="shop-grid-left.php">$20.00 - $40.00 </a></li>
                                        <li class="cat-item text-muted"><a href="shop-grid-left.php">$40.00 - $60.00 </a></li>
                                        <li class="cat-item text-muted"><a href="shop-grid-left.php">$60.00 - $80.00 </a></li>
                                        <li class="cat-item text-muted"><a href="shop-grid-left.php">$80.00 - $100.00 </a></li>
                                        <li class="cat-item text-muted"><a href="shop-grid-left.php">$100.00 - $200.00 </a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-2 col-md-4 mb-lg-0 mb-md-5 mb-sm-5">
                                    <h5 class="mb-20">By Tags</h5>
                                    <ul class="categor-list">
                                        <li class="cat-item text-muted"><a href="shop-grid-left.php">Cloth</a>(124)</li>
                                        <li class="cat-item text-muted"><a href="shop-grid-left.php">Apple</a>(234)</li>
                                        <li class="cat-item text-muted"><a href="shop-grid-left.php">Headphone</a>(657)</li>
                                        <li class="cat-item text-muted"><a href="shop-grid-left.php">Music</a>(1221)</li>
                                        <li class="cat-item text-muted"><a href="shop-grid-left.php">Dress</a>(455)</li>
                                        <li class="cat-item text-muted"><a href="shop-grid-left.php">Trending</a>(1553)</li>
                                    </ul>
                                </div>
                                <div class="col-lg-2 col-md-4 mb-lg-0 mb-md-5 mb-sm-5">
                                    <h5 class="mb-20">By Color</h5>
                                    <ul class="list-filter color-filter">
                                        <li><a href="#" data-color="Red"><span class="product-color-red"></span></a></li>
                                        <li><a href="#" data-color="Yellow"><span class="product-color-yellow"></span></a></li>
                                        <li class="active"><a href="#" data-color="White"><span class="product-color-white"></span></a></li>
                                        <li><a href="#" data-color="Orange"><span class="product-color-orange"></span></a></li>
                                        <li><a href="#" data-color="Cyan"><span class="product-color-cyan"></span></a></li>
                                        <li><a href="#" data-color="Green"><span class="product-color-green"></span></a></li>
                                        <li><a href="#" data-color="Purple"><span class="product-color-purple"></span></a></li>
                                    </ul>
                                    <h5 class="mb-15 mt-20">By Size</h5>
                                    <ul class="list-filter size-filter font-small">
                                        <li><a href="#">S</a></li>
                                        <li class="active"><a href="#">M</a></li>
                                        <li><a href="#">L</a></li>
                                        <li><a href="#">XL</a></li>
                                        <li><a href="#">XXL</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-2 col-md-4 mb-lg-0 mb-md-5 mb-sm-5">
                                    <h5 class="mb-20">By Review</h5>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width:100%">
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (25)</span>
                                    </div>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width:80%">
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (25)</span>
                                    </div>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width:60%">
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (25)</span>
                                    </div>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width:40%">
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (25)</span>
                                    </div>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width:20%">
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (25)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="shop-product-fillter">
                            <div class="totall-product">
                                <p> We found <strong class="text-brand">688</strong> items for you!</p>
                            </div>
                            <div class="sort-by-product-area">
                                <div class="sort-by-cover mr-10">
                                    <div class="sort-by-product-wrap">
                                        <div class="sort-by">
                                            <span><i class="fi-rs-apps"></i>Show:</span>
                                        </div>
                                        <div class="sort-by-dropdown-wrap">
                                            <span> 50 <i class="fi-rs-angle-small-down"></i></span>
                                        </div>
                                    </div>
                                    <div class="sort-by-dropdown">
                                        <ul>
                                            <li><a class="active" href="#">50</a></li>
                                            <li><a href="#">100</a></li>
                                            <li><a href="#">150</a></li>
                                            <li><a href="#">200</a></li>
                                            <li><a href="#">All</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="sort-by-cover">
                                    <div class="sort-by-product-wrap">
                                        <div class="sort-by">
                                            <span><i class="fi-rs-apps-sort"></i>Sort by:</span>
                                        </div>
                                        <div class="sort-by-dropdown-wrap">
                                            <span> Featured <i class="fi-rs-angle-small-down"></i></span>
                                        </div>
                                    </div>
                                    <div class="sort-by-dropdown">
                                        <ul>
                                            <li><a class="active" href="#">Featured</a></li>
                                            <li><a href="#">Price: Low to High</a></li>
                                            <li><a href="#">Price: High to Low</a></li>
                                            <li><a href="#">Release Date</a></li>
                                            <li><a href="#">Avg. Rating</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row product-grid-3">
                            <div class="col-lg-3 col-md-4">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="shop-product-full.php">
                                                <img class="default-img" src="assets/imgs/shop/product-2-1.jpg" alt="">
                                                <img class="hover-img" src="assets/imgs/shop/product-2-2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                <i class="fi-rs-search"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.php"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up" href="shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="hot">Hot</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop-grid-left.php">Music</a>
                                        </div>
                                        <h2><a href="shop-product-full.php">Colorful Pattern Shirts</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>90%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$238.85 </span>
                                            <span class="old-price">$245.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.php"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="shop-product-full.php">
                                                <img class="default-img" src="assets/imgs/shop/product-3-1.jpg" alt="">
                                                <img class="hover-img" src="assets/imgs/shop/product-3-2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                <i class="fi-rs-search"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.php"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up" href="shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="new">New</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop-grid-left.php">Music</a>
                                        </div>
                                        <h2><a href="shop-product-full.php">Cartoon Astronaut T-Shirts</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>50%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$138.85 </span>
                                            <span class="old-price">$255.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.php"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="shop-product-full.php">
                                                <img class="default-img" src="assets/imgs/shop/product-7-1.jpg" alt="">
                                                <img class="hover-img" src="assets/imgs/shop/product-7-2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                <i class="fi-rs-search"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.php"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up" href="shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="best">Best Sell</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop-grid-left.php">Watch</a>
                                        </div>
                                        <h2><a href="shop-product-full.php">Plain Striola Shirts</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>95%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$338.85 </span>
                                            <span class="old-price">$445.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.php"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="shop-product-full.php">
                                                <img class="default-img" src="assets/imgs/shop/product-1-2.jpg" alt="">
                                                <img class="hover-img" src="assets/imgs/shop/product-1-2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                <i class="fi-rs-search"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.php"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up" href="shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="sale">Sale</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop-grid-left.php">Music</a>
                                        </div>
                                        <h2><a href="shop-product-full.php">Landscape Painting Shirt</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>70%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$123.85 </span>
                                            <span class="old-price">$235.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.php"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="shop-product-full.php">
                                                <img class="default-img" src="assets/imgs/shop/product-4-1.jpg" alt="">
                                                <img class="hover-img" src="assets/imgs/shop/product-3-2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                <i class="fi-rs-search"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.php"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up" href="shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="hot">-30%</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop-grid-left.php">Speaker</a>
                                        </div>
                                        <h2><a href="shop-product-full.php">Letter Print T-Shirt</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>70%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$28.85 </span>
                                            <span class="old-price">$45.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.php"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="shop-product-full.php">
                                                <img class="default-img" src="assets/imgs/shop/product-5-2.jpg" alt="">
                                                <img class="hover-img" src="assets/imgs/shop/product-5-2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                <i class="fi-rs-search"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.php"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up" href="shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="hot">-22%</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop-grid-left.php">Camera</a>
                                        </div>
                                        <h2><a href="shop-product-full.php">Element Pattern Print Shirts</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>70%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$238.85 </span>
                                            <span class="old-price">$245.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.php"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="shop-product-full.php">
                                                <img class="default-img" src="assets/imgs/shop/product-8-2.jpg" alt="">
                                                <img class="hover-img" src="assets/imgs/shop/product-8-1.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                <i class="fi-rs-search"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.php"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up" href="shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="new">New</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop-grid-left.php">Phone</a>
                                        </div>
                                        <h2><a href="shop-product-full.php">Vintage Henley Shirt</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>98%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$1275.85 </span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.php"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="shop-product-full.php">
                                                <img class="default-img" src="assets/imgs/shop/product-11-1.jpg" alt="">
                                                <img class="hover-img" src="assets/imgs/shop/product-11-2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                <i class="fi-rs-search"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.php"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up" href="shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop-grid-left.php">Accessories </a>
                                        </div>
                                        <h2><a href="shop-product-full.php">Cotton Leaf Printed</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>70%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$238.85 </span>
                                            <span class="old-price">$245.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.php"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="shop-product-full.php">
                                                <img class="default-img" src="assets/imgs/shop/product-13-1.jpg" alt="">
                                                <img class="hover-img" src="assets/imgs/shop/product-13-2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                <i class="fi-rs-search"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.php"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up" href="shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop-grid-left.php">Accessories </a>
                                        </div>
                                        <h2><a href="shop-product-full.php">Cotton Leaf Printed</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>70%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$238.85 </span>
                                            <span class="old-price">$245.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.php"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="shop-product-full.php">
                                                <img class="default-img" src="assets/imgs/shop/product-3-1.jpg" alt="">
                                                <img class="hover-img" src="assets/imgs/shop/product-3-2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                <i class="fi-rs-search"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.php"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up" href="shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="hot">Hot</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop-grid-left.php">Music</a>
                                        </div>
                                        <h2><a href="shop-product-full.php">Colorful Pattern Shirts</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>90%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$238.85 </span>
                                            <span class="old-price">$245.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.php"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="shop-product-full.php">
                                                <img class="default-img" src="assets/imgs/shop/product-2-1.jpg" alt="">
                                                <img class="hover-img" src="assets/imgs/shop/product-2-2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                <i class="fi-rs-search"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.php"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up" href="shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="new">New</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop-grid-left.php">Music</a>
                                        </div>
                                        <h2><a href="shop-product-full.php">Cartoon Astronaut T-Shirts</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>50%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$138.85 </span>
                                            <span class="old-price">$255.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.php"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="shop-product-full.php">
                                                <img class="default-img" src="assets/imgs/shop/product-7-2.jpg" alt="">
                                                <img class="hover-img" src="assets/imgs/shop/product-7-1.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                <i class="fi-rs-search"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.php"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up" href="shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="best">Best Sell</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop-grid-left.php">Watch</a>
                                        </div>
                                        <h2><a href="shop-product-full.php">Plain Striola Shirts</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>95%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$338.85 </span>
                                            <span class="old-price">$445.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.php"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pagination-area mt-15 mb-sm-5 mb-lg-0">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-start">
                                    <li class="page-item active"><a class="page-link" href="#">01</a></li>
                                    <li class="page-item"><a class="page-link" href="#">02</a></li>
                                    <li class="page-item"><a class="page-link" href="#">03</a></li>
                                    <li class="page-item"><a class="page-link dot" href="#">...</a></li>
                                    <li class="page-item"><a class="page-link" href="#">16</a></li>
                                    <li class="page-item"><a class="page-link" href="#"><i class="fi-rs-angle-double-small-right"></i></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php
    require("components/footer-one.php");
    require("components/pre-loader.php");
    ?>
    <?php require("components/js-links.php") ?>
</body>



</html>