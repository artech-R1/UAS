@extends('admin.baseAdmin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-4">
            <div class="card">
                <div class="card-header">
                    Detail Data Kategori
                </div>
                <div class="card-body">
                    <h3>{{$kategoriAdmin->nama}}</h3>
                    <hr>
                    <p>
                        Rp.{{number_format($kategoriAdmin->hargamin)}} |
                        Berat Bersih : {{($kategoriAdmin->beratbersih)}} Gram |
                        Brand : {{$kategoriAdmin->brand}}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection