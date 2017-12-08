@extends('principal/indexparent');

@section('title','producto - Kuper');
@section('content')
<div class="main2">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-md-push-3">
                <div class="content">
                    <div class="breads hidden-xs">
                        <ol class="breadcrumb">
                            <li>
                                <a href="index.html"><i class="i-home"></i> Inicio</a>
                            </li>
                            <li>
                                <a href="index.html">Hombres</a>
                            </li>
                            <li>
                                <a href="index.html">Polos</a>
                            </li>
                            <li class="active">
                                Polo Batman: The Dark Knight Returns
                            </li>
                        </ol>
                    </div>
                    <div class="mb25 mb0-xs"></div>
                    <div class="row">
                        <div class="product-gallery-container">
                            <div class="product-zoom-wrapper">
                                <div class="product-zoom-container">
                                    <img class="xzoom" id="product-zoom" src="assets/images/products/single/product1.jpg" data-xoriginal="assets/images/products/single/big/product1.jpg" alt="Zoom image"/>
                                </div>
                            </div>

                            <div class="product-gallery-wrapper">
                                <div class="owl-data-carousel owl-carousel product-gallery"	data-owl-settings='{ "items":4, "margin":14, "nav": true, "dots":false }' data-owl-responsive='{"240": {"items": 2}, "360": {"items": 3}, "768": {"items": 4}, "992": {"items": 3}, "1200": {"items": 4} }'>

                                    <a href="#" data-image="assets/images/products/single/product1.jpg" data-zoom-image="assets/images/products/single/big/product1.jpg" class="product-gallery-item">
                                        <img src="assets/images/products/single/thumbs/product1.jpg" alt="product-small-1">
                                    </a>
                                    <a href="#" data-image="assets/images/products/single/product2.jpg" data-zoom-image="assets/images/products/single/big/product2.jpg" class="product-gallery-item">
                                        <img src="assets/images/products/single/thumbs/product2.jpg" alt="product-small-2">
                                    </a>
                                    <a href="#" data-image="assets/images/products/single/product3.jpg" data-zoom-image="assets/images/products/single/big/product3.jpg" class="product-gallery-item">
                                        <img src="assets/images/products/single/thumbs/product3.jpg" alt="product-small-3">
                                    </a>
                                    <a href="#" data-image="assets/images/products/single/product4.jpg" data-zoom-image="assets/images/products/single/big/product4.jpg" class="product-gallery-item">
                                        <img src="assets/images/products/single/thumbs/product4.jpg" alt="product-small-4">
                                    </a>
                                    <a href="#" data-image="assets/images/products/single/product5.jpg" data-zoom-image="assets/images/products/single/big/product5.jpg" class="product-gallery-item">
                                        <img src="assets/images/products/single/thumbs/product5.jpg" alt="product-small-5">
                                    </a>
                                    <a href="#" data-image="assets/images/products/single/product6.jpg" data-zoom-image="assets/images/products/single/big/product6.jpg" class="product-gallery-item">
                                        <img src="assets/images/products/single/thumbs/product6.jpg" alt="product-small-6">
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="product-details">
                            <div class="share-product">
                                <ul>
                                    <li>Compartir: </li>
                                    <li><a class="i-facebook1 popup" href="http://www.facebook.com/sharer.php?u=http://www.kuper.pe/hombres/polos/batman-the-dark-knight-returns"></a></li>
                                    <li><a class="i-twitter1 popup" href="http://twitter.com/home?status=X+Cumbre+Pyme+2017%20http%3A%2F%2Fcumbrepyme.org%2F%20@comexperu%20%23cumbrepyme2017%20%23comexperu" target="_blank" ></a></li>
                                    <!-- li><a href="#" class="i-instagram2"></a></li -->
                                    <li class="hidden-md hidden-lg"><a href="#" class="i-whatsapp2"></a></li>

                                </ul>
                            </div>

                            <h2 class="product-title">Polo Batman The Dark Knight Returns</h2>

                            <div class="product-meta-row">
                                <div class="product-price-container">
                                    <span class="product-price">S/ 45.00</span>
                                </div>

                                <div class="product-ratings-wrapper">
                                    <span class="product-price">antes: <span class="text-lineth">S/ 55.00</span></span>
                                </div>
                            </div>
                            <div class="product-content">
                                <p>Polo de diseño clásico en mangas cortas 100% algodón (Pima) reactivo, no se destiñe ni encoge, y estampado de tacto cero (Dischargue).</p>
                            </div>
                            <ul class="product-meta-list">
                                <li>
                                    <label>Disponible</label>
                                    <span class="red">(2 unidades en la talla seleccionada)</span>
                                </li>
                            </ul>
                            <!-- ul class="product-meta-list">
                                <li><label class="product-no-stock">No Disponible</label></li>
                            </ul -->

                            <label>Talla:</label>
                            <ul class="filter-size-list">
                                <li class="active">
                                    <span class="filter-size">S</span>
                                </li>
                                <li>
                                    <span class="filter-size">M</span>
                                </li>
                                <li>
                                    <span class="filter-size">L</span>
                                </li>
                                <li>
                                    <span class="filter-size">XL</span>
                                </li>
                            </ul>
                            <div class="guide"><a href="#" data-toggle="modal" data-target="#sguide"><i class="i-eye"></i> Guía de tallas</a></div>

                            <div class="product-action">
                                <div class="product-quantity">
                                    <label>Cantidad:</label>
                                    <input class="single-product-quantity form-control" type="text">
                                </div>

                                <button type="button" class="btn btn-primary btn-addtobag">Agregar a la bolsa</button>
                            </div>
                        </div>
                    </div>

                    <div class="product-details-tab">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <!-- li role="presentation"><a href="#description" aria-controls="description" role="tab" data-toggle="tab">Descripción</a></li -->
                            <li role="presentation" class="active"><a href="#information" aria-controls="information" role="tab" data-toggle="tab">Especificaciones</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <!-- div role="tabpanel" class="tab-pane" id="description">
                                <p>Polo de diseño clásico en mangas cortas 100% algodón (Pima) reactivo, no se destiñe ni encoge, y estampado de tacto cero (Dischargue).</p>
                            </div -->

                            <div role="tabpanel" class="tab-pane active" id="information">
                                <div class="table-responsive">
                                    <table class="table product-info-table">
                                        <tbody>
                                        <tr>
                                            <td>Código:</td>
                                            <td>KPB00001</td>
                                        </tr>
                                        <tr>
                                            <td>Tipo:</td>
                                            <td>Polo</td>
                                        </tr>
                                        <tr>
                                            <td>Mangas:</td>
                                            <td>Cortas</td>
                                        </tr>
                                        <tr>
                                            <td>Material:</td>
                                            <td>Algodón Pima</td>
                                        </tr>
                                        <tr>
                                            <td>Estampado:</td>
                                            <td>Dischargue</td>
                                        </tr>
                                        <tr>
                                            <td>Color:</td>
                                            <td>Gris oscuro</td>
                                        </tr>
                                        <tr>
                                            <td>Género:</td>
                                            <td>Hombre</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div><!-- End .table-responsive -->
                            </div><!-- End .tab-pane -->


                        </div>
                    </div><!-- End .product-details-tab -->

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
    </div><!-- End .container -->
</div>
@endsection()