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
                @foreach ($pelanggans as $pelanggan)
                  <tr>
                    <td>{{$pelanggan->id}}</td>
                    <td>{{$pelanggan->name}}</td>
                    <td>{{$pelanggan->telepon}}</td>
                    <td>{{$pelanggan->alamat}}</td>
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
 
