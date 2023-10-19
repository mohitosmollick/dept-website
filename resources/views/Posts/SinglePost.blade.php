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
    <section class="section theme-background bg-cover section-70 section-md-114 bg-default">
        <div class="shell">
            <div class="range range-50 range-xs-center">
                <div class="cell-sm-8 cell-md-8 text-md-left">
                    <h3 class="text-bold">{{$single_post->title}}</h3>
                    <hr class="divider bg-madison hr-md-left-0">
                    <div class="offset-md-top-20 offset-top-10">
                        <ul class="post-news-meta list list-inline list-inline-xl">
                            <li><span class="icon theme-icon icon-xs mdi mdi-calendar-clock text-middle text-madison"></span><span class="text-middle inset-left-10 text-italic text-black">2 days ago</span></li>
                            <li><span class="icon theme-icon icon-xs mdi mdi-account text-middle text-madison"></span><span class="text-middle inset-left-10 text-italic text-danger">Ronald Austin</span></li>
                        </ul>
                    </div>
                    <div class="offset-top-30"><img class="img-responsive" src="{{asset('/uploads/Posts')}}/{{$single_post->images_one}}" width="770" height="500" alt="">
                        <div class="offset-top-30">
                            <p>Most community college students qualify for need-based aid, experts say. Many community colleges offer promise programs, which offer tuition-free awards to eligible students – mainly to students with Pell grant eligibility.
                                For one Massachusetts teen choosing between a two-year or four-year college, cost was the deciding factor.</p>
                        </div>
                        <p>Estime had hoped to attend Smith College, but says the school costs too much, at more than $45,000 a year for tuition and fees. The liberal arts major enrolled in Holyoke Community College last fall and plans to transfer to
                            nearby Smith or the University of Massachusetts–Amherst for her junior year, depending on the financial aid award. Estime, in the meantime, has managed to keep her debt under $2,000, paying for college with private scholarships,
                            Pell grants and a small loan.</p>
                    </div>
                    <div class="offset-top-30"><img class="img-responsive" src="{{asset('/uploads/Posts')}}/{{$single_post->images_two}}" width="770" height="500" alt="">
                        <div class="offset-top-30">
                            <p>But those are just three ways to pay for community college. Here are some ways to pay for community college other than working part or full time.</p>
                        </div>
                        <p>Pell grants: Pell grants function like vouchers for students to pay for higher education-related expenses, covering items such as books, transportation or tuition. Awards are based on financial need to students who have not
                            earned a bachelor's degree. More than two-thirds of Pell grants go to families making less than $50,000, according to Columbia University's Community College Research Center at Teachers College. These awards are also contingent
                            on the student's household size.</p>
                    </div>
                    <div class="offset-top-30 post-news-meta range range-20 range-xs-middle range-xs-center">
                        <div class="cell-md-6">
                            <div class="tags-list group group-sm reveal-inline-block text-middle"><a class="btn btn-xs btn-primary text-italic" href="#">News</a><a class="btn btn-xs btn-primary text-italic" href="#">Colleges</a><a class="btn btn-xs btn-primary text-italic" href="#">Liberal Arts</a><a class="btn btn-xs btn-primary text-italic"
                                                                                                                                                                                                                                                                                                              href="#">University</a></div>
                        </div>
                        <div class="cell-md-6">
                            <ul class="list-inline list-inline-xs list-inline-madison pull-md-right text-middle d-flex">
                                <li>
                                    <a class="icon theme-icon icon-xxs fa-facebook icon-circle icon-gray-light-filled" href="#"></a>
                                </li>
                                <li>
                                    <a class="icon theme-icon icon-xxs fa-twitter icon-circle icon-gray-light-filled" href="#"></a>
                                </li>
                                <li>
                                    <a class="icon theme-icon icon-xxs fa-google icon-circle icon-gray-light-filled" href="#"></a>
                                </li>
                                <li>
                                    <a class="icon theme-icon icon-xxs fa-instagram icon-circle icon-gray-light-filled" href="#"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="offset-top-50">
                        <h6 class="text-bold">Author</h6>
                        <div class="text-subline"></div>
                        <div class="offset-top-30">
                            <div class="unit unit-sm unit-sm-horizontal unit-spacing-lg">
                                <div class="unit-left"><img class="img-responsive img-rounded reveal-inline-block" src="assets/images/users/user-ronald-austin-170x170.jpg" width="170" height="170" alt=""></div>
                                <div class="unit-body text-sm-left">
                                    <h6 class="text-bold text-danger">Ronald Austin</h6>
                                    <p>I am a professional blogger interested in everything taking place in cyberspace. I am running this website and try my best to make it a better place to visit. I post only the articles that are related to the topic
                                        and thoroughly analyze all visitors’ comments to cater to their needs better.</p>
                                </div>
                            </div>
                        </div>
{{--                        <div class="offset-md-top-50 offset-top-40">--}}
{{--                            <h6 class="text-bold">Comments</h6>--}}
{{--                            <div class="text-subline"></div>--}}
{{--                            <form class="rd-mailform text-left offset-top-20" data-form-output="form-output-global" data-form-type="contact" method="post" action="">--}}
{{--                                <div class="range range-12">--}}
{{--                                    <div class="cell-sm-6">--}}
{{--                                        <div class="form-group"><label class="form-label form-label-outside" for="contact-us-first-name">Name</label><input class="form-control form-validation-inside" id="contact-us-first-name" type="text" name="first-name" data-constraints="@Required"></div>--}}
{{--                                    </div>--}}
{{--                                    <div class="cell-sm-6">--}}
{{--                                        <div class="form-group"><label class="form-label form-label-outside" for="contact-us-email">E-mail</label><input class="form-control form-validation-inside" id="contact-us-email" type="email" name="email" data-constraints="@Required @Email"></div>--}}
{{--                                    </div>--}}
{{--                                    <div class="cell-xs-12">--}}
{{--                                        <div class="form-group"><label class="form-label form-label-outside" for="contact-us-message">Comments</label><textarea class="form-control form-validation-inside" id="contact-us-message" name="commets" data-constraints="@Required"></textarea></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="offset-top-20 text-center text-sm-left"><button class="btn btn-primary" type="submit">Send Message</button></div>--}}
{{--                            </form>--}}
{{--                        </div>--}}
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
                                <ul class="list list-marked list-marked-primary">
                                    <li><a href="#">News</a></li>
                                    <li><a href="#">University</a></li>
                                    <li><a href="#">Global Education</a></li>
                                    <li><a href="#">Law</a></li>
                                    <li><a href="#">Colleges</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="aside-item">
                            <h6 class="text-bold">Gallery</h6>
                            <div class="text-subline"></div>
                            <div class="range range-condensed range-custom offset-top-20" data-lightgallery="group">
                                <div class="cell-6">
                                    <a class="thumbnail-default" href="assets/images/portfolio/gallery-10-1200x800-original.jpg" data-lightgallery="item"><img src="assets/images/portfolio/gallery-10-320x320.jpg" alt="" width="320" height="320"><span class="icon theme-icon fa-search-plus"></span></a>
                                </div>
                                <div class="cell-6">
                                    <a class="thumbnail-default" href="assets/images/portfolio/gallery-11-1200x800-original.jpg" data-lightgallery="item"><img src="assets/images/portfolio/gallery-11-320x320.jpg" alt="" width="320" height="320"><span class="icon theme-icon fa-search-plus"></span></a>
                                </div>
                                <div class="cell-6">
                                    <a class="thumbnail-default" href="assets/images/portfolio/gallery-12-1200x800-original.jpg" data-lightgallery="item"><img src="assets/images/portfolio/gallery-12-320x320.jpg" alt="" width="320" height="320"><span class="icon theme-icon fa-search-plus"></span></a>
                                </div>
                                <div class="cell-6">
                                    <a class="thumbnail-default" href="assets/images/portfolio/gallery-13-1200x800-original.jpg" data-lightgallery="item"><img src="assets/images/portfolio/gallery-13-320x320.jpg" alt="" width="320" height="320"><span class="icon theme-icon fa-search-plus"></span></a>
                                </div>
                                <div class="cell-6">
                                    <a class="thumbnail-default" href="assets/images/portfolio/gallery-14-533x800-original.jpg" data-lightgallery="item"><img src="assets/images/portfolio/gallery-14-320x320.jpg" alt="" width="320" height="320"><span class="icon theme-icon fa-search-plus"></span></a>
                                </div>
                                <div class="cell-6">
                                    <a class="thumbnail-default" href="assets/images/portfolio/gallery-15-1200x800-original.jpg" data-lightgallery="item"><img src="assets/images/portfolio/gallery-15-320x320.jpg" alt="" width="320" height="320"><span class="icon theme-icon fa-search-plus"></span></a>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('footer_script')
    <script>
        $('#category').change(function () {
            var category_id = $(this).val();

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: 'POST',
                url:'/getSubCategory',
                data:{'category_id':category_id},
                success:function(data){
                   $('#subcategory').html(data);
            }
            })

        })
    </script>
@endsection
