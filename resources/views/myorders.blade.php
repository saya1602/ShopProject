@extends('master')
@section("content")
<div class="custom-product">
     <div class="col-sm-10">
        <div class="trending-wrapper">
            <!-- <h4></h4> -->
            @foreach($orders as $item)
            <div class=" row searched-item cart-list-devider">
             <div class="col-sm-3">
                <a href="detail/{{$item->id}}">
                    <img class="trending-image" src="{{ asset('img/' . $item->gallery) }}">
                  </a>
             </div>
             <div class="col-sm-4">
                    <div class="">
                      <h2>{{ __("Name")}} : {{$item->name}}</h2>
                      <h5>{{ __("Delivery Status")}} : {{$item->status}}</h5>
                      <h5>{{ __("Address")}} : {{$item->address}}</h5>
                      <h5>{{ __("Payment Status")}} : {{$item->payment_status}}</h5>
                      <h5>{{ __("Payment Method")}} : {{$item->payment_method}}</h5>

                    </div>
             </div>
            
            </div>
            @endforeach
          </div>

     </div>
</div>
@endsection 