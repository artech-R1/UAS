@extends('admin.baseAdmin')
@section('content')
<div class="container" style="background-color: grey;">
    <div class="row mt-5">
        
            <div class="col-md-3">
                <img src="{{ url('public/'.$produkAdmin->foto.'') }}" alt="" class="img-fluid">
            </div>
      
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    Edit Data Produk
                </div>
                <div class="card-body">
                    <form action="{{url('admin/produkAdmin', $produkAdmin->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method("PUT")
                        <div class="form-group">
                            <label for="" class="control-label">Nama</label>
                            <input type="text" class="form-control" name="nama" value="{{$produkAdmin->nama}}">
                        </div>
                        <div class="row">
                            <div class="col-md-6 no-gutters">
                                <div class="form-group">
                                    <label for="" class="control-label">Harga</label>
                                    <input type="text" class="form-control" name="harga" value="{{$produkAdmin->harga}}">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="" class="control-label">Berat</label>
                                    <input type="text" class="form-control" name="berat" value="{{$produkAdmin->berat}}">
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="" class="control-label">Foto</label>
                                        <input type="file" class="form-control" name="foto" >
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="" class="control-label">Stok</label>
                                    <input type="text" class="form-control" name="stok" value="{{$produkAdmin->stok}}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label">Deskripsi</label>
                            <textarea name="deskripsi" class="form-control"> {{$produkAdmin->deskripsi}}</textarea>
                        </div>
                        <button class="btn btn-dark float-right"><i class="fa fa-save">Edit Data</i></button>
                </div>
                </form>

            </div>
        </div>
    </div>
</div>
</div>
@endsection