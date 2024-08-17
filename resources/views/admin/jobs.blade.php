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
          <li class="breadcrumb-item active">Jobs</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
<div class="container" style="margin-top:10px;">
<div class="text-right mb-3">
        <a class="btn btn-primary" href="{{route('addjob')}}">Add New</a>
    </div>
<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Title</th>
                <th>Deadline</th>
                <th>Applicants</th>
                <th >Action</th>
            </tr>
        </thead>
        <tbody>
		@if ($jobs->isNotEmpty())
            @foreach($jobs as $job)
            <tr>
                <td>{{$job->title}}</td>
                <td>{{$job->enddate}}</td>
                <td>{{$job->noOfApplicants}}</td>
                <td> <a href="{{ route('editjob', ['id' => $job->id]) }}" class="edit-icon">
                        <i class="fa fa-pencil pl-2 text-info"></i>
                        <a href="{{ route('dltjob', ['id' => $job->id]) }}">
                <i class="fa fa-trash pl-2 text-danger"></i>
            </a></td>     
           </tr>
           @endforeach
		   @else
    <tr>
        <td colspan="3">No jobs available.</td>
    </tr>
@endif
        </tbody>
        <tfoot>
            <tr>
            <th>Title</th>
                <th>Deadline</th>
                <th>Applicants</th>
                <th >Action</th>
            </tr>
        </tfoot>
    </table>
    <div class="pagination">
	@if ($jobs->isNotEmpty())
    {{ $jobs->links() }}
	@endif
</div>
</div> 
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
   $(document).ready(function () {
  var form = document.getElementById("subs-form");
  $('.btn-primary[data-toggle="modal"]').on('click', function () {
    $('#susbc-form').modal('show');
  });
});
</script>
</main>
@endsection 