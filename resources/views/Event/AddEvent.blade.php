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
                </div>

                <div class="card-body">
                    <form action="{{route('createEvent')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="range range-12">
                            <div class="cell-xs-12">
                                <div class="form-group">
                                    <label class="form-label form-label-outside" for="post-title">Post Title</label>
                                    <input class="form-control @error('title') is-invalid @enderror" id="post-title"   type="text" name="title" autofocus required >
                                    @error('title') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>

                            <div class="cell-xs-12">
                                <div class="form-group">
                                    <label for="images">Image</label>
                                    <input  type="file" class="form-control" name="images" id="images" value="">
                                    @error('images')<small class="text-danger"> {{$message}}</small>@enderror
                                </div>
                            </div>
                            <div class="cell-xs-12">
                                <div class="form-group">
                                    <label class="form-label form-label-outside" for="desp_one">Column One</label>
                                    <textarea class="form-control form-validation-inside  @error('desp_one') is-invalid @enderror"  required  id="desp_one" name="desp_one" style="height: 100px"></textarea>
                                    @error('desp_one') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>
                            <div class="cell-xs-12">
                                <div class="form-group">
                                    <label class="form-label form-label-outside" for="desp_two">Column Two</label>
                                    <textarea class="form-control form-validation-inside  @error('desp_two') is-invalid @enderror"  required  id="desp_two" name="desp_two"  style="height: 100px"></textarea>
                                    @error('desp_two') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>
                            <div class="cell-xs-12">
                                <div class="form-group">
                                    <label class="text-black" for="">Image</label>
                                    <input  type="date" class="form-control" name="event_date"  value="">
                                    @error('event_date')<small class="text-danger"> {{$message}}</small>@enderror
                                </div>
                            </div>
                            <div class="cell-xs-12">
                                <div class="form-group">
                                    <label class="text-black" for="">Start</label>
                                    <input  type="time" class="form-control" name="start"  value="">
                                    @error('start')<small class="text-danger"> {{$message}}</small>@enderror
                                </div>
                            </div>
                            <div class="cell-xs-12">
                                <div class="form-group">
                                    <label class="text-black" for="">End</label>
                                    <input  type="time" class="form-control" name="end"  value="">
                                    @error('end')<small class="text-danger"> {{$message}}</small>@enderror
                                </div>
                            </div>
                            <div class="cell-xs-12">
                                <div class="form-group">
                                    <label class="form-label form-label-outside" for="location">Post Title</label>
                                    <input class="form-control @error('location') is-invalid @enderror" id="location"  type="text" name="location" autofocus required >
                                    @error('location') <span class="text-danger">{{$message}}</span> @enderror
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
{{--    <div class="col-lg-12">--}}
{{--        <div class="card">--}}
{{--            <div class="card-header">--}}
{{--                <h3>Category list</h3>--}}
{{--                                @if(session('delete'))--}}
{{--                                    <span class="text-danger">{{session('delete')}}</span>--}}
{{--                                @endif--}}
{{--            </div>--}}
{{--            <div class="card-body">--}}

{{--                    <table class="table table-bordered">--}}
{{--                        <thead>--}}
{{--                        <tr>--}}
{{--                            <th>SL</th>--}}
{{--                            <th>Added by</th>--}}
{{--                            <th>Category-Name</th>--}}
{{--                            <th>Slug</th>--}}
{{--                            <th>Created-at</th>--}}
{{--                            <th>Action</th>--}}
{{--                        </tr>--}}
{{--                        </thead>--}}
{{--                        <tbody>--}}
{{--                        @foreach($all_category as $key=>$value)--}}

{{--                            <tr>--}}
{{--                                <td>{{$key+1}}</td>--}}
{{--                                <td>--}}
{{--                                    @php--}}
{{--                                        if(App\Models\User::where('id',$value->user_id )->exists()){--}}
{{--                                            echo $value->rel_to_user->name;--}}
{{--                                        }else{--}}
{{--                                            echo 'N/A';--}}
{{--                                        }--}}
{{--                                    @endphp--}}
{{--                                </td>--}}
{{--                                <td>{{$value->category_name}}</td>--}}
{{--                                <td>{{$value->category_slug}}</td>--}}
{{--                                <td>{{$value->created_at->diffForHumans()}}</td>--}}
{{--                                <td>--}}
{{--                                    <a href="{{route('softDelete', $value->id)}}" class="btn btn-danger shadow btn-xs sharp delete"><i class="fa fa-trash mt-1"></i></a>--}}

{{--                                    <button name="{{route('softDelete', $value->id)}}" type="button" class="delete btn btn-danger shadow btn-xs sharp "><i class="fa fa-trash mt-1"></i></button>--}}

{{--                                    <a href="{{route('editCategory', $value->id)}}" class="btn btn-secondary shadow btn-xs sharp"><i class="fa fa-pencil mt-1"></i></a>--}}
{{--                                </td>--}}
{{--                            </tr>--}}
{{--                        @endforeach--}}
{{--                        </tbody>--}}

{{--                    </table>--}}


{{--            </div>--}}

{{--        </div>--}}
{{--        <div class="card">--}}
{{--            <div class="card-header">--}}
{{--                <h3>Trash Category list</h3>--}}
{{--            </div>--}}
{{--            <div class="card-body">--}}
{{--                    <table class="table table-bordered">--}}
{{--                        <thead>--}}
{{--                        <tr>--}}
{{--                            <th>SL</th>--}}
{{--                            <th>User Id</th>--}}
{{--                            <th>Category-Name</th>--}}
{{--                            <th>Slug</th>--}}
{{--                            <th>Created-at</th>--}}
{{--                            <th>Action</th>--}}
{{--                        </tr>--}}
{{--                        </thead>--}}
{{--                        <tbody>--}}
{{--                        @foreach($trash_category as $key=>$value)--}}

{{--                            <tr>--}}
{{--                                <td>{{$key+1}}</td>--}}
{{--                               <td>--}}
{{--                                    @php--}}
{{--                                        if(App\Models\User::where('id',$value->user_id )->exists()){--}}
{{--                                            echo $value->rel_to_user->name;--}}
{{--                                        }else{--}}
{{--                                            echo 'N/A';--}}
{{--                                        }--}}
{{--                                    @endphp--}}
{{--                                </td>--}}
{{--                                </td>--}}
{{--                                <td>{{$value->category_name}}</td>--}}
{{--                                <td>{{$value->category_slug}}</td>--}}
{{--                                <td>{{$value->created_at->diffForHumans()}}</td>--}}
{{--                                <td>--}}
{{--                                    <a href="{{ route('hard_delete_category', $value->id)}}" class="btn btn-sm btn-danger shadow ">Delete</a>--}}
{{--                                    <a href="{{ route('restore_category', $value->id)}}" class="btn btn-sm btn-secondary shadow ">Restore</a>--}}
{{--                                </td>--}}
{{--                            </tr>--}}
{{--                        @endforeach--}}
{{--                        </tbody>--}}
{{--                    </table>--}}

{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

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
