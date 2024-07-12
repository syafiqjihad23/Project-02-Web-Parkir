<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Parkir STT-NF | Data Kampus</title>

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
            <h1>Data Kampus</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="">Home</a></li>
              <li class="breadcrumb-item active">Data Kampus</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <section class="content">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Tabel Data Kampus</h3>
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
        <a href="{{ route('kampus.create') }}" class="btn btn-primary">Tambah Data Kampus</a>
          <table class="table table-hover table-striped table-bordered">
            <thead>
              <tr>
                <th>ID</th>
                <th>Nama Kampus</th>
                <th>Alamat</th>
                <th>Latitude</th>
                <th>Longitude</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($kampuses as $data)
                <tr>
                  <td>{{ $data->id }}</td>
                  <td>{{ $data->nama }}</td>
                  <td>{{ $data->alamat }}</td>
                  <td>{{ $data->latitude }}</td>
                  <td>{{ $data->longitude }}</td>
                  <td>
                        <a href="{{ route('kampus.show', $data->id) }}" class="btn btn-info btn-sm">Read</a>
                        <a href="{{ route('kampus.edit', $data->id) }}" class="btn btn-warning btn-sm">Update</a>
                        <form action="{{ route('kampus.destroy', $data->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah kamu ingin menghapus jenis kendaraan ini?')">Delete</button>
                        </form>
                    </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <div class="card-footer">
          Footer
        </div>
      </div>
    </section>
  </div>

  @include('admin.footer')

  <aside class="control-sidebar control-sidebar-dark">
  </aside>
</div>

<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/adminlte.min.js') }}"></script>
<script src="{{ asset('assets/js/demo.js') }}"></script>
</body>
</html>
