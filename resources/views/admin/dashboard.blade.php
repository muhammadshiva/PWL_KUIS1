@extends('admin.layouts.app')
@section('title')
    Dashboard | Movie Catalog
@endsection
@section('content-admin')
<div class="row">
  <div class="col-lg-4 col-md-6 col-sm-6">
    <div class="card card-stats">
      <div class="card-header card-header-success card-header-icon">
        <div class="card-icon">
          <i class="material-icons">person</i>
        </div>
        <p class="card-category">Pelanggan</p>
        <h3 class="card-title">245</h3>
      </div>
      <div class="card-footer">
        <div class="stats">
          <i class="material-icons">date_range</i> Last 24 Hours
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-4 col-md-6 col-sm-6">
    <div class="card card-stats">
      <div class="card-header card-header-info card-header-icon">
        <div class="card-icon">
          <i class="material-icons">movie</i>
        </div>
        <p class="card-category">Barang</p>
        <h3 class="card-title">25</h3>
      </div>
      <div class="card-footer">
        <div class="stats">
          <i class="material-icons">date_range</i> Last 24 Hours
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-4 col-md-6 col-sm-6">
    <div class="card card-stats">
      <div class="card-header card-header-warning card-header-icon">
        <div class="card-icon">
          <i class="material-icons">library_books</i>
        </div>
        <p class="card-category">Supplier</p>
        <h3 class="card-title">50</h3>
      </div>
      <div class="card-footer">
        <div class="stats">
          <i class="material-icons">date_range</i> Last 24 Hours
        </div>
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
            <th>Salary</th>
            <th>Country</th>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Dakota Rice</td>
              <td>$36,738</td>
              <td>Niger</td>
            </tr>
            <tr>
              <td>2</td>
              <td>Minerva Hooper</td>
              <td>$23,789</td>
              <td>Curaçao</td>
            </tr>
            <tr>
              <td>3</td>
              <td>Sage Rodriguez</td>
              <td>$56,142</td>
              <td>Netherlands</td>
            </tr>
            <tr>
              <td>4</td>
              <td>Philip Chaney</td>
              <td>$38,735</td>
              <td>Korea, South</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <div class="col-lg-6 col-md-12">
    <div class="card">
      <div class="card-header card-header-warning">
        <h4 class="card-title">Supplier Stats</h4>
        <p class="card-category">New Supplier on 20th September, 2021</p>
      </div>
      <div class="card-body table-responsive">
        <table class="table table-hover">
          <thead class="text-warning">
            <th>ID</th>
            <th>Name</th>
            <th>Salary</th>
            <th>Country</th>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Dakota Rice</td>
              <td>$36,738</td>
              <td>Niger</td>
            </tr>
            <tr>
              <td>2</td>
              <td>Minerva Hooper</td>
              <td>$23,789</td>
              <td>Curaçao</td>
            </tr>
            <tr>
              <td>3</td>
              <td>Sage Rodriguez</td>
              <td>$56,142</td>
              <td>Netherlands</td>
            </tr>
            <tr>
              <td>4</td>
              <td>Philip Chaney</td>
              <td>$38,735</td>
              <td>Korea, South</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>   
@endsection
 