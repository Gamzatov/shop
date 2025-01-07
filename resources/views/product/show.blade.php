@extends('layouts.main')
@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Product</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Product v1</li>
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
            <div class="row" bis_skin_checked="1">
                <div class="col-12" bis_skin_checked="1">
                    <div class="card" bis_skin_checked="1">
                        <div class="card-header" bis_skin_checked="1">
                            <div class="card-controls  d-flex">
                                <div class="mr-1">
                                    <a class="btn btn-primary" href="{{ route('product.edit', $product->id) }}">Edit</a>
                                </div>
                                <form action="{{ route('product.delete', $product->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" class="btn btn-danger" value="Delete">
                                </form>
                            </div>

                            <div class="card-tools" bis_skin_checked="1">
                                <div class="input-group input-group-sm" style="width: 150px;" bis_skin_checked="1">
                                    <input type="text" name="table_search" class="form-control float-right"
                                           placeholder="Search">

                                    <div class="input-group-append" bis_skin_checked="1">
                                        <button type="submit" class="btn btn-default">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0" bis_skin_checked="1">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                <tr>
                                    <th>ID</th>

                                    <td>{{ $product->id }}</td>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th>Title</th>
                                    <td>
                                        {{ $product->title }}
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->

        </div><!-- /.container-fluid -->
    </section>
@endsection
