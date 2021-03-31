@extends('layouts.app')

@section('content')

    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="{{ asset('images/undraw_remotely_2j6y.svg') }}" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8" style="margin-top: 50px;">
              <div class="mb-4">
              <h3>Create a New Account</h3>
              {{-- <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p> --}}
            </div>
            <form  method="post" action="{{route('register')}}">
                @csrf
              <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="Enter Name" required>
              </div>
<br>
              <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Enter Email" required>
              </div>
<br>
              <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Enter Password" required>
              </div>
<br>
              <div class="form-group last mb-4">
                <input type="password" class="form-control" name="password_confirmation" placeholder="Enter Password Again">
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

              <input type="submit" value="Register" class="btn btn-block btn-primary">
            </form>
            <br>
            Already have an Account? <span class="ml-auto"><a href="{{route('login')}}" class="forgot-pass">Login</a></span>
            </div>
          </div>

        </div>

      </div>
    </div>
                        {{-- <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div> --}}
{{--
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form> --}}
                {{-- </div>
            </div>
        </div>
    </div>
</div> --}}



@endsection
