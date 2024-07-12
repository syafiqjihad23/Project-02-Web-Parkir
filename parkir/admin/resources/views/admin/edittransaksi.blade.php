<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Parkir STT-NF | Edit Transaksi</title>

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
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Transaksi</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Edit Transaksi</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Edit Transaksi</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('transaksi.update', $transaksi->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="tanggal">Tanggal:</label>
                            <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{ $transaksi->tanggal }}" required>
                        </div>
                        <div class="form-group">
                            <label for="mulai">Jam Mulai:</label>
                            <input type="time" class="form-control" id="mulai" name="mulai" value="{{ $transaksi->mulai }}" required>
                        </div>
                        <div class="form-group">
                            <label for="akhir">Jam Akhir:</label>
                            <input type="time" class="form-control" id="akhir" name="akhir" value="{{ $transaksi->akhir }}" required>
                        </div>
                        <div class="form-group">
                            <label for="keterangan">Keterangan:</label>
                            <textarea class="form-control" id="keterangan" name="keterangan">{{ $transaksi->keterangan }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="biaya">Biaya:</label>
                            <input type="number" step="0.01" class="form-control" id="biaya" name="biaya" value="{{ $transaksi->biaya }}" required>
                        </div>
                        <div class="form-group">
                            <label for="kendaraan_id">Kendaraan ID:</label>
                            <select class="form-control" id="kendaraan_id" name="kendaraan_id" required>
                                @foreach($kendaraans as $kendaraan)
                                    <option value="{{ $kendaraan->id }}">{{ $kendaraan->id }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="area_parkir_id">Area Parkir ID:</label>
                            <select class="form-control" id="area_parkir_id" name="area_parkir_id" required>
                                @foreach($areaParkirs as $areaParkir)
                                    <option value="{{ $areaParkir->id }}">{{ $areaParkir->id }}</option>
                                @endforeach
                            </select>
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
</div>

@include('admin.footer')

</div>
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/adminlte.min.js') }}"></script>
<script src="{{ asset('assets/js/demo.js') }}"></script>

</body>
</html>
