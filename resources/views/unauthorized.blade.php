<body class="antialiased">
    <div class="">
        <div class="">
            @extends('layouts/blankLayout')

            @section('title', 'Unauthorized')

            @section('page-style')
            <!-- Page -->
            <link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-misc.css')}}">
            @endsection

            @section('content')
            <!--Under Maintenance -->
            <div class="container-xxl container-p-y">
                <div class="misc-wrapper">
                    <h2 class="mb-2 mx-2">User does not have the right roles </h2>
                    <p class="mb-4 mx-2">
                        Click here to continue browsing
                    </p>
                    <a href="{{url('/frontoffice')}}" class="btn btn-primary">Continue Browsing</a>
                    <div class="mt-4">
                        <img src="{{asset('assets/img/wiggler/unauthorized.webp')}}" alt="girl-doing-yoga-light" width="500" class="img-fluid">
                    </div>
                </div>
            </div>
            <!-- /Under Maintenance -->
            @endsection

        </div>
    </div>
</body>