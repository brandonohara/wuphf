@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row">
       <wuphfs-container :featured="{{ $featured ? 1 : 0 }}"></wuphfs-container>
   </div>
</div>
@endsection
