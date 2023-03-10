@extends('layouts/contentNavbarLayout')

@section('title', 'Chat')

@section('optionButton')
    <select class="form-select btn-outline-secondary" name="option" id="exampleFormControlSelect1"
        aria-label="Select Your code platform/Language">
        @if (isset($option))
            <option value="General" {{ $option == 'General' ? 'selected' : '' }}>General</option>
            <option value="Laravel" {{ $option == 'Laravel' ? 'selected' : '' }}>Laravel</option>
            <option value="SQL" {{ $option == 'SQL' ? 'selected' : '' }}>SQL</option>
            <option value="Django" {{ $option == 'Django' ? 'selected' : '' }}>Django</option>
        @else
            <option value="General">General</option>
            <option value="Laravel">Laravel</option>
            <option value="SQL">SQL</option>
            <option value="Django">Django</option>
        @endif

    </select>
@endsection

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

    {{-- <form action="/chat" method="post">
        @csrf
        <div class="input-group input-group-merge speech-to-text">
            <textarea class="form-control" name="prompt" placeholder="Whats the prompt..." rows="3"></textarea>
            <button type="submit" class="input-group-text" id="submit"><i class="bx bx-search"></i></button>
        </div>
    </form> --}}
    @isset($prompt)
        <div class="divider divider-dark">
            <div class="divider-text">Response</div>
        </div>
        <div class="col-md-12 col-sm-10">
            <div class="card-body">
                <p class="card-text color-red">
                    {{ $prompt }}
                </p>
            </div>
        </div>
        <div class="card mb-9 h-full w-full outline-none" style="height: min-content;">
            <div class="card-body" id="vertical-example" style="height: min-content;">
                <textarea class="card-text h-full w-full outline-none" spellcheck="false" style="height: 400px;">{{ $content }}
                </textarea>
                <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                    <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                </div>
                <div class="ps__rail-y" style="top: 0px; height: 232px; right: 0px;">
                    <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 35px;"></div>
                </div>
            </div>
        </div>
    @endisset



@endsection
