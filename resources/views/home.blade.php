@extends('layouts.home.app')

@section('title', 'Lapor - Home')

@section('content')
<div class="section section-hero section-shaped">
    <div class="shape shape-style-3 shape-default">
        <span class="span-150"></span>
        <span class="span-50"></span>
        <span class="span-50"></span>
        <span class="span-75"></span>
        <span class="span-100"></span>
        <span class="span-75"></span>
        <span class="span-50"></span>
        <span class="span-100"></span>
        <span class="span-50"></span>
        <span class="span-100"></span>
    </div>
    <div class="page-header">
        <div class="container shape-container d-flex align-items-center py-lg">
            <div class="col px-0">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-12 text-center">
                        <h1 class="text-white display-1">Layanan Pengaduan Online Rakyat</h1>
                        <h2 class="display-4 font-weight-normal text-white">Sampaikan laporan Anda langsung kepada instansi pemerintah desa berwenang</h2>
                        <div class="btn-wrapper mt-4">
                            @if (is_null(Auth::user()))
                                <a href="/user/login" class="btn btn-warning btn-icon mt-3 mb-sm-0">
                                <span class="btn-inner--icon"><i class="ni ni-button-play"></i></span>
                                <span class="btn-inner--text">Lapor!</span>
                                </a>
                            @else
                                <a href="/user/keluhan/create" class="btn btn-warning btn-icon mt-3 mb-sm-0">
                                <span class="btn-inner--icon"><i class="ni ni-button-play"></i></span>
                                <span class="btn-inner--text">Lapor!</span>
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
            <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
        </svg>
    </div>
</div>
<div class="section features-6">
    <div class="container">    
    </div>
</div>
<br><br><br><br><br><br>
@endsection