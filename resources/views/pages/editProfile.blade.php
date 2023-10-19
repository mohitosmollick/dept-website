
@extends('layouts.app')

@section('content')

    <section class="section breadcrumb-modern context-dark parallax-container" data-parallax-img="{{asset('view/assets/images/parallax-03.jpg')}}">
        <div class="parallax-content section-30 section-sm-70">
            <div class="shell">
                <h2 class="veil reveal-sm-block">Edit Your Profile</h2>
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
            <div class="range range-65 range-xs-center">
                <div class="cell-md-4 text-md-left">

                    <div class="card">
                        <div class="card-header">
                            <h3>Image Upload</h3>
                        </div>
                        <img width="50px" height="50px" class="rounded" src="{{asset('uploads/users')}}/{{Auth::user()->image}}"   />

                        <p>@if(session('success')) <small class="text-success ml-4"> {{session('success')}}</small> @endif</p>
                        <div class="card-body">
                            <form method="POST" action="{{route('updateProfileImage')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="">Image</label>
                                    <input   style="font-size: 1.5rem" type="file" class="form-control" name="image"  value="">
                                    @error('image')<small class="text-danger"> {{$message}}</small>@enderror
                                </div>
                                <div class="form-group mt-2">
                                    <button type="submit"  class="btn btn-danger btn-sm">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                <div class="cell-md-4 text-md-left">
                    <div class="card">
                        <div class="card-header">
                            <h3>Your Name</h3>
                        </div>

                    <h4>@if(session('successN')) <small class="text-success ml-4"> {{session('successN')}}</small> @endif</h4>
                    <div class="card-body">
                        <form  action="{{route('nameUpdate')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="name">User Name</label>
                                <input style="font-size: 1.5rem" id="name" type="text" class="form-control" name="name"  value="{{Auth::User()->name}}" />
                                <input   type="hidden" class="form-control" name="id"  value="" />
                            </div>
                            <div class="form-group mt-2">
                                <button type="submit"  class="btn btn-danger btn-sm"> Update</button>
                            </div>
                        </form>
                    </div>
                    </div>
                </div>
                <div class="cell-md-4 text-md-left">
                    <div class="card">
                        <div class="card-header">
                            <h3>Job Name</h3>
                        </div>

                        <h4>@if(session('successJ')) <small class="text-success ml-5"> {{session('successJ')}}</small> @endif</h4>
                        <div class="card-body">
                            <form  action="{{route('jobUpdate')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="jobname">User Name</label>
                                    <input  style="font-size: 1.5rem" id="jobname" type="text" class="form-control" name="jobname"  value="{{Auth::User()->jobname}}" />
                                    <input  type="hidden" class="form-control" name="id"  value="" />
                                </div>
                                <div class="form-group mt-2">
                                    <button type="submit"  class="btn btn-danger btn-sm">Job Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="cell-md-4 text-md-left">
                    <div class="card">
                        <div class="card-header">
                            <h3>Change Password</h3>
                            <h4>@if(session('success_pass')) <small class="text-success  ml-4"> {{session('success_pass')}}</small> @endif</h4>
                            <h4>@if(session('taken_pass')) <small class="text-danger  ml-4"> {{session('taken_pass')}}</small> @endif</h4>
                            <h4>@if(session('wrong_pass')) <small class="text-danger  ml-4"> {{session('wrong_pass')}}</small> @endif</h4>
                        </div>
                        <div class="card-body">

                            <form method="POST" action="{{route('passwordUpdate')}}">
                                @csrf
                                <div class="form-group">
                                    <label for="">Old Password</label>
                                    <input  type="password" class="form-control" name="old_password"  value="">
                                    @if(session('old_error')) <small class="text-danger"> {{session('old_error')}}</small> @endif
                                    @error('old_password') <small class="text-danger"> {{$message}}</small> @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">New Password</label>
                                    <input  type="password" class="form-control" name="password"  value="">
                                    @error('password') <small class="text-danger"> {{$message}}</small> @enderror
                                    @if(session('new_error')) <small class="text-danger"> {{session('new_error')}}</small> @endif
                                </div>
                                <div class="form-group">
                                    <label for="">Confirm Password</label>
                                    <input  type="password" class="form-control" name="password_confirmation"  value="">
                                    @error('password_confirmation') <small class="text-danger"> {{$message}}</small> @enderror
                                </div>
                                <div class="form-group mt-2">
                                    <button type="submit"  class="btn btn-danger btn-sm">Update</button>
                                </div>
                            </form>
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
