@extends('layouts.app')
@section('title', 'Apply for job')
@section('content')
<div class="container">
  
  <div class="row mx-0 justify-content-center">
    <div class="col-md-7 mb-5 mt-3">
      <form
        method="POST"
        class="w-100 rounded-1 p-4 border bg-white"
        action="https://herotofu.com/start"
        enctype="multipart/form-data"
      >
      <div class="d-flex justify-content-between mb-3">
          <h4 class="mb-0">Application Form</h4>
          <span>Applied For: {{$job->title}}</span>
        </div>
        <label class="d-block mb-4">
          <span class="form-label d-block">Your name</span>
          <input
            required
            name="name"
            type="text"
            class="form-control"
            placeholder="Joe Bloggs"
          />
        </label>

        <label class="d-block mb-4">
          <span class="form-label d-block">Email address</span>
          <input
            required
            name="email"
            type="email"
            class="form-control"
            placeholder="joe.bloggs@example.com"
          />
        </label>

        <label class="d-block mb-4">
          <span class="form-label d-block">Years of experience</span>
          <select required name="experience" class="form-select">
            <option>Less than a year</option>
            <option>1 - 2 years</option>
            <option>2 - 4 years</option>
            <option>4 - 7 years</option>
            <option>7 - 10 years</option>
            <option>10+ years</option>
          </select>
        </label>

        <label class="d-block mb-4">
          <span class="form-label d-block">Tell us more about yourself</span>
          <textarea
            name="message"
            class="form-control"
            rows="3"
            placeholder="What motivates you?"
          ></textarea>
        </label>

        <label class="d-block mb-4">
          <span class="form-label d-block">Your CV</span>
          <input required name="cv" type="file" class="form-control" />
        </label>

        <div class="mb-1">
          <button type="submit" class="btn btn-primary px-3 rounded-3">
            Apply
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
@include('layouts.footer')
@endsection