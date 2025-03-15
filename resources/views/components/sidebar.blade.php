<div id="layoutSidenav_nav">
    <nav class="sidenav shadow-right sidenav-light">
        <div class="sidenav-menu">
            <div class="nav accordion" id="accordionSidenav">
                <!-- Dashboard -->
                <div class="sidenav-menu-heading">Core</div>
                <a class="nav-link" href="#">
                    <div class="nav-link-icon"><i data-feather="activity"></i></div>
                    Dashboard
                </a>

                <!-- Ringkasan Status -->
                <a class="nav-link" href="#">
                    <div class="nav-link-icon"><i data-feather="pie-chart"></i></div>
                    Ringkasan Status
                </a>

                <!-- Notifikasi -->
                <a class="nav-link" href="#">
                    <div class="nav-link-icon"><i data-feather="bell"></i></div>
                    Notifikasi
                </a>

                <!-- Akses Cepat -->
                <div class="sidenav-menu-heading">Akses Cepat</div>

                <!-- Manajemen Dokumen -->
                <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseManajemenDokumen">
                    <div class="nav-link-icon"><i data-feather="folder"></i></div>
                    Manajemen Dokumen
                    <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseManajemenDokumen" data-bs-parent="#accordionSidenav">
                    <nav class="sidenav-menu-nested nav">
                        <a class="nav-link" href="#">Unggah Dokumen</a>
                        <a class="nav-link" href="#">Verifikasi Dokumen</a>
                        <a class="nav-link" href="#">Riwayat Perubahan</a>
                    </nav>
                </div>

                <!-- Tracking Proses -->
                <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseTracking">
                    <div class="nav-link-icon"><i data-feather="git-branch"></i></div>
                    Tracking Proses
                    <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseTracking" data-bs-parent="#accordionSidenav">
                    <nav class="sidenav-menu-nested nav">
                        <a class="nav-link" href="#">Progress Berkas</a>
                        <a class="nav-link" href="#">Checklist Persyaratan</a>
                        <a class="nav-link" href="#">Notifikasi Revisi</a>
                    </nav>
                </div>

                <!-- Persetujuan -->
                <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapsePersetujuan">
                    <div class="nav-link-icon"><i data-feather="check-square"></i></div>
                    Persetujuan
                    <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapsePersetujuan" data-bs-parent="#accordionSidenav">
                    <nav class="sidenav-menu-nested nav">
                        <a class="nav-link" href="#">Otorisasi</a>
                        <a class="nav-link" href="#">Tanda Tangan Digital</a>
                        <a class="nav-link" href="#">Catatan Audit</a>
                    </nav>
                </div>

                <!-- Laporan dan Analitik -->
                <div class="sidenav-menu-heading">Laporan</div>
                <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseLaporan">
                    <div class="nav-link-icon"><i data-feather="bar-chart-2"></i></div>
                    Laporan dan Analitik
                    <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLaporan" data-bs-parent="#accordionSidenav">
                    <nav class="sidenav-menu-nested nav">
                        <a class="nav-link" href="#">Statistik Proses</a>
                        <a class="nav-link" href="#">Identifikasi Hambatan</a>
                        <a class="nav-link" href="#">Rekapitulasi Status</a>
                    </nav>
                </div>

                <!-- Pengaturan -->
                <div class="sidenav-menu-heading">Pengaturan</div>
                <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapsePengaturan">
                    <div class="nav-link-icon"><i data-feather="settings"></i></div>
                    Pengaturan
                    <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapsePengaturan" data-bs-parent="#accordionSidenav">
                    <nav class="sidenav-menu-nested nav">
                        <a class="nav-link" href="#">Manajemen Pengguna</a>
                        <a class="nav-link" href="#">Hak Akses</a>
                        <a class="nav-link" href="#">Konfigurasi Sistem</a>
                    </nav>
                </div>
            </div>
        </div>
        
        <!-- User Info -->
        <div class="sidenav-footer">
            <div class="small">Logged in as:</div>
            {{ Auth::user()->name }}
        </div>
    </nav>
</div>