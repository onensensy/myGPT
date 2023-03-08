@extends('layouts/contentNavbarLayout')

@section('title', 'Chat')

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/apex-charts/apex-charts.css') }}">
@endsection

@section('vendor-script')
    <script src="{{ asset('assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>
@endsection

@section('page-script')
    <script src="{{ asset('assets/js/dashboards-analytics.js') }}"></script>
@endsection

@section('content')
    <div class="input-group input-group-merge speech-to-text">
          <textarea class="form-control" placeholder="Say it" rows="2"></textarea>
          <span class="input-group-text" id="basic-addon-search31"><i class="bx bx-search"></i></span>
    </div>
    <div class="divider divider-dark">
          <div class="divider-text">Next</div>
    </div>
    <div class="col-md-12 col-sm-10">
        <div class="card-body">
            <p class="card-text color-red">
                This is some text within a card body.
                Jelly lemon drops tiramisu chocolate cake cotton candy soufflé oat cake sweet roll. Sugar plum marzipan
                dragée
                topping cheesecake chocolate bar. Danish muffin icing donut.
            </p>
        </div>
    </div>
    <div class="card overflow-hidden mb-4" style="height: auto;">
        {{-- <h5 class="card-header">Vertical Scrollbar</h5>  --}}
        <div class="card-body ps ps--active-y" id="vertical-example">
            <p>
                Sweet roll I love I love. Tiramisu I love soufflé cake tart sweet roll
                cotton candy cookie. Macaroon biscuit dessert. Bonbon cake soufflé
                jelly gummi bears lemon drops. Chocolate bar I love macaroon danish
                candy pudding. Jelly carrot cake I love tart cake bear claw macaroon
                candy candy canes. Muffin gingerbread sweet jujubes croissant sweet
                roll. Topping muffin carrot cake sweet. Toffee chocolate muffin I love
                croissant. Donut carrot cake ice cream ice cream. Wafer I love pie
                danish marshmallow cheesecake oat cake pie I love. Icing pie chocolate
                marzipan jelly ice cream cake.
            </p>

            <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
            </div>
            <div class="ps__rail-y" style="top: 0px; height: 232px; right: 0px;">
                <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 35px;"></div>
            </div>
        </div>
    </div>
    <div class="divider divider-dark">
          <div class="divider-text">Next</div>
        </div>
    <div class="col-md-12 col-sm-10">
        <div class="card-body">
            <p class="card-text color-red">
                This is some text within a card body.
                Jelly lemon drops tiramisu chocolate cake cotton candy soufflé oat cake sweet roll. Sugar plum marzipan
                dragée
                topping cheesecake chocolate bar. Danish muffin icing donut.
            </p>
        </div>
    </div>
    <div class="card overflow-hidden mb-4" style="height: auto;">
        {{-- <h5 class="card-header">Vertical Scrollbar</h5> --}}
        <div class="card-body ps ps--active-y" id="vertical-example">
            <p>
                Sweet roll I love I love. Tiramisu I love soufflé cake tart sweet roll
                cotton candy cookie. Macaroon biscuit dessert. Bonbon cake soufflé
                jelly gummi bears lemon drops. Chocolate bar I love macaroon danish
                candy pudding. Jelly carrot cake I love tart cake bear claw macaroon
                candy candy canes. Muffin gingerbread sweet jujubes croissant sweet
                roll. Topping muffin carrot cake sweet. Toffee chocolate muffin I love
                croissant. Donut carrot cake ice cream ice cream. Wafer I love pie
                danish marshmallow cheesecake oat cake pie I love. Icing pie chocolate
                marzipan jelly ice cream cake.
            </p>

            <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
            </div>
            <div class="ps__rail-y" style="top: 0px; height: 232px; right: 0px;">
                <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 35px;"></div>
            </div>
        </div>
    </div>
    <div class="divider divider-dark">
          <div class="divider-text">Next</div>
        </div>
    <div class="col-md-12 col-sm-10">
        <div class="card-body">
            <p class="card-text color-red">
                This is some text within a card body.
                Jelly lemon drops tiramisu chocolate cake cotton candy soufflé oat cake sweet roll. Sugar plum marzipan
                dragée
                topping cheesecake chocolate bar. Danish muffin icing donut.
            </p>
        </div>
    </div>
    <div class="card overflow-hidden mb-4" style="height: auto;">
        {{-- <h5 class="card-header">Vertical Scrollbar</h5> --}}
        <div class="card-body ps ps--active-y" id="vertical-example">
            <p>
                Sweet roll I love I love. Tiramisu I love soufflé cake tart sweet roll
                cotton candy cookie. Macaroon biscuit dessert. Bonbon cake soufflé
                jelly gummi bears lemon drops. Chocolate bar I love macaroon danish
                candy pudding. Jelly carrot cake I love tart cake bear claw macaroon
                candy candy canes. Muffin gingerbread sweet jujubes croissant sweet
                roll. Topping muffin carrot cake sweet. Toffee chocolate muffin I love
                croissant. Donut carrot cake ice cream ice cream. Wafer I love pie
                danish marshmallow cheesecake oat cake pie I love. Icing pie chocolate
                marzipan jelly ice cream cake.
            </p>

            <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
            </div>
            <div class="ps__rail-y" style="top: 0px; height: 232px; right: 0px;">
                <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 35px;"></div>
            </div>
        </div>
    </div>
    
@endsection
