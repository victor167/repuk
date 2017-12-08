@extends('principal/indexparent');

@section('title','Registro - Kuper');
@section('content')
<div class="main2">
    <div class="container">
        <div class="content">
            <div class="breads hidden-xs">
                <ol class="breadcrumb">
                    <li>
                        <a href="index.html"><i class="i-home"></i> Inicio</a>
                    </li>
                    <li>
                        Ingresar
                    </li>
                    <li class="active">
                        Registro de cliente
                    </li>
                </ol>
            </div>

            <div class="page-header text-center">
                <h2>Cliente Nuevo</h2>
                <p>Si no esta registrado puede hacerlo fácil y rápido a través de nuestro formulario de registro.</p>
                <p>* Estos campos son obligatorios</p>
            </div>

            <div>
                <form action="#">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>Nombre *</label>
                                <input type="text" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>Apellido Paterno *</label>
                                <input type="text" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>Apellido Materno *</label>
                                <input type="text" class="form-control" required>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>DNI *</label>
                                <input type="text" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>Género *</label>
                                <select class="form-control custom-select">
                                    <option value="unspecified">Seleccionar</option>
                                    <option value="male">Masculino</option>
                                    <option value="female">Femenino</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>Fecha de nacimiento *</label>
                                <div class="input-group date">
                                    <input type="text" class="form-control">
                                    <span class="input-group-addon">
														<i class="i-calendar"></i>
													</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>Celular *</label>
                                <input type="text" class="form-control" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>Correo electrónico *</label>
                                <input type="password" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>Contraseña *</label>
                                <input type="password" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>Repetir contraseña *</label>
                                <input type="password" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-more2">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="subscribe">
                                        <span class="checkbox-box"><span class="check"></span></span>
                                        Suscribirme a las últimas novedades
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-more2">
                                Al hacer click en Registrarme aceptas los <a href="https://kuper.pe/terminos-y-condiciones" class="terms" target="_blank">Términos y condiciones</a>.
                            </div>

                            <div class="form-more2">
                                <a href="#" class="terms" target="_blank"><i class="i-left"></i> Volver</a>
                            </div>
                        </div>
                    </div>

                    <div class="clearfix form-action">
                        <input type="submit" class="btn btn-primary min-width" value="REGISTRARME">
                    </div>
                </form>
            </div>
        </div>

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
@endsection()