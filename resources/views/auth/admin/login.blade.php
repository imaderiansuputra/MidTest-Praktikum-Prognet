@extends('layouts.home.app')

@section('title', 'Admin - Login')

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
  <div class="container pt-lg-1">
    <div class="row justify-content-center">
      <div class="col-lg-7">
        <div class="card bg-secondary shadow border-0">            
          <div class="card-body px-lg-5 py-lg-5">
            <div class="text-center text-muted mb-4">
              <h2>Sign In</h2>
            </div>
            <form role="form" method="POST" action="{{ route('admin.login') }}">
              @csrf
              <div class="form-group mb-3">
                <div class="input-group input-group-alternative">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                  </div>
                  <input id="username" name="username" required autocomplete="username" autofocus class="form-control" placeholder="text" type="text">
                </div>
              </div>
              <div class="form-group focused">
                <div class="input-group input-group-alternative">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                  </div>
                  <input id="password" name="password" required autocomplete="current-password" class="form-control" placeholder="Password" type="password">
                </div>
              </div>
              <div class="custom-control custom-control-alternative custom-checkbox">
                
                <label class="custom-control-label" for=" customCheckLogin"><span></span></label>
              </div>
              <div class="text-center">
                <button type="submit" class="btn btn-primary my-4">Sign in</button>                
              </div>
            </form>
          </div>
        </div>
        <div class="row mt-3">
          <div class="col-6">
            <a href="#" class="text-light"><small></small></a>
          </div>
          <div class="col-6 text-right">
            <a href="#" class="text-light"><small></small></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection