
@extends('layouts.app')

@section('content')

    <section class="section breadcrumb-modern context-dark parallax-container" data-parallax-img="{{asset('view/assets/images/parallax-03.jpg')}}">
        <div class="parallax-content section-30 section-sm-70">
            <div class="shell">
                <h2 class="veil reveal-sm-block">Your Profile</h2>
                <div class="offset-sm-top-35">
                    <ul class="list-inline list-inline-lg list-inline-dashed p d-flex justify-content-center">
                        <li><a href="index.html">Home</a></li>
                        <li>Registration Form</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Classic Breadcrumbs-->
    <section class="section theme-background bg-cover section-70 section-md-114 bg-default">
        <div class="shell">
            <div class="range range-50 range-xs-center">
                <div class="cell-sm-6 text-left">
                    <div class="inset-sm-right-30"><img class="img-responsive reveal-inline-block" src="{{asset('/dashboard/events')}}/{{$single_event->images_one}}" width="540" height="540" alt="">
                        <div class="offset-top-30 offset-sm-top-60">
                            <h6 class="text-bold">A Few Words About Lecturer</h6>
                            <div class="text-subline"></div>
                        </div>
                        <div class="offset-top-20 text-center text-xs-left">
                            <div class="unit unit-xs unit-xs-horizontal unit-spacing-lg">
                                <div class="unit-left"><img class="img-responsive reveal-inline-block img-rounded" src="{{asset('/uploads/users')}}/{{$single_event->rel_to_user->image}}" width="110" height="110" alt=""></div>
                                <div class="unit-body">
                                    <h6 class="text-bold text-danger">{{$single_event->rel_to_user->name}}</h6>
                                    <div class="offset-sm-top-30">
                                        <ul class="list list-unstyled">
                                            <li><span class="icon theme-icon icon-xs mdi mdi-phone text-middle"></span><a class="reveal-inline-block text-black inset-left-10" href="tel:#">+880 {{$single_event->rel_to_user->phone}}</a></li>
                                            <li><span class="icon theme-icon icon-xs mdi mdi-email-outline text-middle"></span><a class="reveal-inline-block inset-left-10" href="mailto:info@demolink.org">{{$single_event->rel_to_user->email}}</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="offset-top-20">
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cell-sm-6 text-left">
                    <h3 class="text-bold">{{$single_event->title}}</h3>
                    <div class="hr divider bg-madison hr-left-0"></div>
                    <div class="offset-top-30 offset-sm-top-60">
                        <p>{{$single_event->desp_one}}</p>
                        <p>{{$single_event->desp_two}}</p>
                    </div>
                    <div class="offset-top-30 offset-sm-top-60">
                        <h6 class="text-bold">When is the next workshop and how do I apply?</h6>
                        <div class="text-subline"></div>
                    </div>
                    <div class="offset-top-17">
                        <p>Details of the next available workshop are below:</p>
                        <ul class="list list-unstyled">
                            <li><span class="text-black">Date:</span><span> {{($single_event->event_date)->format('d')}} {{date('M Y', strtotime($single_event->event_date))}}</span></li>
                            <li><span class="text-black">Times:</span><span> {{$single_event->start->format('h:i A')}} to {{$single_event->end->format('h:i A')}}</span></li>
                            <li><span class="text-black">Fee:</span><span>Free</span></li>
                            <li><span class="text-black">Location:</span><span>{{$single_event->location}}</span></li>
                        </ul>
                        <div class="offset-top-30 offset-sm-top-60">
                            <h6 class="text-bold">What you need to bring</h6>
                            <div class="text-subline"></div>
                        </div>
                        <div class="offset-top-20">
                            <p>All essential materials and equipment are provided, n A3 portfolio folder (including a minimum of 5 plastic sleeves) and a USB drive.</p>
                            <p>If you'd like to enroll, download and complete tmolink.org with the subject line "JWU 2018 Workshop".</p>
                        </div>
                        <div class="offset-top-30"><a class="btn btn-primary" href="#">Apply Now</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Events-->
    <section class="section theme-background bg-cover section-70 section-md-114 bg-catskill">
        <div class="shell-wide">
            <h2 class="text-bold">Other&nbsp;Events</h2>
            <hr class="divider bg-madison">
            <div class="range range-50 offset-top-35 range-xs-center">
                @foreach($also_event as $events)
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
        </div>
    </section>


@endsection
