<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('back.layout.partials.head')
    @yield('title')
</head>

<body class="hold-transition sidebar-mini">

<div class="wrapper">

@include('back.layout.partials.nav')

    {{-- Flash messages --}}
    {{--@if(session()->has('success'))--}}
    {{--    @include('messages.success')--}}
    {{--@elseif(session()->has('error'))--}}
    {{--    @include('messages.error')--}}
    {{--@endif--}}


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <h1 class="m-0 text-dark">@yield('header')</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                @yield('content')
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->


</div>
<!-- ./wrapper -->

@include('back.layout.partials.footer')
@include('back.layout.partials.footer-scripts')
@yield('js')
</body>
</html>
