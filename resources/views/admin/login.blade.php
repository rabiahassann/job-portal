@extends('layouts.app')
@section('title', 'Login')
@section('content')
@include('sweetalert::alert')
<section class="vh-100 ">
<div class="container py-5 h-100 mt-5" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); max-width: 800px;">
    <div class="row d-flex align-items-center justify-content-center h-100">
      <div class="col-md-6">
        <img src="{{ asset('assets/images/banner-bg.jpg') }}" class="img-fluid w-100" alt="Phone image">
      </div>
      <div class="col-md-6">
        <h3 class="text-center mb-3">Login Here</h3>
        <form method="post" action="{{route('login')}}">
            @csrf
          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="email" id="form1Example13" class="form-control form-control-md" required name="email"/>
            <label class="form-label" for="form1Example13">Email address</label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-4">
            <input type="password" id="form1Example23" class="form-control form-control-md" required name="password"/>
            <label class="form-label" for="form1Example23">Password</label>
          </div>

          <div class="d-flex justify-content-around align-items-center mb-4">
            <!-- Checkbox -->
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
              <label class="form-check-label" for="form1Example3"> Remember me </label>
            </div>
           
          </div>

          <!-- Submit button -->
          <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>


        </form>
      </div>
    </div>
  </div>
</section>
@endsection