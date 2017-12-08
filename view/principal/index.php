@extends('principal/indexparent');

@section('title','Inicio - Kuper');
@section('content')
<div class="main1">
            <div class="container">
                <div class="row">
                    <div class="col-sm-9 col-sm-push-3">

                        <div id="slider1" class="carousel slide carousel-fade" data-ride="carousel" data-interval="5000">
                            <div class="carousel-inner" role="listbox">
                              <div class="item active">
                                  <div class="caption1">
                                    <a href="#"><img src="assets/images/1.jpg" alt="..." title="..."></a>
                                  </div>
                              </div>

                              <div class="item">
                                  <div class="caption1">
                                    <a href="#"><img src="assets/images/2.jpg" alt="..." title="..."></a>
                                  </div>
                              </div>

                              <div class="item">
                                  <div class="caption1">
                                    <a href="#"><img src="assets/images/3.jpg" alt="..." title="..."></a>
                                  </div>
                              </div>
                            </div>

                            <div class="btrap-controls">
                                <a class="ileft" href="#slider1" role="button" data-slide="prev">
                                </a>
                                <a class="iright" href="#slider1" role="button" data-slide="next">
                                </a>
                            </div>

                          </div>

                    </div>

                    <aside class="col-sm-3 col-sm-pull-9 sidebar sidebar-shop">
                        <div class="widget widget-banner">
                            <div class="banner banner-image">
                                <a href="#" title="Brown Woman Shoes">
                                    <img src="assets/images/sample.jpg" alt ="Oferta">
                                </a>
                            </div>
                        </div>
                    </aside>


                </div>

                <div class="row">
                    <div class="col-md-12">
                        <h3 class="carousel-title">Nuevos lanzamientos</h3>
                        <div class="owl-data-carousel owl-carousel" data-owl-settings='{"autoplayTimeout":6500}'>

                            <div class="product">
                                <figure class="product-image-container">
                                    <a href="product.html" title="Product Name" class="product-image-link">
                                        <img src="assets/images/products/product1.jpg" width="195" height="255" alt="Product Image">
                                    </a>
                                    <span class="product-label">-55%</span>
                                    <!-- a href="#" class="btn-quick-view"><i class="i-eye"></i> Vista rápida</a -->
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-wishlist" title="Add to Wishlist">
                                            <i class="icon-product icon-heart"></i>
                                        </a>
                                        <a href="#" class="btn-product btn-add-cart" title="Ver Detalles">
                                            <i class="icon-product icon-bag"></i>
                                            <span>Ver Detalles</span>
                                        </a>

                                    </div>
                                </figure>
                                <div class="title">
                                    <a href="product.html">
                                        <div>
                                            <div class="product-title">
                                                <h2>Polo Batman<br>The Dark Knight Returns</h2>
                                            </div>
                                            <div class="product-price-container">
                                                <!-- span class="old product-price">S/ 50.00</span -->
                                                <span class="new product-price">S/ 45.00</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="product">
                                <figure class="product-image-container">
                                    <a href="product.html" title="Product Name" class="product-image-link">
                                        <img src="assets/images/products/product2.jpg" width="195" height="255" alt="Product Image">
                                    </a>
                                    <span class="product-label">-55%</span>
                                    <!-- a href="#" class="btn-quick-view"><i class="i-eye"></i> Vista rápida</a -->
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-wishlist" title="Add to Wishlist">
                                            <i class="icon-product icon-heart"></i>
                                        </a>
                                        <a href="#" class="btn-product btn-add-cart" title="Ver Detalles">
                                            <i class="icon-product icon-bag"></i>
                                            <span>Ver Detalles</span>
                                        </a>

                                    </div>
                                </figure>
                                <div class="title">
                                    <a href="product.html">
                                        <div>
                                            <div class="product-title">
                                                <h2>Polo Superman<br>Man of Steel</h2>
                                            </div>
                                            <div class="product-price-container">
                                                <!-- span class="old product-price">S/ 50.00</span -->
                                                <span class="new product-price">S/ 45.00</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="product">
                                <figure class="product-image-container">
                                    <a href="product.html" title="Product Name" class="product-image-link">
                                        <img src="assets/images/products/product3.jpg" width="195" height="255" alt="Product Image">
                                    </a>
                                    <span class="product-label">-55%</span>
                                    <!-- a href="#" class="btn-quick-view"><i class="i-eye"></i> Vista rápida</a -->
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-wishlist" title="Add to Wishlist">
                                            <i class="icon-product icon-heart"></i>
                                        </a>
                                        <a href="#" class="btn-product btn-add-cart" title="Ver Detalles">
                                            <i class="icon-product icon-bag"></i>
                                            <span>Ver Detalles</span>
                                        </a>
                                    </div>
                                </figure>
                                <div class="title">
                                    <a href="product.html">
                                        <div>
                                            <div class="product-title">
                                                <h2>Polo Flash<br>Nuevo Universo DC</h2>
                                            </div>
                                            <div class="product-price-container">
                                                <!-- span class="old product-price">S/ 50.00</span -->
                                                <span class="new product-price">S/ 45.00</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="product">
                                <figure class="product-image-container">
                                    <a href="product.html" title="Product Name" class="product-image-link">
                                        <img src="assets/images/products/product4.jpg" width="195" height="255" alt="Product Image">
                                    </a>
                                    <span class="product-label">-55%</span>
                                    <!-- a href="#" class="btn-quick-view"><i class="i-eye"></i> Vista rápida</a -->
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-wishlist" title="Add to Wishlist">
                                            <i class="icon-product icon-heart"></i>
                                        </a>
                                        <a href="#" class="btn-product btn-add-cart" title="Ver Detalles">
                                            <i class="icon-product icon-bag"></i>
                                            <span>Ver Detalles</span>
                                        </a>
                                        <a href="#" class="btn-product btn-compare" title="Add to Compare">
                                            <i class="icon-product icon-bar"></i>
                                        </a>
                                    </div>
                                </figure>
                                <div class="title">
                                    <a href="product.html">
                                        <div>
                                            <div class="product-title">
                                                <h2>Polo Game Of Thrones<br>Winter is coming</h2>
                                            </div>
                                            <div class="product-price-container">
                                                <!-- span class="old product-price">S/ 50.00</span -->
                                                <span class="new product-price">S/ 45.00</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="product">
                                <figure class="product-image-container">
                                    <a href="product.html" title="Product Name" class="product-image-link">
                                        <img src="assets/images/products/product5.jpg" width="195" height="255" alt="Product Image">
                                    </a>
                                    <span class="product-label">-55%</span>
                                    <!-- a href="#" class="btn-quick-view"><i class="i-eye"></i> Vista rápida</a -->
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-wishlist" title="Add to Wishlist">
                                            <i class="icon-product icon-heart"></i>
                                        </a>
                                        <a href="#" class="btn-product btn-add-cart" title="Ver Detalles">
                                            <i class="icon-product icon-bag"></i>
                                            <span>Ver Detalles</span>
                                        </a>
                                        <a href="#" class="btn-product btn-compare" title="Add to Compare">
                                            <i class="icon-product icon-bar"></i>
                                        </a>
                                    </div>
                                </figure>
                                <div class="title">
                                    <a href="product.html">
                                        <div>
                                            <div class="product-title">
                                                <h2>Polo Wonder Woman<br>Logo Clásico</h2>
                                            </div>
                                            <div class="product-price-container">
                                                <!-- span class="old product-price">S/ 50.00</span -->
                                                <span class="new product-price">S/ 45.00</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="product">
                                <figure class="product-image-container">
                                    <a href="product.html" title="Product Name" class="product-image-link">
                                        <img src="assets/images/products/product6.jpg" width="195" height="255" alt="Product Image">
                                    </a>
                                    <span class="product-label">-55%</span>
                                    <!-- a href="#" class="btn-quick-view"><i class="i-eye"></i> Vista rápida</a -->
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-wishlist" title="Add to Wishlist">
                                            <i class="icon-product icon-heart"></i>
                                        </a>
                                        <a href="#" class="btn-product btn-add-cart" title="Ver Detalles">
                                            <i class="icon-product icon-bag"></i>
                                            <span>Ver Detalles</span>
                                        </a>
                                        <a href="#" class="btn-product btn-compare" title="Add to Compare">
                                            <i class="icon-product icon-bar"></i>
                                        </a>
                                    </div>
                                </figure>
                                <div class="title">
                                    <a href="product.html">
                                        <div>
                                            <div class="product-title">
                                                <h2>Polo Super Girl<br>Man of Steel</h2>
                                            </div>
                                            <div class="product-price-container">
                                                <!-- span class="old product-price">S/ 50.00</span -->
                                                <span class="new product-price">S/ 45.00</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                        </div>
                        <div class="mb30"></div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <h3 class="carousel-title">Productos Destacados</h3>
                        <div class="owl-data-carousel owl-carousel" data-owl-settings='{"autoplayTimeout":6500}'>

                            <div class="product">
                                <figure class="product-image-container">
                                    <a href="product.html" title="Product Name" class="product-image-link">
                                        <img src="assets/images/products/product1.jpg" width="195" height="255" alt="Product Image">
                                    </a>
                                    <span class="product-label">-55%</span>
                                    <!-- a href="#" class="btn-quick-view"><i class="i-eye"></i> Vista rápida</a -->
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-wishlist" title="Add to Wishlist">
                                            <i class="icon-product icon-heart"></i>
                                        </a>
                                        <a href="#" class="btn-product btn-add-cart" title="Ver Detalles">
                                            <i class="icon-product icon-bag"></i>
                                            <span>Ver Detalles</span>
                                        </a>

                                    </div>
                                </figure>
                                <div class="title">
                                    <a href="product.html">
                                        <div>
                                            <div class="product-title">
                                                <h2>Polo Batman<br>The Dark Knight Returns</h2>
                                            </div>
                                            <div class="product-price-container">
                                                <!-- span class="old product-price">S/ 50.00</span -->
                                                <span class="new product-price">S/ 45.00</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="product">
                                <figure class="product-image-container">
                                    <a href="product.html" title="Product Name" class="product-image-link">
                                        <img src="assets/images/products/product2.jpg" width="195" height="255" alt="Product Image">
                                    </a>
                                    <span class="product-label">-55%</span>
                                    <!-- a href="#" class="btn-quick-view"><i class="i-eye"></i> Vista rápida</a -->
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-wishlist" title="Add to Wishlist">
                                            <i class="icon-product icon-heart"></i>
                                        </a>
                                        <a href="#" class="btn-product btn-add-cart" title="Ver Detalles">
                                            <i class="icon-product icon-bag"></i>
                                            <span>Ver Detalles</span>
                                        </a>

                                    </div>
                                </figure>
                                <div class="title">
                                    <a href="product.html">
                                        <div>
                                            <div class="product-title">
                                                <h2>Polo Superman<br>Man of Steel</h2>
                                            </div>
                                            <div class="product-price-container">
                                                <!-- span class="old product-price">S/ 50.00</span -->
                                                <span class="new product-price">S/ 45.00</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="product">
                                <figure class="product-image-container">
                                    <a href="product.html" title="Product Name" class="product-image-link">
                                        <img src="assets/images/products/product3.jpg" width="195" height="255" alt="Product Image">
                                    </a>
                                    <span class="product-label">-55%</span>
                                    <!-- a href="#" class="btn-quick-view"><i class="i-eye"></i> Vista rápida</a -->
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-wishlist" title="Add to Wishlist">
                                            <i class="icon-product icon-heart"></i>
                                        </a>
                                        <a href="#" class="btn-product btn-add-cart" title="Ver Detalles">
                                            <i class="icon-product icon-bag"></i>
                                            <span>Ver Detalles</span>
                                        </a>
                                    </div>
                                </figure>
                                <div class="title">
                                    <a href="product.html">
                                        <div>
                                            <div class="product-title">
                                                <h2>Polo Flash<br>Nuevo Universo DC</h2>
                                            </div>
                                            <div class="product-price-container">
                                                <!-- span class="old product-price">S/ 50.00</span -->
                                                <span class="new product-price">S/ 45.00</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="product">
                                <figure class="product-image-container">
                                    <a href="product.html" title="Product Name" class="product-image-link">
                                        <img src="assets/images/products/product4.jpg" width="195" height="255" alt="Product Image">
                                    </a>
                                    <span class="product-label">-55%</span>
                                    <!-- a href="#" class="btn-quick-view"><i class="i-eye"></i> Vista rápida</a -->
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-wishlist" title="Add to Wishlist">
                                            <i class="icon-product icon-heart"></i>
                                        </a>
                                        <a href="#" class="btn-product btn-add-cart" title="Ver Detalles">
                                            <i class="icon-product icon-bag"></i>
                                            <span>Ver Detalles</span>
                                        </a>
                                        <a href="#" class="btn-product btn-compare" title="Add to Compare">
                                            <i class="icon-product icon-bar"></i>
                                        </a>
                                    </div>
                                </figure>
                                <div class="title">
                                    <a href="product.html">
                                        <div>
                                            <div class="product-title">
                                                <h2>Polo Game Of Thrones<br>Winter is coming</h2>
                                            </div>
                                            <div class="product-price-container">
                                                <!-- span class="old product-price">S/ 50.00</span -->
                                                <span class="new product-price">S/ 45.00</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="product">
                                <figure class="product-image-container">
                                    <a href="product.html" title="Product Name" class="product-image-link">
                                        <img src="assets/images/products/product5.jpg" width="195" height="255" alt="Product Image">
                                    </a>
                                    <span class="product-label">-55%</span>
                                    <!-- a href="#" class="btn-quick-view"><i class="i-eye"></i> Vista rápida</a -->
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-wishlist" title="Add to Wishlist">
                                            <i class="icon-product icon-heart"></i>
                                        </a>
                                        <a href="#" class="btn-product btn-add-cart" title="Ver Detalles">
                                            <i class="icon-product icon-bag"></i>
                                            <span>Ver Detalles</span>
                                        </a>
                                        <a href="#" class="btn-product btn-compare" title="Add to Compare">
                                            <i class="icon-product icon-bar"></i>
                                        </a>
                                    </div>
                                </figure>
                                <div class="title">
                                    <a href="product.html">
                                        <div>
                                            <div class="product-title">
                                                <h2>Polo Wonder Woman<br>Logo Clásico</h2>
                                            </div>
                                            <div class="product-price-container">
                                                <!-- span class="old product-price">S/ 50.00</span -->
                                                <span class="new product-price">S/ 45.00</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="product">
                                <figure class="product-image-container">
                                    <a href="product.html" title="Product Name" class="product-image-link">
                                        <img src="assets/images/products/product6.jpg" width="195" height="255" alt="Product Image">
                                    </a>
                                    <span class="product-label">-55%</span>
                                    <!-- a href="#" class="btn-quick-view"><i class="i-eye"></i> Vista rápida</a -->
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-wishlist" title="Add to Wishlist">
                                            <i class="icon-product icon-heart"></i>
                                        </a>
                                        <a href="#" class="btn-product btn-add-cart" title="Ver Detalles">
                                            <i class="icon-product icon-bag"></i>
                                            <span>Ver Detalles</span>
                                        </a>
                                        <a href="#" class="btn-product btn-compare" title="Add to Compare">
                                            <i class="icon-product icon-bar"></i>
                                        </a>
                                    </div>
                                </figure>
                                <div class="title">
                                    <a href="product.html">
                                        <div>
                                            <div class="product-title">
                                                <h2>Polo Super Girl<br>Man of Steel</h2>
                                            </div>
                                            <div class="product-price-container">
                                                <!-- span class="old product-price">S/ 50.00</span -->
                                                <span class="new product-price">S/ 45.00</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                        </div>
                        <div class="mb30"></div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <h3 class="carousel-title">Sólo para superhéroes</h3>
                        <div class="owl-data-carousel owl-carousel" data-owl-settings='{"autoplayTimeout":6500}'>
                            <div class="product">
                                <figure class="product-image-container">
                                    <a href="product.html" title="Product Name" class="product-image-link">
                                        <img src="assets/images/products/product1.jpg" width="195" height="255" alt="Product Image">
                                    </a>
                                    <span class="product-label">-55%</span>
                                    <!-- a href="#" class="btn-quick-view"><i class="i-eye"></i> Vista rápida</a -->
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-wishlist" title="Add to Wishlist">
                                            <i class="icon-product icon-heart"></i>
                                        </a>
                                        <a href="#" class="btn-product btn-add-cart" title="Ver Detalles">
                                            <i class="icon-product icon-bag"></i>
                                            <span>Ver Detalles</span>
                                        </a>

                                    </div>
                                </figure>
                                <div class="title">
                                    <a href="product.html">
                                        <div>
                                            <div class="product-title">
                                                <h2>Polo Batman<br>The Dark Knight Returns</h2>
                                            </div>
                                            <div class="product-price-container">
                                                <!-- span class="old product-price">S/ 50.00</span -->
                                                <span class="new product-price">S/ 45.00</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="product">
                                <figure class="product-image-container">
                                    <a href="product.html" title="Product Name" class="product-image-link">
                                        <img src="assets/images/products/product2.jpg" width="195" height="255" alt="Product Image">
                                    </a>
                                    <span class="product-label">-55%</span>
                                    <!-- a href="#" class="btn-quick-view"><i class="i-eye"></i> Vista rápida</a -->
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-wishlist" title="Add to Wishlist">
                                            <i class="icon-product icon-heart"></i>
                                        </a>
                                        <a href="#" class="btn-product btn-add-cart" title="Ver Detalles">
                                            <i class="icon-product icon-bag"></i>
                                            <span>Ver Detalles</span>
                                        </a>

                                    </div>
                                </figure>
                                <div class="title">
                                    <a href="product.html">
                                        <div>
                                            <div class="product-title">
                                                <h2>Polo Superman<br>Man of Steel</h2>
                                            </div>
                                            <div class="product-price-container">
                                                <!-- span class="old product-price">S/ 50.00</span -->
                                                <span class="new product-price">S/ 45.00</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="product">
                                <figure class="product-image-container">
                                    <a href="product.html" title="Product Name" class="product-image-link">
                                        <img src="assets/images/products/product3.jpg" width="195" height="255" alt="Product Image">
                                    </a>
                                    <span class="product-label">-55%</span>
                                    <!-- a href="#" class="btn-quick-view"><i class="i-eye"></i> Vista rápida</a -->
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-wishlist" title="Add to Wishlist">
                                            <i class="icon-product icon-heart"></i>
                                        </a>
                                        <a href="#" class="btn-product btn-add-cart" title="Ver Detalles">
                                            <i class="icon-product icon-bag"></i>
                                            <span>Ver Detalles</span>
                                        </a>
                                    </div>
                                </figure>
                                <div class="title">
                                    <a href="product.html">
                                        <div>
                                            <div class="product-title">
                                                <h2>Polo Flash<br>Nuevo Universo DC</h2>
                                            </div>
                                            <div class="product-price-container">
                                                <!-- span class="old product-price">S/ 50.00</span -->
                                                <span class="new product-price">S/ 45.00</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="product">
                                <figure class="product-image-container">
                                    <a href="product.html" title="Product Name" class="product-image-link">
                                        <img src="assets/images/products/product4.jpg" width="195" height="255" alt="Product Image">
                                    </a>
                                    <span class="product-label">-55%</span>
                                    <!-- a href="#" class="btn-quick-view"><i class="i-eye"></i> Vista rápida</a -->
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-wishlist" title="Add to Wishlist">
                                            <i class="icon-product icon-heart"></i>
                                        </a>
                                        <a href="#" class="btn-product btn-add-cart" title="Ver Detalles">
                                            <i class="icon-product icon-bag"></i>
                                            <span>Ver Detalles</span>
                                        </a>
                                        <a href="#" class="btn-product btn-compare" title="Add to Compare">
                                            <i class="icon-product icon-bar"></i>
                                        </a>
                                    </div>
                                </figure>
                                <div class="title">
                                    <a href="product.html">
                                        <div>
                                            <div class="product-title">
                                                <h2>Polo Game Of Thrones<br>Winter is coming</h2>
                                            </div>
                                            <div class="product-price-container">
                                                <!-- span class="old product-price">S/ 50.00</span -->
                                                <span class="new product-price">S/ 45.00</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="product">
                                <figure class="product-image-container">
                                    <a href="product.html" title="Product Name" class="product-image-link">
                                        <img src="assets/images/products/product5.jpg" width="195" height="255" alt="Product Image">
                                    </a>
                                    <span class="product-label">-55%</span>
                                    <!-- a href="#" class="btn-quick-view"><i class="i-eye"></i> Vista rápida</a -->
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-wishlist" title="Add to Wishlist">
                                            <i class="icon-product icon-heart"></i>
                                        </a>
                                        <a href="#" class="btn-product btn-add-cart" title="Ver Detalles">
                                            <i class="icon-product icon-bag"></i>
                                            <span>Ver Detalles</span>
                                        </a>
                                        <a href="#" class="btn-product btn-compare" title="Add to Compare">
                                            <i class="icon-product icon-bar"></i>
                                        </a>
                                    </div>
                                </figure>
                                <div class="title">
                                    <a href="product.html">
                                        <div>
                                            <div class="product-title">
                                                <h2>Polo Wonder Woman<br>Logo Clásico</h2>
                                            </div>
                                            <div class="product-price-container">
                                                <!-- span class="old product-price">S/ 50.00</span -->
                                                <span class="new product-price">S/ 45.00</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="product">
                                <figure class="product-image-container">
                                    <a href="product.html" title="Product Name" class="product-image-link">
                                        <img src="assets/images/products/product6.jpg" width="195" height="255" alt="Product Image">
                                    </a>
                                    <span class="product-label">-55%</span>
                                    <!-- a href="#" class="btn-quick-view"><i class="i-eye"></i> Vista rápida</a -->
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-wishlist" title="Add to Wishlist">
                                            <i class="icon-product icon-heart"></i>
                                        </a>
                                        <a href="#" class="btn-product btn-add-cart" title="Ver Detalles">
                                            <i class="icon-product icon-bag"></i>
                                            <span>Ver Detalles</span>
                                        </a>
                                        <a href="#" class="btn-product btn-compare" title="Add to Compare">
                                            <i class="icon-product icon-bar"></i>
                                        </a>
                                    </div>
                                </figure>
                                <div class="title">
                                    <a href="product.html">
                                        <div>
                                            <div class="product-title">
                                                <h2>Polo Super Girl<br>Man of Steel</h2>
                                            </div>
                                            <div class="product-price-container">
                                                <!-- span class="old product-price">S/ 50.00</span -->
                                                <span class="new product-price">S/ 45.00</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                        </div>
                        <div class="mb30"></div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <h3 class="carousel-title">Sólo para Superheroínas</h3>
                        <div class="owl-data-carousel owl-carousel" data-owl-settings='{"autoplayTimeout":6500}'>
                            <div class="product">
                                <figure class="product-image-container">
                                    <a href="product.html" title="Product Name" class="product-image-link">
                                        <img src="assets/images/products/product1.jpg" width="195" height="255" alt="Product Image">
                                    </a>
                                    <span class="product-label">-55%</span>
                                    <!-- a href="#" class="btn-quick-view"><i class="i-eye"></i> Vista rápida</a -->
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-wishlist" title="Add to Wishlist">
                                            <i class="icon-product icon-heart"></i>
                                        </a>
                                        <a href="#" class="btn-product btn-add-cart" title="Ver Detalles">
                                            <i class="icon-product icon-bag"></i>
                                            <span>Ver Detalles</span>
                                        </a>

                                    </div>
                                </figure>
                                <div class="title">
                                    <a href="product.html">
                                        <div>
                                            <div class="product-title">
                                                <h2>Polo Batman<br>The Dark Knight Returns</h2>
                                            </div>
                                            <div class="product-price-container">
                                                <!-- span class="old product-price">S/ 50.00</span -->
                                                <span class="new product-price">S/ 45.00</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="product">
                                <figure class="product-image-container">
                                    <a href="product.html" title="Product Name" class="product-image-link">
                                        <img src="assets/images/products/product2.jpg" width="195" height="255" alt="Product Image">
                                    </a>
                                    <span class="product-label">-55%</span>
                                    <!-- a href="#" class="btn-quick-view"><i class="i-eye"></i> Vista rápida</a -->
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-wishlist" title="Add to Wishlist">
                                            <i class="icon-product icon-heart"></i>
                                        </a>
                                        <a href="#" class="btn-product btn-add-cart" title="Ver Detalles">
                                            <i class="icon-product icon-bag"></i>
                                            <span>Ver Detalles</span>
                                        </a>

                                    </div>
                                </figure>
                                <div class="title">
                                    <a href="product.html">
                                        <div>
                                            <div class="product-title">
                                                <h2>Polo Superman<br>Man of Steel</h2>
                                            </div>
                                            <div class="product-price-container">
                                                <!-- span class="old product-price">S/ 50.00</span -->
                                                <span class="new product-price">S/ 45.00</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="product">
                                <figure class="product-image-container">
                                    <a href="product.html" title="Product Name" class="product-image-link">
                                        <img src="assets/images/products/product3.jpg" width="195" height="255" alt="Product Image">
                                    </a>
                                    <span class="product-label">-55%</span>
                                    <!-- a href="#" class="btn-quick-view"><i class="i-eye"></i> Vista rápida</a -->
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-wishlist" title="Add to Wishlist">
                                            <i class="icon-product icon-heart"></i>
                                        </a>
                                        <a href="#" class="btn-product btn-add-cart" title="Ver Detalles">
                                            <i class="icon-product icon-bag"></i>
                                            <span>Ver Detalles</span>
                                        </a>
                                    </div>
                                </figure>
                                <div class="title">
                                    <a href="product.html">
                                        <div>
                                            <div class="product-title">
                                                <h2>Polo Flash<br>Nuevo Universo DC</h2>
                                            </div>
                                            <div class="product-price-container">
                                                <!-- span class="old product-price">S/ 50.00</span -->
                                                <span class="new product-price">S/ 45.00</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="product">
                                <figure class="product-image-container">
                                    <a href="product.html" title="Product Name" class="product-image-link">
                                        <img src="assets/images/products/product4.jpg" width="195" height="255" alt="Product Image">
                                    </a>
                                    <span class="product-label">-55%</span>
                                    <!-- a href="#" class="btn-quick-view"><i class="i-eye"></i> Vista rápida</a -->
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-wishlist" title="Add to Wishlist">
                                            <i class="icon-product icon-heart"></i>
                                        </a>
                                        <a href="#" class="btn-product btn-add-cart" title="Ver Detalles">
                                            <i class="icon-product icon-bag"></i>
                                            <span>Ver Detalles</span>
                                        </a>
                                        <a href="#" class="btn-product btn-compare" title="Add to Compare">
                                            <i class="icon-product icon-bar"></i>
                                        </a>
                                    </div>
                                </figure>
                                <div class="title">
                                    <a href="product.html">
                                        <div>
                                            <div class="product-title">
                                                <h2>Polo Game Of Thrones<br>Winter is coming</h2>
                                            </div>
                                            <div class="product-price-container">
                                                <!-- span class="old product-price">S/ 50.00</span -->
                                                <span class="new product-price">S/ 45.00</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="product">
                                <figure class="product-image-container">
                                    <a href="product.html" title="Product Name" class="product-image-link">
                                        <img src="assets/images/products/product5.jpg" width="195" height="255" alt="Product Image">
                                    </a>
                                    <span class="product-label">-55%</span>
                                    <!-- a href="#" class="btn-quick-view"><i class="i-eye"></i> Vista rápida</a -->
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-wishlist" title="Add to Wishlist">
                                            <i class="icon-product icon-heart"></i>
                                        </a>
                                        <a href="#" class="btn-product btn-add-cart" title="Ver Detalles">
                                            <i class="icon-product icon-bag"></i>
                                            <span>Ver Detalles</span>
                                        </a>
                                        <a href="#" class="btn-product btn-compare" title="Add to Compare">
                                            <i class="icon-product icon-bar"></i>
                                        </a>
                                    </div>
                                </figure>
                                <div class="title">
                                    <a href="product.html">
                                        <div>
                                            <div class="product-title">
                                                <h2>Polo Wonder Woman<br>Logo Clásico</h2>
                                            </div>
                                            <div class="product-price-container">
                                                <!-- span class="old product-price">S/ 50.00</span -->
                                                <span class="new product-price">S/ 45.00</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="product">
                                <figure class="product-image-container">
                                    <a href="product.html" title="Product Name" class="product-image-link">
                                        <img src="assets/images/products/product6.jpg" width="195" height="255" alt="Product Image">
                                    </a>
                                    <span class="product-label">-55%</span>
                                    <!-- a href="#" class="btn-quick-view"><i class="i-eye"></i> Vista rápida</a -->
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-wishlist" title="Add to Wishlist">
                                            <i class="icon-product icon-heart"></i>
                                        </a>
                                        <a href="#" class="btn-product btn-add-cart" title="Ver Detalles">
                                            <i class="icon-product icon-bag"></i>
                                            <span>Ver Detalles</span>
                                        </a>
                                        <a href="#" class="btn-product btn-compare" title="Add to Compare">
                                            <i class="icon-product icon-bar"></i>
                                        </a>
                                    </div>
                                </figure>
                                <div class="title">
                                    <a href="product.html">
                                        <div>
                                            <div class="product-title">
                                                <h2>Polo Super Girl<br>Man of Steel</h2>
                                            </div>
                                            <div class="product-price-container">
                                                <!-- span class="old product-price">S/ 50.00</span -->
                                                <span class="new product-price">S/ 45.00</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                        </div>
                        <div class="mb30"></div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <h3 class="carousel-title">Temáticas</h3>
                        <div class="owl-data-carousel owl-carousel" data-owl-settings='{"autoplayTimeout":7500}'>
                            <div class="product">
                                <figure class="product-image-container">
                                    <a href="product.html" title="Product Name" class="product-image-link">
                                        <img src="assets/images/products/star-wars.jpg" width="195" height="255" alt="Product Image">
                                    </a>
                                </figure>
                            </div>

                            <div class="product">
                                <figure class="product-image-container">
                                    <a href="product.html" title="Product Name" class="product-image-link">
                                        <img src="assets/images/products/marvel.jpg" width="195" height="255" alt="Product Image">
                                    </a>
                                </figure>
                            </div>

                            <div class="product">
                                <figure class="product-image-container">
                                    <a href="product.html" title="Product Name" class="product-image-link">
                                        <img src="assets/images/products/dc.jpg" width="195" height="255" alt="Product Image">
                                    </a>
                                </figure>
                            </div>

                            <div class="product">
                                <figure class="product-image-container">
                                    <a href="product.html" title="Product Name" class="product-image-link">
                                        <img src="assets/images/products/justice-league.jpg" width="195" height="255" alt="Product Image">
                                    </a>
                                </figure>
                            </div>

                            <div class="product">
                                <figure class="product-image-container">
                                    <a href="product.html" title="Product Name" class="product-image-link">
                                        <img src="assets/images/products/seriestv.jpg" width="195" height="255" alt="Product Image">
                                    </a>
                                </figure>
                            </div>

                            <div class="product">
                                <figure class="product-image-container">
                                    <a href="product.html" title="Product Name" class="product-image-link">
                                        <img src="assets/images/products/avengers.jpg" width="195" height="255" alt="Product Image">
                                    </a>
                                </figure>
                            </div>

                            <div class="product">
                                <figure class="product-image-container">
                                    <a href="product.html" title="Product Name" class="product-image-link">
                                        <img src="assets/images/products/villanos.jpg" width="195" height="255" alt="Product Image">
                                    </a>
                                </figure>
                            </div>
                        </div>
                        <div class="mb40"></div>
                    </div>
                </div>

            </div>
        </div>
@endsection()