@extends('admin.includes.default')
@section('title', 'Update Products')
@section('content')
<!-- jquery validation -->
<div class="card card-default">
  <div class="card-header">
    <h3 class="card-title">{{ $title_form }}</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form action="" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="card-body">
      <div class="form-group">
        <label for="product_nama">PO Number</label>
        <input type="text" name="product_po_number" class="form-control" @if(!empty($products)) value="{{ $products->po_number}}" @else value="{{ old('product_po_number') }}" @endif>
        @if(!empty($errors->first('product_po_number')))
        <p class="text-red"><i class="icon fa fa-ban"></i> {{ $errors->first('product_po_number') }}</p>
        @endif
      </div>
      <div class="form-group">
        <label for="product_nama">Nama</label>
        <input type="text" name="product_nama" class="form-control" @if(!empty($products)) value="{{ $products->name}}" @else value="{{ old('product_nama') }}" @endif>
        @if(!empty($errors->first('product_nama')))
        <p class="text-red"><i class="icon fa fa-ban"></i> {{ $errors->first('product_nama') }}</p>
        @endif
      </div>
      <div class="form-group">
        <label for="product_harga">Price</label>
        <input type="text" name="product_harga" class="form-control" @if(!empty($products)) value="{{ $products->po_item_price}}" @else value="{{ old('product_harga') }}" @endif>
        @if(!empty($errors->first('product_harga')))
        <p class="text-red"><i class="icon fa fa-ban"></i> {{ $errors->first('product_harga') }}</p>
        @endif
      </div>
      <div class="form-group">
        <label for="product_cost">Cost</label>
        <input type="text" name="product_cost" class="form-control" @if(!empty($products)) value="{{ $products->po_item_cost}}" @else value="{{ old('product_cost') }}" @endif>
        @if(!empty($errors->first('product_cost')))
        <p class="text-red"><i class="icon fa fa-ban"></i> {{ $errors->first('product_cost') }}</p>
        @endif
      </div>
      <div class="form-group">
        <label for="product_qyt">Qyt</label>
        <input type="text" name="product_qyt" class="form-control" @if(!empty($products)) value="{{ $products->po_item_qyt}}" @else value="{{ old('product_qyt') }}" @endif>
        @if(!empty($errors->first('product_qyt')))
        <p class="text-red"><i class="icon fa fa-ban"></i> {{ $errors->first('product_qyt') }}</p>
        @endif
      </div>
      <div class="form-group">
        <label for="product_qyt">Date</label>
        <input type="text" name="product_date" class="form-control" @if(!empty($products)) value="{{ $products->po_date}}" @else value="{{ old('product_date') }}" @endif>
        @if(!empty($errors->first('product_date')))
        <p class="text-red"><i class="icon fa fa-ban"></i> {{ $errors->first('product_date') }}</p>
        @endif
      </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Save</button>
      <a href="{{ route('/')}}" class="btn btn-secondary">Back</a>
    </div>
  </form>
</div>
@endsection