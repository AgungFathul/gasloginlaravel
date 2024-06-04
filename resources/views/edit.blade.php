@extends('layout.main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">user</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">User</a></li>
              <li class="breadcrumb-item active">TambahUser</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
<!-- general form elements -->
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Tambah User</h3>
    </div>
    <!-- form start -->
    <form action="{{ route('admin.user.update',['id' => $data->id]) }}" method="POST">
      @csrf
      @method('PUT')
      <div class="card-body">
        <div class="form-group">
          <label for="username">Masukan nama</label>
          <input type="text" class="form-control" id="exampleInputEmail1" value="{{$data->name}}" name="name" placeholder="Masukan Username">
        </div>
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" value="{{$data->email}}" name="email" placeholder="Masukan Email">
          </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" value="{{$data->password}}" name="password" placeholder="MasukanPassword">
        </div>
      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
  <!-- /.card -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection
