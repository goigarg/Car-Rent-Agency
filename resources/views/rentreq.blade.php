@extends('layouts.index')

@section('content')

<section class="hero">
    <div class="container text-center">
       <h1>All Rent Requests</h1>
      @if(count($data) > 0)
        @foreach($data as $item)
        <div class="col-lg-4">
          <article class="entry card box-shadow hover-up">
              <div class="entry__img-holder card__img-holder">
                <img src="/storage/car_img/{{$item['car_img']}}" class="entry__img" alt="{{$item['car_model']}}">
                <div class="entry__body card__body">
                    <h4> {{$item['car_model']}}</h4>
                    <p> Daily Rent:  <i class="fas fa-rupee-sign"></i> {{$item['day_rent']}} </p>
                    <p> Customer Name:  {{$item['customer_name']}}</p>
                    <p> Customer Email: {{$item['customer_email']}}</p>
                    <p>Requested on {{$item['rent_date']}}</p>
                </div>
              </div>
          </article>
          </a>
        </div>
        @endforeach
      @endif


    </div>
</section>

@endsection