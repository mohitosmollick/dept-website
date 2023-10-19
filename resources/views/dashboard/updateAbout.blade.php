@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h3>Add About</h3>
                    @if(session('success'))
                        <span class="text-success">{{session('success')}}</span>
                    @endif

                </div>

                <div class="card-body">
                    <form method="POST" action="{{route('updateChairman')}}" enctype="multipart/form-data" >
                        @csrf

                        <div class="form-group">
                            <label for="name">Chairmen Name</label>
                            <input id="name" type="text" name="chairmen_name"  class="form-control @error('chairmen_name') is-invalid @enderror " value="{{ $about->chairmen_name}}"  autofocus required >
                            <input  type="hidden" class="form-control" name="id"  value="{{$about->id}}">
                            @error('chairmen_name') <span class="text-danger">{{$message}}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label class="form-label form-label-outside" for="bio">Bio</label>
                            <textarea class="form-control form-validation-inside  @error('bio') is-invalid @enderror"  required  id="bio" name="bio"  style="height: 100px">{{ $about->bio}}</textarea>
                            @error('bio') <span class="text-danger">{{$message}}</span> @enderror
                        </div>

                        <div class="form-group">
                            <label class="form-label form-label-outside" for="about">About Department(1000+ words)</label>
                            <textarea class="form-control form-validation-inside  @error('about') is-invalid @enderror" required  id="about" name="about" style="height: 200px">{{ $about->about }}</textarea>
                            @error('about') <span class="text-danger">{{$message}}</span> @enderror
                        </div>


                        <div class="form-group mt-2">
                            <button type="submit"  class="btn btn-danger btn-sm">Update</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h3>Image Upload</h3>
                </div>

                <p>@if(session('successI')) <small class="text-success ml-4"> {{session('successI')}}</small> @endif</p>
                <div class="card-body">
                    <form method="POST" action="{{route('updatePhoto')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">Image</label>
                            <input    type="file" class="form-control" name="image" >
                            <img class="m-4" src="{{asset('uploads/Chairman')}}/{{$about->image}}" width="70px" height="55px"/>
                            <input  type="hidden" class="form-control" name="id"  value="{{$about->id}}">
                            @error('image')<small class="text-danger"> {{$message}}</small>@enderror
                        </div>
                        <div class="form-group mt-2">
                            <button type="submit"  class="btn btn-danger btn-sm">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


    </div>


@endsection

@section('footer_script')
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
                title: 'Category add successfully'
            })
        </script>
    @endif

    <script>
        $('.delete').click(function () {
            var link = $(this).attr('name');
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = link;
                }
            })
        })
    </script>

    @if(session('delete'))
        <script>
            Swal.fire(
                'Deleted!',
                'Category has been deleted.',
                'success'
            )
        </script>

    @endif





@endsection
