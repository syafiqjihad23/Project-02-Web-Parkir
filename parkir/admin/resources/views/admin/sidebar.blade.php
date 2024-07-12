<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
        <img src="../../assets/img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Website Parkir STT-NF</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="../../assets/img/user.png" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                @auth
                    @if (Auth::check())
                        <div class="info">
                            <a class="d-block" href="{{ route('profil.edit') }}">
                                {{ strtoupper(Auth::user()->name ?? "") }}
                            </a>
                            <span class="text primary">Role: {{ Auth::user()->role }}</span>
                        </div>
                    @endif
                @endauth
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                    with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Data Parkir
                            @if (Auth::check())
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ url('/admin/areaparkir') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Area Parkir</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('/admin/jenis') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Jenis Parkir</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                 <a href="{{ url('/admin/kampus') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Kampus Parkir</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('/admin/kendaraan') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Kendaraan Parkir</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('/admin/transaksi') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Transaksi Parkir</p>
                                </a>
                            </li>
                        </ul>
                        <li class="nav-item">
                                <a href="#" class="nav-link" onclick="confirmLogout()">
                                    <i class="fas fa-sign-out-alt"></i>
                                    <p>Logout</p>
                                </a>
                        </li>
                    @endif
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

<script>
    function confirmLogout() {
        if (window.confirm("Apakah Anda yakin ingin keluar?")) {
            // Mengarahkan ke route logout Laravel
            window.location.href = "{{ route('login') }}"; // Menggunakan route name untuk logout
        } else {
            // Batalkan operasi logout jika pengguna memilih cancel
            return false;
        }
    }
</script>

