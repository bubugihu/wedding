@extends('users.layout.layout')
@section('title', 'Profile - Admin')
@section('content')
<div class="container py-5">
    <div class="row card-body py-5 mx-auto">
        <!-- Info Customer -->
        <div class="col-md-3 py-2">
            <div class="profile_feature">
                <img src="{{asset('img/'.$customer->feature)}}" alt="{{$user->name}}" class="img-fluid rounded" width="100%" height="auto">
                <div style="margin-top:20px ;">
                    <div class="card-body text-center">
                        <h5 class="card-title" style="margin-bottom: 0px;">{{$user->name}}</h5>
                        <!-- <input type="text" class="card-title form-control"  value="{{$user->name}}" width="400px" readonly> -->
                    </div>
                    <ul class="list-group list-group-flush ">
                        <li class="list-group-item text-muted" style="font-size: 15px;"><i class="fa fa-user mr-2" aria-hidden="true"></i> {{$customer->customer_name}}</li>
                        <li class="list-group-item text-muted" style="font-size: 15px;"><i class="fa fa-transgender-alt mr-2" aria-hidden="true"></i> {{$customer->gender}}</li>
                        <li class="list-group-item text-muted" style="font-size: 15px;"><i class="fa fa-birthday-cake mr-2" aria-hidden="true"></i> {{$customer->dob}}</li>
                        <li class="list-group-item text-muted" style="font-size: 15px;"><i class="fa fa-phone mr-2" aria-hidden="true"></i> {{$customer->phone}}</li>
                        <li class="list-group-item text-muted" style="font-size: 15px;"><i class="fa fa-home mr-2" aria-hidden="true"></i> {{$customer->address}}</li>
                        <li class="list-group-item text-muted" style="font-size: 15px;"><i class="fa fa-envelope mr-2" aria-hidden="true"></i> {{$user->email}}</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Info Order And Commnets -->
        <div class="col-md-9 card py-2">
            <ul class="nav nav-pills mb-3 justify-content-center " id="pills-tab" role="tablist">
                <li class="nav-item" style="margin: 20px 20px 0 20px;">
                    <a class="btn btn-lg btn-success " id="pills-order-tab" data-toggle="pill" href="#pills-order{{$customer->id}}" role="tab" aria-controls="pills-order" aria-selected="true">Order</a>
                </li>
                <li class="nav-item" style="margin: 20px 20px 0 20px;">
                    <a class="btn btn-danger btn-lg" id="pills-comments-tab" data-toggle="pill" href="#pills-comments{{$customer->id}}" role="tab" aria-controls="pills-comments" aria-selected="false">Comments</a>
                </li>
                <li class="nav-item" style="margin: 20px 20px 0 20px;">
                    <a class="btn btn-lg btn-primary active" id="pills-edit-tab" data-toggle="pill" href="#pills-edit{{$customer->id}}" role="tab" aria-controls="pills-edit" aria-selected="false">Update Profile</a>
                </li>
            </ul>
            <hr width="100%">
            <div class="tab-content " id="pills-tabContent">
                @if(Session::has('flash_message'))
                <div class="alert alert-{!! Session::get('flash_level') !!}">
                    {!!Session::get('flash_message')!!}
                </div>
                @endif
                <!-- Table Order -->
                <div class="tab-pane fade " id="pills-order{{$customer->id}}" role="tabpanel" aria-labelledby="pills-order-tab">
                    <!-- Order Main -->
                    <table class="table text-center align-middle">
                        <thead class="table-success">
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Order ID</th>
                                <th scope="col">Order Date Time</th>
                                <th scope="col">Payment</th>
                                <th scope="col">Total</th>
                                <th scope="col">Status</th>
                                <th scope="col">Details</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($order as $order)
                            <tr>
                                <td class="align-middle">{{++$no}}</td>
                                <td class="align-middle">{{$order->order_id}}</td>
                                <td class="align-middle">{{$order->created_at}}</td>
                                <td class="align-middle">{{$order->payment}}</td>
                                <td class="align-middle">{{$order->total+$order->total*0.1}}</td>
                                <td class="align-middle">
                                    @if($order->status == 0)
                                    <span class="badge badge-pill badge-danger">OFF</span>
                                    @else
                                    <span class="badge badge-pill badge-success">ON</span>
                                    @endif
                                </td>
                                <td class="align-middle">
                                    <a target='_blank' href="{{url('cart/shopping/orderDetails/'.$order->order_id)}}" class="badge badge-info p-2"><i class="fas fa-eye" style="font-size: 16px; font-weight:100;"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- Table Comments -->
                <div class="tab-pane fade" id="pills-comments{{$customer->id}}" role="tabpanel" aria-labelledby="pills-comments-tab">
                    <!-- Comments Main -->
                    <table class="table text-center align-middle">
                        <thead class="table-danger">
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col" width="60"> Image</th>
                                <th scope="col">Product</th>
                                <th scope="col">Content</th>
                                <th scope="col">Date</th>
                                <th scope="col">Status</th>
                                <th scope="col">Option</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($comment as $comment)
                            <tr>
                                <td class="align-middle">{{++$no1}}</td>
                                <td class="align-middle"><img src="{{asset('img/feature/'.$comment->feature_image)}}" alt="{{$comment->product_title}}" class="rounded" width="60" height="auto"></td>
                                <td class="align-middle">{{$comment->product_title}}</td>
                                <td class="align-middle">
                                    <a href="#myModal3Content{{$customer->id}}{{$comment->id}}" class="badge badge-info p-2" data-toggle="modal"><i class="fas fa-eye" style="font-size: 16px; font-weight:100;"></i></a>
                                    <!-- Modal 3 Content -->
                                    <div id="myModal3Content{{$customer->id}}{{$comment->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade bd-example-modal-lg text-left">
                                        <div role="document" class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 id="exampleModalLabel" class="modal-title">{{$comment->product_title}} Product Commentary</h4>
                                                    <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>{{$comment->cmt_content}}</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle">{{$comment->created_at}}</td>
                                <td class="align-middle">
                                    @if($comment->cmt_status == 0)
                                    <a><span class="badge badge-pill badge-danger">OFF</span></a>
                                    @else
                                    <a><span class="badge badge-pill badge-success">ON</span></a>
                                    @endif
                                </td>
                                <td class="align-middle">
                                    <a href="{{ url('admin/profile/'.$customer->id.'/'.$comment->id)}}" class="badge badge-danger p-2" onclick="return confirm('Are you sure you want to delete?')"><i class="fas fa-trash-alt" style="font-size: 16px; font-weight:100;"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- Table Update Profile -->
                <div class="tab-pane fade show active" id="pills-edit{{$customer->id}}" role="tabpanel" aria-labelledby="pills-edit-tab">
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-11">
                            <form role="form" action="{{url('admin/profileUpdate/' . $customer -> id)}}" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <!-- User Name And Customer Name -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label text-uppercase">User Name<span class="required">*</span></label>
                                            <input type="text" name="profile_user_name" class="form-control" value="{{$user->name}}">
                                            @if($errors->has('profile_user_name'))
                                            <small style="color:red;font-size:14px;">{{$errors->first('profile_user_name')}}</small>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label text-uppercase">Customer Name<span class="required">*</span></label>
                                            <input type="text" name="profile_customer_name" class="form-control" value="{{$customer->customer_name}}">
                                            @if($errors->has('profile_customer_name'))
                                            <small style="color:red;font-size:14px;">{{$errors->first('profile_customer_name')}}</small>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <!-- Gender And DOB -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label text-uppercase">Gender<span class="required">*</span></label><br>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" class="custom-control-input" id="customer-gender1" name="profile_gender" value="Male" checked>
                                                <label class="custom-control-label" for="customer-gender1">Male</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" class="custom-control-input" id="customer-gender2" name="profile_gender" value="Female">
                                                <label class="custom-control-label" for="customer-gender2">Female</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" class="custom-control-input" id="customer-gender3" name="profile_gender" value="Other">
                                                <label class="custom-control-label" for="customer-gender3">Other</label>
                                            </div>
                                            @if($errors->has('profile_gender'))
                                            <small style="color:red;font-size:14px;">{{$errors->first('profile_gender')}}</small>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label text-uppercase">DOB<span class="required">*</span></label>
                                            <input type="date" name="profile_dob" class="form-control" min="1900-01-01" max="2006-12-31" value="{{$customer->dob}}">
                                            @if($errors->has('profile_dob'))
                                            <small style="color:red;font-size:14px;">{{$errors->first('profile_dob')}}</small>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <!-- Phone And Email -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label text-uppercase">Phone<span class="required">*</span></label>
                                            <input type="text" name="profile_phone" class="form-control" value="{{$customer->phone}}">
                                            @if($errors->has('profile_phone'))
                                            <small style="color:red;font-size:14px;">{{$errors->first('profile_phone')}}</small>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label text-uppercase">Email<span class="required">*</span></label>
                                            <input type="email" name="profile_email" class="form-control" value="{{$user->email}}">
                                            @if($errors->has('profile_email'))
                                            <small style="color:red;font-size:14px;">{{$errors->first('profile_email')}}</small>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <!-- Address -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-control-label text-uppercase">Address<span class="required">*</span></label>
                                            <textarea name="profile_address" class="form-control" rows="4">{{$customer->address}}</textarea>
                                            @if($errors->has('profile_address'))
                                            <small style="color:red;font-size:14px;">{{$errors->first('profile_address')}}</small>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <!-- Feature -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-control-label text-uppercase">Current Image</label><br>
                                            <img class="img-fluid" src="{{asset('img/'.$customer->feature)}}" alt="" width="100">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label text-uppercase">Picture</label><br>
                                            <input type="file" name="profile_feature" value="{{$customer->feature}}">
                                            @if($errors->has('profile_feature'))
                                            <small style="color:red;font-size:14px;">{{$errors->first('profile_feature')}}</small>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group d-flex justify-content-center">
                                            <input type="submit" value="Save Change" class="btn btn-dark" style="margin-right: 15px;">
                                            <input type="reset" value="Reset" class="btn btn-warning" style="margin-left: 15px;">
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
@endsection