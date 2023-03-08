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
    <form action="/chat" method="post">
        @csrf
        <div class="input-group input-group-merge speech-to-text">
            <textarea class="form-control" name="prompt" placeholder="Whats the prompt..." rows="3"></textarea>
            <button type="submit" class="input-group-text" id="submit"><i class="bx bx-search"></i></button>
        </div>
    </form>
    @isset($prompt)
        <div class="divider divider-dark">
            <div class="divider-text">Next</div>
        </div>
        <div class="col-md-12 col-sm-10">
            <div class="card-body">
                <p class="card-text color-red">
                    {{ $prompt }}
                </p>
            </div>
        </div>
        <div class="card overflow-hidden mb-4" style="height: auto;">
            {{-- <h5 class="card-header">Vertical Scrollbar</h5>  --}}
            <div class="card-body ps ps--active-y" id="vertical-example">
                <p>
                    {{ $content }}
                </p>

                <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                    <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                </div>
                <div class="ps__rail-y" style="top: 0px; height: 232px; right: 0px;">
                    <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 35px;"></div>
                </div>
            </div>
        </div>
    @endisset

    {{--  --}}

@endsection
