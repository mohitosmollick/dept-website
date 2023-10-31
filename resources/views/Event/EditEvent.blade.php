@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h3>Update Event</h3>
                    @if(session('success'))
                        <span class="text-success">{{session('success')}}</span>
                    @endif
                </div>
                <div class="card-body">
                    <form action="{{route('updateEvent')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="range range-12">
                            <div class="cell-xs-12">
                                <div class="form-group">
                                    <label class="form-label form-label-outside" for="post-title">Post Title</label>
                                    <input class="form-control @error('title') is-invalid @enderror" id="post-title" value="{{$event->title}}"   type="text" name="title" autofocus required >
                                    @error('title') <span class="text-danger">{{$message}}</span> @enderror
                                    <input  type="hidden" class="form-control" name="id"  value="{{$event->id}}">
                                </div>
                            </div>
                            <div class="cell-xs-12">
                                <div class="form-group">
                                    <label class="form-label form-label-outside" for="desp_one">Column One</label>
                                    <textarea class="form-control form-validation-inside  @error('desp_one') is-invalid @enderror"  required  id="desp_one" name="desp_one" style="height: 100px">{{$event->desp_one}}</textarea>
                                    @error('desp_one') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>
                            <div class="cell-xs-12">
                                <div class="form-group">
                                    <label class="form-label form-label-outside" for="desp_two">Column Two</label>
                                    <textarea class="form-control form-validation-inside  @error('desp_two') is-invalid @enderror"  required  id="desp_two" name="desp_two"  style="height: 100px">{{$event->desp_two}}</textarea>
                                    @error('desp_two') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>

                            <div class="cell-xs-12">
                                <div class="form-group">
                                    <label class="form-label form-label-outside" for="location">Post Title</label>
                                    <input class="form-control @error('location') is-invalid @enderror" id="location" value="{{$event->location}}"  type="text" name="location" autofocus required >
                                    @error('location') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>

                        </div>
                        <div class="text-center text-md-left offset-top-20">
                            <button type="submit"  class="btn btn-danger btn-sm">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h3>Image Update</h3>
                    @if(session('successImg'))
                        <span class="text-success">{{session('successImg')}}</span>
                    @endif
                </div>
                <div class="card-body">
                    <form action="{{route('updateEventImg')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="range range-12">

                            <div class="cell-xs-12">
                                <div class="form-group">
                                    <label for="images">Image</label>
                                    <img  src="{{asset('/dashboard/events')}}/{{$event->images_one}}" width="70px" height="55px"  />
                                    <input  type="file" class="form-control" name="images" id="images" value="{{$event->images_one}}">
                                    @error('images')<small class="text-danger"> {{$message}}</small>@enderror
                                    <input  type="hidden" class="form-control" name="id"  value="{{$event->id}}">
                                </div>
                            </div>


                        </div>
                        <div class="text-center text-md-left offset-top-20">
                            <button type="submit"  class="btn btn-danger btn-sm"> Update Image</button>
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
