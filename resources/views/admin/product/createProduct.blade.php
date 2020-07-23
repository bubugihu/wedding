@extends('admin.layout.layout')
@section('title', 'Create New Product - Admin')
@section('content')
<div class="page-holder w-100 d-flex flex-wrap">
    <div class="container-fluid px-xl-5">
      <section class="py-5">
        <div class="row" style="justify-content: center;">
          <div class="col-lg-8 mb-5">
            <div class="card">
              <div class="card-header bg-dark text-white">
                <h6 class="text-uppercase mb-0">Create new product</h6>
              </div>
              <div class="card-body">
                    @if(Session::has('flash_message'))
                      <div class="alert alert-{!! Session::get('flash_level') !!}">
                          {!!Session::get('flash_message')!!}
                      </div>
                    @endif
                    {{-- @include('admin.product.form-error') --}}
                    <form role="form" action="{{url("admin/product/postCreate")}}" method="POST" enctype="multipart/form-data">
                      {{ csrf_field() }}
                      <div class="form-group">
                        <label class="form-control-label text-uppercase">Product Title <span class="required">*</span></label>
                        <input type="text" class="form-control" name="prdname" value="{{old('prdname')}}">
                        @if($errors->has('prdname'))
                           <small style="color:red;font-size:14px;">{{$errors->first('prdname')}}</small>
                        @endif
                      </div>
                      <div class="form-group">
                        <label class="form-control-label text-uppercase">Price: <span class="required">*</span></label>
                        <input type="text" class="form-control" name="prdprice" value="{{old('prdprice')}}">
                        @if($errors->has('prdprice'))
                           <small style="color:red;font-size:14px;">{{$errors->first('prdprice')}}</small>
                        @endif
                      </div>
                      <div class="form-group">
                        <label class="form-control-label text-uppercase">Category: <span class="required">*</span></label>
                          <select name="prdcate" class="form-control">
                            @foreach ($cates as $cate)
                              <option value="{{$cate->id}}">{{$cate->category_name}}</option>
                            @endforeach     
                          </select>
                          @if($errors->has('prdcate'))
                           <small style="color:red;font-size:14px;">{{$errors->first('prdcate')}}</small>
                          @endif
                      </div>
                      <div class="form-group">
                        <label class="form-control-label text-uppercase">Brands: <span class="required">*</span></label>
                          <select name="prdbrand" class="form-control">
                            @foreach ($brand as $brand)
                              <option value="{{$brand->id}}">{{$brand->brand_name}}</option>
                            @endforeach 
                          </select>
                          @if($errors->has('prdbrand'))
                           <small style="color:red;font-size:14px;">{{$errors->first('prdbrand')}}</small>
                          @endif
                      </div>
                      <div class="form-group">
                        <label class="form-control-label text-uppercase">Warranty_Period <span class="required">*</span></label>
                        <input type="number" class="form-control" name="prdWarranty" value="{{old('prdWarranty')}}" min="6">
                        <em style="color:darkgreen;font-size:13px;">For example: 12 or 24 months, you can only enter a number</em><br>
                        @if($errors->has('prdWarranty'))
                           <small style="color:red;font-size:14px;">{{$errors->first('prdWarranty')}}</small>
                        @endif
                      </div>
                      <div class="form-group">
                        <label class="form-control-label text-uppercase">Short Description <span class="required">*</span></label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="sdescription"rows="3"></textarea>
                        @if($errors->has('sdescription'))
                           <small style="color:red;font-size:14px;">{{$errors->first('sdescription')}}</small>
                        @endif
                      </div>
                      <div class="form-group">
                        <label class="form-control-label text-uppercase">Long Description <span class="required">*</span></label>
                        <textarea class="form-control ckeditor" id="exampleFormControlTextarea1" name="ldescription" rows="3"></textarea>
                        @if($errors->has('ldescription'))
                           <small style="color:red;font-size:14px;">{{$errors->first('ldescription')}}</small>
                        @endif
                        <script>
                            CKEDITOR.replace( 'ldescription', {
                                language: 'en',
                                uiColor: '#9AB8F3'
                            });
                        </script>
                      </div>
                      <div class="form-group">
                        <label class="form-control-label text-uppercase">Upload Feature Image: <span class="required">*</span></label><br>
                        <input type="file" class="custom-fileip" name="featureimg"><br>
                          @if($errors->has('featureimg'))
                            <small style="color:red;font-size:14px;">{{$errors->first('featureimg')}}</small>
                          @endif
                      </div>
                      <div class="form-group ">
                        <label class="form-control-label text-uppercase">Upload Product Gallery:</label><br>
                        <input type="file" class="custom-fileip" name="galleryimg[]" multiple><br>
                        <em style="color:darkgreen;font-size:13px;">Hint: Please press Ctrl to choose multiple images</em>
                      </div><br>
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
