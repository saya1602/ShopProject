@extends('master')
@section("content")
<div class="container">
        <div class="container_box">
        <h1>{{ __("Customers' Reviews")}}</h1>
            <!-- <table class="table table-stripped table-bordered"> -->
                <!-- <thead>
                    <tr>
                        <th scope="col">{{ __("Title")}}</th>
                        <th scope="col">{{ __("Review")}}</th>
                        <th scope="col">{{ __("Image")}}</th>
                    </tr>
                </thead> -->
                <!-- <tbody> -->
                    @foreach($reviews as $review)
                    <!-- <tr>
                        <th> {{ $review->title }} </th>
                        <th> {{ $review->review }} </th>
                        <th> <img src="{{ asset('upload/' . $review->image) }}" width=150px height=100px alt="">  </th>
                    </tr> -->
                    <div class=" row searched-item cart-list-devider">
                        <div class="col-sm-3">
                            <img src="{{ asset('upload/' . $review->image) }}" width=150px height=100px alt="">
                        </div>

                        <div class="col-sm-4">
                            <div class="">
                                <h3>{{ $review->title }}</h3>
                                <h4>{{ $review->review }}</h4>
                            </div>
                        </div>
                    </div>
                    @endforeach
                <!-- </tbody> -->
                <!-- </table> -->
        </div>
    </div>
@endsection 