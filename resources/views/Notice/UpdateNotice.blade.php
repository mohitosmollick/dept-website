@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h3>Update Notice</h3>
                    @if(session('success'))
                        <span class="text-success">{{session('success')}}</span>
                    @endif
                </div>

                <div class="card-body">
                    <form action="{{route('updateNotice')}}" method="POST" >
                        @csrf
                        <div class="range range-12">
                            <div class="cell-xs-12">
                                <div class="form-group">
                                    <label class="form-label form-label-outside" for="post-title">Post Title</label>
                                    <input class="form-control @error('title') is-invalid @enderror" id="post-title" value="{{$notice->title}}"   type="text" name="title" autofocus required >
                                    @error('title') <span class="text-danger">{{$message}}</span> @enderror
                                    <input  type="hidden" class="form-control" name="id"  value="{{$notice->id}}">
                                </div>
                            </div>
                        </div>
                        <div class="text-center text-md-left offset-top-20">
                            <button type="submit"  class="btn btn-danger btn-sm"> Add Post</button>
                            <a href="{{route('addNotice')}}" class="btn btn-secondary btn-sm">Back</a>
                        </div>
                    </form>
                </div>
            </div>

        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h3>Update Image</h3>
                    @if(session('successImg'))
                        <span class="text-success">{{session('successImg')}}</span>
                    @endif
                    <img class="m-4" src="{{asset('uploads/Notice')}}/{{$notice->image}}" width="70px" height="55px"/>
                </div>

                <div class="card-body">
                    <form action="{{route('updateNoticeImg')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="range range-12">
                            <div class="cell-xs-12">
                                <div class="form-group">
                                    <label for="image">Image</label>
                                    <input  type="file" class="form-control" name="image" id="image" >
                                    @error('image')<small class="text-danger"> {{$message}}</small>@enderror
                                    <input  type="hidden" class="form-control" name="id"  value="{{$notice->id}}">
                                </div>
                            </div>
                        </div>
                        <div class="text-center text-md-left offset-top-20">
                            <button type="submit"  class="btn btn-danger btn-sm"> Add Post</button>
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
