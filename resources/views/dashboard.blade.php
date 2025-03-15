@extends('layout.app')

@section('title', 'Dashboard - Sistem Pengadaan Berkas')

@section('content')
    @include('components.navbardashboard')
    <div id="layoutSidenav">
        @include('components.sidebar')
        <div id="layoutSidenav_content">
            <main>
                <!-- Header -->
                <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
                    <div class="container-xl px-4">
                        <div class="page-header-content pt-4">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-auto mt-4">
                                    <h1 class="page-header-title">
                                        <div class="page-header-icon"><i data-feather="activity"></i></div>
                                        Dashboard Pengadaan Berkas
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>

                <!-- Main Content -->
                <div class="container-xl px-4 mt-n10">
                    <!-- Welcome Section -->
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-xl-8">
                                    <div class="text-xl-start">
                                        <h1 class="text-primary mb-3">Selamat Datang di Aplikasi Pengadaan Berkas!</h1>
                                        <p class="text-gray-700 mb-0">
                                            Sistem ini dirancang untuk membantu Anda memantau dan mengelola proses pengadaan berkas secara efisien. 
                                            Dapatkan informasi real-time, pantau progress, dan kelola dokumen dengan lebih mudah.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-xl-4 text-center mt-4 mt-xl-0">
                                    <img class="img-fluid" src="{{ asset('dist/assets/img/illustrations/at-work.svg') }}" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Progress Stats -->
                    <div class="row">
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-start-lg border-start-primary h-100">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="me-3">
                                            <div class="text-lg fw-bold text-primary">24</div>
                                            <div class="text-muted">Berkas Dalam Proses</div>
                                        </div>
                                        <i class="text-primary" data-feather="file-text"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-start-lg border-start-success h-100">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="me-3">
                                            <div class="text-lg fw-bold text-success">12</div>
                                            <div class="text-muted">Berkas Selesai</div>
                                        </div>
                                        <i class="text-success" data-feather="check-circle"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-start-lg border-start-warning h-100">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="me-3">
                                            <div class="text-lg fw-bold text-warning">8</div>
                                            <div class="text-muted">Perlu Revisi</div>
                                        </div>
                                        <i class="text-warning" data-feather="alert-circle"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-start-lg border-start-info h-100">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="me-3">
                                            <div class="text-lg fw-bold text-info">4</div>
                                            <div class="text-muted">Menunggu Persetujuan</div>
                                        </div>
                                        <i class="text-info" data-feather="clock"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Progress Chart & Notifications -->
                    <div class="row">
                        <!-- Progress Chart -->
                        <div class="col-xl-8 mb-4">
                            <div class="card card-header-actions h-100">
                                <div class="card-header">
                                    Progress Pengadaan Berkas
                                    <div class="dropdown no-caret">
                                        <button class="btn btn-transparent-dark btn-icon dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                            <i data-feather="more-vertical"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Minggu Ini</a>
                                            <a class="dropdown-item" href="#">Bulan Ini</a>
                                            <a class="dropdown-item" href="#">Tahun Ini</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="chart-container" style="position: relative; height:300px; width:100%">
                                        <canvas id="progressChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Notifications -->
                        <div class="col-xl-4 mb-4">
                            <div class="card h-100">
                                <div class="card-header">Notifikasi Terbaru</div>
                                <div class="card-body">
                                    <div class="timeline timeline-xs">
                                        <!-- Notification Item -->
                                        <div class="timeline-item">
                                            <div class="timeline-item-marker">
                                                <div class="timeline-item-marker-text">27m</div>
                                                <div class="timeline-item-marker-indicator bg-warning"></div>
                                            </div>
                                            <div class="timeline-item-content">
                                                Berkas "PL-2024-001" memerlukan revisi
                                            </div>
                                        </div>
                                        <!-- Notification Item -->
                                        <div class="timeline-item">
                                            <div class="timeline-item-marker">
                                                <div class="timeline-item-marker-text">1h</div>
                                                <div class="timeline-item-marker-indicator bg-success"></div>
                                            </div>
                                            <div class="timeline-item-content">
                                                Berkas "PL-2024-003" telah disetujui
                                            </div>
                                        </div>
                                        <!-- Notification Item -->
                                        <div class="timeline-item">
                                            <div class="timeline-item-marker">
                                                <div class="timeline-item-marker-text">2h</div>
                                                <div class="timeline-item-marker-indicator bg-info"></div>
                                            </div>
                                            <div class="timeline-item-content">
                                                Berkas "PL-2024-005" menunggu persetujuan
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Charts Row -->
                    <div class="row">
                        <div class="col-xl-6 mb-4">
                            <div class="card card-header-actions h-100">
                                <div class="card-header">
                                    Distribusi Status Berkas
                                </div>
                                <div class="card-body">
                                    <div class="chart-container" style="position: relative; height:300px; width:100%">
                                        <canvas id="statusDistributionChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 mb-4">
                            <div class="card card-header-actions h-100">
                                <div class="card-header">
                                    Rata-rata Waktu Penyelesaian
                                </div>
                                <div class="card-body">
                                    <div class="chart-container" style="position: relative; height:300px; width:100%">
                                        <canvas id="completionTimeChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>

            <!-- Footer -->
            <footer class="footer-admin mt-auto footer-light">
                <div class="container-xl px-4">
                    <div class="row">
                        <div class="col-md-6 small">Copyright &copy; PLN Pengadaan 2024</div>
                        <div class="col-md-6 text-md-end small">
                            <a href="#!">Privacy Policy</a> &middot;
                            <a href="#!">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
