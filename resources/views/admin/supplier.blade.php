@extends('admin.layouts.app')

@section('title')
    Supplier | Movie Catalog
@endsection
@section('content-admin')
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title ">Table Supplier</h4>
          <p class="card-category">Menampilkan seluruh data Supplier</p>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th>
                  Id
                </th>
                <th>
                  Nama Supplier
                </th>
                <th>
                  Telepon
                </th>
                <th>
                  Alamat
                </th>
              </thead>
              <tbody>
                @foreach ($suppliers as $supplier)
                  <tr>
                    <td>{{$supplier->id}}</td>
                    <td>{{$supplier->name}}</td>
                    <td>{{$supplier->telepon}}</td>
                    <td>{{$supplier->alamat}}</td>
                  </tr>
                @endforeach
                  
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
</div> 
@endsection
 