@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login First!') }}<br>
  <a href="{{ route('home')}}"><strong>Home</strong></a> |
  <a href="{{ route('login') }}"><strong>Login</strong></a> |
  <a href="{{ route('register') }}"><strong>Register</strong></a>
  

               </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}<br>
                    <a href="{{asset('dashboard')}}"><strong>Dashboard</strong></a><br>
                    <a href="{{asset('student')}}"><strong>Student</strong></a><br>
                       <a href="{{asset('documentation')}}"target="_blank"><strong>Laravel Documentation</strong></a><br>
                    <a href="{{asset('contact')}}"><strong>Contact Us</strong></a>
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
