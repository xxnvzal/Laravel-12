@extends('components/layoutd')

@section('main-content')
<div class="container-fluid">

<!-- /.row -->
<div class="row">
    <div class="col-12">
        {{-- FORM --}}
        <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Periksa</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('dokter.obatStore') }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nama_obat">Nama Obat</label>
                            <input type="text" name="nama_obat" class="form-control" placeholder="Input nama obat">
                        </div>
                        <div class="form-group">
                            <label for="kemasan">Kemasan</label>
                            <input type="text" name="kemasan" class="form-control" placeholder="Input kemasan">
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input type="number" name="harga" class="form-control" placeholder="Input harga">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Tambah Obat</button>
                    </div>
                </form>
            </div>
            <!-- /.card -->
        </div>
        <div class="card">
            {{-- OBAT --}}
            <div class="card-header">
                <h3 class="card-title">List Obat</h3>

                <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" name="table_search" class="form-control float-right"
                            placeholder="Search">

                        <div class="input-group-append">
                            <button type="submit" class="btn btn-default">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>ID Obat</th>
                            <th>Nama Obat</th>
                            <th>Kemasan</th>
                            <th>Harga</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($obats as $index => $obat)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ 'B' . str_pad($obat->id, 3, '0', STR_PAD_LEFT) }}</td>
                                <td>{{ $obat->nama_obat }}</td>
                                <td>{{ $obat->kemasan }}</td>
                                <td>{{ $obat->harga }}</td>
                                <td>
                                    <form action="{{ route('dokter.obatDelete', $obat->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                    </form>
                                    <a href="{{ route('dokter.obatEdit', $obat->id) }}" class="btn btn-warning">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</div>
</div>
<!-- /.row -->

<!-- /.row -->
</div><!-- /.container-fluid -->
@endsection
