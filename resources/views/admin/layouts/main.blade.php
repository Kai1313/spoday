<!-- =========================================================
* Argon Dashboard v1.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard-pro
* Copyright 2019 Creative Tim (https://www.creative-tim.com)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
 -->
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Ecoberingin is a trusted Computer and Electronic Waste Recycler in Indonesia">
    <meta name="author" content="SPODA">
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assets/img/brand/favicon.png') }}" type="image/png">
    <title>SPODA</title>
    @include('admin.includes.styles')

</head>

<body>
    <!-- Sidenav -->
    @include('admin.layouts._sidebar')
    <!-- Main content -->
    <div class="main-content" id="panel">
        @include('admin.layouts._topbar')
        @yield('header')
        <!-- Page content -->
        <div class="container-fluid">
            @yield('section')
            @yield('modal')
            <!-- Footer -->
            @include('admin.layouts._footer')
        </div>
    </div>
    @include('admin.includes.scripts')
</body>

</html>
