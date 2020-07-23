@extends('admin.layout.layout')
@section('title', 'Create New Category - Admin')
@section('content')
<div class="page-holder w-100 d-flex flex-wrap">
  <div class="container-fluid px-xl-5">
    <section class="py-5">
      <div class="row" style="justify-content: center;">
        <div class="col-lg-8 mb-5">
          <div class="card">
            <div class="card-header bg-dark text-white">
              <h6 class="text-uppercase mb-0">Create new category</h6>
            </div>
            <div class="card-body">
                @if(Session::has('flash_message'))
                  <div class="alert alert-{!! Session::get('flash_level') !!}">
                      {!!Session::get('flash_message')!!}
                  </div>
                @endif 
                {{-- @include('admin.product.form-error') --}}
                <form role="form" action="{{url("admin/category/postCate")}}" method="POST" enctype="multipart/form-data">
                  {{ csrf_field() }}
                  <div class="form-group">
                    <label class="form-control-label text-uppercase">Category Title <span class="required">*</span></label>
                    <input type="text" class="form-control" name="cateTitle" value="{{old('cateTitle')}}">
                    @if($errors->has('cateTitle'))
                       <small style="color:red;font-size:14px;">{{$errors->first('cateTitle')}}</small>
                    @endif
                  </div>
                  <div class="form-group">
                    <label class="form-control-label text-uppercase">Category Description <span class="required">*</span></label>
                    <textarea type="text" class="form-control" name="cateDescription">{{old('cateDescription')}}</textarea>
                    @if($errors->has('cateDescription'))
                       <small style="color:red;font-size:14px;">{{$errors->first('cateDescription')}}</small>
                    @endif
                  </div>
                  <div class="form-group">
                    <label class="form-control-label text-uppercase">Upload Category Image <span class="required">*</span></label><br>
                    <input type="file" name="cateimg"><br>
                    @if($errors->has('cateimg'))
                       <small style="color:red;font-size:14px;">{{$errors->first('cateimg')}}</small>
                    @endif
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
    </section>
  </div>
  @endsection