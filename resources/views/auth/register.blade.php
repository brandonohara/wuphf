@extends('layouts.authentication')

@section('authentication')
    @component('forms.base', [
        'method' => 'post',
        'action' => route('register')
    ])
        <div class="row">
            <div class="col-xs-12 col-md-6">
                @include('forms.inputs.text', [
                    'name' => 'first',
                    'placeholder' => 'First',
                    'value' => old('first'),
                    'required' => true
                ])
            </div>
            <div class="col-xs-12 col-md-6">
                @include('forms.inputs.text', [
                    'name' => 'last',
                    'placeholder' => 'Last',
                    'value' => old('last'),
                    'required' => true
                ])
            </div>
        </div>

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
            'required' => true
        ])

        @include('forms.inputs.text', [
            'type' => 'password',
            'name' => 'password_confirmation',
            'placeholder' => 'Password',
            'required' => true
        ])

        <div class="form-group row align-items-center">
            <div class="col">
                <button type="submit" class="btn btn-primary">
                    {{ __('Register') }}
                </button>
            </div>
            @if (Route::has('password.request'))
                <div class="col">
                    <a class="text-right" href="{{ route('login') }}">
                        {{ __('Already have an Account?') }}
                    </a>
                </div>
            @endif
        </div>
    @endcomponent
@endsection