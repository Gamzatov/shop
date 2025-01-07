@extends('layouts.main')
@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Tag</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Tag v1</li>
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
                <form action="{{ route('categories.update', $tag->id) }}" method="post">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <input type="text" name="title" value="{{ $tag->title }}" class="form-control"
                               placeholder="Title">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Edit" class="btn btn-success">
                    </div>
                </form>
            </div>
            <!-- /.row -->

        </div><!-- /.container-fluid -->
    </section>
@endsection
