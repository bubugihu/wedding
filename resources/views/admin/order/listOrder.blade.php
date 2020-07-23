@extends('admin.layout.layout')
@section('title', 'Orders List - Admin')
@section('content')
<div class="page-holder w-100 d-flex flex-wrap">
  <div class="container-fluid px-xl-5">
    <section class="py-5">
      <div class="row">
        <div class="col-lg-12 mb-5">
          <div class="card">
            <div class="card-header bg-dark text-white">
              <h6 class="text-uppercase mb-0">Order List</h6>
            </div>
            <div class="card-body">
              @if(Session::has('flash_message'))
              <div class="alert alert-{!! Session::get('flash_level') !!}">
                {!!Session::get('flash_message')!!}
              </div>
              @endif
              {{-- search by order id --}}
              <div>
                <form action="{{url('admin/order/searchId')}}" method="get" class="mb-3">
                  <label for="search">Search by ID:</label>
                  <input type="number" name="searchId" id="search" min="1" style="width: 80px">
                  <button type="submit" class="btn btn-primary">Ok</button>
                  <a href="{{url('admin/order/listOrder')}}" class="btn btn-warning">All of List</a>
                </form>  
              </div>
              {{-- end seach  --}}
              <table class="table card-text text-center" id="">
                <thead>
                  <tr>
                    <th>Order ID</th>
                    <th>Consignee</th>
                    <th>Total</th>
                    <th>Payment</th>
                    <th>Status</th>
                    <th>Order Created</th>
                    <th>Details</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($orders as $order)
                  <tr>
                    <td class="align-middle">{{$order->order_id}}</td>
                    <td class="align-middle">{{$order->consignee_name}}</td>
                    <td class="align-middle">$ {{$order->total*1.1}}</td>
                    <td class="align-middle">{{$order->payment}}</td>
                    <td class="align-middle">
                      @if($order->status == 0)
                      <a href="{{url('admin/order/onOrderStatus/'.$order->order_id)}}"><span class="badge badge-pill badge-danger">OFF</span></a>
                      @else
                      <a><span class="badge badge-pill badge-success">ON</span></a>
                      @endif
                    </td>
                    <td class="align-middle">{{$order->created_at}}</td>
                    <td>
                      <a target='_blank' href="{{url('cart/shopping/orderDetails/'.$order->order_id)}}" class="badge badge-info p-2"><i class="fas fa-eye" style="font-size: 16px; font-weight:100;"></i></a>
                      <!-- Delete Order With Status = 0 -->
                      @if($order->status==0)
                      <a href="{{url('admin/order/deleteOrder/'.$order->order_id)}}" class="badge badge-danger p-2" onclick="return confirm('Are you sure you want to delete?')"><i class="fas fa-trash-alt" style="font-size: 16px; font-weight:100;"></i></a>
                      @endif
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              <br>
              <nav aria-label="Page navigation">
                {{ $orders->links() }}
              </nav>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  @endsection