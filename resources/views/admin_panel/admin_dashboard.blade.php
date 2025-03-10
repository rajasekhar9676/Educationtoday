@extends('layouts.app')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                    <i class="mdi mdi-home"></i>
                </span> Dashboard
            </h3>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">
                        <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                    </li>
                </ul>
            </nav>
        </div>

        <div class="row">
            @php
                $cards = [
                    ['title' => 'Weekly Sales', 'value' => '$ 15,0000', 'change' => 'Increased by 60%', 'icon' => 'mdi-chart-line', 'bg' => 'danger'],
                    ['title' => 'Weekly Orders', 'value' => '45,6334', 'change' => 'Decreased by 10%', 'icon' => 'mdi-bookmark-outline', 'bg' => 'info'],
                    ['title' => 'Visitors Online', 'value' => '95,5741', 'change' => 'Increased by 5%', 'icon' => 'mdi-diamond', 'bg' => 'success'],
                    ['title' => 'Visitors Online', 'value' => '95,5741', 'change' => 'Increased by 5%', 'icon' => 'mdi-diamond', 'bg' => '#DA8CFF'],
                ];
            @endphp

            <!-- @foreach ($cards as $card)
                <div class="col-md-4 stretch-card grid-margin">
                    <div class="card bg-gradient-{{ $card['bg'] }} card-img-holder text-white">
                        <div class="card-body">
                            <img src="{{ asset('assets/images/dashboard/circle.svg') }}" class="card-img-absolute" alt="circle-image" />
                            <h4 class="font-weight-normal mb-3">{{ $card['title'] }} <i class="mdi {{ $card['icon'] }} mdi-24px float-end"></i></h4>
                            <h2 class="mb-5">{{ $card['value'] }}</h2>
                            <h6 class="card-text">{{ $card['change'] }}</h6>
                        </div>
                    </div>
                </div>
            @endforeach -->

            @foreach ($cards as $index => $card)
    <div class="col-lg-3 col-md-6 col-sm-12 stretch-card grid-margin">
        <div class="card bg-gradient-{{ $card['bg'] }} card-img-holder text-white"
            @if ($loop->last) style="background-color: #DA8CFF !important;" @endif>
            <div class="card-body">
                <img src="{{ asset('admin/assets/images/dashboard/circle.svg') }}" class="card-img-absolute" alt="circle-image" />
                <h4 class="font-weight-normal mb-3">{{ $card['title'] }} 
                    <i class="mdi {{ $card['icon'] }} mdi-24px float-end"></i>
                </h4>
                <h2 class="mb-5">{{ $card['value'] }}</h2>
                <h6 class="card-text">{{ $card['change'] }}</h6>
            </div>
        </div>
    </div>
@endforeach

</div>

<div class="row">
            <div class="col-md-7 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="clearfix">
                            <h4 class="card-title float-start">Visit And Sales Statistics</h4>
                            <div id="visit-sale-chart-legend" class="rounded-legend legend-horizontal legend-top-right float-end"></div>
                        </div>
                        <canvas id="visit-sale-chart" class="mt-4"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-5 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Traffic Sources</h4>
                        <div class="doughnutjs-wrapper d-flex justify-content-center">
                            <canvas id="traffic-chart"></canvas>
                        </div>
                        <div id="traffic-chart-legend" class="rounded-legend legend-vertical legend-bottom-left pt-4"></div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2023 <a href="https://www.bootstrapdash.com/" target="_blank">BootstrapDash</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
        </div>
    </footer>
</div>
@endsection



