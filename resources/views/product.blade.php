@extends('master')
@section('content')
<div class="custom-product items" >
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner inner-items">
    @foreach ($products as $item) 
    <div class="item  {{$item['id']==20?'active':''}}">
      <a href="detail/{{$item['id']}}">
        <img class = "slider-img" src="{{ asset('img/' . $item['gallery']) }}" alt="Chania">
          <div class="inner-items carousel-caption slider-text">
              <h3>{{$item['name']}}</h3>
          </div>
      </a>
    </div>
    @endforeach
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
  <div class="trending-wrapper">
        <h3>{{ __("Tredning Products")}}</h3>
        @foreach($products as $item)
        <div class="trening-item">
          <a href="detail/{{$item['id']}}">
            <img class="trending-image" src="{{ asset('img/' . $item['gallery']) }}">
              <div class="">
                <h3>{{$item['name']}}</h3>
              </div>
          </a>
        </div>
        @endforeach
      </div>
</div>
@endsection