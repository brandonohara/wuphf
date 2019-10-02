@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="hidden-xs hidden-sm col-md-3">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a href="">
                        <span class="fas fa-home"></span> Featured
                    </a>
                </li>
                <li class="nav-item"><a href="">second</a></li>
                <li class="nav-item"><a href="">third</a></li>
            </ul>
        </div>
        <wuphfs-container :featured="{{ $featured ? 1 : 0 }}"></wuphfs-container>
    </div>
</div>
@endsection
