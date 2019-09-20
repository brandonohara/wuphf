@extends('layouts.authentication')

@section('authentication')
    @component('forms.base', [
        'method' => 'post',
        'action' => route('password.update')
    ])
        @include('forms.inputs.text', [
            'name' => 'email',
            'placeholder' => 'email',
            'value' => old('email', $email),
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
            'placeholder' => 'Confirm Password',
            'required' => true
        ])

        <div class="form-group text-center margin-top-30">
            <button type="submit" class="btn btn-primary">
                {{ __('Reset Password') }}
            </button>
        </div>
    @endcomponent
@endsection
