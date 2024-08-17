@extends('admin.layouts.app')
@section('title', 'Category')
@section('content')
@include('sweetalert::alert')
<main id="main" class="main">
    <div class="pagetitle">
      <h1>Category</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
          <li class="breadcrumb-item active">Update Category</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <div class="container">
        <section class="">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-xl-9">

                        <div class="card mt-3" style="border-radius: 15px;">
                            <div class="card-body">

                                <div class="text-center mb-4">
                                <img src="{{ asset($category->image) }}" alt="Logo" class="rounded-circle mt-3">
                                </div>

                                <form action="{{ route('updatecategory', ['id' => $category->id]) }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row align-items-center pt-4 pb-3">
                                        <div class="col-md-3 ps-5">
                                            <h6 class="mb-0">Category Title</h6>
                                        </div>
                                        <div class="col-md-9 pe-5">
                                            <input type="text" class="form-control form-control-lg" placeholder="Add title" name="name" required value="{{ $category->name }}"/>
                                        </div>
                                    </div>

                                    <div class="row align-items-center py-3">
                                        <div class="col-md-3 ps-5">
                                            <h6 class="mb-0">Description</h6>
                                        </div>
                                        <div class="col-md-9 pe-5">
                                            <textarea class="form-control" rows="3" placeholder="Add job description" required name="detail">{{ $category->detail }}</textarea>
                                        </div>
                                    </div>
                                    <div class="px-5 py-4">
                                        <input type="submit" class="btn btn-primary btn-lg" value="Update">
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
