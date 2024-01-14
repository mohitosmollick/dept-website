@extends('layouts.dashboard')

@section('content')

    <div class="row">

        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3>User list ({{$totalUser}})</h3>
                </div>

                    @if('success')
                       <h5 class="text-success">{{session('success')}}</h5>
                    @endif

                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>SL</th>
                            <th>Name</th>

                            <th>Phone</th>
                            <th>Batch</th>
                            <th>Image</th>
                            <th>bio</th>
                            <th>Created-at</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $key=>$value)

                            <tr>
                                <td>{{$users->firstitem()+ $key}}</td>
                                <td>{{$value->name}}</td>

                                <td >{{$value->phone}}</td>
                                <td >
                                    {{$value->rel_to_batch->batch_name}}
                                </td>
                                <td >
                                    <img src="{{asset('uploads/users')}}/{{$value->image}}" width="50px" height="35px" />
                                </td>
                                <td >{{$value->bio}}</td>
                                <td>{{$value->created_at->diffForHumans()}}</td>
                                <td>
                                    <a href="{{route('user.delete', $value->id)}}" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>

                    </table>
                    {{$users->links()}}
                </div>
            </div>
        </div>

    </div>

@endsection
@section('sweet_alert')
    @if(session('success'))
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: 'bottom-end',
                showConfirmButton: false,
                timer: 1500,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })

            Toast.fire({
                icon: 'success',
                title: 'Added Successfully'
            })
        </script>
    @endif
@endsection




