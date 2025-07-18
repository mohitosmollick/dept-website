@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="swiper-container swiper-slider swiper-slider-modern swiper-slider-2" data-loop="true" data-dragable="false" data-slide-effect="fade">
            <div class="swiper-wrapper">

                <div class="swiper-slide" data-slide-bg="{{asset('/view/assets/images/slide-04-1920x810.jpg')}}" style="background-position: 80% center">
                    <div class="swiper-slide-caption section-70">
                        <div class="container">
                            <div class="range range-xs-center">
                                <div class="cell-md-9 cell-xs-10">
                                    <div data-caption-animate="fadeInUp" data-caption-delay="100">
                                        <h1 class="text-bold">Providing Higher Education</h1>
                                    </div>
                                    <div class="offset-top-20 offset-xs-top-40 offset-xl-top-15" data-caption-animate="fadeInUp" data-caption-delay="150">
                                        <h6 class=""><span data-theme-id="1">Besides providing you with new knowledge and training in chosen disciplines, our university also gives you an opportunity to benefit from spending your free time by playing .</span></h6>
                                    </div>
                                    <div class="offset-top-20 offset-xl-top-30" data-caption-animate="fadeInUp" data-caption-delay="400">
                                        <div class="group-xl group-middle"><a class="btn btn-primary" href="#">Start a Journey</a><a class="btn btn-default" href="#"><span data-theme-id="3">Get Template Now</span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

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
                    <div class="inset-sm-left-50" style="background: url('assets/images/aboutus_bg.jpg') no-repeat center center;"><img class="img-responsive reveal-inline-block img-rounded" src="{{asset('/view/assets/images/users/user-christopher-smith-340x300.jpg')}}" alt="" width="400" height="300">
                        <div class="offset-top-20">
                            <h6 class="text-danger text-bold">Christopher Smith</h6>
                        </div>
                        <p>First president of the James Whitaker University, served from 1876 to 1897.</p>
                    </div>
                </div>
                <div class="cell-sm-7 cell-sm-push-1 text-sm-left">
                    <h2 class="text-bold">About the University</h2>
                    <hr class="divider bg-madison hr-sm-left-0">
                    <div class="offset-top-30 offset-sm-top-30">
                        <p>The original board of trustees laid the groundwork for what would become today's James Whitaker University on July 9, 1876, when the group gathered to hold the University's inaugural board meeting and drafted the University's
                            articles of incorporation. This guiding document outlined elements the founders believed would build an enduring legacy for the University: a commitment to offering a rigorous academic program and an ambition to provide
                            "opportunities for all departments of higher education to persons of both sexes on equal terms." On September 10, 1876, the State of California issued the University's official certificate of incorporation, marking the
                            formal beginning of the University's life.</p>
                    </div>
                    <p>An initial pledge of $600,000 (roughly $16 million in today's currency) from oil magnate James Whitaker, along with contributions by the American Baptist Education Society, helped to found the University. The University's land
                        was donated by Marshall Field, owner of the historic Chicago department store that bore his name.</p>
                    <p>Christopher Smith, the University's first president, envisioned a university that was "bran splinter new, yet as solid as the ancient hills" - a modern research university..</p>
                </div>
            </div>
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
                                <article class="post-vacation">
                                    <a class="post-vacation-img-wrap bg-cover bg-image" href="course-details.html" style="background-image: url(assets/images/course-01-150x120.jpg)"></a>
                                    <div class="post-vacation-body">
                                        <div>
                                            <h6 class="post-vacation-title"><a href="course-details.html">Financial Analyst Course</a></h6>
                                        </div>
                                        <div class="offset-lg-top-10">
                                            <p>Charles Banks</p>
                                        </div>
                                        <div class="post-vacation-meta offset-top-10"><time class="text-dark" datetime="2018-01-01">June 3, 2018</time>
                                        </div>
                                    </div>
                                </article>
                                <article class="post-vacation">
                                    <a class="post-vacation-img-wrap bg-cover bg-image" href="course-details.html" style="background-image: url(assets/images/course-02-150x120.jpg)"></a>
                                    <div class="post-vacation-body">
                                        <div>
                                            <h6 class="post-vacation-title"><a href="course-details.html">Digital Marketing Course</a></h6>
                                        </div>
                                        <div class="offset-lg-top-10">
                                            <p>Maria Howard</p>
                                        </div>
                                        <div class="post-vacation-meta offset-top-10"><time class="text-dark" datetime="2018-01-01">June 3, 2018</time>
                                        </div>
                                    </div>
                                </article>
                                <article class="post-vacation">
                                    <a class="post-vacation-img-wrap bg-cover bg-image" href="course-details.html" style="background-image: url(assets/images/course-03-150x120.jpg)"></a>
                                    <div class="post-vacation-body">
                                        <div>
                                            <h6 class="post-vacation-title"><a href="course-details.html">Graphic Design Course</a></h6>
                                        </div>
                                        <div class="offset-lg-top-10">
                                            <p>Steven Carter</p>
                                        </div>
                                        <div class="post-vacation-meta offset-top-10"><time class="text-dark" datetime="2018-01-01">June 3, 2018</time>
                                        </div>
                                    </div>
                                </article>
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
                        <div class="h3 text-bold text-danger offset-top-15"><span class="counter">8</span><span class="symbol"></span></div>
                        <hr class="divider bg-gray-light divider-sm">
                        <div class="offset-top-10">
                            <h6 class="text-black font-accent">Student Campuses</h6>
                        </div>
                    </div>
                </div>
                <div class="cell-sm-6 cell-md-3">
                    <div class="counter-type-1"><span class="icon theme-icon icon-lg icon-outlined text-madison mdi mdi-account-multiple-outline"></span>
                        <div class="h3 text-bold text-danger offset-top-15"><span class="counter">6510</span><span class="symbol"></span></div>
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
                <div class="cell-sm-6 cell-md-5 cell-xl-3">
                    <article class="post-event">
                        <div class="post-event-img-overlay"><img class="img-responsive" src="{{asset('/view/assets/images/blog/events-01-420x420.jpg')}}" alt="" width="420" height="420">
                            <div class="post-event-overlay context-dark"><a class="btn btn-primary" href="#">Book Now</a>
                                <div class="offset-top-20"><a class="btn btn-default" href="event-page.html">Learn More</a></div>
                            </div>
                            <div class="post-event-meta text-center">
                                <div class="h3 text-bold reveal-inline-block reveal-lg-block">31</div>
                                <p class="reveal-inline-block reveal-lg-block">September</p><span class="text-bold reveal-inline-block reveal-lg-block inset-left-10 inset-lg-left-0">5:00pm</span>
                            </div>
                        </div>
                        <div class="unit unit-lg unit-lg-horizontal">
                            <div class="unit-body">
                                <div class="post-event-body text-lg-left">
                                    <h6><a href="event-page.html">Spacewalking Conference</a></h6>
                                    <ul class="list-inline list-inline-xs">
                                        <li><a href="team-member-profile.html"><span class="icon theme-icon icon-xxs mdi mdi-account-outline text-middle"></span><span class="inset-left-10 text-dark text-middle">Walter Stanley</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="cell-sm-6 cell-md-5 cell-xl-3">
                    <article class="post-event">
                        <div class="post-event-img-overlay"><img class="img-responsive" src="{{asset('/view/assets/images/blog/events-02-420x420.jpg')}}" alt="" width="420" height="420">
                            <div class="post-event-overlay context-dark"><a class="btn btn-primary" href="#">Book Now</a>
                                <div class="offset-top-20"><a class="btn btn-default" href="event-page.html">Learn More</a></div>
                            </div>
                            <div class="post-event-meta text-center">
                                <div class="h3 text-bold reveal-inline-block reveal-lg-block">05</div>
                                <p class="reveal-inline-block reveal-lg-block">May</p><span class="text-bold reveal-inline-block reveal-lg-block inset-left-10 inset-lg-left-0">5:00pm</span>
                            </div>
                        </div>
                        <div class="unit unit-lg unit-lg-horizontal">
                            <div class="unit-body">
                                <div class="post-event-body text-lg-left">
                                    <h6><a href="event-page.html">International Conference on Biomolecular Engineering</a></h6>
                                    <ul class="list-inline list-inline-xs">
                                        <li><a href="team-member-profile.html"><span class="icon theme-icon icon-xxs mdi mdi-account-outline text-middle"></span><span class="inset-left-10 text-dark text-middle">Raymond Salazar</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="cell-sm-6 cell-md-5 cell-xl-3">
                    <article class="post-event">
                        <div class="post-event-img-overlay"><img class="img-responsive" src="{{asset('/view/assets/images/blog/events-03-420x420.jpg')}}" alt="" width="420" height="420">
                            <div class="post-event-overlay context-dark"><a class="btn btn-primary" href="#">Book Now</a>
                                <div class="offset-top-20"><a class="btn btn-default" href="event-page.html">Learn More</a></div>
                            </div>
                            <div class="post-event-meta text-center">
                                <div class="h3 text-bold reveal-inline-block reveal-lg-block">17</div>
                                <p class="reveal-inline-block reveal-lg-block">June</p><span class="text-bold reveal-inline-block reveal-lg-block inset-left-10 inset-lg-left-0">5:00pm</span>
                            </div>
                        </div>
                        <div class="unit unit-lg unit-lg-horizontal">
                            <div class="unit-body">
                                <div class="post-event-body text-lg-left">
                                    <h6><a href="event-page.html">Graphic Design Workshop</a></h6>
                                    <ul class="list-inline list-inline-xs">
                                        <li><a href="team-member-profile.html"><span class="icon theme-icon icon-xxs mdi mdi-account-outline text-middle"></span><span class="inset-left-10 text-dark text-middle">Bruce Hawkins</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="cell-sm-6 cell-md-5 cell-xl-3">
                    <article class="post-event">
                        <div class="post-event-img-overlay"><img class="img-responsive" src="{{asset('/view/assets/images/blog/events-04-420x420.jpg')}}" alt="" width="420" height="420">
                            <div class="post-event-overlay context-dark"><a class="btn btn-primary" href="#">Book Now</a>
                                <div class="offset-top-20"><a class="btn btn-default" href="event-page.html">Learn More</a></div>
                            </div>
                            <div class="post-event-meta text-center">
                                <div class="h3 text-bold reveal-inline-block reveal-lg-block">06</div>
                                <p class="reveal-inline-block reveal-lg-block">June</p><span class="text-bold reveal-inline-block reveal-lg-block inset-left-10 inset-lg-left-0">5:00pm</span>
                            </div>
                        </div>
                        <div class="unit unit-lg unit-lg-horizontal">
                            <div class="unit-body">
                                <div class="post-event-body text-lg-left">
                                    <h6><a href="event-page.html">History of Art</a></h6>
                                    <ul class="list-inline list-inline-xs">
                                        <li><a href="team-member-profile.html"><span class="icon theme-icon icon-xxs mdi mdi-account-outline text-middle"></span><span class="inset-left-10 text-dark text-middle">Danielle Garza</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
            <div class="offset-top-50 offset-lg-top-56"><a class="btn btn-icon btn-icon-right btn-primary" href="events.html"><span class="icon fa-arrow-right"></span><span>View Event Calendar</span></a></div>
        </div>
    </section>
    <section class="section theme-background bg-cover section-70 section-xl-100 section-xl-bottom-114 bg-madison context-dark position-relative">
        <div class="owl-carousel owl-carousel-default veil-xl-owl-dots veil-owl-nav reveal-xl-owl-nav" data-items="1" data-nav="true" data-autoplay="true" data-dots="true" data-nav-class="[&quot;owl-prev fa-angle-left&quot;, &quot;owl-next fa-angle-right&quot;]">
            <div>
                <div class="shell">
                    <div class="range range-xs-center range-xs-middle">
                        <div class="cell-sm-9 cell-sm-push-1">
                            <div class="quote-classic-boxed text-center">
                                <div class="quote-body"><q>When you work full-time while studying, you need to sacrifice personal time, which meant that I took my studies seriously. My ambition was not only to complete my degree successfully but to make the best out of the time spent studying.</q>
                                    <div class="offset-top-30 text-center"><cite class="font-accent">Debra Banks</cite>
                                        <div class="offset-top-5">
                                            <p class="text-light text-italic">Diploma for Graduates in Art, USA</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="shell">
                    <div class="range range-xs-center range-xs-middle">
                        <div class="cell-sm-9 cell-sm-push-1">
                            <div class="quote-classic-boxed text-center">
                                <div class="quote-body"><q>When I researched the programmes available I realized that the University was offering exactly the type of programme in international development that interested me.</q>
                                    <div class="offset-top-30 text-center"><cite class="font-accent">Steven Alvarez</cite>
                                        <div class="offset-top-5">
                                            <p class="text-light text-italic">Diploma for Graduates in International Development, USA</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section theme-background bg-cover section-70 section-md-114 bg-catskill">

@endsection
