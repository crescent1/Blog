@extends('layout')

@section('content')

<div class="main-wrapper">
    <div class="navbar-bg"></div>

    @if (Auth::check())

        @include('dashboard.header')

        @include('dashboard.sidebar')

    @endif


    <!-- Main Content -->
    <div class="main-content">

        @yield('maincontent')

    </div>

    <footer class="main-footer">
        <div class="footer-left">
            Copyright &copy; <strong>{{ config('app.name')}} 2021</strong>
        </div>
        <div class="footer-right">
            version: 1.0.1
        </div>
    </footer>
</div>

@endsection
