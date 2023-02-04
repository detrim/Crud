@extends('main')

@section('sidebar')
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p class="text">Data Karyawan</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
@endsection

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h4>Tambah Data Karyawan</h4>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Data</li>
                        </ol>
                    </div>
                </div>
                <hr>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="text-right">
                                    <a href=" {{ url('home') }} " class="btn btn-success btn-sm">
                                        <i class="fa fa-undo"></i> Back
                                    </a>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->

                        <div class="card">
                            <!-- /.card-header -->
                            <div class="card-body">
                                <section class="content">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <!-- left column -->
                                            <div class="col-md-12">
                                                <!-- general form elements -->


                                                <!-- /.card-header -->
                                                <!-- form start -->
                                                <form action="{{ url('crud') }}" method="post"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">

                                                                <img src="{{ asset('assets/img/default.jpg') }}"
                                                                    class="img-thumbnail img-preview">

                                                            </div>
                                                        </div>

                                                        <div class="col-md-8">
                                                            <div class="form-group">
                                                                <label for="exampleInputFile">Pas Photos 4x6</label>
                                                                <div class="input-group">
                                                                    <div class="custom-file">
                                                                        <input type="file" name="image" id="image"
                                                                            class="custom-file-input @error('image') is-invalid @enderror"
                                                                            onchange="previewImgCreate()">
                                                                        @error('image')
                                                                            <small
                                                                                class="text-danger ">{{ $message }}</small>
                                                                        @enderror
                                                                        <label class="custom-file-label">Pilih
                                                                            Berkas</label>

                                                                    </div>

                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Nama Lengkap</label>
                                                                        <input type="text" name="nama"
                                                                            class="form-control @error('nama') is-invalid @enderror"
                                                                            placeholder="Nama lengkap"
                                                                            value="{{ old('nama') }}">
                                                                        @error('nama')
                                                                            <small
                                                                                class="text-danger ">{{ $message }}</small>
                                                                        @enderror
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Alamat Email</label>
                                                                        <input type="email" name="email"
                                                                            class="form-control @error('email') is-invalid @enderror"
                                                                            placeholder="Alamat email">
                                                                        @error('email')
                                                                            <small
                                                                                class="text-danger ">{{ $message }}</small>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Jenis Kelamin</label>
                                                                        <select class="custom-select rounded-0"
                                                                            name="jenis_kelamin">
                                                                            <option value="Laki-laki">Laki-laki</option>
                                                                            <option value="Perempuan">Perempuan</option>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Nomor Telp</label>
                                                                        <input type="text" name="no_telp"
                                                                            class="form-control hp @error('no_telp') is-invalid @enderror"
                                                                            placeholder="Nomor Telp">
                                                                        @error('no_telp')
                                                                            <small
                                                                                class="text-danger ">{{ $message }}</small>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>NIP</label>
                                                                        <input type="text" name="nip"
                                                                            class="form-control nip @error('nip') is-invalid @enderror"
                                                                            placeholder="Nomor Induk Pegawai">
                                                                        @error('nip')
                                                                            <small
                                                                                class="text-danger ">{{ $message }}</small>
                                                                        @enderror
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>NWNP</label>
                                                                        <input type="text" name="nwnp"
                                                                            class="form-control nwnp @error('nwnp') is-invalid @enderror"
                                                                            placeholder="NWNP">
                                                                        @error('nwnp')
                                                                            <small
                                                                                class="text-danger ">{{ $message }}</small>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label>Alamat KTP</label>
                                                                <input type="text" name="alamat"
                                                                    class="form-control @error('alamat') is-invalid @enderror"
                                                                    placeholder="Alamat KTP">
                                                                @error('alamat')
                                                                    <small class="text-danger ">{{ $message }}</small>
                                                                @enderror
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <!-- /.card-body -->

                                                    <div class="card-footer text-right">
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                    </div>
                                                </form>

                                            </div>
                                            <!-- /.card-body -->
                                        </div>
                                        <!-- /.card -->
                                    </div>
                                    <!-- /.col -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.container-fluid -->
        </section>
        <!-- /.content -->

    </div>
@endsection
