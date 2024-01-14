
@extends('layouts.app')

@section('content')


    <section class="section theme-background bg-cover section-70 section-md-114 bg-default">
        <div class="shell-wide">
            <h3>Event</h3>
            <hr class="divider bg-madison">
            <div class="offset-top-60">
            <div class="range range-50 range-xs-center range-xl-left">
                @foreach($all_event as $events)
                <div class="cell-sm-6 cell-md-5 cell-xl-3">
                    <article class="post-event">
                        <div class="post-event-img-overlay"><img class="img-responsive" src="{{asset('/dashboard/events')}}/{{$events->images_one}}" alt="" width="420" height="420">
                            <div class="post-event-overlay context-dark">
                                <a class="btn btn-primary" href="{{route('singleEvent',$events->id)}}">See More</a>
                            </div>
                            <div class="post-event-meta text-center">
                                <div class="h3 text-bold reveal-inline-block reveal-lg-block">{{($events->event_date)->format('d')}}</div>
                                <p class="reveal-inline-block reveal-lg-block">{{date('M', strtotime($events->event_date))}}</p><span class="text-bold reveal-inline-block reveal-lg-block inset-left-10 inset-lg-left-0">{{$events->start->format('h:i')}} to {{$events->end->format('h:i A')}}
</span>
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
        </div>
    </section>


@endsection
