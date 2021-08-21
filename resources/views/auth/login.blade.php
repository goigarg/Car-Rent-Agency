@extends('layouts.index')

@section('content')


<div class="content-wrapper oh">

    <!-- Page Title -->
    <section class="page-title text-center">      
          <h1 class="page-title__title">Log in</h1>
    </section> <!-- end page title -->

    <!-- Login Form -->
    <section class="section-wrap">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="contact box-shadow-large offset-top-171">
 

              <form class="contact-form mt-30 mb-30" method="post" action="{{ route('login') }}">
                @csrf

                 
                    <div class="form-group">
                        <label for="email">{{ __('E-Mail Address') }} <abbr title="required" class="required">*</abbr></label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                      </div>

                                        
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                         @enderror



                      <div class="form-group">
                        <label for="password">{{ __('Password') }} <abbr title="required" class="required">*</abbr></label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                      </div>

                      @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror

                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            
                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div> <br>

                <button class="btn btn--lg btn--color btn--wide btn--button" type="submit"> {{ __('Login') }}</button>
                <div id="msg" class="message"></div>
              </form>



            </div>
          </div>
        </div>
      </div>
    </section> <!-- end contact -->


@endsection
