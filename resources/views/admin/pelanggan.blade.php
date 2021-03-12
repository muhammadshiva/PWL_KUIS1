@extends('admin.layouts.app')

@section('title')
    Pelanggan | Movie Catalog
@endsection
@section('content-admin')
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title ">Table Pelanggan</h4>
          <p class="card-category">Menampilkan seluruh data Pelanggan</p>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th>
                  Id
                </th>
                <th>
                  Nama Pelanggan
                </th>
                <th>
                  Telepon
                </th>
                <th>
                  Alamat
                </th>
              </thead>
              <tbody>
                  <tr>
                    <td>id</td>
                    <td>name</td>
                    <td>telepon</td>
                    <td>alamat</td>
                  </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
</div> 
@endsection
 
