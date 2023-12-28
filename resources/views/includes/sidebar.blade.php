<aside class="main-sidebar sidebar-dark-secondary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset( 'assets/img/logo.png') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Re Fitness Gym Pasuruan</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link {{ request()->is('home') ? 'active' : '' }}">
                        <i class="nav-icon fa fa-home"></i>
                        Dashboard
                    </a>
                </li>
                @if (Auth::user()->role == 'admin')
                    <li class="nav-item ">
                        <a href="{{ route('admin.kriteria.index') }}"
                            class="nav-link {{ (request()->is('admin/kriteria') ? 'active' : '' || request()->is('admin/kriteria/*')) ? 'active' : '' }}">
                            <i class="nav-icon fas fa-file"></i>
                            Data Kriteria
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="{{ route('admin.sub-kriteria.index') }}"
                            class="nav-link {{ (request()->is('admin/sub-kriteria') ? 'active' : '' || request()->is('admin/sub-kriteria/*')) ? 'active' : '' }}">
                            <i class="nav-icon fas fa-files"></i>
                            Data Sub Kriteria
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="{{ route('admin.alternatif.index') }}"
                            class="nav-link {{ (request()->is('admin/alternatif') ? 'active' : '' || request()->is('admin/alternatif/*')) ? 'active' : '' }}">
                            <i class="nav-icon fas fa-file-user"></i>
                            Data Alternatif
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="{{ route('admin.nilai-alternatif.index') }}"
                            class="nav-link {{ (request()->is('admin/nilai-alternatif') ? 'active' : '' || request()->is('admin/nilai-alternatif/*')) ? 'active' : '' }}">
                            <i class="nav-icon fas fa-file-edit"></i>
                            Penilaian Alternatif
                        </a>
                    </li>
                @endif
                <li class="nav-item ">
                    <a href="{{ route('hasil.index') }}" class="nav-link">
                        <i class="nav-icon fa-sharp fa-solid fa-square-poll-vertical"></i>
                        Hasil
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
