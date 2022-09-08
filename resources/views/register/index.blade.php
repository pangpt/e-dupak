@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row align-items-center">
      <div class="col-12 col-md-6 offset-xl-2 offset-md-1 order-md-2 mb-5 mb-md-0">

        <!-- Image -->
        <div class="text-center">
          <img src="assets/img/illustrations/happiness.svg" alt="..." class="img-fluid">
        </div>

      </div>
      <div class="col-12 col-md-5 col-xl-4 order-md-1 my-5">

        <!-- Heading -->
        <h1 class="display-4 text-center mb-3">
          Sign up
        </h1>

        <!-- Subheading -->
        <p class="text-muted text-center mb-5">
          Free access to our dashboard.
        </p>

        <!-- Form -->
        <form action="{{route('registerstore')}}" method="POST">
            @csrf
            <!-- Email address -->
          <div class="form-group">

            <!-- Label -->
            <label>
              Nama Lengkap
            </label>

            <!-- Input -->
            <input type="text" name="name" class="form-control" placeholder="Nama Lengkap" required value="{{old('name')}}">

          </div>

          <!-- Email address -->
          <div class="form-group">

            <!-- Label -->
            <label>
              NIP
            </label>

            <!-- Input -->
            <input type="text" name="nip" class="form-control" placeholder="NIP" required value="{{old('name')}}">

          </div>

          <div class="form-group">

            <!-- Label -->
            <label>
              Email Address
            </label>

            <!-- Input -->
            <input type="email" name="email" class="form-control" placeholder="name@address.com" required value="{{old('email')}}">

          </div>

          <!-- Password -->
          <div class="form-group">

            <!-- Label -->
            <label>
              Password
            </label>

            <!-- Input group -->
            <div class="input-group input-group-merge">

              <!-- Input -->
              <input type="password" name="password" class="form-control form-control-appended" placeholder="Masukkan password">

              <!-- Icon -->
              <div class="input-group-append">
                <span class="input-group-text">
                  <i class="fe fe-eye"></i>
                </span>
              </div>

            </div>
          </div>

          <!-- Submit -->
          <button class="btn btn-lg btn-block btn-primary mb-3" type="submit">
            Sign up
          </button>

          <!-- Link -->
          <div class="text-center">
            <small class="text-muted text-center">
              Already have an account? <a href="{{route('loginpage')}}">Log in</a>.
            </small>
          </div>

        </form>

      </div>
    </div> <!-- / .row -->
  </div> <!-- / .container -->
@endsection
