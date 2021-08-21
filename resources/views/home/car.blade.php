@extends('layouts.index')

@section('content')



  <section class="page-title section-wrap">
        <div class="container">
        <div class="row">
            <div class="col-8">
              <img src="/storage/car_img/{{$car->car_img}}" class="entry__img" alt="{{$car->car_model}}">
            </div>
            <div class="col-4">
               <h2>{{$car->car_model}}</h2>
                <h6> <i class="fas fa-rupee-sign"></i> {{$car->day_rent}} Per Day </h6>

                @if(empty($user))
                <button class="btn btn--lg btn--dark" style="margin: 20px 0; width: 100%;"><span>Please Login To Rent</span></button>
                
                @elseif ($requested) 
                  <button class="btn btn--lg btn--dark" style="margin: 20px 0; width: 100%;"><span>Already Requested</span></button>
                
                @elseif($user->user_type == 'customer')

                <form action="/car/rent" method="POST">
                  @csrf

                  <input type="hidden" name="car_id" value="{{$car->id}}">
                  <input type="hidden" name="user_id" value="{{$user->id}}">
                  <button class="btn btn--lg btn--color" style="margin: 20px 0; width: 100%;">
                    <span>Rent Car</span>
                  </button>
                </form>
                @elseif($user->id == $car->user_id) 
                <a href="/edit/{{$car->id}}" class="btn btn--lg btn--color" style="margin: 20px 0; width: 100%;"><span>Edit Product</span></a>
                
                @else
                <button class="btn btn--lg btn--dark" style="margin: 20px 0; width: 100%;"><span>Only Customers can Rent Cars</span></button>
                @endif
                <br>
                <p> Vehicle Number: <b>{{$car->car_number}}</b> </p>
                <p>Seat Capacity: <b>{{$car->capacity}}</p>
                
            </div>
        </div>
</div>
</section>

@endsection