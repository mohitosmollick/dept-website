@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h3>Add Category</h3>
                    @if(session('success'))
                        <span class="text-success">{{session('success')}}</span>
                    @endif
                </div>

                <div class="card-body">
                    <form method="POST" action="{{route('addPermission')}}">
                        @csrf
                        <div class="form-group">
                            <label for="permission">Add Role</label>
                            <input id="permission" type="text" name="permission"  class="form-control @error('permission') is-invalid @enderror "  autofocus required >
                            @error('permission') <span class="text-danger">{{$message}}</span> @enderror
{{--                            <input  type="hidden" class="form-control" name="id"  value="">--}}
                        </div>
                        <div class="form-group mt-2">
                            <button type="submit"  class="btn btn-danger btn-sm">Save</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
        <div class="col-lg-8">
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
                            <th>Category-Name</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($permissions as $key=>$value)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$value->name}}</td>
                                <td>
                                    <button name="{{route('softDelete', $value->id)}}" type="button" class="delete btn btn-danger shadow btn-xs sharp "><i class="fa fa-trash mt-1"></i></button>
                                    <a href="{{route('editCategory', $value->id)}}" class="btn btn-secondary shadow btn-xs sharp"><i class="fa fa-pencil mt-1"></i></a>
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
