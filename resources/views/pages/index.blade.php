
@extends('layouts.app')

@section('content')

<section class="section">
    <div class="swiper-container swiper-slider swiper-slider-modern swiper-slider-2" data-loop="true" data-dragable="false" data-slide-effect="fade">
        <div class="swiper-wrapper">

            @foreach($slider as $sliders)
            <div class="swiper-slide" data-slide-bg="{{asset('uploads/slider')}}/{{$sliders->slides}}" style="background-position: 80% center">
                <div class="swiper-slide-caption section-70">
                    <div class="container">
                        <div class="range range-xs-center">
                            <div class="cell-md-9 cell-xs-10">
                                <div data-caption-animate="fadeInUp" data-caption-delay="100">
                                    <h1 class="text-bold">Creating Your Future</h1>
                                </div>
                                <div class="offset-top-20 offset-xs-top-40 offset-xl-top-15" data-caption-animate="fadeInUp" data-caption-delay="150">
                                    <h6><span data-theme-id="2">Besides providing you with new knowledge and training in chosen disciplines, our university also gives you an opportunity to benefit from spending your free time by playing </span></h6>
                                </div>
                                <div class="offset-top-20 offset-xl-top-30" data-caption-animate="fadeInUp" data-caption-delay="400">
                                    <div class="group-xl group-middle"><a class="btn btn-primary" href="#">Start a Journey</a><a class="btn btn-default" href="#">Get in Touch</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="swiper-button-prev fa-arrow-left"></div>
        <div class="swiper-button-next fa-arrow-right"></div>
        <div class="swiper-pagination"></div>
    </div>
</section>
<section class="section theme-background bg-cover section-70 section-md-114 bg-default">
    <div class="shell">
        <div class="range range-50">
            <div class="cell-sm-5 cell-sm-push-2 text-sm-left">
                <div class="inset-sm-left-50" ><img class="img-responsive reveal-inline-block img-rounded" src="{{asset('uploads/Chairman')}}/{{$about->image}}" alt="" width="400" height="300">
                    <div class="offset-top-20">
                        <h6 class="text-danger text-bold">{{$about->chairmen_name}}</h6>
                    </div>
                    <p>{{$about->bio}}</p>
                </div>
            </div>
            <div class="cell-sm-7 cell-sm-push-1 text-sm-left">
                <h2 class="text-bold">About Our Department</h2>
                <hr class="divider bg-madison hr-sm-left-0">
                <div class="offset-top-30 offset-sm-top-30">
                    <p>{{$about->about}}</p>
                </div>

                <p>Christopher Smith, the University's first president, envisioned a university that was "bran splinter new, yet as solid as the ancient hills" - a modern research university..</p>
            </div>
        </div>
    </div>
</section>

<section class="section theme-background bg-cover section-70 section-md-114 bg-catskill">
    <div class="shell-wide">
        <h2 class="text-bold">Posts</h2>
        <hr class="divider bg-madison">
        <div class="cell-md-8">
            <div class="range range-30 text-sm-left range-xs-center">
                @foreach($posts as $post)
                    <div class="cell-sm-4">
                        <article class="post-news">
                            <a href="{{route('singlePost', $post->id)}}"><img class="img-responsive" src="{{asset('/uploads/Posts')}}/{{$post->images_one}}" width="370" height="240" alt=""></a>
                            <div class="post-news-body">
                                <h6><a href="{{route('singlePost', $post->id)}}">{{$post->title}}</a></h6>
                                <div class="offset-top-20">
                                    <p>{{$post->desp_one}}</p>
                                </div>
                                <div class="post-news-meta offset-top-20"><span class="icon theme-icon icon-xs mdi mdi-calendar-clock text-middle text-madison"></span><span class="text-middle inset-left-10 text-italic text-black">{{$post->created_at->diffForHumans()}}</span></div>
                            </div>
                        </article>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="offset-top-50 offset-lg-top-56"><a class="btn btn-icon btn-icon-right btn-primary" href="{{route('postPage')}}"><span class="icon fa-arrow-right"></span><span>View All</span></a></div>
    </div>
