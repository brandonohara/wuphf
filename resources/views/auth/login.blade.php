@extends('layouts.authentication')

@section('authentication')
    @component('forms.base', [
        'method' => 'post',
        'action' => route('login')
    ])
        @include('forms.inputs.text', [
            'name' => 'email',
            'placeholder' => 'Email',
            'value' => old('email'),
            'required' => true
        ])

        @include('forms.inputs.text', [
            'type' => 'password',
            'name' => 'password',
            'placeholder' => 'Password',
            'value' => old('password'),
            'required' => true
        ])

        <div class="form-group row align-items-center">
            <div class="col">
                <button type="submit" class="btn btn-primary">
                    {{ __('Log In') }}
                </button>
            </div>
            @if (Route::has('password.request'))
                <div class="col">
                    <a class="text-right" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                    <a class="text-right" href="{{ route('register') }}">
                        {{ __('Need an Account?') }}
                    </a>
                </div>
            @endif
        </div>
    @endcomponent
@endsection
