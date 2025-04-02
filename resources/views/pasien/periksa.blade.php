@extends('components/layoutp')

@section('main-content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Quick Example</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form>
            <div class="card-body">
                <div class="form-group">
                    <label for="nama">Nama Anda</label>
                    <input type="nama" class="form-control" id="nama" placeholder="Masukkan Nama Anda">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Pilih Dokter</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection