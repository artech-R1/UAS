@extends('admin.baseAdmin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-4">
            <div class="card">
                <div class="card-header">
                    Filter
                </div>
                <div class="card-body">
                    <form action="{{url('admin/kategoriAdmin/filter')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="" class="control-label">Nama</label>
                            <input type="text" name="nama" class="form-control" value="{{$nama ?? ''}}">
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label">Brand</label>
                            <input type="text" name="brand" class="form-control" value="{{$brand ?? ''}}">
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label">Harga Min</label>
                                    <input type="text" name="harga_min" class="form-control" value="{{$harga_min ?? ''}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label">Harga Max</label>
                                    <input type="text" name="harga_max" class="form-control" value="{{$harga_max ?? ''}}">
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-dark float-right"><i class="fa fa-search">Filter</i></button>
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    Data Kategori
                    <a href="{{url('admin/kategoriAdmin/create')}}" class="btn btn-dark float-right"><i class="fa fa-plus"></i>Tambah Data</a>
                </div>
                <div class="card-body">
                    <table class="table table-datatable">
                        <thead>
                            <th>No</th>
                            <th>Aksi</th>
                            <th>Nama</th>
                            <th>Harga Minimal</th>
                            <th>Brand</th>
                        </thead>
                        <tbody>
                            <tr> @foreach($list_Kategori as $kategoriAdmin)
                                <td>{{$loop->iteration}}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{url('admin/kategoriAdmin', $kategoriAdmin->id)}}" class="btn btn-dark"><i class="fa fa-info"></i></a>
                                        <a href="{{url('admin/kategoriAdmin', $kategoriAdmin->id)}}/edit" class="btn btn-warning "><i class="fa fa-edit"></i></a>
                                        @include('template.action.delete', ['url' => url('admin/kategoriAdmin', $kategoriAdmin->id)])
                                    </div>
                                </td>

                                <td>{{$kategoriAdmin->nama}}</td>
                                <td>{{$kategoriAdmin->hargamin}}</td>
                                <td>{{$kategoriAdmin->brand}}</td>
                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection