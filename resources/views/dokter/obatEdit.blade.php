@extends('components/layoutd')

@section('main-content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Manajemen Obat</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <!-- /.row -->
            <div class="row">
                <div class="col-12">
                    {{-- FORM --}}
                    <div class="col-md-6">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Manajemen Obat</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form method="POST" action="{{ route('dokter.obatUpdate', $obat->id) }}">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nama Obat</label>
                                        <input value="{{ $obat->nama_obat }}" type="text" name="nama_obat"
                                            class="form-control" id="exampleInputEmail1" placeholder="Input obat's name">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Kemasan</label>
                                        <input value="{{ $obat->kemasan }}" type="text" name="kemasan" class="form-control"
                                            id="exampleInputEmail1" placeholder="Input kemasan's name">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Harga</label>
                                        <input value="{{ $obat->harga }}" type="number" name="harga" class="form-control"
                                            id="exampleInputEmail1" placeholder="Input the price">
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Update Obat</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->
                    </div>

                </div>
            </div>
        </div>
        <!-- /.row -->

        <!-- /.row -->
        </div>
@endsection