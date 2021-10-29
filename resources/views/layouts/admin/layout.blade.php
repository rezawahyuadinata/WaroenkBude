<!DOCTYPE html>
<html lang="en">

<head>
    <title>Waroenk bude</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @include('layouts.admin.css')
</head>

<body>
@include('layouts.admin.head')
 <!-- MAIN -->
 <div class="main ftco-animate">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <!-- OVERVIEW -->
            <div class="panel panel-headline">
                <div class="panel-heading">
                    <p class="panel-subtitle">{{ date('Y-m-d H:i') }}</p>
                </div>
                @yield('section')
            </div>
            <!-- END OVERVIEW -->
@include('layouts.admin.bottom')
</body>
@include('layouts.admin.js')
</html>
