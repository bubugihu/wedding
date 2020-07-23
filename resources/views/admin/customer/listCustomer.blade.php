@extends('admin.layout.layout')
@section('title', 'Customers List - Admin')
@section('content')
<div class="page-holder w-100 d-flex flex-wrap">
  <div class="container-fluid px-xl-5">
    <section class="py-5">
      <div class="row">
        <div class="col-lg-12 mb-5">
          <div class="card">
            <div class="card-header bg-dark text-white">
              <h6 class="text-uppercase mb-0">Customer List</h6>
            </div>
            <div class="card-body">
              @if(Session::has('flash_message'))
              <div class="alert alert-{!! Session::get('flash_level') !!}">
                {!!Session::get('flash_message')!!}
              </div>
              @endif
              <!-- List Customer -->
              <table class="table card-text text-center" id="dbtable">
                <thead>
                  <tr>
                    <th>Customer ID</th>
                    <th>Fullname</th>
                    <th>D.O.B</th>
                    <th>Gender</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  {{-- @foreach($customer as $customer)
                  <tr>
                    <th scope="row" class="align-middle">{{$customer->id}}</th>
                    <td class="align-middle">{{$customer->customer_name}}</td>
                    <td class="align-middle">{{$customer->dob}}</td>
                    <td class="align-middle">{{$customer->gender}}</td>
                    <td class="align-middle">{{$customer->email}}</td>
                    <td class="align-middle">{{$customer->phone}}</td>
                    <td class="align-middle">
                      <!-- Modal Details Customer -->
                      <a href="#Modal-Customer-Details{{$customer->id}}" class="badge badge-info p-2" data-toggle="modal"><i class="fas fa-eye" style="font-size: 16px; font-weight:100;"></i></a>
                      <div id="Modal-Customer-Details{{$customer->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade bd-example-modal-lg text-left">
                        <div role="document" class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 id="exampleModalLabel" class="modal-title">Details Customer</h4>
                              <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body">
                              <div class="container">
                                <div class="row">
                                  <div class="col-md-6">
                                    <img src="{{asset('img/'.$customer->feature)}}" class="rounded mx-auto d-block" alt="" width="50%">
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="form-control-label text-uppercase">User ID</label>
                                      <input type="text" class="form-control" value="{{$customer->id}}" readonly>
                                    </div>
                                    <div class="form-group">
                                      <label class="form-control-label text-uppercase">Full Name</label>
                                      <input type="text" class="form-control" value="{{$customer->customer_name}}" readonly>
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="form-control-label text-uppercase">Email</label>
                                      <input type="text" class="form-control" value="{{$customer->email}}" readonly>
                                    </div>
                                    <div class="form-group">
                                      <label class="form-control-label text-uppercase">Role</label>
                                      @if($customer->role==0)
                                      <input type="text" class="form-control" value="User" readonly>
                                      @elseif($customer->role == 1)
                                      <input type="text" class="form-control" value="Admin" readonly>
                                      @elseif($customer->role == 2)
                                      <input type="text" class="form-control" value="Mod Customer" readonly>
                                      @elseif($customer->role == 3)
                                      <input type="text" class="form-control" value="Mod Product" readonly>
                                      @endif
                                      <!-- <input type="text" class="form-control" value="{{$customer->role}}" readonly> -->
                                    </div>
                                    <div class="form-group">
                                      <label class="form-control-label text-uppercase">Address</label>
                                      <input type="text" class="form-control" value="{{$customer->address}}" readonly>
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="form-control-label text-uppercase">BirthDay</label>
                                      <input type="date" class="form-control" value="{{$customer->dob}}" readonly>
                                    </div>
                                    <div class="form-group">
                                      <label class="form-control-label text-uppercase">Gender</label>
                                      <input type="text" class="form-control" value="{{$customer->gender}}" readonly>
                                    </div>
                                    <div class="form-group">
                                      <label class="form-control-label text-uppercase">Phone</label>
                                      <input type="text" class="form-control" value="{{$customer->phone}}" readonly>
                                    </div>
                                  </div>
                                </div>
                                <div class="modal-footer d-flex justify-content-start">
                                  <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- Page Update Customer -->
                      <a href="{{ url('admin/customer/updateCustomer/'.$customer->id)}}" class="badge badge-warning p-2"><i class="fas fa-edit" style="font-size: 16px; font-weight:100;"></i></a>
                      <!-- Modal Delete Customer With Status = 0 -->
                      <!-- <a href="{{ url('admin/customer/deleteCustomer/'.$customer->id)}}" class="badge badge-danger p-2" onclick="return confirm('Are you sure you want to delete?')"><i class="fas fa-trash-alt" style="font-size: 16px; font-weight:100;"></i></a> -->
                    </td>
                  </tr>
                  @endforeach --}}
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  @endsection