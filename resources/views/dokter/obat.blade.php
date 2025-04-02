@extends('components/layoutd')

@section('main-content')
    <div class="container">
        <h2 class="mb-4">Daftar Obat</h2>
        
        <!-- Tabel Daftar Obat -->
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Obat</th>
                    <th>Kemasan</th>
                    <th>Harga</th>
                </tr>
            </thead>
            <tbody>
                <!-- Contoh data statis, bisa diganti dengan data dinamis -->
                <tr>
                    <td>1</td>
                    <td>Paracetamol</td>
                    <td>Strip 10 Tablet</td>
                    <td>Rp. 25.000</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Amoxicillin</td>
                    <td>Box 10 Kapsul</td>
                    <td>Rp. 30.000</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Ibuprofen</td>
                    <td>Strip 20 Tablet</td>
                    <td>Rp. 40.000</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
