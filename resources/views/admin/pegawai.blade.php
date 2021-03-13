@extends('admin.layouts.app')

@section('title')
    Pegawai | Movie Catalog
@endsection
@section('content-admin')
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title ">Table Pegawai</h4>
          <p class="card-category">Menampilkan seluruh data pegawai</p>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th>
                  No
                </th>
                <th>
                  Name
                </th>
                <th>
                  Email
                </th>
                <th>
                  Telepon
                </th>
                <th>
                  Level
                </th>
                <th>
                  Password
                </th>
                <th>
                  Action
                </th>
              </thead>
              <tbody>
                <?php $number = 1 ?>
                @foreach ($users as $user)
                  <tr>
                    <td>
                      {{$number++}}
                    </td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->Telepon}}</td>
                    <td class="text-primary">{{$user->level}}</td>
                    <td>
                      <input type="password" disabled class="border-0 bg-white" value="{{$user->password}}">
                    </td>
                    <td>
                      <a href="/admin/pegawai/detail/{{$user->id}}" class="btn btn-info">
                        <i class="material-icons">remove_red_eye</i>
                      </a>
                      <a href="#" class="btn btn-danger">
                        <i class="material-icons">delete</i>
                      </a>
                      <a href="#" class="btn btn-warning">
                        <i class="material-icons">mode</i>
                      </a>
                    </td>
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
 