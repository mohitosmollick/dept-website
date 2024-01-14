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


