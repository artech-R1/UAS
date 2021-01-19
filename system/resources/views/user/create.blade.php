@extends('admin.baseAdmin')
@section('content')
<div class="container" style="background-color: grey;">
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    Tambah Data User
                </div>
                <div class="card-body">
                    <form action="{{url('admin/user')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="" class="control-label">Nama</label>
                            @include('template.action.errors', ['item' => 'nama'])
                            <input type="text" class="form-control" name="nama">
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label">Username</label>
                            @include('template.action.errors', ['item' => 'username'])

                            <input type="text" class="form-control" name="username">
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label">Email</label>
                            @include('template.action.errors', ['item' => 'email'])

                            <input type="email" class="form-control" name="email">
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label">Password</label>
                            <input type="password" class="form-control" name="password">
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label">No Handphone</label>
                            <input type="text" class="form-control" name="no_handphone">
                        </div>
                        <button class="btn btn-dark float-right"><i class="fa fa-save">Simpan Data</i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection