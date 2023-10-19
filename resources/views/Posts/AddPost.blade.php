@extends('layouts.app')

@section('content')
    <section class="section breadcrumb-modern context-dark parallax-container" data-parallax-img="{{asset('view/assets/images/parallax-03.jpg')}}">
        <div class="parallax-content section-30 section-sm-70">
            <div class="shell">
                <h2 class="veil reveal-sm-block">Create Post</h2>
                <div class="offset-sm-top-35">
                    <ul class="list-inline list-inline-lg list-inline-dashed p d-flex justify-content-center">
                        <li><a href="index.html">Home</a></li>
                        <li>Post</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="section theme-background bg-cover section-70 section-md-114 bg-default">
        <div class="shell">
            <div class="range range-65 range-xs-center">
                <div class="cell-md-8 text-md-left">
                    <h2 class="text-bold">Post</h2>
                    <hr class="divider bg-madison hr-md-left-0">
                    <div class="offset-top-30">
                        <form action="{{route('AddPost')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="range range-12">
                                <div class="cell-xs-12">
                                    <div class="form-group">
                                        <label class="form-label form-label-outside" for="post-title">Post Title</label>
                                        <input style="font-size: 1.5rem" class="form-control @error('title') is-invalid @enderror" id="post-title"   type="text" name="title" autofocus required >
                                        @error('title') <span class="text-danger">{{$message}}</span> @enderror
                                    </div>
                                </div>
                                <div class="cell-xs-12">
                                    <div class="form-group">
                                        <label class="form-label form-label-outside" for="category">Select Category</label>
                                        <select class="form-control @error('category_id') is-invalid @enderror" name="category_id" id="category">
                                            <option value="">Select Category</option>
                                            @foreach($category as $categories)
                                            <option value="{{$categories->id}}">{{$categories->category_name}}</option>
                                            @endforeach
                                        </select>
                                        @error('category_id') <span class="text-danger">{{$message}}</span> @enderror
                                    </div>
                                </div>
                                <div class="cell-xs-12">
                                    <div class="form-group">
                                        <label class="form-label form-label-outside" for="subcategory">Select SubCategory</label>
                                        <select class="form-control @error('subcategory_id') is-invalid @enderror" name="subcategory_id" id="subcategory">
                                            <option value="">Select SubCategory</option>

                                        </select>
                                        @error('category_id') <span class="text-danger">{{$message}}</span> @enderror
                                    </div>
                                </div>
                                <div class="cell-xs-12">
                                    <div class="form-group">
                                        <label for="">Image</label>
                                        <input  style="font-size: 1.5rem"  type="file" class="form-control" name="images_one"  value="">
                                        @error('images_one')<small class="text-danger"> {{$message}}</small>@enderror
                                    </div>
                                </div>
                                <div class="cell-xs-12">
                                    <div class="form-group">
                                        <label class="form-label form-label-outside" for="desp_one">Column One</label>
                                        <textarea style="font-size: 1.5rem" class="form-control form-validation-inside  @error('desp_one') is-invalid @enderror"  required  id="desp_one" name="desp_one" ></textarea>
                                        @error('desp_one') <span class="text-danger">{{$message}}</span> @enderror
                                    </div>
                                </div>
                                <div class="cell-xs-12">
                                    <div class="form-group">
                                        <label class="form-label form-label-outside" for="desp_two">Column Two</label>
                                        <textarea style="font-size: 1.5rem" class="form-control form-validation-inside  @error('desp_two') is-invalid @enderror"  required  id="desp_two" name="desp_two"  style="height: 100px"></textarea>
                                        @error('desp_two') <span class="text-danger">{{$message}}</span> @enderror
                                    </div>
                                </div>
                                <div class="cell-xs-12">
                                    <div class="form-group">
                                        <label class="form-label form-label-outside" for="desp_three">Column Three</label>
                                        <textarea style="font-size: 1.5rem" class="form-control form-validation-inside  @error('desp_three') is-invalid @enderror"  required  id="desp_three" name="desp_three"  style="height: 100px"></textarea>
                                        @error('desp_three') <span class="text-danger">{{$message}}</span> @enderror
                                    </div>
                                </div>
                                <div class="cell-xs-12">
                                    <div class="form-group">
                                        <label class="text-black" for="">Image</label>
                                        <input  style="font-size: 1.5rem"  type="file" class="form-control" name="images_two"  value="">
                                        @error('images_two')<small class="text-danger"> {{$message}}</small>@enderror
                                    </div>
                                </div>
                                <div class="cell-xs-12">
                                    <div class="form-group">
                                        <label class="form-label form-label-outside" for="tag">Select Tags</label>
                                        <select class="select @error('tag') is-invalid @enderror" multiple name="tag[]" id="tag">
                                            @foreach($category as $categories)
                                                <option value="{{$categories->id}}">{{$categories->category_name}}</option>
                                            @endforeach
                                        </select>
                                        @error('tag') <span class="text-danger">{{$message}}</span> @enderror
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
    </section>
@endsection

@section('footer_script')
    <script>
        $('#category').change(function () {
            var category_id = $(this).val();

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: 'POST',
                url:'/getSubCategory',
                data:{'category_id':category_id},
                success:function(data){
                   $('#subcategory').html(data);
            }
            })

        })
    </script>

@endsection
