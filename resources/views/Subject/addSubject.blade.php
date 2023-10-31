@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h3>Add Subject</h3>
                    @if(session('success'))
                        <span class="text-success">{{session('success')}}</span>
                    @endif
                    <img src="{{asset('uploads/Subject')}}/{{session('image')}}" width="50px" height="35px"/>

                </div>

                <div class="card-body">
                    <form method="POST" action="{{route('addSubject')}}" enctype="multipart/form-data" >
                        @csrf

                        <div class="form-group">
                            <label for="name">Chairmen Name</label>
                            <input id="name" type="text" name="subject_name"  class="form-control @error('subject_name') is-invalid @enderror "  autofocus required >
                            @error('subject_name') <span class="text-danger">{{$message}}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label class="form-label form-label-outside" for="bio">Bio</label>
                            <textarea class="form-control form-validation-inside  @error('start') is-invalid @enderror"  required  id="bio" name="start"  style="height: 100px"></textarea>
                            @error('start') <span class="text-danger">{{$message}}</span> @enderror
                        </div>

                        <div class="form-group">
                            <label class="form-label form-label-outside" for="about">About Department(1000+ words)</label>
                            <textarea class="form-control form-validation-inside  @error('about') is-invalid @enderror" required  id="about" name="about" style="height: 200px"></textarea>
                            @error('about') <span class="text-danger">{{$message}}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Image</label>
                            <input    type="file" class="form-control" name="image"  value="">
                            @error('image')<small class="text-danger"> {{$message}}</small>@enderror
                        </div>


                        <div class="form-group mt-2">
                            <button type="submit"  class="btn btn-danger btn-sm">Save</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3>Subject List</h3>
                    @if(session('delete'))
                        <span class="text-danger">{{session('delete')}}</span>
                    @endif
                </div>
                <div class="card-body">

                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>SL</th>
                            <th>Subject Name</th>
                            <th>Added By</th>
                            <th>About</th>
                            <th>Image</th>
                            <th>Created-at</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($Subject as $key=>$value)

                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$value->subject_name}}</td>
                                <td>{{$value->start}}</td>
                                <td>{{$value->about}}</td>
                                <td><img src="{{asset('uploads/Subject')}}/{{$value->image}}" width="50px" height="35px" /></td>
                                <td>{{$value->created_at->diffForHumans()}}</td>
                                <td>
                                    <button name="{{route('deleteSubject', $value->id)}}" type="button" class="delete btn btn-danger shadow btn-xs sharp "><i class="fa fa-trash mt-1"></i></button>
                                    <a href="{{route('editSubject', $value->id)}}"  class=" btn btn-primary shadow btn-xs sharp "><i class="fa fa-pencil mt-1"></i></a>

                                </td>
                            </tr>
                        @endforeach
                        </tbody>

                    </table>


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
