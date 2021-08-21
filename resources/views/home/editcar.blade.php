@extends('layouts.index')

@section('content')
<section class="page-title text-center">      
    <h1 class="page-title__title">Edit Product</h1>
</section> <!-- end page title -->


    <!-- Edit Form -->
    <section class="section-wrap">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <div class="contact box-shadow-large offset-top-171">
   
  
                <form class="contact-form mt-30 mb-30" method="post" action="/car/edit" enctype="multipart/form-data">
                  @csrf
                        @method('patch')

                        <input type="hidden" name="id" value="{{$car->id}}">
                      <div class="form-group">
                          <label for="CarModel">Vehicle Model</label>
                          <input id="CarModel" type="text" value="{{$car->car_model}}" class="form-control" name="car_model" required>
                        </div>
    
                        <div class="form-group">
                            <label for="Capacity">Vehicle Capacity</label>
                            <input id="Capacity" type="number" value="{{$car->capacity}}" class="form-control" name="capacity" required>
                          </div>

                          <div class="form-group">
                            <label for="Rent">Rent Per Day</label>
                            <input id="Rent" type="number" value="{{$car->day_rent}}" class="form-control" name="day_rent" required>
                          </div>

                          <div class="form-group">
                            <label for="carNumber">Vehicle Number</label>
                            <input id="carNumber" type="text" value="{{$car->car_number}}" class="form-control" name="car_number" required>
                          </div>
                 
                          <br>

  
                  <button class="btn btn--lg btn--color btn--wide btn--button" type="submit"> Add Car</button>
                 
                </form>
  
  
  
              </div>
            </div>
          </div>
        </div>
      </section> <!-- end contact -->
  
@endsection