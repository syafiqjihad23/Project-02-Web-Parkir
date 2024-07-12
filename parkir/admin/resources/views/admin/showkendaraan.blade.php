<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Parkir STT-NF | Read Kendaraan</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('assets/css/adminlte.min.css') }}">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

@include('admin.header')
@include('admin.sidebar')

<div class="container-fluid px-4">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Detail Kendaraan</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Informasi Kendaraan</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Detail Kendaraan</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="merk">Merk:</label>
                        <p>{{ $kendaraan->merk }}</p>
                    </div>
                    <div class="form-group">
                        <label for="pemilik">Pemilik:</label>
                        <p>{{ $kendaraan->pemilik }}</p>
                    </div>
                    <div class="form-group">
                        <label for="nopol">Nomor Kendaraan:</label>
                        <p>{{ $kendaraan->nopol }}</p>
                    </div>
                    <div class="form-group">
                        <label for="tahun_beli">Tahun Beli:</label>
                        <p>{{ $kendaraan->tahun_beli }}</p>
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi:</label>
                        <p>{{ $kendaraan->deskripsi }}</p>
                    </div>
                    <div class="form-group">
                        <label for="jenis_kendaraan">Jenis Kendaraan:</label>
                        <p>{{ $kendaraan->jenis->nama }}</p>
                    </div>
                    <div class="form-group">
                        <label for="kapasitas">Kapasitas:</label>
                        <p>{{ $kendaraan->kapasitas->nama }}</p>
                    </div>
                    <div class="form-group">
                        <label for="rating">Rating:</label>
                        <p>{{ $kendaraan->rating }}</p>
                    </div>
                    <a href="{{ route('kendaraan.index') }}" class="btn btn-primary">Back</a>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    Footer
                </div>
                <!-- /.card-footer-->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
</div>

@include('admin.footer')

</div>

<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/adminlte.min.js') }}"></script>
<script src="{{ asset('assets/js/demo.js') }}"></script>
</body>
</html>
