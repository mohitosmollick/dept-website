@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h3>Add Role</h3>
                    @if(session('success'))
                        <span class="text-success">{{session('success')}}</span>
                    @endif
                </div>

                <div class="card-body">
                    <form method="POST" action="{{route('roleAdd')}}">
                        @csrf
                        <div class="form-group">
                            <label for="role">Add Role</label>
                            <input id="role" type="text" name="role"  class="form-control @error('role') is-invalid @enderror "  autofocus required >
                            @error('role') <span class="text-danger">{{$message}}</span> @enderror

                        </div>
                        <div class="form-group">
                            <label >Add Role</label>
                            <br>
                            @foreach($permissions as $permission)
                            <input  type="checkbox" name="permission[]" value="{{$permission->name}}"  /> {{$permission->name}}
                                <br>
                            @endforeach
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
                    <h3>Role list</h3>
                    @if(session('delete'))
                        <span class="text-danger">{{session('delete')}}</span>
                    @endif
                </div>
                <div class="card-body">

                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>SL</th>
                            <th>Role</th>
                            <th>Permission</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($role as $key=>$value)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$value->name}}</td>
                                <td>
                                    @foreach($value->getPermissionNames() as $permission)
                                       {{$permission}},
                                    @endforeach
                                </td>
                                <td>
                                    <a href="{{route('editPermission', $value->id)}}" class="btn btn-secondary shadow btn-xs sharp"><i class="fa fa-pencil mt-1"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h3>Assign Role to User</h3>
                    @if(session('success'))
                        <span class="text-success">{{session('success')}}</span>
                    @endif
                </div>

                <div class="card-body">
                    <form method="POST" action="{{route('addUserRole')}}">
                        @csrf
                        <div class="form-group">
                            <select class="selectpicker" name="user_id"  aria-label="Default select example" data-live-search="true">
                                <option value="1" selected>--Select User--</option>
                                @foreach($users as $user)
                                    <option value="{{$user->id}}">{{$user->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <select class="selectpicker" name="role_id"  aria-label="Default select example" data-live-search="true">
                                <option selected>--Select Role--</option>
                                @foreach($role as $roles)
                                    <option value="{{$roles->name}}">{{$roles->name}}</option>
                                @endforeach
                            </select>
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
                            <th>User</th>
                            <th>Role</th>
                            <th>Permission</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $key=>$value)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$value->name}}</td>
                                <td>
                                    @foreach($value->getRoleNames() as $role)
                                        {{$role}}
                                    @endforeach
                                </td>
                                <td>
                                    @foreach($value->getPermissionsViaRoles() as $permission)
                                        {{$permission->name}},
                                    @endforeach
                                </td>
                                <td>
                                    <a href="{{route('editPermission', $value->id)}}" class="btn btn-secondary shadow btn-xs sharp"><i class="fa fa-pencil mt-1"></i></a>
                                    <button name="{{route('user.delete', $value->id)}}" type="button" class="delete btn btn-danger shadow btn-xs sharp "><i class="fa fa-trash mt-1"></i></button>
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
