@extends('layouts.main')
@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit User</h1>
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
                <form action="{{ route('user.update', $user->id) }}" method="post">
                    @csrf
                    @method("PATCH")
                    <div class="form-group d-flex">
                        <input type="text" name="name" value="{{ $user->name }}" class="form-control"
                               placeholder="Name">
                        @error('name')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                        <input type="text" name="surname" value="{{ $user->surname }}" class="form-control"
                               placeholder="Surname">
                        @error('surname')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" value="{{ $user->email }}" class="form-control"
                               placeholder="Email">
                        @error('email')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="text" name="password" class="form-control"
                               placeholder="New Password">
                        @error('password')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="text" name="address" value="{{ $user->address ?? ''}}" class="form-control"
                               placeholder="Address">
                        @error('address')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="text" name="patronymic" value="{{ $user->patronymic ?? ''}}" class="form-control"
                               placeholder="Patronymic">
                        @error('patronymic')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group d-flex">
                        <input type="number" value="{{ $user->age }}" name="age" class="form-control"
                               placeholder="Age">
                        <select name="gender">
                            <option @selected($user->gender == 1 ?? '') value="1">Male</option>
                            <option @selected($user->gender == 2 ?? '') value="2">Female</option>
                        </select>
                        @error('age')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                        @error('gender')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Edit" class="btn btn-success">
                        <a href="{{ url()->previous() }}" value="Cancel" class="btn btn-dark">Cancel</a>
                    </div>
                </form>
            </div>
            <!-- /.row -->

        </div><!-- /.container-fluid -->
    </section>
@endsection
