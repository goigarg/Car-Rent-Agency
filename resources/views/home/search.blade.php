@extends('layouts.index')

@section('content')
<!-- From Blog -->
<section class="section-wrap">
<div class="container">
    <div class="title-row title-row--boxed text-center">
    <h2 class="section-title">Search </h2>
    <p class="subtitle"></p>
    </div>
    <div class="row card-row"> 
 
    @if(count($search) > 0)
        @foreach($search as $item)
        <div class="col-lg-4">
            <a href="/car/{{$item->id}}">
            <article class="entry card box-shadow hover-up">
              <div class="entry__img-holder card__img-holder">
               

                <img src="/storage/car_img/{{$item->car_img}}" class="entry__img" alt="{{$item->car_model}}">
             

                <div class="entry__body card__body">                    
                  <h4 class="entry__title">
                   {{$item->car_model}}
                  </h4>
                  <ul class="entry__meta">
                    <li class="entry__meta-category">
                      <i class="fas fa-rupee-sign"></i> {{$item->day_rent}} Per Day             
                    </li>
                  </ul>                     
           
                </div>
              </div>
            </article>
          </a>
          </div>
          @endforeach
        @endif

    </div>
</div>
</section> <!-- end from blog -->

</section>
@endsection
