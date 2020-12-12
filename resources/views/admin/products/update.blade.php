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
        <label for="product_nama">Nama</label>
        <input type="text" name="product_nama" class="form-control" @if(!empty($products)) value="{{ $products->nama_produk}}" @else value="{{ old('product_nama') }}" @endif>
        @if(!empty($errors->first('product_nama')))
        <p class="text-red"><i class="icon fa fa-ban"></i> {{ $errors->first('product_nama') }}</p>
        @endif
      </div>
      <div class="form-group">
        <label for="product_nama">Image</label>
        <div class="custom-file">
          <input type="file" name="product_image" class="custom-file-input" id="inputGroupFile02" aria-describedby="inputGroupFileAddon01" @if(!empty($products)) value="{{ $products->image}}" @else value="{{ old('product_image') }}" @endif>
          <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
        </div>
      </div>
      @if(!empty($errors->first('product_image')))
      <p class="text-red"><i class="icon fa fa-ban"></i> {{ $errors->first('product_image') }}</p>
      @endif
      <!-- <div class="form-group">
        <label for="exampleInputPassword1">Image</label>
        <input type="text" name="product_image" class="form-control" @if(!empty($products)) value="{{ $products->image}}" @else value="{{ old('product_image') }}" @endif>
        @if(!empty($errors->first('product_image')))
        <p class="text-red"><i class="icon fa fa-ban"></i> {{ $errors->first('product_image') }}</p>
        @endif
      </div> -->
      <div class="form-group">
        <label for="product_harga">Harga</label>
        <input type="text" name="product_harga" class="form-control" @if(!empty($products)) value="{{ $products->harga}}" @else value="{{ old('product_harga') }}" @endif>
        @if(!empty($errors->first('product_harga')))
        <p class="text-red"><i class="icon fa fa-ban"></i> {{ $errors->first('product_harga') }}</p>
        @endif
      </div>
      <div class="form-group">
        <label for="product_stock">Stock</label>
        <input type="text" name="product_stock" class="form-control" @if(!empty($products)) value="{{ $products->stock}}" @else value="{{ old('product_stock') }}" @endif>
        @if(!empty($errors->first('product_stock')))
        <p class="text-red"><i class="icon fa fa-ban"></i> {{ $errors->first('product_stock') }}</p>
        @endif
      </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Save</button>
      <a href="{{ route('products')}}" class="btn btn-secondary">Back</a>
    </div>
  </form>
</div>
@endsection