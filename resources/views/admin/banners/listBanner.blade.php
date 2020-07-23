@extends('admin.layout.layout')
@section('title', 'Banners List - Admin')
@section('content')
<div class="page-holder w-100 d-flex flex-wrap">
  <div class="container-fluid px-xl-5">
    <section class="py-5">
      <div class="row">
        <div class="col-lg-12 mb-5">
          <div class="card">
            <div class="card-header bg-dark text-white">
              <h6 class="text-uppercase mb-0">BannerList</h6>
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
                    <th>No.</th>
                    <th>Banner Title</th>
                    <th width="200">Banner Content</th>
                    <th>Banner Image</th>
                    <th>Banner Date</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>

                  @foreach($banners as $banner)
                  <tr>
                    <th scope="row" class="align-middle">{{$stt}}</th>
                    <td class="align-middle">{{$banner->ban_title}}</td>
                    <td class="align-middle">{{$banner->ban_content}}</td>
                    <td class="align-middle"><img src="{{asset('img/banner/'.$banner->ban_image)}}" alt="" width="60"></td>
                    <td class="align-middle">{{$banner->created_at}}</td>
                    <td id="{{$stt++}}" class="align-middle">
                      <a href="{{url('admin/banners/updateBanners/'.$banner->id)}}" class="badge badge-warning p-2"><i class="fas fa-edit" style="font-size: 16px;font-weight:100;"></i></a>
                      <a href="{{url('admin/banners/deleteBanners/'.$banner->id)}}" class="badge badge-danger p-2" onclick="return confirm('Do you want delete?');"><i class="fas fa-trash-alt" style="font-size: 16px;font-weight:100;"></i></a>
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