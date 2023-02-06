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
                        <h4>Edit Data Karyawan</h4>
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
                                                <form action="{{ url('crudedit/' . $karyawan->id) }}" method="post"
                                                    enctype="multipart/form-data">
                                                    @method('patch')
                                                    @csrf
                                                    <div class="row">

                                                        <div class="col-md-4">
                                                            <div class="form-group">

                                                                <img src="{{ asset('storage/' . $karyawan->image) }}"
                                                                    class="img-thumbnail ">

                                                            </div>
                                                            <a type="button" class="btn btn-dark" data-toggle="modal"
                                                                data-target="#m-m{{ $karyawan->id }}">
                                                                <i class="fas fa-edit"></i>Ganti</a>
                                                        </div>


                                                        <div class="col-md-8">

                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Nama Lengkap</label>
                                                                        <input type="text" name="nama"
                                                                            class="form-control form-control-border"
                                                                            placeholder="Nama lengkap"
                                                                            value="{{ $karyawan->nama }}">
                                                                    </div>
                                                                </div>


                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Alamat Email</label>
                                                                        <input type="email" name="email"
                                                                            class="form-control form-control-border"
                                                                            placeholder="Alamat email"
                                                                            value="{{ $karyawan->email }}">

                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Jenis Kelamin</label>
                                                                        <input type="text" name="jenis_kelamin"
                                                                            class="form-control form-control-border"
                                                                            placeholder=""
                                                                            value="{{ $karyawan->jenis_kelamin }}">
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Nomor Telp</label>
                                                                        <input type="text" name="no_telp"
                                                                            class="form-control form-control-border hp"
                                                                            placeholder="Nomor Telp"
                                                                            value="{{ $karyawan->no_telp }}">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>NIP</label>
                                                                        <input type="text" name="nip"
                                                                            class="form-control form-control-border nip"
                                                                            placeholder="Nomor Induk Pegawai"
                                                                            value="{{ $karyawan->nip }}">
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>NWNP</label>
                                                                        <input type="text" name="nwnp"
                                                                            class="form-control form-control-border nwnp"
                                                                            placeholder="NWNP"
                                                                            value="{{ $karyawan->nwnp }}">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label>Alamat KTP</label>
                                                                <input type="text" name="alamat"
                                                                    class="form-control form-control-border"
                                                                    placeholder="Alamat KTP"
                                                                    value="{{ $karyawan->alamat }}">
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="card-footer text-right">
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                    </div>
                                                    <!-- /.card-body -->
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


        <div class="modal fade" id="m-m{{ $karyawan->id }}">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Ganti Foto</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="col-md-12">
                            <div class="row">
                                <form action="{{ url('ps/' . $karyawan->id) }}" method="post"
                                    enctype="multipart/form-data">
                                    @method('patch')
                                    @csrf
                                    <center>
                                        <div class="col-md-8 justify-content-center text-center">
                                            <div class="form-group">
                                                <label for="exampleInputFile">Pas
                                                    Photos 4x6</label>
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" name="image" id="image"
                                                            class="custom-file-input @error('image') is-invalid @enderror"
                                                            onchange="previewImgCreate()">
                                                        @error('image')
                                                            <small class="text-danger ">{{ $message }}</small>
                                                        @enderror
                                                        <label class="custom-file-label">Pilih
                                                            Berkas</label>

                                                    </div>
                                                </div>
                                            </div>
                                            <input type="hidden" name="oldImage" value="{{ $karyawan->image }}">

                                            <img src="{{ asset('storage/' . $karyawan->image) }}"
                                                class="img-thumbnail img-preview ">
                                        </div>
                                        <br>
                                        <div class="card-footer text-right">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </center>

                            </div>
                        </div>
                    </div>
                    </form>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
    </div>
@endsection
