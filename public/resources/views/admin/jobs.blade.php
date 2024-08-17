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
          <li class="breadcrumb-item active">Job</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
<div class="container" style="margin-top:10px;">
<div class="text-right mb-3">
        <a class="btn btn-primary"  href="{{route('addjob')}}">Add New</a>
    </div>
<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Job Title</th>
                <th>Posted Date</th>
                <th >Total Applicants</th>
                <th>End Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @if ($jobs->isNotEmpty())
            @foreach($jobs as $job)
            <tr>
                <td>{{$job->title}}</td>
                <td>{{ \Carbon\Carbon::parse($job->posteddate)->format('d-m-Y') }}</td>
                <td>{{$job->noOfApplicants}}</td>
                <td>{{ \Carbon\Carbon::parse($job->enddate)->format('d-m-Y') }}</td>
                <td> <a href="#" class="edit-icon">
                <a href="{{ route('editjob', ['id' => $job->id]) }}"> <i class="fa fa-pencil pl-2 text-info"></i></a>
                        <a href="{{ route('dltjob', ['id' => $job->id]) }}">
                <i class="fa fa-trash pl-2 text-danger"></i>
            </a></td>     
           </tr>
           @endforeach
           @else
    <tr>
        <td colspan="5">No jobs available.</td>
    </tr>
           @endif
        </tbody>
        <tfoot>
            <tr>
            <th>Job Title</th>
                <th>Posted Date</th>
                <th >Total Applicants</th>
                <th>End Date</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>
    <div class="pagination">
    @if ($jobs->isNotEmpty())
    {{ $jobs->links() }}
    @endif
</div>
</main>
@endsection