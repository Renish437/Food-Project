<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    @include('backend.section.link')
</head>

<body class="dark-only">
    <!-- tap on top start -->
    <div class="tap-top">
        <i class="ri-arrow-up-double-fill"></i>
    </div>
    <!-- tap on tap end -->

    <!-- loader start -->
    <div class="loader-wrapper">
        <img src="{{ asset('backend/assets/images/loader.gif') }}" alt="">
    </div>
    <!-- loader end -->

    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">

        <!-- Page Header Start-->
        @include('backend.section.header')
        <!-- Page Header Ends-->

        <!-- Page Body Start-->
        <div class="page-body-wrapper">

            <!-- Page Sidebar Start-->
            @include('backend.section.sidebar')
            <!-- Page Sidebar Ends-->

            <!-- index body start -->
            <div class="page-body">

                @yield('content')
                <!-- Container-fluid Ends-->

                <!-- footer start-->
                <div class="container-fluid">
                    @include('backend.section.footer')
                </div>
                <!-- footer End-->

            </div>
            <!-- index body end -->

        </div>
        <!-- Page Body End -->


    </div>
    <!-- page-wrapper End-->

    <!-- Modal Start -->
    @include('backend.section.modal')


    <!-- Modal End -->

    @include('backend.section.script')
</body>

</html>
