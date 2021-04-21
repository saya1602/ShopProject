@extends('master')
@section("content")
<div class="custom-product">
     <div class="col-sm-10">
        <table class="table">
         
            <tbody>
              <tr>
                <td>{{ __("Amount")}}</td>
              <td>{{$total}} KZT</td>
              </tr>
              <tr>
                <td>{{ __("Tax")}}</td>
                <td>0 KZT</td>
              </tr>
              <tr>
                <td>{{ __("Delivery")}} </td>
                <td>1490 KZT</td>
              </tr>
              <tr>
                <td>{{ __("Total Amount")}}</td>
              <td>{{$total+1490}} KZT</td>
              </tr>
            </tbody>
          </table>
          <div>
            <form action="/orderplace" method="POST" >
              @csrf
                <div class="form-group">
                  <textarea name="address" placeholder="{{ __('Enter your address')}}" class="form-control" ></textarea>
                </div>
                <div class="form-group">
                  <label for="pwd">{{ __("Payment Method")}}</label> <br> <br>
                  <input type="radio" value="Pay by Card" name="payment"> <span>{{ __("Pay by Card")}}</span> <br> <br>
                  <input type="radio" value="EMI payment" name="payment"> <span>{{ __("EMI payment")}}</span> <br><br>
                  <input type="radio" value="Payment on delivery" name="payment"> <span>{{ __("Payment on Delivery")}}</span> <br> <br>

                </div>
                <button type="submit" class="btn btn-default">{{ __("Order Now")}}</button>
              </form>
          </div>
     </div>
</div>
@endsection 