
@extends('layouts.app')
@section('title', 'More Jobs')
@section('content')
    <section class="more-jobs-area section-padding3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="jobs-title">
                        <h4>Available Jobs</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                @forelse($jobs as $job)
                    <div class="col-lg-12">
                        <div class="single-job mb-4 d-lg-flex justify-content-between">
                            <div class="job-text">
                                <h4>{{ $job->title }}</h4>
                                <ul class="mt-4">
                                    <li class="mb-3"><h5><i class="fa fa-map-marker"></i> {{ $job->location }}</h5></li>
                                    <li class="mb-3"><h5><i class="fa fa-pie-chart"></i> {{ $job->category->name }}</h5></li>
                                    <li><h5><i class="fa fa-clock-o"></i> Deadline: {{ \Carbon\Carbon::parse($job->enddate)->format('d-m-Y') }}</h5></li>
                                </ul>
                            </div>
                            <div class="job-img align-self-center">
                                    <img src="{{$job->category->image}}" alt="job">
                                </div>
                            <div class="job-btn align-self-center">
                                <a href="{{ route('apply', ['id' => $job->id]) }}" class="third-btn">apply</a>
                            </div>
                        </div>
                    </div>
                @empty

                    <div class="col-lg-12">
                        <p>No more jobs available</p>
                    </div>
                @endforelse
                {{ $jobs->links() }}
            </div>
        </div>
    </section>
    @include('layouts.footer')
@endsection
