@extends('admin.layout.layout')
@section('title', 'Product List - Admin')
@section('content')
<div class="page-holder w-100 d-flex flex-wrap">
  <div class="container-fluid px-xl-5">
    <section class="py-5">
      <div class="row">
        <div class="col-lg-12 mb-5">
          <div class="card">
            <div class="card-header bg-dark text-white">
              <h6 class="text-uppercase mb-0">Product List</h6>
            </div>
            <div class="card-body">
              @if(Session::has('flash_message'))
              <div class="alert alert-{!! Session::get('flash_level') !!}">
                {!!Session::get('flash_message')!!}
              </div>
              @endif
              <table class="table card-text text-center" id="dbtable">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Sold out</th>
                    <th>Category</th>
                    <th>Brand</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($products as $product)
                  <tr>
                    <th scope="row" class="align-middle">{{$stt}}</th>
                    <td id="{{++$stt}}" class="align-middle"><img src="{{asset('img/feature/'.$product->feature_image)}}" alt="" width="60" height="auto"></td>
                    <td class="align-middle">{{$product->product_title}}</td>
                    <td class="align-middle">${{$product->price}}</td>
                    <td class="align-middle">{{$product->sold_out}}</td>
                    <td class="align-middle">{{$product->category_name}}</td>
                    <td class="align-middle">{{$product->brand_name}}</td>
                    <td class="align-middle">
                      <!-- Details Product -->
                      <a href="{{url("admin/product/detailsProduct/" .$product->id)}}" class="badge badge-info p-2"><i class="fas fa-eye" style="font-size: 16px; font-weight:100;"></i></a>
                      <!--  Update Product -->
                      <a href="{{url("admin/product/updateProduct/" .$product->id)}}" class="badge badge-warning p-2"><i class="fas fa-edit" style="font-size: 16px;font-weight:100;"></i></a>
                      <!-- Delete Product -->
                      <a href="{{url("admin/product/deleteProduct/" .$product->id)}}" class="badge badge-danger p-2" onclick="return confirm('Do you want delete?');"><i class="fas fa-trash-alt" style="font-size: 16px;font-weight:100;"></i></a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table><br>
              <nav aria-label="Page navigation">
                {{ $products->links() }}
              </nav>
            </div>

          </div>
        </div>
      </div>
    </section>
  </div>
  @endsection