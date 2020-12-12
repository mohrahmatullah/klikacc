@extends('admin.includes.default')
@section('title', 'Products')
@section('content')
@include('pages_message.notify-msg-success')
<div class="card">
  <div class="card-header">
    <h3 class="card-title">List Product</h3>
    <div class="card-tools">
      <a class="btn btn-primary" href="{{ URL::to('products/0')}}"> Create Product</a>
    </div>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
      <tr>
        <th>No</th>
        <th>PO Number</th>
        <th>Item</th>
        <th>Item Qyt</th>
        <th>Item Price</th>
        <th>Item Cost</th>
        <th>Action</th>
      </tr>
      </thead>
      <tbody>
        @foreach($detail as $key)
        <td>{{ $loop->iteration }}</td>
        <td>{{ $key->po_number }}</td>
        <td>{{ $key->name }}</td>
        <td>{{ $key->po_item_qyt }}</td>
        <td>{{ $key->po_item_price }}</td>
        <td>{{ $key->po_item_cost }}</td>
        <td>
          <a href="{{ URL::to('products/details/' . $key->id) }}"><i class="fa fa-eye-slash"></i> </a>
          <a href="{{ URL::to('products/' . $key->id) }}">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
              <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
            </svg>
          </a>
          <a href="#" onclick="deleted_item( <?= $key->id ?> ,'product_list');">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-archive-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M12.643 15C13.979 15 15 13.845 15 12.5V5H1v7.5C1 13.845 2.021 15 3.357 15h9.286zM5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM.8 1a.8.8 0 0 0-.8.8V3a.8.8 0 0 0 .8.8h14.4A.8.8 0 0 0 16 3V1.8a.8.8 0 0 0-.8-.8H.8z"/>
            </svg>
          </a>
        </td>
        @endforeach
      </tbody>
    </table>
  </div>
  <!-- /.card-body -->
</div>
@endsection