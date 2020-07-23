@extends('admin.layout.layout')
@section('title', 'Update User')
@section('content')
<div class="page-holder w-100 d-flex flex-wrap">
  <div class="container-fluid px-xl-5">
    <section class="py-5">
      <div class="row">
        <div class="col-lg-12 mb-5">
          <div class="card">
            <div class="card-header bg-dark text-white">
              <h3 class="text-center">Update Account</h3>
            </div>
            <div class="card-body">
              <form method="post" action="{{url('admin/users/postUpdateUser')}}">
                @csrf

                <div class="form-group row">
                  <div class="col-12">
                    <label class="form-control-label text-uppercase">User Name</label>
                    <input type="text" name="name" value="{{$users->name}}" class="form-control @error('name') is-invalid @enderror">
                    <input type="number" style="display: none" name="id" value="{{$users->id}}">
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-6">
                    <label class="form-control-label text-uppercase">Email</label>
                    <input type="email" name="email" value="{{$users->email}}" class="form-control" readonly>
                  </div>

                  <div class="col-6">
                    <label class="form-control-label text-uppercase">Role</label>
                    <select class="form-control" name="role">
                      <option value="0">User</option>
                      <option value="1">Admin</option>
                      <option value="2">Mod Customer</option>
                      <option value="3">Mod Product</option>
                      <option value="5">Black List</option>
                    </select>
                  </div>
                </div>
            </div>
            <div class="form-group row mb-3">
              <div class="col-md-12 text-center">
                <button type="submit" class="btn login-btn" style="background-color: #f47635" onclick="return confirm('Do you want update ?');">
                  {{ __('Update') }}
                </button>
                <button type="reset" class="btn btn-dark">
                  {{ __('Reset') }}
                </button>
              </div>
            </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </div>
  @endsection