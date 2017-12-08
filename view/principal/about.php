@extends('principal/indexparent');

@section('title','Sobre nosotros - Kuper');
@section('content')
    <div class="main2">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-md-push-3">
                    <div class="breads">
                        <ol class="breadcrumb">
                            <li>
                                <a href="index.html">Inicio</a>
                            </li>
                            <li class="active">
                                Sobre nosotros
                            </li>
                        </ol>
                    </div>
                    <div class="page-header text-center">
                        <h2>Sobre nosotros</h2>
                    </div>

                    <p class="lead text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic.</p>

                    <div class="mb20 mb10-xs"></div><!-- margin -->

                    <div class="row">
                        <div class="col-sm-4 count-container text-center">
                            <span class="count" data-from="0" data-to="18" data-speed="2000" data-refresh-interval="50">0</span>
                            <h4 class="count-title">Years in Business</h4>
                        </div>
                        <div class="col-sm-4 count-container text-center">
                            <span class="count" data-from="0" data-to="200" data-speed="2000" data-refresh-interval="50">0</span>
                            <h4 class="count-title">Clients and Partners</h4>
                        </div>
                        <div class="col-sm-4 count-container text-center">
                            <span class="count-prefix">$</span><span class="count" data-from="0" data-to="15" data-speed="2000" data-refresh-interval="50">0</span>
                            <h4 class="count-title">Billion Sales</h4>
                        </div>
                    </div>

                    <div class="mb35 mb20-sm mb10-xs"></div><!-- margin -->

                    <div class="title-group text-center">
                        <h2 class="title big">Our History</h2>
                        <p class="title-desc">Our Way of Success</p>
                    </div>

                    <div class="mb20 mb10-sm mb0-xs"></div>

                    <div class="history-section">
                        <div class="history-left">
                            <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions...</p>

                            <ul class="timeline-list">
                                <li class="scroll-anim" data-anim="fadeInUp">
                                    <span class="timeline-date">2001</span>
                                    <span class="timeline-dot"></span>
                                    <h3>Company formed</h3>
                                    <p>Page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncove.</p>
                                </li>

                                <li class="scroll-anim" data-anim="fadeInUp">
                                    <span class="timeline-date">2005</span>
                                    <span class="timeline-dot"></span>
                                    <h3>Suspendisse tincidunt nibh.</h3>
                                    <p>making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a</p>
                                </li>

                                <li class="scroll-anim" data-anim="fadeInUp">
                                    <span class="timeline-date">2017</span>
                                    <span class="timeline-dot"></span>
                                    <h3>Awards and 300 employees</h3>
                                    <p>Suffered alteration in some form, by injected humour, or randomised words which don't look.</p>
                                </li>
                            </ul>
                        </div>

                        <div class="history-right">
                            <img src="assets/images/about-img.jpg" alt="About image" class="img-responsive about-img">
                        </div>
                    </div>

                </div>

                <aside class="col-md-3 col-md-pull-9 sidebar sidebar-shop">

                    <div class="widget widget-banner">
                        <div class="banner banner-image">
                            <a href="#" title="Brown Woman Shoes">
                                <img src="assets/images/sample.jpg" alt ="Oferta">
                            </a>
                        </div>
                    </div>

                    <div class="widget widget-testimonial">
                        <h3 class="carousel-title">Súper Héroes</h3>
                        <div class="owl-data-carousel owl-carousel" data-owl-settings='{ "items":1, "nav": true, "dots":false, "autoplayTimeout":6500 }' data-owl-responsive='{ "0": {"items": 1}, "480": {"items": 2}, "768": {"items": 3}, "992": {"items": 1}, "1200": {"items": 1} }'>

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
                    </div>

                    <div class="widget widget-testimonial">
                        <h3 class="carousel-title">Súper Heroínas</h3>
                        <div class="owl-data-carousel owl-carousel" data-owl-settings='{ "items":1, "nav": true, "dots":false, "autoplayTimeout":6500 }' data-owl-responsive='{ "0": {"items": 1}, "480": {"items": 2}, "768": {"items": 3}, "992": {"items": 1}, "1200": {"items": 1} }'>

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
                    </div>
                </aside>
            </div>
        </div>
    </div>
@endsection()