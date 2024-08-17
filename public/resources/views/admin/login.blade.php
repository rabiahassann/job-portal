@extends('../layouts.app')

@section('title', 'Login')

@section('content')
@include('sweetalert::alert')
<div class="container login-container">
    <div class="row">
        <div class="col-md-6 login-section">
        <img src="{{ asset('assets/images/banner-bg.jpg') }}" alt="job">
        </div>
        <div class="col-md-6 login-section">
            <form class="login-form" method="post" action="{{route('login')}}">
                @csrf
                <h2 class="text-center">Login</h2>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Login</button>

            </form>
        </div>
    </div>
</div>
@endsection