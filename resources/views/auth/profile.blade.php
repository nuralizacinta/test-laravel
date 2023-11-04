@extends('template.master')

@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Data Profile</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">General Form</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">Profile {{ Str::title($user->name) }}</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
              <div class="card-body">
                <div class="form-group">
                  <label for="nama">Nama</label>
                  <input type="text" name="nama" id="nama" class="form-control" value="{{ $user->name }}" >
                </div>
                <div class="form-group">
                  <label for="email">E-mail</label>
                  <input type="text" name="email" id="email" class="form-control" value="{{ $user->email }}" >
                </div>
                <div class="form-group">
                  <label for="umur">Umur</label>
                  <input type="number" name="umur" id="umur" class="form-control" value="{{ $user->profile->umur }}" >
                </div>
                <div class="form-group">
                  <label for="nama">Bio</label>
                  <textarea name="bio" id="bio" cols="30" rows="10" class="form-control" >{{ $user->profile->bio }}</textarea>
                </div>
                <div class="form-group">
                  <label for="alamat">Alamat</label>
                  <textarea name="alamat" id="alamat" cols="30" rows="10" class="form-control" >{{ $user->profile->alamat }}</textarea>
                </div>
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                
              </div>
          </div>
          <!-- /.card -->
        </div>
        <!--/.col (left) -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->

@endsection