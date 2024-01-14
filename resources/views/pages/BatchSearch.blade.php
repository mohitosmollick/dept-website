@extends('layouts.app')

@section('content')

    <section class="section theme-background bg-cover section-70 section-sm-90 bg-default">
        <div class="shell">
            <div class="range range-xs-center">


                <div class="cell-sm-6">
                    <!-- RD Search Form-->
                    <form class="form-search rd-search" action="{{route('batchStudent')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <select class="form-select" id="inputGroupSelect04"  name="id" id="batches">
                                <option value="" selected>Batch...</option>
                                @foreach($all_batch as $batch)
                                <option value="{{$batch->id}}">{{$batch->batch_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <button class="mt-5 btn btn-primary" type="submit">search</button>
                    </form>

                </div>
            </div>
        </div>
    </section>




    <section class="section theme-background bg-cover section-70 section-md-114 bg-default">
        <div class="shell">
            <h4 class="text-bold"> Search Batch  </h4>
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
                            <h6 class="text-bold text-danger"><a href="team-member-profile.html">{{$student->name}}</a></h6>
                        </div>
                        <div class="offset-top-5">
                            <p>{{$student->jobname}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
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
