@extends('admin.layout.layout')
@section('title', 'Brands List - Admin')
@section('content')
<div class="page-holder w-100 d-flex flex-wrap">
    <div class="container-fluid px-xl-5">
      <section class="py-5">
        <div class="row">
          <div class="col-lg-12 mb-5">
            <div class="card">
              <div class="card-header bg-dark text-white">
                <h6 class="text-uppercase mb-0">Brands List</h6>
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
                      <th>Brand ID</th>
                      <th>Brand Image</th>
                      <th>Brand Name</th>
                      <th width="300">Brand Description</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($brand as $brand)
                    <tr>
                      <th scope="row" class="align-middle">{{$brand->id}}</th> 
                      <td class="align-middle"><img src="{{url("img/brands/" .$brand->brand_image)}}" alt="" width="90"></td>
                      <td class="align-middle">{{$brand->brand_name}}</td>
                      <td row="2" class="align-middle">{{ substr(strip_tags($brand->description), 0, 200)}}
                        {{ strlen(strip_tags($brand->description)) > 50 ? " ... ReadMore" : "" }}</td>
                      <td class="align-middle">
                        <a href="{{url("admin/brands/updateBrands/" . $brand->id)}}" class="badge badge-warning p-2"><i class="fas fa-edit" style="font-size: 16px;font-weight:100;"></i></a>
                        @if($product->where('brand_id',$brand->id)->count() == 0)
                          <a href="{{url("admin/brands/deleteBrands/".$brand->id)}}" class="badge badge-danger p-2" onclick="return confirm('Are you sure you want to delete?')"><i class="fas fa-trash-alt" style="font-size: 16px; font-weight:100;"></i></a>
                        @endif
                      </td>
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