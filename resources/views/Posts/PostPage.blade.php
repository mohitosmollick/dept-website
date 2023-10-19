@extends('layouts.app')

@section('content')
    <section class="section breadcrumb-modern context-dark parallax-container" data-parallax-img="{{asset('view/assets/images/parallax-03.jpg')}}">
        <div class="parallax-content section-30 section-sm-70">
            <div class="shell">
                <h2 class="veil reveal-sm-block">Create Post</h2>
                <div class="offset-sm-top-35">
                    <ul class="list-inline list-inline-lg list-inline-dashed p d-flex justify-content-center">
                        <li><a href="index.html">Home</a></li>
                        <li>Post</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="section theme-background bg-cover section-70 section-md-114 bg-catskill">
        <div class="shell">
            <div class="range range-85 range-xs-center">
                <div class="cell-md-8">
                    <div class="range range-30 text-sm-left range-xs-center">
                        @foreach($posts as $post)
                        <div class="cell-sm-6">
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
                <div class="cell-xs-8 cell-md-4 text-left">
                    <aside class="aside inset-md-left-30">
                        <div class="aside-item">
                            <h6 class="text-bold">Search</h6>
                            <div class="text-subline"></div>
                            <div class="offset-top-30">
                                <form class="form-search rd-search form-search-widget" action="" method="GET">
                                    <div class="form-group">
                                        <div class="input-group"><input class="form-search-input  form-control" type="text" name="s" autocomplete="off"><span class="input-group-btn"><button class="btn btn-primary" type="submit"><span class="icon fa-search"></span></button>
                                                </span>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="aside-item">
                            <h6 class="text-bold">Categories</h6>
                            <div class="text-subline"></div>
                            <div class="offset-top-20">
                                <ul class="list list-marked list-marked-primary rd-navbar-nav">
                                    @foreach($category as $value)
                                    <li><a href="{{route('categoryPost', $value->id)}}">{{$value-> category_name}}</a></li>
                                    @endforeach

                                </ul>

                            </div>
                        </div>



                        <div class="aside-item">
                            <h6 class="text-bold">Gallery</h6>
                            <div class="text-subline"></div>
                            <div class="range range-condensed range-custom offset-top-20" data-lightgallery="group">
                                @foreach($new_arrival as $new)
                                <div class="cell-6">
                                    <a class="thumbnail-default" href="{{route('singlePost', $post->id)}}" ><img src="{{asset('/uploads/Posts')}}/{{$new->images_one}}" alt="" width="320" height="320"><span class="icon theme-icon fa-search-plus"></span></a>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('footer_script')

@endsection