@endsection

@push('scripts')
<script>
// Tunggu sampai DOM selesai dimuat
document.addEventListener('DOMContentLoaded', function() {
    // Area Chart - Progress Pengadaan Berkas per Bulan
    var ctx = document.getElementById("progressChart").getContext('2d');
    var myLineChart = new Chart(ctx, {
        type: "line",
        data: {
            labels: ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun"],
            datasets: [{
                label: "Total Berkas Diproses",
                data: [45, 58, 52, 65, 71, 68],
                backgroundColor: "rgba(0, 97, 242, 0.1)",
                borderColor: "rgba(0, 97, 242, 1)",
                pointRadius: 3,
                pointBackgroundColor: "rgba(0, 97, 242, 1)",
                pointBorderColor: "rgba(0, 97, 242, 1)",
                pointHoverRadius: 3,
                pointHoverBackgroundColor: "rgba(0, 97, 242, 1)",
                pointHoverBorderColor: "rgba(0, 97, 242, 1)",
                pointHitRadius: 10,
                pointBorderWidth: 2,
                fill: true
            },
            {
                label: "Berkas Selesai",
                data: [32, 42, 38, 49, 56, 45],
                backgroundColor: "rgba(0, 172, 105, 0.1)",
                borderColor: "rgba(0, 172, 105, 1)",
                pointRadius: 3,
                pointBackgroundColor: "rgba(0, 172, 105, 1)",
                pointBorderColor: "rgba(0, 172, 105, 1)",
                pointHoverRadius: 3,
                pointHoverBackgroundColor: "rgba(0, 172, 105, 1)",
                pointHoverBorderColor: "rgba(0, 172, 105, 1)",
                pointHitRadius: 10,
                pointBorderWidth: 2,
                fill: true
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        stepSize: 10
                    }
                }
            },
            plugins: {
                tooltip: {
                    callbacks: {
                        label: function(context) {
                            return context.dataset.label + ': ' + context.parsed.y + ' berkas';
                        }
                    }
                }
            }
        }
    });

    // Pie Chart - Distribusi Status Berkas
    var ctx2 = document.getElementById("statusDistributionChart").getContext('2d');
    var myPieChart = new Chart(ctx2, {
        type: "doughnut",
        data: {
            labels: ["Dalam Proses", "Selesai", "Perlu Revisi", "Menunggu Persetujuan"],
            datasets: [{
                data: [35, 45, 12, 8],
                backgroundColor: [
                    "#0061f2",  // Biru - Dalam Proses
                    "#00ac69",  // Hijau - Selesai
                    "#f4a100",  // Kuning - Perlu Revisi
                    "#009cdf"   // Biru Muda - Menunggu Persetujuan
                ],
                borderWidth: 0
            }]
        },
        options: {
            plugins: {
                tooltip: {
                    callbacks: {
                        label: function(context) {
                            var label = context.label || '';
                            var value = context.parsed || 0;
                            var total = context.dataset.data.reduce((a, b) => a + b, 0);
                            var percentage = Math.round((value * 100) / total) + '%';
                            return label + ': ' + value + ' berkas (' + percentage + ')';
                        }
                    }
                }
            }
        }
    });

    // Bar Chart - Rata-rata Waktu Penyelesaian per Jenis Berkas
    var ctx3 = document.getElementById("completionTimeChart").getContext('2d');
    var myBarChart = new Chart(ctx3, {
        type: "bar",
        data: {
            labels: ["Kontrak", "SPK", "PO", "Addendum", "MoU"],
            datasets: [{
                label: "Rata-rata Hari Penyelesaian",
                backgroundColor: [
                    "rgba(0, 97, 242, 0.8)",
                    "rgba(0, 172, 105, 0.8)",
                    "rgba(244, 161, 0, 0.8)",
                    "rgba(0, 156, 223, 0.8)",
                    "rgba(126, 58, 242, 0.8)"
                ],
                data: [15, 7, 5, 12, 10]
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                    title: {
                        display: true,
                        text: 'Hari'
                    },
                    ticks: {
                        stepSize: 5
                    }
                }
            },
            plugins: {
                tooltip: {
                    callbacks: {
                        label: function(context) {
                            return 'Rata-rata: ' + context.parsed.y + ' hari';
                        }
                    }
                }
            }
        }
    });
});
</script>
@endpush
