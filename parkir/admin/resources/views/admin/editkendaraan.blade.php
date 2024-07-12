<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Parkir STT-NF | Edit Kendaraan</title>

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

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Kendaraan</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Edit Kendaraan</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Edit Kendaraan</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('kendaraan.update', $kendaraan->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="merk">Merk:</label>
                        <input type="text" class="form-control" id="merk" name="merk" value="{{ $kendaraan->merk }}" required>
                    </div>
                    <div class="form-group">
                        <label for="pemilik">Pemilik:</label>
                        <input type="text" class="form-control" id="pemilik" name="pemilik" value="{{ $kendaraan->pemilik }}" required>
                    </div>
                    <div class="form-group">
                        <label for="nopol">Nomor Kendaraan:</label>
                        <input type="text" class="form-control" id="nopol" name="nopol" value="{{ $kendaraan->nopol }}" required>
                    </div>
                    <div class="form-group">
                        <label for="tahun_beli">Tahun Beli:</label>
                        <input type="number" class="form-control" id="tahun_beli" name="tahun_beli" value="{{ $kendaraan->tahun_beli }}" required>
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi:</label>
                        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3">{{ $kendaraan->deskripsi }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="jenis_kendaraan_id">Jenis Kendaraan ID:</label>
                        <select class="form-control" id="jenis_kendaraan_id" name="jenis_kendaraan_id" required>
                            @foreach($jeniss as $jenis)
                                <option value="{{ $jenis->id }}" @if($kendaraan->jenis_kendaraan_id == $jenis->id) selected @endif>{{ $jenis->id }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="kapasitas_id">Kapasitas ID:</label>
                        <select class="form-control" id="kapasitas_id" name="kapasitas_id" required>
                            @foreach ($areaParkirs as $areaParkir)
                                <option value="{{ $areaParkir->id }}" @if($kendaraan->kapasitas_id == $areaParkir->id) selected @endif>{{ $areaParkir->id }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="rating">Rating:</label>
                        <input type="number" step="0.1" class="form-control" id="rating" name="rating" value="{{ $kendaraan->rating }}" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
            <div class="card-footer">
                Footer
            </div>
        </div>
    </section>
</div>

@include('admin.footer')

</div>
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/adminlte.min.js') }}"></script>
<script src="{{ asset('assets/js/demo.js') }}"></script>

</body>
</html>
