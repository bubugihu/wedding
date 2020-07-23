@extends('admin.layout.layout')
@section('title', 'Create New Admin - Admin')
@section('content')
<div class="page-holder w-100 d-flex flex-wrap">
    <div class="container-fluid px-xl-5">
        <section class="py-5">
            <div class="row" style="justify-content: center;">
                <div class="col-lg-8 mb-5">
                    <div class="card">
                        <div class="card-header bg-dark text-white">
                            <h6 class="text-uppercase mb-0">Create New Admin</h6>
                        </div>
                        <div class="card-body">
                            @if(Session::has('flash_message'))
                            <div class="alert alert-{!! Session::get('flash_level') !!}">
                                {!!Session::get('flash_message')!!}
                            </div>
                            @endif
                            <form action="{{url("admin/users/postcreateAdmin")}}" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="row">
                                    <!-- User Name -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label text-uppercase">User Name<span class="required">*</span></label>
                                            <input type="text" name="CC_user_name" class="form-control" value="{{old('CC_user_name')}}">
                                            @if($errors->has('CC_user_name'))
                                            <small style="color:red;font-size:14px;">{{$errors->first('CC_user_name')}}</small>
                                            @endif
                                        </div>
                                    </div>
                                    <!-- Customer Name -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label text-uppercase">Customer Name<span class="required">*</span></label>
                                            <input type="text" name="CC_customer_name" class="form-control" value="{{old('CC_customer_name')}}">
                                            @if($errors->has('CC_customer_name'))
                                            <small style="color:red;font-size:14px;">{{$errors->first('CC_customer_name')}}</small>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <!-- DOB -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label text-uppercase">DOB<span class="required">*</span></label>
                                            <input type="date" name="CC_dob" class="form-control" min="1900-01-01" max="2006-12-31" value="{{old('CC_dob')}}">
                                            @if($errors->has('CC_dob'))
                                            <small style="color:red;font-size:14px;">{{$errors->first('CC_dob')}}</small>
                                            @endif
                                        </div>
                                    </div>
                                    <!-- Gender -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label text-uppercase">Gender<span class="required">*</span></label><br>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" class="custom-control-input" id="customer-gender1" name="CC_gender" value="Male" checked>
                                                <label class="custom-control-label" for="customer-gender1">Male</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" class="custom-control-input" id="customer-gender2" name="CC_gender" value="Female">
                                                <label class="custom-control-label" for="customer-gender2">Female</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" class="custom-control-input" id="customer-gender3" name="CC_gender" value="Other">
                                                <label class="custom-control-label" for="customer-gender3">Other</label>
                                            </div>
                                            @if($errors->has('CC_gender'))
                                            <small style="color:red;font-size:14px;">{{$errors->first('CC_gender')}}</small>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <!-- Email -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label text-uppercase">Email<span class="required">*</span></label>
                                            <input type="email" name="CC_email" class="form-control" value="{{old('CC_email')}}">
                                            @if($errors->has('CC_email'))
                                            <small style="color:red;font-size:14px;">{{$errors->first('CC_email')}}</small>
                                            @endif
                                        </div>
                                    </div>
                                    <!-- Role -->
                                    <div class="col-md-6">
                                        <label class="form-control-label text-uppercase">Role<span class="required">*</span></label>
                                        <select class="form-control" name="CC_role">
                                            <option value="0">User</option>
                                            <option value="1">Admin</option>
                                            <option value="2">Mod Customer</option>
                                            <option value="3">Mod Product</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <!-- Password -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label text-uppercase">Password<span class="required">*</span></label>
                                            <input type="text" name="CC_password" class="form-control" value="{{old('CC_password')}}">
                                            @if($errors->has('CC_password'))
                                            <small style="color:red;font-size:14px;">{{$errors->first('CC_password')}}</small>
                                            @endif
                                        </div>
                                    </div>
                                    <!-- Confirm Password -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label text-uppercase">Confirm Password<span class="required">*</span></label>
                                            <input type="text" name="CC_confirm_password" class="form-control" value="{{old('CC_confirm_password')}}">
                                            @if($errors->has('CC_confirm_password'))
                                            <small style="color:red;font-size:14px;">{{$errors->first('CC_confirm_password')}}</small>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <!-- Phone -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label text-uppercase">Phone<span class="required">*</span></label>
                                            <input type="number" name="CC_phone" class="form-control" value="{{old('CC_phone')}}">
                                            @if($errors->has('CC_phone'))
                                            <small style="color:red;font-size:14px;">{{$errors->first('CC_phone')}}</small>
                                            @endif
                                        </div>
                                    </div>
                                    <!-- Feature -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label text-uppercase">Picture<span class="required">*</span></label><br>
                                            <input type="file" name="CC_feature">
                                            @if($errors->has('CC_feature'))
                                            <small style="color:red;font-size:14px;">{{$errors->first('CC_feature')}}</small>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <!-- Address -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-control-label text-uppercase">Address<span class="required">*</span></label>
                                            <textarea name="CC_address" class="form-control" rows="4" >{{old('CC_feature')}}</textarea>
                                            @if($errors->has('CC_address'))
                                            <small style="color:red;font-size:14px;">{{$errors->first('CC_address')}}</small>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-dark">Create</button>
                                    <button type="reset" class="btn btn-warning">Reset</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </section>
</div>
</div>
@endsection