@extends('layouts.index')

@section('content')


<section class="section-wrap text-center">      
    <h1 class="page-title__title">Agency Home Page</h1>

    <div class="container text-center">
        @if (session('msg'))
            <div class="alert alert-success" role="alert">
                {{ session('msg') }}
            </div>
        @endif

        
        <a href="/car/add" class="btn btn--lg btn--color" style="padding: 10px;">Add New Cars for Rent</a>

        <a href="/home/rent" class="btn btn--lg btn--color" style="padding: 10px;">Check All Rent Requests</a>
    </div>
<section>

<section class="section-wrap">
    <div class="container text-center">
        <h1>Listed Cars</h1>
        <br>
        <div class="row">

            @if(count($cars) > 0)
               @foreach($cars as $car) 
               <div class="col-lg-4">
                <a href="/car/{{$car->id}}">
                <article class="entry card box-shadow hover-up">
                  <div class="entry__img-holder card__img-holder">
                      <img src="/storage/car_img/{{$car->car_img}}" class="entry__img" alt="{{$car->car_model}}"  style="max-height: 200px; width: auto;">
                    <div class="entry__body card__body">                    
                      <h4 class="entry__title">
                        {{$car->car_model}}
                      </h4>
                      <ul class="entry__meta">
                        <li class="entry__meta-category">
                          <i class="fas fa-rupee-sign"></i>
                         {{$car->day_rent}} Per Day
                        </li>
                      </ul>                     
               
                    </div>
                  </div>
                </article>
              </a>
              </div>
                @endforeach
              @else
                <p>You haven't listed any cars yet!</p>
            @endif
        </div>


    </div>
</section>

@endsection
