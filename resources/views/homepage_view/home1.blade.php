@extends('homelayout.layout')

@section('title')
Dashboard Penjualan
@endsection

@section('content')
<style>
    .fa-solid-custom {
        margin: auto;
        padding-bottom: 8;
    }
</style>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="row bg-primary-light rounded-sm p-2 mx-1 mb-2">
                <div class="col-md-8 mt-3 mb-2 ">
                    <h3 class="text-white">Halo, {{ Auth::user()->fullname }}</h3>
                    <p class="text-white">Selamat datang di Bengkel Tunas Santosa Mandiri, layanan reservasi bengkel
                        online! Kami siap
                        membantu anda
                        pesan perawatan kendaraan anda dengan mudah dan cepat.</p>
                </div>
                <div class="col-md-4 d-flex">
                    <img src="{{ asset('images/illustration_hero.png') }}" alt="home" class="img-fluid" width="251px"
                        height="142px">
                </div>
            </div>
            @if (Auth::user()->role_id == 1)
            <h2 class="h5 page-title">Informasi Penjualan</h2>

            <div class="row">
                <div class="col-md-6 col-xl-3 mb-4">
                    <div class="card shadow bg-primary text-white">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-3 text-center">
                                    <span class="circle circle-sm bg-primary-light">
                                        <i class="fe fe-16 fe-shopping-bag text-white mb-0"></i>
                                    </span>
                                </div>
                                <div class="col pr-0">
                                    <p class="small text-light mb-0">Total Penjualan</p>
                                    <span class="h3 mb-0 text-white">{{ 'Rp' . number_format($totalAmount, 2, ',', '.')
                                        }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3 mb-4">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-3 text-center">
                                    <span class="circle circle-sm bg-primary">
                                        <i class="fe fe-check-circle text-white mb-0"></i>
                                    </span>
                                </div>
                                <div class="col pr-0">
                                    <p class="small text-muted mb-0">Total Kendaraan</p>
                                    <span class="h3 mb-0">{{ $totalKendaraan }}</span>
                                    <span class="small text-success"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3 mb-4">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-3 text-center">
                                    <span class="circle circle-sm bg-primary">
                                        <i class="fe fe-tablet text-white mb-0"></i>
                                    </span>
                                </div>
                                <div class="col pr-0">
                                    <p class="small text-muted mb-0">Total Spareparts</p>
                                    <div class="row align-items-center no-gutters">
                                        <div class="col-auto">
                                            <span class="h3 mr-2 mb-0">{{ $totalSpareparts }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3 mb-4">
                    <div class="card shadow bg-primary text-white">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-3 text-center">
                                    <span class="circle circle-sm bg-primary-light">
                                        <i class="fe fe-16 fe-shopping-bag text-white mb-0"></i>
                                    </span>
                                </div>
                                <div class="col pr-0">
                                    <p class="small text-light mb-0">Total Penjualan Spareparts</p>
                                    <span class="h3 mb-0 text-white">{{ 'Rp' .
                                        number_format($totalDoneBookingsSpareparts, 2, ',', '.') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            <div class="text-center">
                <h3 class=" text-primary fw-bold d-block">Informasi Sistem</h3>
            </div>
            {{-- Chart Section --}}
            <div class="col-12 p-4 border border-primary rounded-4">
                <div class="row">
                    {{-- Hari Chart --}}
                    <div class="col-lg-6">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">Total Penjualan (Hari ini)</h6>
                            </div>
                            <div class="card-body">
                                <div class="chart-area">
                                    <canvas id="hariChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Ahad Chart --}}
                    <div class="col-lg-6">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">Total Penjualan (Ahad ini)</h6>
                            </div>
                            <div class="card-body">
                                <div class="chart-area">
                                    <canvas id="ahadChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Bulan Chart --}}
                    <div class="col-lg-12">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">Total Penjualan (Bulan ini)</h6>
                            </div>
                            <div class="card-body">
                                <div class="chart-area">
                                    <canvas id="bulanChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @section('scripts')
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js">
            </script>
        <script>
            {{-- Chart Hari --}}
            var ctxHari = document.getElementById('hariChart').getContext('2d');
    var hariChartData = @json($hariChartData); // Pastikan data JSON valid

    new Chart(ctxHari, {
        type: 'bar', // Ubah ke 'bar' untuk visualisasi yang lebih baik
        data: {
            labels: hariChartData['labels'],
            datasets: [{
                label: 'Total Penjualan',
                data: hariChartData['totals'],
                backgroundColor: 'rgba(0, 123, 255, 0.7)',
                borderColor: 'rgba(0, 123, 255, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                    precision: 0 // Untuk menghilangkan angka desimal jika penjualan dalam satuan bilangan bulat
                }
            }
        }
    });
        </script>

        {{-- Chart Ahad --}}
        <script>
            var ctxAhad = document.getElementById('ahadChart').getContext('2d');
        new Chart(ctxAhad, {
            type: 'line',
            data: {
                labels: @json($ahadChartData['labels']),
                datasets: [{
                    label: 'Total Penjualan',
                    data: @json($ahadChartData['totals']),
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 2,
                    fill: false
                }]
            },
            options: {
                animations: {
                    tension: {
                        duration: 1000,
                        easing: 'linear',
                        from: 1,
                        to: 0.5,
                        loop: false
                    }
                },
                scales: {
                    y: { // defining min and max so hiding the dataset does not change scale range
                        min: 0,
                        max: 10,
                    }
                }
            }
        });
        </script>

        {{-- Chart Bulan --}}
        <script>
            var ctxBulan = document.getElementById('bulanChart').getContext('2d');
        new Chart(ctxBulan, {
            type: 'line',
            data: {
                labels: @json($bulanChartData['labels']),
                datasets: [{
                    label: 'Total Penjualan',
                    data: @json($bulanChartData['totals']),
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 2,
                    fill: false
                }]
            },
            options: {
                animations: {
                    tension: {
                        duration: 1000,
                        easing: 'linear',
                        from: 1,
                        to: 0.5,
                        loop: false
                    }
                },
                scales: {
                    y: { // defining min and max so hiding the dataset does not change scale range
                        min: 0,
                        max: 10,
                    }
                }
            }
        });
        </script>
        @endsection


        <script>
            function setMinDate() {
            var today = new Date().toISOString().split('T')[0];
            document.getElementById('date').setAttribute('min', today);
        }
        </script>
        @endsection
