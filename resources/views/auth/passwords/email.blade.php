@extends('layouts.authentication')

@section('authentication')
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    @component('forms.base', [
        'method' => 'post',
        'action' => route('password.email')
    ])
        @include('forms.inputs.text', [
            'name' => 'email',
            'placeholder' => 'Email',
            'value' => old('email'),
            'required' => true
        ])

        <div class="form-group text-center margin-top-30">
            <button type="submit" class="btn btn-primary">
                {{ __('Send Password Reset Link') }}
            </button>
        </div>
    @endcomponent
@endsection
