@extends('admin.includes.default')
@section('title', 'Update Products')
@section('content')
<div class="card">
  <div class="card-header">
    <h3 class="card-title">
      <i class="fas fa-text-width"></i>
      Details Product
    </h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <dl>
      <dt>Nama Produk</dt>
      <dd>{{ $products->nama_produk }}</dd>
      <dt>Image</dt>
      <dd><img src="{{url(env('URL_MEDIA').'/uploads/'.$products->image)}}" width="75px" height="75px"></dd>
      <dt>Harga</dt>
      <dd>{{ Rp($products->harga) }}</dd>
      <dt>Stock</dt>
      <dd>{{ $products->stock }}</dd>
    </dl>
  </div>
	<div class="card-footer">
	  <a href="{{ route('products')}}" class="btn btn-secondary">Back</a>
	</div>
  <!-- /.card-body -->
</div>
@endsection