@extends('admin.layout.layout')
@section('title', 'Categories List - Admin')
@section('content')
<div class="page-holder w-100 d-flex flex-wrap">
  <div class="container-fluid px-xl-5">
    <section class="py-5">
      <div class="row">
        <div class="col-lg-12 mb-5">
          <div class="card">
            <div class="card-header bg-dark text-white">
              <h6 class="text-uppercase mb-0">Categories List</h6>
            </div>
            <div class="card-body">
              @if(Session::has('flash_message'))
              <div class="alert alert-{!! Session::get('flash_level') !!}">
                {!!Session::get('flash_message')!!}
              </div>
              @endif
              <!-- List Category -->
              <table class="table card-text text-center" id="dbtable">
                <thead>
                  <tr>
                    <th>Categories ID</th>
                    <th>Categories Image</th>
                    <th>Categories Title</th>
                    <th width="300">Description</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($cates as $cate)
                  <tr>
                    <th scope="row" class="align-middle">{{$cate->id}}</th>
                    <td class="align-middle"><img src="{{asset('img/category/'.$cate->category_image)}}" alt="" width="100" height="auto"></td>
                    <td class="align-middle">{{$cate->category_name}}</td>
                    <td class="align-middle">{{$cate->description}}</td>
                    <td class="align-middle">
                      <a href="{{url("admin/category/updateCategories/" . $cate->id)}}" class="badge badge-warning p-2"><i class="fas fa-edit" style="font-size: 16px; font-weight:100;"></i></a>
                      @if($product->where('category_id',$cate->id)->count() == 0)
                      <a href="{{url("admin/category/deleteCategories/".$cate->id)}}" class="badge badge-danger p-2" onclick="return confirm('Are you sure you want to delete?')"><i class="fas fa-trash-alt" style="font-size: 16px; font-weight:100;"></i></a>
                      @endif
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table><br>
              <nav aria-label="Page navigation">
                {{ $cates->links() }}
              </nav>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  @endsection