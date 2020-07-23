@extends('admin.layout.layout')
@section('title', 'Update Customer - Admin')
@section('content')
<div class="page-holder w-100 d-flex flex-wrap">
    <div class="container-fluid px-xl-5">
        <section class="py-5">
            <div class="row">
                <div class="col-lg-12 mb-5">
                    <div class="card">
                        <div class="card-header bg-dark text-white">
                            <h6 class="text-uppercase mb-0">Update Customer</h6>
                        </div>
                        <div class="card-body">
                            <form role="form" action="{{url("admin/customer/postUpdateCustomer/" . $customer -> id)}}" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label text-uppercase">Full Name<span class="required">*</span></label>
                                            <input type="text" class="form-control" value="{{$customer->customer_name}}" name="cus_customer_name">
                                            @if($errors->has('cus_customer_name'))
                                            <small style="color:red;font-size:14px;">{{$errors->first('cus_customer_name')}}</small>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label text-uppercase">BirthDay<span class="required">*</span></label>
                                            <input type="date" class="form-control" value="{{$customer->dob}}" min="1900-01-01" max="2006-12-31" name="cus_dob">
                                            @if($errors->has('cus_dob'))
                                            <small style="color:red;font-size:14px;">{{$errors->first('cus_dob')}}</small>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label text-uppercase">Gender<span class="required">*</span></label>
                                            <select class="form-control" name="cus_gender">
                                                <option value="0">None</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                                <option value="Other">Other</option>
                                            </select>
                                            @if($errors->has('cus_gender'))
                                            <small style="color:red;font-size:14px;">{{$errors->first('cus_gender')}}</small>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label text-uppercase">Phone<span class="required">*</span></label>
                                            <input type="number" class="form-control" value="{{$customer->phone}}" name="cus_phone">
                                            @if($errors->has('cus_phone'))
                                            <small style="color:red;font-size:14px;">{{$errors->first('cus_phone')}}</small>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label text-uppercase">Address<span class="required">*</span></label>
                                            <textarea name="cus_address" class="form-control" rows="2">{{$customer->address}}</textarea>
                                            @if($errors->has('cus_address'))
                                            <small style="color:red;font-size:14px;">{{$errors->first('cus_address')}}</small>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label text-uppercase">Current Image</label><br>
                                            <img class="img-fluid" src="{{asset('img/'.$customer->feature)}}" alt="" width="100">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label text-uppercase">Picture</label><br>
                                            <input type="file" name="cus_feature"><br>
                                            @if($errors->has('cus_feature'))
                                            <small style="color:red;font-size:14px;">{{$errors->first('cus_feature')}}</small>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer d-flex justify-content-center">
                                    <div class="form-group ">
                                        <button type="submit" class="btn btn-warning">Update</button>
                                        <button type="reset" class="btn btn-info" style="margin: 0px 15px;">Reset</button>
                                        <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    @endsection