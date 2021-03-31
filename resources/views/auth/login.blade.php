@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
      <div class="col-md-6">
        <img src="{{ asset('images/undraw_remotely_2j6y.svg') }}" alt="Image" class="img-fluid">
      </div>
      <div class="col-md-6 contents">
        <div class="row justify-content-center">
          <div class="col-md-8" style="margin-top: 120px;">
            <div class="mb-4">
            <h3>Login</h3>
            {{-- <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p> --}}
          </div>
          <form  method="post" action="{{route('login')}}">
              @csrf
            <div class="form-group">
              <input type="email" class="form-control" name="email" placeholder="Enter Email" required>
            </div>

            <div class="form-group">
              <input type="password" class="form-control" name="password" placeholder="Enter Password" required>
            </div>

            <div class="form-group{{ $errors->has('g-recaptcha-response') ? ' has-error' : '' }}">
                <label class="col-md-4 control-label"></label>
                <div class="col-md-6">
                    {!! app('captcha')->display() !!}
                    @if ($errors->has('g-recaptcha-response'))
                        <span class="help-block">
                            <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            {{-- <div class="d-flex mb-5 align-items-center">
              <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                <input type="checkbox" checked="checked"/>
                <div class="control__indicator"></div>
              </label>
              <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span>
            </div> --}}

            <input type="submit" value="Login Now" class="btn btn-block btn-primary">
          </form>
          <br>
          Not have an Account? <span class="ml-auto"><a href="{{route('register')}}" class="forgot-pass">Create Now</a></span>
          </div>
        </div>

      </div>

    </div>
  </div>
@endsection
