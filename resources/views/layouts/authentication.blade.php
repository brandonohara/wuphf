@extends('layouts.base')

@section('layout')
    <div class="authentication-container">
        <div class="authentication-form">
            <div class="authentication-logo text-center">
                <h1>WUPHF <strike>.com</strike>.io</h1>
            </div>
            
            @yield('authentication')
        </div>
    </div>
@endsection
