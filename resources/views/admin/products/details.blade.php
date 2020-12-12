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
      <dt>PO Date</dt>
      <dd>{{ $products->po_date }}</dd>
      <dt>PO Number</dt>
      <dd>{{ $products->po_number }}</dd>
      <dt>Nama Produk</dt>
      <dd>{{ $products->name }}</dd>
      <dt>Price</dt>
      <dd>{{ $products->po_item_price }}</dd>
      <dt>Cost</dt>
      <dd>{{ $products->po_item_cost }}</dd>
      <dt>Qyt</dt>
      <dd>{{ $products->po_item_qyt }}</dd>
    </dl>
  </div>
	<div class="card-footer">
	  <a href="{{ route('/')}}" class="btn btn-secondary">Back</a>
	</div>
  <!-- /.card-body -->
</div>
@endsection