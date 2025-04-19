@extends('components/layoutp')

@section('main-content')
<div class="container mt-4">
    <h4>Form Pemeriksaan</h4>

    <form action="#" method="POST">
        @csrf

        <div class="form-group">
            <label for="nama">Nama Anda</label>
            <input type="text" class="form-control" id="nama" name="nama_pasien" placeholder="Masukkan nama anda">
        </div>

        <div class="form-group mt-3">
            <label for="dokter">Pilih Dokter</label>
            <select class="form-control" id="dokter" name="id_dokter">
                <option value="">-- Pilih Dokter --</option>
                @foreach ($dokters as $dokter)
                    <option value="{{ $dokter->id }}">{{ $dokter->nama }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group mt-3">
            <label for="tanggal">Tanggal Periksa</label>
            <input type="date" class="form-control" id="tanggal" name="tgl_periksa">
        </div>

        <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>
</div>
@endsection