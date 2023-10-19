@extends('layouts.app')

@section('content')

    <section class="section breadcrumb-modern context-dark parallax-container" data-parallax-img="{{asset('view/assets/images/parallax-03.jpg')}}">
        <div class="parallax-content section-30 section-sm-70">
            <div class="shell">
                <h2 class="veil reveal-sm-block">Search Results</h2>
                <div class="offset-sm-top-35">
                    <ul class="list-inline list-inline-lg list-inline-dashed p d-flex justify-content-center">
                        <li><a href="index.html">Home</a></li>
                        <li>Search</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="section theme-background bg-cover section-70 section-sm-90 bg-default">
        <div class="shell">
            <div class="range range-xs-center">
                <div class="cell-sm-4">
                    <select class="select" data-mdb-filter="true">
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                        <option value="4">Four</option>
                        <option value="5">Five</option>
                        <option value="6">Six</option>
                        <option value="7">Seven</option>
                        <option value="8">Eight</option>
                        <option value="9">Nine</option>
                        <option value="10">Ten</option>
                    </select>
                </div>

                <div class="cell-sm-6">
                    <!-- RD Search Form-->
                    <form class="form-search rd-search" action="" method="GET">
                        <div class="form-group"><input class="form-search-input form-control" type="text" name="s" autocomplete="off"></div><button class="form-search-submit" type="submit"><span class="icon fa-search"></span></button>
                    </form>
                    <div class="offset-top-60">
                        <div class="rd-search-results"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section class="section theme-background bg-cover section-70 section-md-114 bg-default">
        <div class="shell">
            <h2 class="text-bold"> Search Results </h2>
            <hr class="divider bg-madison">
            <div class="range range-30 text-md-left offset-top-60 grid" style="--bs-columns: 4; --bs-gap: .1rem;">

                @foreach($all_students as $student)
                <div class="card p-2 mx-2">
                    <figure class="thumbnail-classic thumbnail-md">
                        <div class="thumbnail-classic-img-wrap">
                            <img class="card-img-top" src="{{asset('uploads/users')}}/{{$student->image}}" width="270" height="270" alt="">
                            <figcaption class="thumbnail-classic-caption text-center">
                                <div class="offset-top-20 veil reveal-lg-block">
                                    <a href="team-member-profile.html" class="btn btn-sm btn-outline-danger pull-center shadow-none">See about</a>
                                </div>
                            </figcaption>
                        </div>
                    </figure>
                    <div class="px-3 pb-2">
                        <div class="offset-top-20">
                            <h6 class="text-bold text-danger"><a href="team-member-profile.html">Kathy Gibson</a></h6>
                        </div>
                        <div class="offset-top-5">
                            <p>Psychology</p>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class=" card p-2 mx-2">
                    <figure class="thumbnail-classic thumbnail-md">
                        <div class="thumbnail-classic-img-wrap">
                            <img class="card-img-top" src="assets/images/users/user-julie-weaver-270x270.jpg" width="270" height="270" alt="">
                            <figcaption class="thumbnail-classic-caption text-center">
                                <div class="offset-top-20 veil reveal-lg-block">
                                    <a href="#" class="btn btn-sm btn-danger pull-center shadow-none">See More <span class="icon inset-left-10 theme-icon icon-xs text-middle text-madison mdi-arrow-right mdi text-light"></span></a>
                                </div>
                            </figcaption>
                        </div>
                    </figure>
                    <div class="px-3 pb-2">
                        <div class="offset-top-20">
                            <h6 class="text-bold text-danger"><a href="team-member-profile.html">Julie Weaver</a></h6>
                        </div>
                        <div class="offset-top-5">
                            <p>Economics</p>
                        </div>
                    </div>
                </div>

                <div class="card p-2 mx-2">
                    <figure class="thumbnail-classic thumbnail-md">
                        <div class="thumbnail-classic-img-wrap">
                            <img class="card-img-top" src="assets/images/users/user-peter-wong-270x270.jpg" width="270" height="270" alt="">
                            <figcaption class="thumbnail-classic-caption text-center">
                                <div class="offset-top-20 veil reveal-lg-block">
                                    <a href="#" class="btn btn-sm btn-danger pull-center shadow-none">See More <span class="icon inset-left-10 theme-icon icon-xs text-middle text-madison mdi-arrow-right mdi text-light"></span></a>
                                </div>
                            </figcaption>
                        </div>
                    </figure>
                    <div class="px-3 pb-2">
                        <div class="offset-top-20">
                            <h6 class="text-bold text-danger"><a href="team-member-profile.html">William Barnett</a></h6>
                        </div>
                        <div class="offset-top-5">
                            <p>Geology &amp; Geophysics</p>
                        </div>
                    </div>
                </div>
                <div class="card p-2 mx-2">
                    <figure class="thumbnail-classic thumbnail-md">
                        <div class="thumbnail-classic-img-wrap">
                            <img class="card-img-top" src="assets/images/users/user-russell-weber-270x270.jpg" width="270" height="270" alt="">
                            <figcaption class="thumbnail-classic-caption text-center">
                                <div class="offset-top-20 veil reveal-lg-block">
                                    <a href="#" class="btn btn-sm btn-danger pull-center shadow-none">See More <span class="icon inset-left-10 theme-icon icon-xs text-middle text-madison mdi-arrow-right mdi text-light"></span></a>
                                </div>
                            </figcaption>
                        </div>
                    </figure>
                    <div class="px-3 pb-2">
                        <div class="offset-top-20">
                            <h6 class="text-bold text-danger"><a href="team-member-profile.html">Bruce Hawkins</a></h6>
                        </div>
                        <div class="offset-top-5">
                            <p>Graphic Design</p>
                        </div>
                    </div>
                </div>
                <div class="card p-2 mx-2">
                    <figure class="thumbnail-classic thumbnail-md">
                        <div class="thumbnail-classic-img-wrap">
                            <img class="card-img-top" src="assets/images/users/teacher03.jpg" width="270" height="270" alt="">
                            <figcaption class="thumbnail-classic-caption text-center">
                                <div class="offset-top-20 veil reveal-lg-block">
                                    <a href="#" class="btn btn-sm btn-danger pull-center shadow-none">See More <span class="icon inset-left-10 theme-icon icon-xs text-middle text-madison mdi-arrow-right mdi text-light"></span></a>
                                </div>
                            </figcaption>
                        </div>
                    </figure>
                    <div class="px-3 pb-2">
                        <div class="offset-top-20">
                            <h6 class="text-bold text-danger">Sani Dory</h6>
                        </div>
                        <div class="offset-top-5">
                            <p>Psychology</p>
                        </div>
                    </div>
                </div>
                <div class="card p-2 mx-2">
                    <figure class="thumbnail-classic thumbnail-md">
                        <div class="thumbnail-classic-img-wrap">
                            <img class="card-img-top" src="assets/images/users/teacher04.jpg" width="270" height="270" alt="">
                            <figcaption class="thumbnail-classic-caption text-center">
                                <div class="offset-top-20 veil reveal-lg-block">
                                    <a href="#" class="btn btn-sm btn-danger pull-center shadow-none">See More <span class="icon inset-left-10 theme-icon icon-xs text-middle text-madison mdi-arrow-right mdi text-light"></span></a>
                                </div>
                            </figcaption>
                        </div>
                    </figure>
                    <div class="px-3 pb-2">
                        <div class="offset-top-20">
                            <h6 class="text-bold text-danger">Jari Moral</h6>
                        </div>
                        <div class="offset-top-5">
                            <p>Economics</p>
                        </div>
                    </div>
                </div>
                <div class="card p-2 mx-2">
                    <figure class="thumbnail-classic thumbnail-md">
                        <div class="thumbnail-classic-img-wrap">
                            <img class="card-img-top" src="assets/images/users/teacher05.jpg" width="270" height="270" alt="">
                            <figcaption class="thumbnail-classic-caption text-center">
                                <div class="offset-top-20 veil reveal-lg-block">
                                    <a href="#" class="btn btn-sm btn-danger pull-center shadow-none">See More <span class="icon inset-left-10 theme-icon icon-xs text-middle text-madison mdi-arrow-right mdi text-light"></span></a>
                                </div>
                            </figcaption>
                        </div>
                    </figure>
                    <div class="px-3 pb-2">
                        <div class="offset-top-20">
                            <h6 class="text-bold text-danger"><a href="team-member-profile.html">A</a>lex Gollah</h6>
                        </div>
                        <div class="offset-top-5">
                            <p>Geology &amp; Geophysics</p>
                        </div>
                    </div>
                </div>
                <div class="card p-2 mx-2">
                    <figure class="thumbnail-classic thumbnail-md">
                        <div class="thumbnail-classic-img-wrap">
                            <img class="card-img-top" src="assets/images/users/teacher06.jpg" width="270" height="270" alt="">
                            <figcaption class="thumbnail-classic-caption text-center">
                                <div class="offset-top-20 veil reveal-lg-block">
                                    <a href="#" class="btn btn-sm btn-danger pull-center shadow-none">See More <span class="icon inset-left-10 theme-icon icon-xs text-middle text-madison mdi-arrow-right mdi text-light"></span></a>
                                </div>
                            </figcaption>
                        </div>
                    </figure>
                    <div class="px-3 pb-2">
                        <div class="offset-top-20">
                            <h6 class="text-bold text-danger">Maxwell Dolli</h6>
                        </div>
                        <div class="offset-top-5">
                            <p>Graphic Design</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




@endsection

@section('footer_script')
    @if(session('success_pass'))
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 2000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })

            Toast.fire({
                icon: 'success',
                title: 'Password change successfully'
            })
        </script>
    @endif

    @if(session('success'))
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 2000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })

            Toast.fire({
                icon: 'success',
                title: 'Name change successfully'
            })
        </script>
    @endif




@endsection
