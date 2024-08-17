@extends('layouts.app')

@section('title', 'Home')

@section('content')
     <!-- Banner Area Starts -->
     <section class="banner-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 px-0">
                    <div class="banner-bg"></div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="banner-text">
                        <h1>find your dream <span>job</span> with comport </h1>
                        <p class="py-3">Wherein herb beginning. Moved after gathering. Sea hi crate fowl man replenish place divided likeness herb one two lnetn Winged moving saw, may over.</p>
                        <a href="#" class="secondary-btn">explore now<span class="flaticon-next"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Area End -->

    <!-- Search Area Starts -->
    <div class="search-area">
        <div class="search-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <form action="#" class="d-md-flex justify-content-between">
                            <select>
                                <option value="all">All Category</option>
                                @if ($categorys->isNotEmpty())
                        @foreach($categorys as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                                @endif
                            </select>
                            <input type="text" placeholder="Search Keyword" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Keyword'" required>
                            <button type="submit" class="template-btn">find job</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Search Area End -->

    <!-- Feature Area Starts -->
    <section class="feature-area section-padding2">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-feature mb-4 mb-lg-0">
                        <h4>UX/UI Designer</h4>
                        <p class="py-3">There spirit beginning bearing the open at own every give appear in third you sawe two boys</p>
                        <a href="#" class="secondary-btn">explore now<span class="flaticon-next"></span></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-feature mb-4 mb-lg-0">
                        <h4>web Designer</h4>
                        <p class="py-3">There spirit beginning bearing the open at own every give appear in third you sawe two boys</p>
                        <a href="#" class="secondary-btn">explore now<span class="flaticon-next"></span></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-feature">
                        <h4>Accounting and Finance</h4>
                        <p class="py-3">There spirit beginning bearing the open at own every give appear in third you sawe two boys</p>
                        <a href="#" class="secondary-btn">explore now<span class="flaticon-next"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Feature Area End -->

    <!-- Category Area Starts -->
    <section class="category-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-top text-center">
                        <h2>Find job by category</h2>
                        <p>Open lesser winged midst wherein may morning</p>
                    </div>
                </div>
            </div>
            <div class="row">
            @if ($categorys->isNotEmpty())
                @foreach($categorys as $category)
                <div class="col-lg-3 col-md-6 mb-3">
                    <div class="single-category text-center ">
                    <img src="{{$category->image}}" alt="category" style="height:70px;">

                        <h4>{{$category->name}}</h4>
                        <h5>{{$category->jobs_count}} open job</h5>
                    </div>
                </div>
                @endforeach
                @else
                <b>No catrgory available</b>
                @endif
            </div>
        </div>
    </section>
    <!-- Category Area End -->

    <!-- Jobs Area Starts -->
    <section class="jobs-area section-padding3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="jobs-title">
                        <h2>Browse recent jobs</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="recent" role="tabpanel" aria-labelledby="home-tab">
                        @if ($jobs->isNotEmpty())
                        @foreach($jobs as $job)
                            <div class="single-job mb-4 d-lg-flex justify-content-between">
                                <div class="job-text">
                                    <h4>{{$job->title}}</h4>
                                    <ul class="mt-4">
                                        <li class="mb-3"><h5><i class="fa fa-map-marker"></i> {{$job->location}}</h5></li>
                                        <li class="mb-3"><h5><i class="fa fa-pie-chart"></i> {{$job->category->name}}</h5></li>
                                        <li><h5><i class="fa fa-clock-o"></i> Deadline Deadline: {{ \Carbon\Carbon::parse($job->enddate)->format('d-m-Y') }}</h5></li>
                                    </ul>
                                </div>
                                <div class="job-img align-self-center">
    <img src="{{$job->category->image}}" alt="job" style="width: 120px; height: 120px; object-fit: cover; border-radius: 8px;">
</div>

                                <div class="job-btn align-self-center">
                                    <a href="{{ route('apply', ['id' => $job->id]) }}" class="third-btn">apply</a>
                                </div>
                            </div>
                            @endforeach
                            @else
                            <b>No job is available</b>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="more-job-btn mt-5 text-center">
                <a href="{{route('morejobs')}}" class="template-btn"> Browse more jobs</a>
            </div>
        </div>
    </section>
    <!-- Jobs Area End -->
    <!-- Newsletter Area Starts -->
    <section class="newsletter-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-top text-center">
                        <h2>Get job information daily</h2>
                        <p>Subscribe to our newsletter and get a coupon code!</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form action="#">
                        <input type="email" placeholder="Your email here" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your email here'" required>
                        <button type="submit" class="template-btn">subscribe now</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Newsletter Area End -->
    
    <!-- News Area Starts -->
    <section id="blog" class="news-area section-padding3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-top text-center mt-5">
                        <h2>Company latest news</h2>
                        <p>Open lesser winged midst wherein may morning</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-news mb-5 mb-lg-0">
                        <div class="news-img news-img1"></div>
                        <div class="news-tag">
                            <ul class="my-4">
                                <li><h5><i class="fa fa-calendar-o"></i> 20th sep, 2018</h5></li>
                                <li class="separator mx-2"><span></span></li>
                                <li><h5><i class="fa fa-folder-open-o"></i> company</h5></li>
                            </ul>
                        </div>
                        <div class="news-title">
                            <h4><a href="#">Lime recalls electric scooters over battery fire.</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-news mb-5 mb-lg-0">
                        <div class="news-img news-img2"></div>
                        <div class="news-tag">
                            <ul class="my-4">
                                <li><h5><i class="fa fa-calendar-o"></i> 18th sep, 2018</h5></li>
                                <li class="separator mx-2"><span></span></li>
                                <li><h5><i class="fa fa-folder-open-o"></i> company</h5></li>
                            </ul>
                        </div>
                        <div class="news-title">
                            <h4><a href="#">Apple resorts to promo deals trade to boost</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-news">
                        <div class="news-img news-img3"></div>
                        <div class="news-tag">
                            <ul class="my-4">
                                <li><h5><i class="fa fa-calendar-o"></i> 25th sep, 2018</h5></li>
                                <li class="separator mx-2"><span></span></li>
                                <li><h5><i class="fa fa-folder-open-o"></i> company</h5></li>
                            </ul>
                        </div>
                        <div class="news-title">
                            <h4><a href="#">Lime recalls electric scooters over battery fire.</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- News Area End -->

    <!-- Download Area Starts -->
    <section class="download-area section-padding">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="download-text">
                        <h2>Download the app your mobile today</h2>
                        <p class="py-3">Light earth also land can't. May you midst shall lights blessed in lights Have gathered image morning blessed grass him. Appear female rule all seas she'd winged</p>
                        <div class="download-button d-sm-flex flex-row justify-content-start">
                            <div class="download-btn mb-3 mb-sm-0 flex-row d-flex">
                                <i class="fa fa-apple" aria-hidden="true"></i>
                                <a href="#">
                                    <p>
                                        <span>Available</span> <br>
                                        on App Store
                                    </p>
                                </a>
                            </div>
                            <div class="download-btn dark flex-row d-flex">
                                <i class="fa fa-android" aria-hidden="true"></i>
                                <a href="#">
                                    <p>
                                        <span>Available</span> <br>
                                        on Play Store
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pr-0">
                    <div class="download-img"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- Download Area End -->
    @include('layouts.footer')
@endsection

