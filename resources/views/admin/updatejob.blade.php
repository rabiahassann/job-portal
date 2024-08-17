@extends('admin.layouts.app')
@section('title', 'Job')
@section('content')
@include('sweetalert::alert')
<main id="main" class="main">
    <div class="pagetitle">
      <h1>Jobs</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
          <li class="breadcrumb-item active">Update job</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
<div class="container" >
<section class="" >
  <div class="container h-100 ">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-9">

       

        <div class="card mt-3" style="border-radius: 15px;">
          <div class="card-body">
         <form action="{{route('updatejob', ['id' => $job->id])}}" method="post">
          @csrf
            <div class="row align-items-center pt-4 pb-3">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">Job Ttile</h6>

              </div>
              <div class="col-md-9 pe-5">

                <input type="text" class="form-control form-control-lg" placeholder="Add job title" name="name" required value="{{$job->title}}"/>

              </div>
            </div>

            
            <div class="row align-items-center py-3">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">Category</h6>

              </div>
              <div class="col-md-9 pe-5">
              <select class="form-control form-control-lg" id="categorySelect" name="category" required>
    <option value="" disabled>Select Category</option>
    @foreach($categorys as $category)
        <option value="{{ $category->id }}" {{ $category->id == $job->category_id ? 'selected' : '' }}>
            {{ $category->name }}
        </option>
    @endforeach
</select>
</div>
            </div>

            
            <div class="row align-items-center py-3">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">Job Description</h6>

              </div>
              <div class="col-md-9 pe-5">

                <textarea class="form-control" rows="3" placeholder="Add job description" required name="detail">{{$job->description}}</textarea>

              </div>
            </div>
            <div class="row align-items-center py-3">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">Job Location</h6>

              </div>
              <div class="col-md-9 pe-5">

                <input class="form-control" placeholder="Add job location" required name="location" value="{{$job->location}}">

              </div>
            </div>
           

            <div class="row align-items-center py-3">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">Last Date To Apply</h6>

              </div>
              <div class="col-md-9 pe-5">

              <input type="date" class="form-control form-control-lg" required name="ldate"value="{{$job->enddate}}"/>
              </div>
            </div>

            <div class="px-5 py-4">
              <input type="submit" class="btn btn-primary btn-lg" value="Update" >
            </div>
</form>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>
<br>
 </div>
</main>
@endsection 