@extends('layouts.app')

@section('title')
Product Detail Page
@endsection

@section('content')
<!-- Page Content -->
<div class="page-content-produk page-produk">

    <section class="store-trend-categories mt-0">
        <div class="row head-page">
            <div class="col-lg-3">
                <div class="produk-title text-center">PRODUK DETAIL</div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 justify-content-between produk-card-content">
                    <div class="col-lg-4">
                        <div class="card rounded rounded-3 mt-4 produk-card">
                            <div class="card-body text-center">
                                NEON BOX
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 d-flex">
                    <div class="col-lg-4 col-md-4 detail-text">
                        <div class="spesification-title">
                            <h3 class="ml-3 mt-4">Spesifikasi</h3>
                        </div>
                        <div class="ml-1 mt-4 spesification-content">
                            <li>MMT Korea 440</li>
                            <li>Plat Galfalum Antikarat 0,5</li>
                            <li>Hollow 3x3 tebal 1,2" cat meiji black</li>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 spesification-image">
                        <img src="/images/neon.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection