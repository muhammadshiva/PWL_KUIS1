@extends('admin.layouts.app')

@section('title')
   Barang | Movie Catalog
@endsection
@section('content-admin')
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title ">Table Barang</h4>
          <p class="card-category">Menampilkan seluruh data Barang</p>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th>
                  Id
                </th>
                <th>
                  Nama
                </th>
                <th>
                  Harga
                </th>
                <th>
                  Stock
                </th>
              </thead>
              <tbody>
                  <tr>
                    <td>Id</td>
                    <td>Nama</td>
                    <td>Harga</td>
                    <td>Stock</td>
                  </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
</div> 
@endsection
 