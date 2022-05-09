@extends("layout.sisdpta")
@section("conteudo")

<div class="row">
    <div class="col-md-6 col-xl-3">
        <div class="card widget-card-1">
            <div class="card-block-small">
                <a class="" href="">
                <i class="icofont icofont-pie-chart bg-c-blue card1-icon"></i>
                <span class="text-c-blue f-w-600">Estatistica</span>
                <h4>25</h4>
                </a>
                <div>
                    <span class="f-left m-t-10 text-muted">
                        <i class="text-c-blue f-16 icofont icofont-warning m-r-10"></i>Hoje (<?php echo date('d-m-Y') ;?>)
                    </span>
                </div>
            </div>
        </div>
    </div>
    <!-- card1 end -->

    <!-- card1 start -->
    <div class="col-md-6 col-xl-3">
        <div class="card widget-card-1">
            <div class="card-block-small">
                <a class="" href="">
                <i class="icofont icofont-chart-line bg-c-pink card1-icon"></i>
                <span class="text-c-pink f-w-600">Estatistica</span>
                <h4>2589</h4>
                </a>
                <div>
                    <span class="f-left m-t-10 text-muted">
                        <i class="text-c-pink f-16 icofont icofont-calendar m-r-10"></i>Este mes (<?php echo date('M') ;?>)
                    </span>
                </div>
            </div>
        </div>
    </div>
    <!-- card1 end -->

    <!-- card1 start -->
    <div class="col-md-6 col-xl-3">
        <div class="card widget-card-1">
            <div class="card-block-small">
                 <a class="" href="">
                <i class="icofont icofont-chart-bar-graph bg-c-green card1-icon"></i>
                <span class="text-c-green f-w-600">Estatistica</span>
                <h4>258</h4>
                 </a>
                <div>
                    <span class="f-left m-t-10 text-muted">
                        <i class="text-c-green f-16 icofont icofont-tag m-r-10"></i> Este ano (<?php echo date('Y') ;?>)
                    </span>
                </div>
            </div>
        </div>
    </div>
    <!-- card1 end -->

    <!-- card1 start -->
    <div class="col-md-6 col-xl-3">
        <div class="card widget-card-1">
            <div class="card-block-small">
                 <a class="" href="">
                <i class="icofont icofont-chart-line-alt bg-c-yellow card1-icon"></i>
                <span class="text-c-yellow f-w-600">Estatistica</span>
                <h4>54841</h4>
                 </a>
                <div>
                    <span class="f-left m-t-10 text-muted">
                        <i class="text-c-yellow f-16 icofont icofont-refresh m-r-10"></i>Pendentes (<?php echo date('Y')-'1' ;?>)
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection