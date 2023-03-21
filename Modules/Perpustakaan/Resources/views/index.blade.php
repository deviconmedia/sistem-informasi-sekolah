@extends('layouts.backend.app')

@section('title')
    Dashboard
@endsection

@section('content')

    <div class="content-body">
         <!-- START PAGE CONTENT-->
         <div class="page-content fade-in-up">
            <div class="alert alert-secondary"><h5 class="font-weight-bold">Selamat datang, {{ Auth()->user()->name }}</h5></div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="ibox bg-success color-white widget-stat">
                        <div class="ibox-body">
                            <h2 class="m-b-5 font-strong">201</h2>
                            <div class="m-b-5">Total Buku</div><i class="ti-shopping-cart widget-stat-icon"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="ibox bg-info color-white widget-stat">
                        <div class="ibox-body">
                            <h2 class="m-b-5 font-strong">1250</h2>
                            <div class="m-b-5">Kategori</div><i class="ti-bar-chart widget-stat-icon"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="ibox bg-warning color-white widget-stat">
                        <div class="ibox-body">
                            <h2 class="m-b-5 font-strong">$1570</h2>
                            <div class="m-b-5">TOTAL INCOME</div><i class="fa fa-money widget-stat-icon"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="ibox bg-danger color-white widget-stat">
                        <div class="ibox-body">
                            <h2 class="m-b-5 font-strong">108</h2>
                            <div class="m-b-5">Peminjam</div><i class="ti-user widget-stat-icon"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END PAGE CONTENT-->
    </div>
@endsection