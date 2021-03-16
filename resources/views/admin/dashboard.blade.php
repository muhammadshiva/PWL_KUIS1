@extends('admin.layouts.app')
@section('title')
    Dashboard | Movie Catalog
@endsection
@section('content-admin')
<div class="row">
  <div class="col-lg-6 col-md-6 col-sm-6">
    <div class="card card-stats">
      <div class="card-header card-header-success card-header-icon">
        <div class="card-icon">
          <i class="material-icons">person</i>
        </div>
        <p class="card-category">Pelanggan</p>
        <h3 class="card-title">{{$countPelanggan}}</h3>    
      </div>
      <div class="card-footer">
        <div class="stats">
          <i class="material-icons">date_range</i> Last 24 Hours
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-6 col-md-6 col-sm-6">
    <div class="card card-stats">
      <div class="card-header card-header-warning card-header-icon">
        <div class="card-icon">
          <i class="material-icons">library_books</i>
        </div>
        <p class="card-category">Supplier</p>
        <h3 class="card-title">{{$countSupplier}}</h3>
      </div>
      <div class="card-footer">
        <div class="stats">
          <i class="material-icons">date_range</i> Last 24 Hours
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-6 col-md-12">
      <div class="card">
        <div class="card-header card-header-info">
          <h4 class="card-title">Movie Stats</h4>
          <p class="card-category">New Movie on 20th September, 2021</p>
        </div>
        <div class="card-body table-responsive">
          <table class="table table-hover">
            <thead class="text-info">
              <th>ID</th>
              <th>Name</th>
              <th>Price</th>
              <th>Stock</th>
            </thead>
            <tbody>
              @foreach ($movies as $movie)
              <tr>
                <td>{{$movie->id}}</td>
                <td>{{$movie->name}}</td>
                <td>{{$movie->harga}}</td>
                <td>{{$movie->stock}}</td>
              </tr>  
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="col-lg-6 col-md-12">
      <div class="card">
        <div class="card-header card-header-warning">
          <h4 class="card-title">Supplier Stats</h4>
          <p class="card-category">New Supplier</p>
        </div>
        <div class="card-body table-responsive">
          <table class="table table-hover">
            <thead class="text-warning">
              <th>ID</th>
              <th>Name</th>
              <th>Address</th>
              <th>Telepon</th>
            </thead>
            <tbody>  
                @foreach ($suppliers as $supplier)
                <tr>
                  <td>{{$supplier->id}}</td>
                  <td>{{$supplier->name}}</td>
                  <td>{{$supplier->alamat}}</td>
                  <td>{{$supplier->telepon}}</td>
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
 