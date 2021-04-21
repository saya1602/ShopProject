<?php
  use App\Http\Controllers\ProductController;
  $total = 0;
  if(Session::has('user')) {
    $total = ProductController::cartItem();
  }
?>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">Sport<span class = "head">Idea</span></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="" id = "home"><a href="/">{{ __("Home")}}</a></li>
        <li class="" id = "orders"><a href="/myorders">{{ __("Orders")}}</a></li>
        <li class="" id = "cont"><a href="/contacts">{{ __("Contacts")}}</a></li>
        <li class="" id = "rev"><a href="/rev">{{ __("Reviews")}}</a></li>
      </ul> 
      <ul class="nav navbar-nav navbar-right">
      @php $locale = session()->get('locale'); @endphp
        <li> <a href="/cartList">{{ __("Cart")}}({{ $total }})</a> </li>
        @if(Session::has('user'))
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{Session::get('user')['name']}}
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="/logout">{{ __("Logout")}}</a></li>
            </ul>
          </li>
          @else
          <li><a href="/login">{{ __("Login")}}</a></li>
          <li><a href="/register">{{ __("Register")}}</a></li>
          @endif

          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            @switch($locale)
              @case('en')
                EN
              @break
              @case('kz')
                KZ
              @break
              @case('ru')
                RU
              @break
            @endswitch
            </a>
            <ul class="dropdown-menu">
              <li><a href="/kz">{{ __("KZ")}}</a></li>
              <li><a href="/en">{{ __("EN")}}</a></li>
              <li><a href="/ru">{{ __("RU")}}</a></li>
            </ul>
        </li>
      </ul>
      
      <form action = "/search" class="navbar-form navbar-right">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="{{ __('Search')}}">
        </div>
        <button type="submit" class="btn btn-default">{{ __("Search")}}</button>
      </form>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
