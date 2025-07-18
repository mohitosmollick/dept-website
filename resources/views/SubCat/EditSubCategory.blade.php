@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h3>Update Category</h3>
                    @if(session('success'))
                        <span class="text-success">{{session('success')}}</span>
                    @endif

                </div>

                <div class="card-body">
                    <form  action="{{route('updateSubCategory')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Category Name</label>
                            <input id="name" type="text" class="form-control" name="subcategory_name"  value="{{$subcat->subcategory_name}}">
                            @error('subcategory_name') <span class="text-danger">{{$message}}</span> @enderror
                            <input  type="hidden" class="form-control" name="id"  value="{{$subcat->id}}">
                        </div>
                        <div class="form-group mt-2">
                            <button type="submit"  class="btn btn-danger btn-sm"> Update</button>
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




@endsection