</section>
<section class="section context-dark section-image-aside section-image-aside-left">
    <div class="theme-background bg-cover section-70 section-md-114 bg-madison">
        <div class="shell">
            <div class="range range-xs-center range-sm-right offset-top-0">
                <div class="cell-xs-10 cell-sm-7 text-sm-left">
                    <div class="section-image-aside-img bg-cover veil reveal-sm-block" style="background-image: url({{asset('/view/assets/images/home-10-846x1002.jpg')}})"></div>
                    <div class="section-image-aside-body inset-sm-left-70 inset-lg-left-110">
                        <h2 class="text-bold">Our Featured Courses</h2>
                        <hr class="divider hr-sm-left-0 bg-white">
                        <div class="offset-top-30 offset-md-top-30 text-light">Our Featured Courses are selected through a rigorous process and uniquely created for each semester.</div>
                        <div class="text-left post-vacation-wrap offset-top-30">

                            @foreach($Subject as $value)
                            <article class="post-vacation">
                                <a class="post-vacation-img-wrap bg-cover bg-image" href="course-details.html" style="background-image: url({{asset('uploads/Subject')}}/{{$value->image}})"></a>
                                <div class="post-vacation-body">
                                    <div>
                                        <h6 class="post-vacation-title"><a href="course-details.html">{{$value->subject_name}}</a></h6>
                                    </div>
                                    <div class="offset-lg-top-10">
                                        <p>{{$value->start}}</p>
                                    </div>
                                    <div class="post-vacation-meta offset-top-10"><time class="text-dark" datetime="2018-01-01">{{$value->created_at}}</time>
                                    </div>
                                </div>
                            </article>
                            @endforeach
                        </div>
                        <div class="offset-top-60"><a class="btn btn-primary" href="course-details.html">View All Courses</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section theme-background bg-cover section-70 section-md-114 bg-default">
    <div class="shell">
        <h2 class="text-bold">Statistics</h2>
        <hr class="divider bg-madison">
        <div class="range range-65 range-xs-center range-md-left offset-top-60 counters">
            <div class="cell-sm-6 cell-md-3">
                <div class="counter-type-1"><span class="icon theme-icon icon-lg icon-outlined text-madison mdi mdi-school"></span>
                    <div class="h3 text-bold text-danger offset-top-15"><span class="counter">97</span><span class="symbol">%</span></div>
                    <hr class="divider bg-gray-light divider-sm">
                    <div class="offset-top-10">
                        <h6 class="text-black font-accent">Graduates</h6>
                    </div>
                </div>
            </div>
            <div class="cell-sm-6 cell-md-3">
                <div class="counter-type-1"><span class="icon theme-icon icon-lg icon-outlined text-madison mdi mdi-wallet-travel"></span>
                    <div class="h3 text-bold text-danger offset-top-15"><span class="counter">30</span><span class="symbol">+</span></div>
                    <hr class="divider bg-gray-light divider-sm">
                    <div class="offset-top-10">
                        <h6 class="text-black font-accent">Certified Teachers</h6>
                    </div>
                </div>
            </div>
            <div class="cell-sm-6 cell-md-3">
                <div class="counter-type-1"><span class="icon theme-icon icon-lg icon-outlined text-madison mdi mdi-domain"></span>
                    <div class="h3 text-bold text-danger offset-top-15"><span class="counter">80</span><span class="symbol">%</span></div>
                    <hr class="divider bg-gray-light divider-sm">
                    <div class="offset-top-10">
                        <h6 class="text-black font-accent">Job</h6>
                    </div>
                </div>
            </div>
            <div class="cell-sm-6 cell-md-3">
                <div class="counter-type-1"><span class="icon theme-icon icon-lg icon-outlined text-madison mdi mdi-account-multiple-outline"></span>
                    <div class="h3 text-bold text-danger offset-top-15"><span class="counter">{{$users}}</span><span class="symbol"></span></div>
                    <hr class="divider bg-gray-light divider-sm">
                    <div class="offset-top-10">
                        <h6 class="text-black font-accent">Students</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section theme-background bg-cover section-70 section-md-114 bg-catskill">
    <div class="shell-wide">
        <h2 class="text-bold">Events</h2>
        <hr class="divider bg-madison">
        <div class="range range-50 offset-top-50 range-xs-center">
            @foreach($event as $events)
                <div class="cell-sm-6 cell-md-5 cell-xl-3">
                    <article class="post-event">
                        <div class="post-event-img-overlay"><img class="img-responsive" src="{{asset('/dashboard/events')}}/{{$events->images_one}}" alt="" width="420" height="420">
                            <div class="post-event-overlay context-dark">
                                <a class="btn btn-primary" href="{{route('singleEvent',$events->id)}}">See More</a>
                            </div>
                            <div class="post-event-meta text-center">
                                <div class="h3 text-bold reveal-inline-block reveal-lg-block">{{($events->event_date)->format('d')}}</div>
                                <p class="reveal-inline-block reveal-lg-block">{{date('M', strtotime($events->event_date))}}</p><span class="text-bold reveal-inline-block reveal-lg-block inset-left-10 inset-lg-left-0">{{$events->start->format('h:i')}} to {{$events->end->format('h:i A')}}</span>
                            </div>
                        </div>
                        <div class="unit unit-lg unit-lg-horizontal">
                            <div class="unit-body">
                                <div class="post-event-body text-lg-left">
                                    <h6><a href="{{route('singleEvent',$events->id)}}">{{$events->title}}</a></h6>
                                    <ul class="list-inline list-inline-xs">
                                        <li><a href="team-member-profile.html"><span class="icon theme-icon icon-xxs mdi mdi-account-outline text-middle"></span><span class="inset-left-10 text-dark text-middle">
                                                   {{$events->rel_to_user->name}}
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            @endforeach
        </div>
        <div class="offset-top-50 offset-lg-top-56"><a class="btn btn-icon btn-icon-right btn-primary" href="{{route('eventShow')}}"><span class="icon fa-arrow-right"></span><span>View All</span></a></div>
    </div>
</section>


@endsection
