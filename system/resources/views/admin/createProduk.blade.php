@extends('admin.baseAdmin')
@section('content')
<div class="container" style="background-color: grey;">
    <div class="row">
        <div class="col-md-12 mt-4">
            <div class="card">
                <div class="card-header">
                    Tambah Data Produk
                </div>
                <div class="card-body">
                    <form action="{{url('admin/produkAdmin')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="" class="control-label">Nama</label>
                            @include('template.action.errors', ['item' => 'nama'])

                            <input type="text" class="form-control" name="nama">
                            
                        </div>
                        <div class="row">
                            <div class="col-md-6 no-gutters">
                                <div class="form-group">
                                    <label for="" class="control-label">Harga</label>
                            @include('template.action.errors', ['item' => 'harga'])

                                    <input type="text" class="form-control" name="harga">
                                </div>
                                </div>
                            </div>
                            <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="" class="control-label">Berat</label>
                            @include('template.action.errors', ['item' => 'berat'])

                                    <input type="text" class="form-control" name="berat">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="" class="control-label">Stok</label>
                            @include('template.action.errors', ['item' => 'stok'])

                                    <input type="text" class="form-control" name="stok">
                                </div>
                            </div>
                     
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="" class="control-label">Foto</label>
                            @include('template.action.errors', ['item' => 'foto'])

                                    <input type="file" class="form-control" name="foto" >
                                </div>
                            </div>
                        </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="" class="control-label">Provinsi</label>
                            @include('template.action.errors', ['item' => 'provinsi'])

                                        <select name="provinsi" class="form-control" onchange="gantiProvinsi(this.value)">
                                           <option value="" selected>Pilih Provinsi Terlebih Dahulu</option>
                                            @foreach ($list_provinsi as $prov)
                                            <option value="{{ $prov->id }}">{{ $prov->nama }}</option>
                                            @endforeach
                                        </select>
                                      </div>
                                    </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="" class="control-label">Kabupaten</label>
                            @include('template.action.errors', ['item' => 'kabupaten'])
                                        <select name="kabupaten"  class="form-control" id="kabupaten" onchange="gantiKabupaten(this.value)" >
                                          <option value="">Pilih Provinsi Terlebih Dahulu</option>
                                        </select>
                                      </div>
                                    </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="" class="control-label">Kecamatan</label>
                            @include('template.action.errors', ['item' => 'kecamatan'])
                                        <select name="kecamatan" class="form-control" id="kecamatan" onchange="gantiKecamatan(this.value)">
                                          <option value="">Pilih Kabupaten Terlebih Dahulu</option>
                                        </select>
                                      </div>
                                    </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="" class="control-label">Desa</label>
                            @include('template.action.errors', ['item' => 'desa'])
                                        <select name="desa" class="form-control" id="desa" >
                                          <option value="">Pilih Kecamatan Terlebih Dahulu</option>
                                        </select>
                                      </div>
                                    </div>
                            </div>  
                       <div class="form-group">
                                        <label for="" class="control-label">Deskripsi</label>
                            @include('template.action.errors', ['item' => 'deskripsi'])
                                    </div>
                            <textarea name="deskripsi" class="form-control"></textarea>
                        </div>
                        <div>                      
                              <button class="btn btn-dark float-right"><i class="fa fa-save">Simpan Data</i></button>
                        </div>
                        </div>
                </form>

            </div>
        </div>
    </div>
</div>
</div>
@endsection
@push('script')
    <script>
        function gantiProvinsi(id){
            $.get("api/provinsi/"+id, function(result){
                        result = JSON.parse(result)
                        option = ""
                        for(item of result){
                            console.log(item)
                            option += '<option value="'+item.id+'">'+item.nama+'</option>';
                        }
                        $("#kabupaten").html(option)
            });
            }
        function gantiKabupaten(id){
            $.get("api/kabupaten/"+id, function(result){
                        result = JSON.parse(result)
                        option = ""
                        for(item of result){
                            console.log(item);
                            option += '<option value="'+item.id+'">'+item.nama+'</option>';
                        }
                        $("#kecamatan").html(option)
            });
            }
        function gantiKecamatan(id){
            $.get("api/kecamatan/"+id, function(result){
                        result = JSON.parse(result)
                        option = ""
                        for(item of result){
                            console.log(item);
                            option += '<option value="'+item.id+'">'+item.nama+'</option>';
                        }
                        $("#desa").html(option)
            });
            }
    </script>
@endpush