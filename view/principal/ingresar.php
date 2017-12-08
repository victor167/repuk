@extends('principal/indexparent');

@section('title','Inicio - Kuper');
@section('content')
<div class="main2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="content">
                    <div class="breads hidden-xs">
                        <ol class="breadcrumb">
                            <li>
                                <a href="index.html"><i class="i-home"></i> Inicio</a>
                            </li>
                            <li class="active">
                                Ingresar
                            </li>

                        </ol>
                    </div>

                    <div class="page-header text-center">
                        <h2>Bienvenido a Kuper</h2>
                        <p>Realiza tu compra con cualquiera de estás opciones.</p>
                        <p>* Estos campos son obligatorios</p>
                    </div>
                </div>

                <div class="mb35-sm"></div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="iblok">
                            <div class="page-header text-center">
                                <h3>Cliente habitual</h3>
                                <p>Para poder comenzar a comprar por favor ingrese a su cuenta utilizando su correo electrónico y contraseña.</p>
                            </div>

                            <form action="#" class="signin-form">
                                <div class="form-group">
                                    <label>Correo electrónico *</label>
                                    <input type="email" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label>Contraseña *</label>
                                    <input type="password" class="form-control" required>
                                </div>

                                <div class="clearfix form-more">
                                    <div class="checkbox pull-left">
                                        <label>
                                            <input type="checkbox" name="remember">
                                            <span class="checkbox-box"><span class="check"></span></span>
                                            Recordarme
                                        </label>
                                    </div>
                                    <a href="#" class="help-link">¿Olvidó su contraseña?</a>
                                </div>

                                <div class="clearfix form-action">
                                    <input type="submit" class="btn btn-primary min-width" value="INGRESAR">
                                </div>
                            </form>
                            <img src="assets/images/bazinga.jpg" />
                            <div></div>
                        </div>

                    </div>

                    <div class="col-md-6">
                        <div class="iblok">
                            <div class="page-header text-center">
                                <h3>Cliente nuevo</h3>
                                <p>Ingresa tu correo para crear una cuenta.</p>
                            </div>

                            <form action="#" class="signin-form">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Correo Electrónico *</label>
                                            <input type="email" class="form-control" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="clearfix form-action">
                                    <input type="submit" class="btn btn-primary min-width" value="REGISTRARME">
                                </div>
                            </form>
                        </div>

                        <div class="iblok">
                            <div class="page-header text-center">
                                <h3>Invitado</h3>
                                <p>Ingrese como invitado para continuar su compra. Sólo le pediremos algunos datos para el envío.</p>
                            </div>

                            <form action="#" class="signin-form">
                                <div class="clearfix form-action">
                                    <input type="submit" class="btn btn-primary min-width" value="CONTINUAR">
                                </div>
                            </form>
                        </div>


                        <div class="row visible-sm visible-xs">
                            <div class="col-md-12 mb25-sm mb25-xs">
                                * Estos campos son obligatorios
                            </div>
                        </div>
                    </div>
                </div>

            </div>


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
    </div>
</div>
@endsection()