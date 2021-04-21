@extends('master')
@section('content')
<div class="contacts" id="contacts">
        <div class="contacts__container">
            <div class="wrapper">
                <div class="company__info">
                    <h3>{{ __("Contacts")}}</h3>
                    <ul>
                        <li> <i class="fa fa-road"></i> 44 {{ __("Something st")}}</li>
                        <li> <i class="fa fa-phone"></i> +7 (707) 345 13-93</li>
                        <li> <i class="fa fa-envelope"></i> 190103410@sdu.kz</li>
                    </ul>
                </div>
                <div class="contact">
                    <h3>{{ __("Email Us")}}</h3>

                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                        </ul>
                        </div>
                    @endif
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $message }}</strong>
                    </div>
                    @endif
                    <form method="post" action="{{url('sendemail/send')}}">
                    {{ csrf_field() }}
                        <p>
                            <label>{{ __("Name")}}</label>
                            <input type="text" name="name">
                        </p>
                        <p>
                            <label>{{ __("Surname")}}</label>
                            <input type="text" name="surname">
                        </p>
                        <p>
                            <label>{{ __("Email Address")}}</label>
                            <input type="email" name="email">
                        </p>
                        <p>
                            <label>{{ __("Phone number")}}</label>
                            <input type="text" name="phone">
                        </p>
                        <p class="full">
                            <label>{{ __("Enter your message")}}</label>
                            <textarea name="message" rows="5"></textarea>
                        </p>
                        <p class="full">
                            <button>{{ __("Submit")}}</button>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection 
