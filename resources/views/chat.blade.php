<!-- Loopple Templates: https://www.loopple.com/templates | Copyright Loopple (https://www.loopple.com) | This copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
@extends('layouts/contentNavbarLayout')

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Chat Page Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <link rel="stylesheet"
        href="https://rawcdn.githack.com/Loopple/loopple-public-assets/ad60f16c8a16d1dcad75e176c00d7f9e69320cd4/argon-dashboard/css/nucleo/css/nucleo.css">
    <link rel="stylesheet" href="./assets/css/theme.css">
    <link rel="stylesheet" href="./assets/css/loopple/loopple.css">
</head>

<body>
    @section('content')
        {{-- @if (isset($navbarFull))
            <div style="position: fixed; bottom:0">
            @else
                <div style="position: fixed; bottom:0; right:0; left:256;">
        @endif --}}

        <div class="mx-auto outline-none px-0 pb-4 flex-row" style="position: fixed; bottom:0; width: calc(100% - 256px);">

            <div class="card max-height-vh-80" style="max-height: 80vh; width:100%">
                <div class="card-body overflow-auto overflow-x-hidden">
                    <div class="row justify-content-start mb-4">
                        <div class="col-auto">
                            <div class="card ">
                                <div class="card-body p-2">
                                    <p class="mb-1">
                                        It contains a lot of good lessons about effective
                                        practices
                                    </p>
                                    <div class="d-flex align-items-center text-sm opacity-6">
                                        <i class="far fa-clock mr-1" aria-hidden="true"></i>
                                        <small>3:14am</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-end text-right mb-4">
                        <div class="col-auto">
                            <div class="card bg-gradient-primary text-white">
                                <div class="card-body p-2">
                                    <p class="mb-1">
                                        Can it generate daily design links that include
                                        essays and data visualizations ?<br>
                                    </p>
                                    <div class="d-flex align-items-center justify-content-end text-sm opacity-6">
                                        <i class="fa fa-check-double mr-1 text-xs" aria-hidden="true"></i>
                                        <small>4:42pm</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-12 text-center">
                            <span class="badge text-dark">Wed, 3:27pm</span>
                        </div>
                    </div>
                    <div class="row justify-content-start mb-4">
                        <div class="col-auto">
                            <div class="card ">
                                <div class="card-body p-2">
                                    <p class="mb-1">
                                        Yeah! Responsive Design is geared towards those
                                        trying to build web apps
                                    </p>
                                    <div class="d-flex align-items-center text-sm opacity-6">
                                        <i class="far fa-clock mr-1" aria-hidden="true"></i>
                                        <small>4:31pm</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-end text-right mb-4">
                        <div class="col-auto">
                            <div class="card bg-gradient-primary text-white">
                                <div class="card-body p-2">
                                    <p class="mb-1">
                                        Excellent, I want it now !
                                    </p>
                                    <div class="d-flex align-items-center justify-content-end text-sm opacity-6">
                                        <i class="fa fa-check-double mr-1 text-xs" aria-hidden="true"></i>
                                        <small>4:42pm</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-start mb-4">
                        <div class="col-auto">
                            <div class="card ">
                                <div class="card-body p-2">
                                    <p class="mb-1">
                                        You can easily get it; The content here is all free
                                    </p>
                                    <div class="d-flex align-items-center text-sm opacity-6">
                                        <i class="far fa-clock mr-1" aria-hidden="true"></i>
                                        <small>4:42pm</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-end text-right mb-4">
                        <div class="col-auto">
                            <div class="card bg-gradient-primary text-white">
                                <div class="card-body p-2">
                                    <p class="mb-1">
                                        Awesome, blog is important source material for
                                        anyone who creates apps? <br>
                                        Beacuse these blogs offer a lot of information about
                                        website development.
                                    </p>
                                    <div class="d-flex align-items-center justify-content-end text-sm opacity-6">
                                        <i class="fa fa-check-double mr-1 text-xs" aria-hidden="true"></i>
                                        <small>4:42pm</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-start mb-4">
                        <div class="col-5">
                            <div class="card ">
                                <div class="card-body p-2">
                                    <div class="col-12 p-0">
                                        <img src="https://images.unsplash.com/photo-1585565804112-f201f68c48b4?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=800&amp;q=80"
                                            alt="Rounded image" class="img-fluid mb-2 rounded-lg">
                                    </div>
                                    <div class="d-flex align-items-center text-sm opacity-6">
                                        <i class="far fa-clock mr-1" aria-hidden="true"></i>
                                        <small>4:47pm</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-end text-right mb-4">
                        <div class="col-auto">
                            <div class="card bg-gradient-primary text-white">
                                <div class="card-body p-2">
                                    <p class="mb-0">
                                        At the end of the day … the native dev apps is where
                                        users are
                                    </p>
                                    <div class="d-flex align-items-center justify-content-end text-sm opacity-6">
                                        <i class="fa fa-check-double mr-1 text-xs" aria-hidden="true"></i>
                                        <small>4:42pm</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-start">
                        <div class="col-auto">
                            <div class="card ">
                                <div class="card-body p-2">
                                    <p class="mb-0 text-sm">
                                        Charlie is Typing...
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer d-block ">
                    <form class="align-items-center">
                        <div class="input-group mb-3">
                            <input type="text" placeholder="Search" class="form-control"
                                aria-label="Amount (to the nearest dollar)">
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <i class="fa fa-paper-plane"></i>
                                </span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
        <div class="card shadow-none px-0 bg-transparent mt-0 mb-4">
            <div class="card-body px-0 pb-0">
                <div class="px-0 pb-4">
                    <div class="row flex-row">
                        {{-- <div class="col-lg-3 mb-4">
                            <div class="card max-height-vh-70 h-100 overflow-auto overflow-x-hidden mb-5 mb-lg-0"
                                style="max-height: 70vh;">

                                <div class="card-body p-2">
                                    <a href="javascript:;" class="d-block p-2 rounded-lg bg-gradient-primary">
                                        <div class="d-flex p-2">
                                            <img alt="Image"
                                                src="https://images.unsplash.com/photo-1529068755536-a5ade0dcb4e8?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxzZWFyY2h8MzV8fHBvcnRyYWl0fGVufDB8MnwwfHw%3D&amp;auto=format&amp;fit=crop&amp;w=800&amp;q=60"
                                                class="avatar shadow">
                                            <div class="ml-2">
                                                <div class="justify-content-between align-items-center">
                                                    <h4 class="text-white mb-0 mt-1">Andrew Jahna<span
                                                            class="badge badge-success"></span>
                                                    </h4>
                                                    <p class="text-white mb-0 text-xs font-weight-normal">
                                                        Job: Senior Java Developer</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="javascript:;" class="d-block p-2">
                                        <div class="d-flex p-2">
                                            <img alt="Image"
                                                src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8cG9ydHJhaXR8ZW58MHwyfDB8fA%3D%3D&amp;auto=format&amp;fit=crop&amp;w=800&amp;q=60"
                                                class="avatar">
                                            <div class="ml-2">
                                                <div class="justify-content-between align-items-center">
                                                    <h4 class="mb-0 mt-1">Charlie Watson
                                                        <span class="badge badge-success"></span>
                                                    </h4>
                                                    <p class="mb-0 text-xs font-weight-normal text-muted">
                                                        Job: Senior UX Designer</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div> --}}
                    </div>

                </div>
            </div>
        </div>
        </div>

        <script
            src="https://rawcdn.githack.com/Loopple/loopple-public-assets/5cef8f62939eeb089fa26d4c53a49198de421e3d/argon-dashboard/js/vendor/jquery.min.js">
        </script>
        <script
            src="https://rawcdn.githack.com/Loopple/loopple-public-assets/5cef8f62939eeb089fa26d4c53a49198de421e3d/argon-dashboard/js/vendor/bootstrap.bundle.min.js">
        </script>
        <script
            src="https://rawcdn.githack.com/Loopple/loopple-public-assets/5cef8f62939eeb089fa26d4c53a49198de421e3d/argon-dashboard/js/vendor/js.cookie.js">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
        <script
            src="https://rawcdn.githack.com/Loopple/loopple-public-assets/5cef8f62939eeb089fa26d4c53a49198de421e3d/argon-dashboard/js/vendor/chart.extension.js">
        </script>
        <script
            src="https://rawcdn.githack.com/Loopple/loopple-public-assets/7bb803d2af2ab6d71d429b0cb459c24a4cd0fbb4/argon-dashboard/js/argon.min.js">
        </script>
    @endsection

</body>
