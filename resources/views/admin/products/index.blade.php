@extends('admin.includes.default')
@section('title', 'Products')
@section('content')
@include('pages_message.notify-msg-success')
<div class="card">
  <div class="card-header">
    <h3 class="card-title">List Product</h3>
    <div class="card-tools">
      <a class="btn btn-primary" href=""> Create Product</a>
    </div>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
      <tr>
        <th>No</th>
        <th>Nama Product</th>
        <th>Image</th>
        <th>Harga</th>
        <th>Stock</th>
        <th>Action</th>
      </tr>
      </thead>
      <tbody>
        
      </tbody>
    </table>
  </div>
  <!-- /.card-body -->
</div>
@endsection