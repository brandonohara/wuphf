@extends('layouts.base')

@section('layout')
    @include('layouts.navigation')

    <main class="content-container">
        <div class="container-fluid content">
            @include('flash::message')
            @yield('content')
        </div>
    </main>

    @include('layouts.footer')

    <div class="modals-container">
        @yield('modals')
    </div>
@endsection