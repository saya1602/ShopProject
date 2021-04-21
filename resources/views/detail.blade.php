@extends('master')
@section('content')

<div class="container" >
    <div class="row">
        <div class="col-sm-6">
            <img class = "detail-img" src="{{ asset('img/' . $product['gallery']) }}" alt="No">
        </div>
        <div class="col-sm-6">
            <a href="/">{{ __("Go back")}}</a>
            <h2>{{ $product['name'] }}</h2>
            <h3>{{ __("Price")}}: {{ $product['price'] }} KZT</h3>
            <h4>{{ __("Details")}}: {{ $product['description'] }}</h4>
            <br><br>
            <form action="/add_to_cart" method="POST">
                @csrf
                <input type="hidden" name="product_id" value={{$product['id']}}>
            <button class="btn btn-primary">{{ __("Add to Cart")}}</button>
            </form>
            <br><br>
            <!-- <button class="btn btn-success">Reviews</button> -->
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
            {{ __("Reviews")}}
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{ __("Modal title")}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
        <form action="{{ route('add-review') }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="title">{{ __("Title")}}</label>
                <input name="title" type="text" class="form-control" aria-describedby="titleHelp" placeholder="Enter title">
                <!-- <small id="emailHelp" class="form-text text-muted"></small> -->
            </div>

            <div class="form-group">
                <label for="review">{{ __("Review")}}</label>
                <textarea class="form-control" name="review" rows="3"></textarea>
            </div>

            <div class="form-group">
                <div class="custom-file">
                    <?php
                    echo Form::open(array('url' => '/uploadfiles', 'files' => 'true'));
                    echo Form::file('image');
                    Form::close();
                    ?>
                    
                </div>
            </div>


            <div class="form-group">
                <input type="submit" name="send" value="{{ __('Send')}}" class="btn btn-info">
            </div>
        </form>
                </div>
            </div>
            </div>
            <br><br>
        </div>
    </div>
</div>    
@endsection