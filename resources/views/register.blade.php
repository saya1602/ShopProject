@extends('master')
@section('content')
<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <form action="register" method="POST">
            @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">{{ __("Username")}}</label>
                    <input type="text" name = "name" class="form-control" id="exampleInputEmail1" placeholder="{{ __('Username')}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">{{ __("Email address")}}</label>
                    <input type="email" name = "email" class="form-control" id="exampleInputEmail1" placeholder="{{ __('Email address')}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">{{ __("Password")}}</label>
                    <input type="password" name = "password" class="form-control" id="exampleInputPassword1" placeholder="{{ __('Password')}}">
                </div>
                <button type="submit" class="btn btn-default">{{ __("Register")}}</button>
            </form>
        </div>
    </div>
</div>
@endsection