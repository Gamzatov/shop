@extends('layouts.main')
@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Add Product</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Products v1</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="title" class="form-control" placeholder="Title">
                        @error('title') {{ $message }} @enderror()
                    </div>
                    <div class="form-group">
                        <input type="text" name="description" class="form-control" placeholder="Description">
                        @error('description') {{ $message }} @enderror()
                    </div>
                    <div class="form-group">
                        <input type="text" name="content" class="form-control" placeholder="Content">
                        @error('content') {{ $message }} @enderror()
                    </div>
                    <div class="form-group">
                        <select name="category_id" class="form-control select2" style="width: 100%;"
                                data-select2-id="1" tabindex="-1" aria-hidden="true">
                            <option selected="selected" data-select2-id="3">Select Category</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}"
                                        data-select2-id="77"> {{ $category->title }}</option>
                            @endforeach

                        </select>
                    </div>
                    <div class="form-group">
                        <input type="file" name="preview_image">
{{--                        <div class="input-group" bis_skin_checked="1">--}}
{{--                            <div class="custom-file" bis_skin_checked="1">--}}
{{--                                <input type="text" value="123123" name="preview_image" class="custom-file-input" id="exampleInputFile">--}}
{{--                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>--}}
{{--                            </div>--}}
{{--                            <div class="input-group-append" bis_skin_checked="1">--}}
{{--                                <span class="input-group-text">Upload</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        {{--                        <input type="text" name="preview_image" class="form-control" placeholder="Image">--}}
                        @error('preview_image') {{ $message }} @enderror()
                    </div>

                    <div class="form-group" bis_skin_checked="1">
                        <select name="tags[]" class="tags select2-hidden-accessible" multiple=""
                                data-placeholder="Select a Tags"
                                data-dropdown-css-class="select2-purple" style="width: 100%;" data-select2-id="15"
                                tabindex="-1" aria-hidden="true">
                            @foreach($tags as $tag)
                                <option value="{{ $tag->id }}"  data-select2-id="56">{{ $tag->title  }}</option>
                            @endforeach

                        </select>
                    </div>
                    <div class="form-group" bis_skin_checked="1">
                        <select name="colors[]" class="colors select2-hidden-accessible" multiple=""
                                data-placeholder="Select colors"
                                data-dropdown-css-class="select2-purple" style="width: 100%;" data-select2-id="16"
                                tabindex="-1" aria-hidden="true">
                            @foreach($colors as $color)
                                <option value="{{$color->id}}" style="backgroud: {{ $color->title }} !important;" data-select2-id="58">{{ $color->title }}</option>
                            @endforeach

                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" name="price" class="form-control" placeholder="Price">
                        @error('price') {{ $message }} @enderror()
                    </div>
                    <div class="form-group">
                        <input type="text" name="count" class="form-control" placeholder="Count">
                        @error('count') {{ $message }} @enderror()
                    </div>
                    <div class="form-group">
                        <select class="custom-select rounded-0" name="is_published" id="">
                            <option value="0" selected>Draft</option>
                            <option value="1">Publish</option>
                        </select>
                        @error('is_published') {{ $message }} @enderror()
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Create" class="btn btn-success">
                    </div>
                </form>
            </div>
            <!-- /.row -->

        </div><!-- /.container-fluid -->
    </section>
@endsection
