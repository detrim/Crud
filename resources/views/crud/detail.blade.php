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
                        <h4>Detail Data Karyawan</h4>
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
                                    <a href="{{ url('crud/edit/' . $karyawan->id) }} " class="btn btn-info btn-sm">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>
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
                                                <form>
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">

                                                                <img src="{{ asset('storage/' . $karyawan->image) }}"
                                                                    class="img-thumbnail img-preview">

                                                            </div>
                                                        </div>

                                                        <div class="col-md-8">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Nama Lengkap</label>
                                                                        <input type="text" name="nama"
                                                                            class="form-control form-control-border"
                                                                            disabled placeholder="Nama lengkap"
                                                                            value="{{ $karyawan->nama }}">
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Alamat Email</label>
                                                                        <input type="email" name="email"
                                                                            class="form-control form-control-border"
                                                                            placeholder="Alamat email"
                                                                            value="{{ $karyawan->email }}" disabled>

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
                                                                            value="{{ $karyawan->jenis_kelamin }}" disabled>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Nomor Telp</label>
                                                                        <input type="text" name="no_telp"
                                                                            class="form-control form-control-border"
                                                                            placeholder="Nomor Telp"
                                                                            value="{{ $karyawan->no_telp }}" disabled>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>NIP</label>
                                                                        <input type="text" name="nip"
                                                                            class="form-control form-control-border"
                                                                            placeholder="Nomor Induk Pegawai"
                                                                            value="{{ $karyawan->nip }}" disabled>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>NWNP</label>
                                                                        <input type="text" name="nwnp"
                                                                            class="form-control form-control-border"
                                                                            placeholder="NWNP" value="{{ $karyawan->nwnp }}"
                                                                            disabled>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label>Alamat KTP</label>
                                                                <input type="text" name="alamat"
                                                                    class="form-control form-control-border"
                                                                    placeholder="Alamat KTP" value="{{ $karyawan->alamat }}"
                                                                    disabled>
                                                            </div>

                                                        </div>
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

    </div>
@endsection
