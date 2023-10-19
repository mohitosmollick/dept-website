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
                    <form method="POST" action="{{route('addCategory')}}">
                        @csrf
                        <div class="form-group">
                            <label for="name">Category Name</label>
                            <input id="name" type="text" name="category_name"  class="form-control @error('category_name') is-invalid @enderror " value="{{ old('category_name') }}"  autofocus required >
                            @error('category_name') <span class="text-danger">{{$message}}</span> @enderror
                            <input  type="hidden" class="form-control" name="id"  value="">
                        </div>
                        <div class="form-group mt-2">
                            <button type="submit"  class="btn btn-danger btn-sm">Save</button>
                        </div>
                    </form>
                </div>
            </div>

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
                            <th>Category-Name</th>
                            <th>Slug</th>
                            <th>Created-at</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($all_category as $key=>$value)

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
                                <td>{{$value->category_name}}</td>
                                <td>{{$value->category_slug}}</td>
                                <td>{{$value->created_at->diffForHumans()}}</td>
                                <td>
{{--                                    <a href="{{route('softDelete', $value->id)}}" class="btn btn-danger shadow btn-xs sharp delete"><i class="fa fa-trash mt-1"></i></a>--}}

                                    <button name="{{route('softDelete', $value->id)}}" type="button" class="delete btn btn-danger shadow btn-xs sharp "><i class="fa fa-trash mt-1"></i></button>

                                    <a href="{{route('editCategory', $value->id)}}" class="btn btn-secondary shadow btn-xs sharp"><i class="fa fa-pencil mt-1"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>

                    </table>


            </div>

        </div>
        <div class="card">
            <div class="card-header">
                <h3>Trash Category list</h3>
            </div>
            <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>SL</th>
                            <th>User Id</th>
                            <th>Category-Name</th>
                            <th>Slug</th>
                            <th>Created-at</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($trash_category as $key=>$value)

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
                                </td>
                                <td>{{$value->category_name}}</td>
                                <td>{{$value->category_slug}}</td>
                                <td>{{$value->created_at->diffForHumans()}}</td>
                                <td>
                                    <a href="{{ route('hard_delete_category', $value->id)}}" class="btn btn-sm btn-danger shadow ">Delete</a>
                                    <a href="{{ route('restore_category', $value->id)}}" class="btn btn-sm btn-secondary shadow ">Restore</a>
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
