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
                    <form method="POST" action="{{route('addSubCategory')}}">
                        @csrf
                        <div class="form-group">
                            <label class="form-label form-label-outside" for="batch">Select Category</label>
                            <select class="form-control form-validation-inside @error('category_id') is-invalid @enderror" required id="batch" type="text" name="category_id" autofocus>
                                <option selected>Select Categoy</option>
                                @foreach($category as $batches)
                                    <option value="{{$batches->id}}">{{$batches->category_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="name">Sub-Category Name</label>
                            <input id="name" type="text" name="subcategory_name"  class="form-control @error('subcategory_name') is-invalid @enderror " value="{{ old('subcategory_name') }}" >
                            @error('subcategory_name') <span class="text-danger">{{$message}}</span> @enderror
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
                @if(session('deletes'))
                    <span class="text-danger">{{session('deletes')}}</span>
                @endif
                @if(session('restore'))
                    <span class="text-success">{{session('restore')}}</span>
                @endif
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>SL</th>
                        <th>Added by</th>
                        <th>Category</th>
                        <th>Sub Category</th>
                        <th>Slug</th>
                        <th>Created-at</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($sub_category as $key=>$value)
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

                            <td>{{$value->rel_to_category->category_name}}</td>
                            <td>{{$value->subcategory_name}}</td>
                            <td>{{$value->subcategory_slug}}</td>
                            <td>{{$value->created_at->diffForHumans()}}</td>
                            <td>
                                <button name="{{route('softDeleteSubCat', $value->id)}}" type="button" class="delete btn btn-danger shadow btn-xs sharp "><i class="fa fa-trash mt-1"></i></button>
                                <a href="{{route('editSubCategory', $value->id)}}" class="btn btn-secondary shadow btn-xs sharp"><i class="fa fa-pencil mt-1"></i></a>
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
                @if(session('restore'))
                    <span class="text-success">{{session('success')}}</span>
                @endif
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>SL</th>
                        <th>Added by</th>
                        <th>Category</th>
                        <th>Sub Category</th>
                        <th>Slug</th>
                        <th>Created-at</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($trash_subcategory as $key=>$value)
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
                            <td>{{$value->rel_to_category->category_name}}</td>
                            <td>{{$value->subcategory_name}}</td>
                            <td>{{$value->subcategory_slug}}</td>
                            <td>{{$value->created_at->diffForHumans()}}</td>
                            <td>
                                <a href="{{ route('deleteSubcategory', $value->id)}}" class="btn btn-sm btn-danger shadow ">Delete</a>
                                <a href="{{ route('restoreSubcategory', $value->id)}}" class="btn btn-sm btn-secondary shadow ">Restore</a>
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
