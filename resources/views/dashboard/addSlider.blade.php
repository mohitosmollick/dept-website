@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h3>Add Category</h3>
                    @if(session('success'))
                        <span class="text-success">{{session('success')}}</span>
                    @endif
                    <img src="{{asset('uploads/slider')}}/{{session('image')}}" width="50px" height="35px"/>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{route('AddSlider')}}"  enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">Image</label>
                            <input    type="file" class="form-control" name="image"  value="">
                            @error('image')<small class="text-danger"> {{$message}}</small>@enderror
                        </div>

                        <div class="form-group mt-2">
                            <button type="submit"  class="btn btn-danger btn-sm">Update</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
        <div class="col-lg-6">

        </div>

    </div>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3>Category list</h3>
                                @if(session('delete'))
                                    <span class="text-danger">{{session('delete')}}</span>
                                @endif
            </div>
            <div class="card-body">

                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>SL</th>
                            <th>Added by</th>
                            <th>Slider Image</th>
                            <th>Created-at</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($slider as $key=>$value)

                            <tr>
                                <td>{{$key+1}}</td>
                                <td>
                                    @php
                                        if(App\Models\User::where('id',$value->user_id )->exists()){
                                            echo $value->rel_to_user->name;
                                        }else{
                                            echo 'N/A';
                                        }
                                    @endphp
                                </td>
                                <td><img src="{{asset('uploads/slider')}}/{{$value->slides}}" width="50px" height="35px" /></td>
                                <td>{{$value->created_at->diffForHumans()}}</td>
                                <td>
                                    <button name="{{route('softDelete', $value->id)}}" type="button" class="delete btn btn-danger shadow btn-xs sharp "><i class="fa fa-trash mt-1"></i></button>

                                </td>
                            </tr>
                        @endforeach
                        </tbody>

                    </table>


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
