@extends('layouts.main')
@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Add User</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Users v1</li>
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
                <form action="{{ route('user.store') }}" method="post">
                    @csrf
                    <div class="form-group d-flex">
                        <input type="text" name="name" class="form-control" placeholder="Name">
                        @error('name')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                        <input type="text" name="surname" class="form-control" placeholder="Surname">
                        @error('surname')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Email">
                        @error('email')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="text" name="password" class="form-control" placeholder="Password">
                        @error('password')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="text" name="address" class="form-control" placeholder="Address">
                        @error('address')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="text" name="patronymic" class="form-control" placeholder="Patronymic">
                        @error('patronymic')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group d-flex">
                        <input type="number" name="age" class="form-control" placeholder="Age">
                        <select name="gender">
                            <option value="1">Male</option>
                            <option value="2">Female</option>
                        </select>
                        @error('age')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                        @error('gender')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
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
