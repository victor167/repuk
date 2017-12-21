<?php
/**
 * Created by PhpStorm.
 * User: victor167
 * Date: 19/11/2017
 * Time: 6:40 PM
 */

namespace controllers;

class PrincipalController
{
    public function index(){
        return view('principal/index')
            ->get();
    }

    public function about(){
        return view('principal/about')
            ->get();
    }

    public function login(){
        return view('principal/login')
            ->get();
    }

    public function register(){
        return view('principal/register')
            ->get();
    }

    public function changePassword(){
        return view('principal/changePassword')
            ->get();
    }

    public function restorePassword(){
        return view('principal/restorePassword')
            ->get();
    }

    public function profile(){
        return view('principal/profile')
            ->get();
    }

    public function politics(){
        return view('principal/politics')
            ->get();
    }

    public function changeEmail(){
        return view('principal/changeEmail')
            ->get();
    }

    public function contact(){
        return view('principal/contact')
            ->get();
    }

    public function paymentMethods(){
        return view('principal/paymentMethods')
            ->get();
    }

    public function product(){
        return view('principal/product')
            ->get();
    }

    public function cart(){
        return view('principal/cart')
            ->get();
    }

    public function error404(){
        return view('principal/error404')
            ->get();
    }
}