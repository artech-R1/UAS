@extends('users.baseUser')
@section('content')
<div class="container">
    <div class="container">

        <h1> Selamat Datang Di tempat Penjualan Tolektro Shop</h1>
    </div>
    <!-- /.row -->
    <di class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">
                    Filter
                </div>
                <div class="card-body">
                    <form action="{{url('produkUser/filter')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="" class="control-label">Nama</label>
                            <input type="text" name="nama" class="form-control" value="{{$nama ?? ''}}">
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label">Stok</label>
                            <input type="text" name="stok" class="form-control" value="{{$stok ?? ''}}">
                        </div>

                        <button class="btn btn-dark float-right"><i class="fa fa-search">Filter</i></button>
                    </form>
                </div>
            </div>

            <div>
                <a href="#" class="list-group-item active">Accessaries & Extras
                </a>
                <ul class="list-group">
                    <li class="list-group-item">Mobile Accessaries
                        <span class="label label-warning pull-right">456</span>
                    </li>
                    <li class="list-group-item">Men's Accessaries
                        <span class="label label-success pull-right">156</span>
                    </li>
                    <li class="list-group-item">Women's Accessaries
                        <span class="label label-info pull-right">400</span>
                    </li>
                    <li class="list-group-item">Kid's Accessaries
                        <span class="label label-primary pull-right">89</span>
                    </li>
                    <li class="list-group-item">Home Products
                        <span class="label label-danger pull-right">90</span>
                    </li>
                    <li class="list-group-item">Kitchen Products
                        <span class="label label-warning pull-right">567</span>
                    </li>
                </ul>
            </div>
            <!-- /.div -->
            <div>
                <ul class="list-group">
                    <li class="list-group-item list-group-item-success"><a href="#">New Offer's Coming </a></li>
                    <li class="list-group-item list-group-item-info"><a href="#">New Products Added</a></li>
                    <li class="list-group-item list-group-item-warning"><a href="#">Ending Soon Offers</a></li>
                    <li class="list-group-item list-group-item-danger"><a href="#">Just Ended Offers</a></li>
                </ul>
            </div>
            <!-- /.div -->
            <div class="well well-lg offer-box offer-colors">


                <span class="glyphicon glyphicon-star-empty"></span>25 % off , GRAB IT

                <br />
                <br />
                <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                        <span class="sr-only">70% Complete (success)</span>
                        2hr 35 mins left
                    </div>
                </div>
                <a href="#">click here to know more </a>
            </div>
            <!-- /.div -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
            <div>
                <ol class="breadcrumb">
                    <li><a href="active">Home</a></li>
                </ol>
            </div>
            <!-- /.div -->
            <div class="row">
                <div class="btn-group alg-right-pad">
                    <button type="button" class="btn btn-default"><strong>1235 </strong>items</button>
                    <div class="btn-group">
                        <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
                            Sort Products &nbsp;
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="#">By Price Low</a></li>
                            <li class="divider"></li>
                            <li><a href="#">By Price High</a></li>
                            <li class="divider"></li>
                            <li><a href="#">By Popularity</a></li>
                            <li class="divider"></li>
                            <li><a href="#">By Reviews</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <div class="row">
                @foreach($list_produk as $produkUser)

                <div class="col-md-4 text-center col-sm-6 col-xs-6">
                    <div class="thumbnail product-box">
                        <img src="{{ url('public/'.$produkUser->foto.'') }}" alt="" />
                        <div class="caption">

                            <h3><a href="#"> {{$produkUser->nama}} </a></h3>
                            <h3><a href="#"> STOK |{{$produkUser->stok}} Buah </a></h3>
                            <p><a href="#" class="btn btn-success" role="button">Add To Cart</a> <a href="{{url('produkUser', $produkUser->id)}}" class="btn btn-primary" role="button">See Details</a></p>

                        </div>
                    </div>
                </div>
                @endforeach
                <!-- /.col -->

                <div class="row">
                    <ul class="pagination alg-right-pad">
                        {{ $list_produk->links() }}
                    </ul>
                </div>
                <!-- /.row -->
                <div class="row">

                    <ul class="dropdown-menu">
                        <li><a href="#">By Price Low</a></li>
                        <li class="divider"></li>
                        <li><a href="#">By Price High</a></li>
                        <li class="divider"></li>
                        <li><a href="#">By Popularity</a></li>
                        <li class="divider"></li>
                        <li><a href="#">By Reviews</a></li>
                    </ul>
                </div>
            </div>

            <!-- /.row -->

        </div>
        <!-- /.col -->
</div>
<!-- /.row -->
</div>
<!-- /.container -->
<div class="col-md-12 download-app-box text-center">

    <span class="glyphicon glyphicon-download-alt"></span>Download Our Android App and Get 10% additional Off on all Products . <a href="#" class="btn btn-danger btn-lg">DOWNLOAD NOW</a>

</div>

@endsection