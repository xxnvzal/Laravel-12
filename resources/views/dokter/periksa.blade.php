@extends('components/layoutd')

@section('main-content')
    <div class="container">
        <h2 class="mb-4">Riwayat Pemeriksaan</h2>
        
        <!-- Tabel Riwayat Pemeriksaan -->
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Pasien</th>
                    <th>Dokter</th>
                    <th>Tanggal Pemeriksaan</th>
                    <th>Catatan</th>
                    <th>Biaya</th>
                </tr>
            </thead>
            <tbody>
                <!-- Contoh data statis, bisa diganti dengan data dinamis -->
                <tr>
                    <td>1</td>
                    <td>Test User</td>
                    <td>dr. Andi</td>
                    <td>2025-03-31</td>
                    <td>Catatan pemeriksaan</td>
                    <td>Rp. 150.000</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Jane Doe</td>
                    <td>dr. Budi</td>
                    <td>2025-04-01</td>
                    <td>Catatan pemeriksaan</td>
                    <td>Rp. 200.000</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
