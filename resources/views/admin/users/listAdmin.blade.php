@extends('admin.layout.layout')
@section('title', 'List Admin')
@section('content')
<div class="page-holder w-100 d-flex flex-wrap">
  <div class="container-fluid px-xl-5">
    <section class="py-5">
      <div class="row">
        <div class="col-lg-12 mb-5">
          <div class="card">
            <div class="card-header bg-dark text-white">
              <h6 class="text-uppercase mb-0">Admin List</h6>
            </div>
            <div class="card-body">
              <!-- List User -->
              @if(Session::has('flash_message'))
              <div class="alert alert-{!! Session::get('flash_level') !!}">
                {!!Session::get('flash_message')!!}
              </div>
              @endif
              <table class="table card-text text-center" id="dbtable">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Update Info</th>
                  </tr>
                </thead>
                <tbody>

                  @foreach($userAdmin as $userAdmin)
                  <tr>
                    <th scope="row" class="align-middle">{{++$sttAdmin}}</th>
                    <td class="align-middle">{{$userAdmin->name}}</td>
                    <td class="align-middle">{{$userAdmin->email}}</td>
                    <td class="align-middle">
                      @if($userAdmin->role == 1)
                      Admin
                      @elseif($userAdmin->role == 2)
                      Mod Customer
                      @elseif($userAdmin->role == 3)
                      Mod Product
                      @endif
                    </td>
                    <td class="align-middle">{{$userAdmin->created_at}}</td>
                    <td class="align-middle">{{$userAdmin->updated_at}}</td>
                    <td class="align-middle"><a href="{{url('admin/users/updateAdmin/'.$userAdmin->id)}}" class="badge badge-warning p-2"><i class="fas fa-edit" style="font-size: 16px; font-weight:100;"></i></a></td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  @endsection