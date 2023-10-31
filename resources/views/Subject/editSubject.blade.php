@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h3>Update Subject</h3>
                    @if(session('success'))
                        <span class="text-success">{{session('success')}}</span>
                    @endif

                </div>

                <div class="card-body">
                    <form method="POST" action="{{route('updateSubject')}}"  >
                        @csrf

                        <div class="form-group">
                            <label for="name">Chairmen Name</label>
                            <input id="name" type="text" name="subject_name"  class="form-control @error('subject_name') is-invalid @enderror" value="{{$subject->subject_name}}" autofocus required >
                            @error('subject_name') <span class="text-danger">{{$message}}</span> @enderror
                            <input  type="hidden" class="form-control" name="id"  value="{{$subject->id}}">
                        </div>
                        <div class="form-group">
                            <label class="form-label form-label-outside" for="bio">Bio</label>
                            <textarea class="form-control form-validation-inside  @error('start') is-invalid @enderror"  required  id="bio" name="start"  style="height: 100px">{{$subject->start}}</textarea>
                            @error('start') <span class="text-danger">{{$message}}</span> @enderror
                        </div>

                        <div class="form-group">
                            <label class="form-label form-label-outside" for="about">About Department(1000+ words)</label>
                            <textarea class="form-control form-validation-inside  @error('about') is-invalid @enderror" required  id="about" name="about" style="height: 200px">{{$subject->about}}</textarea>
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
                    <h3>Update Image</h3>
                    @if(session('successImg'))
                        <span class="text-success">{{session('successImg')}}</span>
                    @endif
                    <img class="m-4" src="{{asset('uploads/Subject')}}/{{$subject->image}}" width="70px" height="55px"/>

                </div>

                <div class="card-body">
                    <form method="POST" action="{{route('SubjectImageUp')}}" enctype="multipart/form-data" >
                        @csrf
                        <div class="form-group">
                            <label for="">Image</label>

                            <input    type="file" class="form-control" name="image"  value="">
                            @error('image')<small class="text-danger"> {{$message}}</small>@enderror
                            <input  type="hidden" class="form-control" name="id"  value="{{$subject->id}}">
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
