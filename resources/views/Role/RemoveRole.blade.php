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
                            <label for="role">User</label>
                            <input id="role" type="text"  class="form-control" readonly name="role" value="{{$all_user->name}}"  >
                            @error('role') <span class="text-danger">{{$message}}</span> @enderror
                            <input id="role" type="hidden" name="role" value="{{$all_user->id}}"  >
                        </div>
                        <div class="form-group">
                            <label >Add Role</label>
                            <br>
                            @foreach($all_role as $role)
                            <input  type="checkbox" name="role[]" value="{{$role->name}}" {{($all_user->name)?'checked':' '}} /> {{$role->name}}
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
