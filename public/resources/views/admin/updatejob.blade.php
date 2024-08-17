@extends('admin.layouts.app')
@section('title', 'Job')
@section('content')
@include('sweetalert::alert')
<main id="main" class="main">
<div class="pagetitle">
      <h1>Job</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
          <li class="breadcrumb-item active">Update Job detail</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
<div class="container" style="margin-top:5px;">
<section class="vh-100" >
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-9">
        <div class="card" style="border-radius: 15px;">
          <div class="card-body">
          <form action="{{ route('updatejob', ['id' => $job->id]) }}" method="post">
          @csrf
            <div class="row align-items-center pt-4 pb-3">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">Job Ttile</h6>

              </div>
              <div class="col-md-9 pe-5">

                <input type="text" class="form-control form-control-lg" placeholder="Add job title" name="name" required value="{{$job->title}}"/>

              </div>
            </div>

            <hr class="mx-n3">

            <div class="row align-items-center py-3">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">Category</h6>

              </div>
              <div class="col-md-9 pe-5">
    <select class="form-control form-control-lg" id="categorySelect" name="category" required>
        <!-- Add options dynamically based on your categories -->
        @if ($categorys->isNotEmpty())
            @foreach($categorys as $category)
            <option value="{{ $category->id }}" {{ $job->category_id == $category->id ? 'selected' : '' }}>
            {{ $category->name }}
        </option>
            @endforeach
        @endif
    </select>
</div>
            </div>

            <hr class="mx-n3">

            <div class="row align-items-center py-3">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">Job Description</h6>

              </div>
              <div class="col-md-9 pe-5">

                <textarea class="form-control" rows="3" placeholder="Add job description" id="autoresizingTextarea"  oninput="autoResize(this)" required name="detail">{{$job->description}}</textarea>

              </div>
            </div>

            <hr class="mx-n3">

            <div class="row align-items-center py-3">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">Last Date To Apply</h6>

              </div>
              <div class="col-md-9 pe-5">

              <input type="date" class="form-control form-control-lg" required name="ldate" value="{{$job->enddate}}"/>
              </div>
            </div>

            <hr class="mx-n3">

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
 <script>
    function autoResize(element) {
        element.style.height = 'auto';
        element.style.height = (element.scrollHeight) + 'px';
    }
</script>
@endsection