@extends('layouts.app')

@section('title', 'Dashboard')
@section('page-title', 'Dashboard')

@section('content')

<div class="row g-4">

    <!-- Total Kendaraan -->
    <div class="col-md-4">
        <div class="card card-custom bg-primary text-white">
            <div class="card-body">
                <h6 class="mb-2">Total Kendaraan</h6>
                <h2 class="fw-bold">0</h2>
                <small>Data kendaraan terdaftar</small>
            </div>
        </div>
    </div>

    <!-- Parkir Aktif -->
    <div class="col-md-4">
        <div class="card card-custom bg-success text-white">
            <div class="card-body">
                <h6 class="mb-2">Parkir Aktif</h6>
                <h2 class="fw-bold">0</h2>
                <small>Kendaraan sedang parkir</small>
            </div>
        </div>
    </div>

    <!-- Total Pendapatan -->
    <div class="col-md-4">
        <div class="card card-custom bg-warning text-dark">
            <div class="card-body">
                <h6 class="mb-2">Total Pendapatan</h6>
                <h2 class="fw-bold">Rp 0</h2>
                <small>Pemasukan parkir</small>
            </div>
        </div>
    </div>

</div>

<!-- Tabel Aktivitas -->
<div class="card card-custom mt-4">
    <div class="card-body">
        <h5 class="mb-3">Aktivitas Parkir Hari Ini</h5>

        <table class="table table-bordered table-hover">
            <thead class="table-light">
                <tr>
                    <th>No</th>
                    <th>Plat Nomor</th>
                    <th>Jenis</th>
                    <th>Waktu Masuk</th>
                    <th>Status</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td colspan="5" class="text-center text-muted">
                        Belum ada data parkir
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection