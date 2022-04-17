@extends('layouts.home.app')

@section('title', 'User - Register')

@section('content')
<section class="section section-shaped section-xxl">
  <div class="shape shape-style-1 bg-gradient-default">
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </div>
  <div class="container pt-lg-4">
    <div class="row justify-content-center">
      <div class="col-lg-7">
        <div class="card bg-secondary shadow border-0">              
          <div class="card-body px-lg-5 py-lg-5">
            <div class="text-center text-muted mb-4">
              <h2>Sign Up</h2>
            </div>
            <form role="form" method="POST" action="/user/registersave">
              @csrf
              <div class="form-group">
                <div class="input-group input-group-alternative mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                    </div>
                  <input class="form-control" placeholder="Name" type="text" id="name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                </div>
              </div>
              <div class="form-group">
                <div class="input-group input-group-alternative mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                  </div>
                  <input id="email" name="email" class="form-control" placeholder="Email" type="email" value="{{ old('email') }}" required autocomplete="email">
                </div>
              </div>
              <div class="form-group focused">
                <div class="input-group input-group-alternative">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                  </div>
                  <input id="password" name="password" class="form-control" placeholder="Password" type="password" required autocomplete="new-password">
                </div>
              </div>                  
              <div class="text-center">
                <button type="submit" class="btn btn-primary mt-4">Create account</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection