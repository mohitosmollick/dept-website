
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
    <section class="section theme-background bg-cover section-70 section-md-114 bg-default">
        <div class="shell">
            <h2>Grid Gallery</h2>
            <hr class="divider bg-madison">
            <div class="offset-top-60">
                <div class="range range-30 range-xs-center" data-lightgallery="group">
                    @foreach($all_notice as $notices)
                    <div class="cell-xs-10 cell-sm-6 cell-md-4">
                        <figure class="thumbnail-classic thumbnail-md">
                            <div class="thumbnail-classic-img-wrap"><img src="{{asset('/uploads/Notice')}}/{{$notices->	image}}" alt="" width="370" height="370"> </div>
                            <figcaption class="thumbnail-classic-caption text-center">
                                <div>
                                    <h5 class="thumbnail-classic-title">{{$notices->created_at->diffForHumans()}}</h5>
                                </div>
                                <hr class="divider divider-sm">
                                <p class="text-white">{{$notices->title}}</p>
                                <div class="offset-top-20 veil reveal-lg-block">
                                    <a class="thumbnail-classic-link icon theme-icon icon-xxs fa-search-plus" href="{{asset('/uploads/Notice')}}/{{$notices->image}}" data-lightgallery="item"><img src="{{asset('/uploads/Notice')}}/{{$notices->image}}" alt="" width="370" height="370"></a>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
