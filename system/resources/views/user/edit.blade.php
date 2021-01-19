@extends('admin.baseAdmin')
@section('content')
<div class="container" style="background-color: grey;">
    <div class="row">
        <div class="col-md-12 mt-4">
            <div class="card">
                <div class="card-header">
                    Edit Data Produk
                </div>
                <div class="card-body">
                    <form action="{{url('admin/user', $user->id)}}" method="post">
                        @csrf
                        @method("PUT")
                        <div class="form-group">
                            <label for="" class="control-label">Nama</label>
                            <input type="text" class="form-control" name="nama" value="{{$user->nama}}">
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label">Username</label>
                            <input type="text" class="form-control" name="username" value="{{$user->username}}">
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label">Email</label>
                            <input type="email" class="form-control" name="email" value="{{$user->email}}">
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label">Password</label>
                            <input type="password" class="form-control" name="password">
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label">No Handphone</label>
                            <input type="text" class="form-control" name="no_handphone">
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