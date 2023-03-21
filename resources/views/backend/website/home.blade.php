@extends('layouts.backend.app')

@section('title')
    Dashboard
@endsection

@section('content')
    <div class="content-body">
        <!-- START PAGE CONTENT-->
        <div class="page-content fade-in-up">
            <div class="alert alert-secondary">
                <h5>Selamat datang, {{ Auth()->user()->name }}</h5>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="ibox bg-success color-white widget-stat">
                        <div class="ibox-body">
                            <h2 class="m-b-5 font-strong">201</h2>
                            <div class="m-b-5">SISWA</div><i class="ti-shopping-cart widget-stat-icon"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="ibox bg-info color-white widget-stat">
                        <div class="ibox-body">
                            <h2 class="m-b-5 font-strong">1250</h2>
                            <div class="m-b-5">STAFF</div><i class="ti-bar-chart widget-stat-icon"></i>
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
                            <div class="m-b-5">NEW USERS</div><i class="ti-user widget-stat-icon"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="ibox">
                        <div class="ibox-body">
                            <div class="flexbox mb-4">
                                <div>
                                    <h3 class="m-0">Statistics</h3>
                                    <div>Your shop sales analytics</div>
                                </div>
                                <div class="d-inline-flex">
                                    <div class="px-3" style="border-right: 1px solid rgba(0,0,0,.1);">
                                        <div class="text-muted">WEEKLY INCOME</div>
                                        <div>
                                            <span class="h2 m-0">$850</span>
                                            <span class="text-success ml-2"><i class="fa fa-level-up"></i> +25%</span>
                                        </div>
                                    </div>
                                    <div class="px-3">
                                        <div class="text-muted">WEEKLY SALES</div>
                                        <div>
                                            <span class="h2 m-0">240</span>
                                            <span class="text-warning ml-2"><i class="fa fa-level-down"></i> -12%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <canvas id="bar_chart" style="height:260px;"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ibox">
                        <div class="ibox-head">
                            <div class="ibox-title">Events</div>
                        </div>
                        <div class="ibox-body">
                           {{-- Update on 21/03/2023 by : Iconmedia Team --}}
                        </div>
                    </div>
                </div>
            </div>
            <style>
                .visitors-table tbody tr td:last-child {
                    display: flex;
                    align-items: center;
                }

                .visitors-table .progress {
                    flex: 1;
                }

                .visitors-table .progress-parcent {
                    text-align: right;
                    margin-left: 10px;
                }
            </style>
        </div>
        <!-- END PAGE CONTENT-->
    </div>
@endsection