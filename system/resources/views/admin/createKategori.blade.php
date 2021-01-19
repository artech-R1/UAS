@extends('admin.baseAdmin')
@section('content')
<div class="container" style="background-color: grey;">
    <div class="row">
        <div class="col-md-12 mt-4">
            <div class="card">
                <div class="card-header">
                    Tambah Data Kategori
                </div>
                <div class="card-body">
                    <form action="{{url('admin/kategoriAdmin')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="" class="control-label">Nama</label>
                            <input type="text" class="form-control" name="nama">
                        </div>
                        <div class="row">
                            <div class="col-md-6 no-gutters">
                                <div class="form-group">
                                    <label for="" class="control-label">Brand</label>
                                    <input type="text" class="form-control" name="brand">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="" class="control-label">Berat Bersih</label>
                                    <input type="text" class="form-control" name="beratbersih">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="" class="control-label">Harga Minimal</label>
                                    <input type="text" class="form-control" name="hargamin">
                                </div>
                            </div>
                        </div>

                        <button class="btn btn-dark float-right"><i class="fa fa-save">Simpan Data</i></button>
                </div>
                </form>

            </div>
        </div>
    </div>
</div>
</div>
@endsection