
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
    <section class="section novi-background bg-cover section-70 section-md-114 bg-default">
        <div class="shell">
            <div class="range range-30 range-xs-center">
                <div class="cell-sm-4 text-sm-left">
                    <div class="inset-sm-right-30"><img class="img-responsive reveal-inline-block" src="{{asset('uploads/users')}}/{{Auth::User()->image}}" width="340" height="340" alt="">
                        <div class="offset-top-15 offset-sm-top-30"><a class="btn btn-primary btn-block" href="{{route('editProfile')}}" style="max-width: 340px; margin-left:auto; margin-right:auto">Update profile</a></div>
                    </div>
                </div>
                <div class="cell-sm-8 text-left">
                    <div>
                        <h5>Batch -{{Auth::user()->batch}}</h5>
                        <h3 class="text-bold">{{ Auth::user()->name }}</h3>
                    </div>
                    <p class="offset-top-10">{{ Auth::user()->jobname }}</p>
                    <div class="offset-top-15 offset-sm-top-30">
                        <hr class="divider bg-madison hr-left-0">
                    </div>
                    <div class="offset-top-30 offset-sm-top-30">
                        <h6 class="text-bold">About</h6>
                        <div class="text-subline"></div>
                    </div>
                    <div class="offset-top-20">
                        <p>{{ Auth::user()->bio }}</p>
                    </div>
                    <div class="offset-top-30 offset-sm-top-30">
                        <h6 class="text-bold">Certificates and Awards</h6>
                        <div class="text-subline"></div>
                    </div>
                    <div class="offset-top-15 offset-sm-top-30">
                        <ul class="list list-unstyled">
                            <li><span class="icon novi-icon icon-xs mdi mdi-phone text-middle text-madison"></span><a class="reveal-inline-block text-dark inset-left-10" href="tel:#">+880 {{ Auth::user()->phone }}</a></li>
                            <li><span class="icon novi-icon icon-xs mdi mdi-email-open text-middle text-madison"></span><a class="reveal-inline-block inset-left-10" href="mailto:info@demolink.org">{{ Auth::user()->email }}</a></li>
                        </ul>
                    </div>
                    <div class="aside-item-2 mt-5">
                        <ul class="list-inline list-inline-xs list-inline-madison d-flex">
                            <li>
                                <a class="icon theme-icon icon-xxs fa-facebook icon-circle icon-gray-light-filled" href="{{ Auth::user()->facebooklink }}"></a>
                            </li>
                            <li>
                                <a target="_blank"  class="icon theme-icon icon-xxs  fa-linkedin icon-circle icon-gray-light-filled" href="{{Auth::user()->linkdinlink}}"></a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section novi-background bg-cover section-70 section-md-114 bg-madison context-dark">
        <div class="shell">
            <h2 class="text-bold">Skills</h2>
            <hr class="divider bg-madison">
            <div class="range range-xs-center offset-top-65">
                <div class="cell-xs-10 cell-sm-6">
                    <div class="progress-linear-wrap">
                        <div class="progress-linear" data-to="70">
                            <div class="progress-header clearfix">
                                <div class="text-left">
                                    <h6 class="text-bold pull-left text-black"><span data-novi-id="8">Knowledge</span></h6>
                                </div><span class="text-bold pull-right progress-value">70</span>
                            </div>
                            <div class="progress-bar-linear-wrap offset-top-5">
                                <div class="progress-bar-linear bg-primary"></div>
                            </div>
                        </div>
                        <div class="progress-linear" data-to="42">
                            <div class="progress-header clearfix">
                                <div class="text-left">
                                    <h6 class="text-bold pull-left text-black">Experience</h6>
                                </div><span class="text-bold pull-right progress-value">42</span>
                            </div>
                            <div class="progress-bar-linear-wrap offset-top-5">
                                <div class="progress-bar-linear bg-primary"></div>
                            </div>
                        </div>
                        <div class="progress-linear" data-to="38">
                            <div class="progress-header clearfix">
                                <div class="text-left">
                                    <h6 class="text-bold pull-left text-black">Communication</h6>
                                </div><span class="text-bold pull-right progress-value">38</span>
                            </div>
                            <div class="progress-bar-linear-wrap offset-top-5">
                                <div class="progress-bar-linear bg-primary"></div>
                            </div>
                        </div>
                        <div class="progress-linear" data-to="94">
                            <div class="progress-header clearfix">
                                <div class="text-left">
                                    <h6 class="text-bold pull-left text-black">Leadership</h6>
                                </div><span class="text-bold pull-right progress-value">94</span>
                            </div>
                            <div class="progress-bar-linear-wrap offset-top-5">
                                <div class="progress-bar-linear bg-primary"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
