@extends('admin.layout.layout')
@section('title', 'Create New Brands - Admin')
@section('content')
  <div class="page-holder w-100 d-flex flex-wrap">
    <div class="container-fluid px-xl-5">
      <section class="py-5">
        <div class="row" style="justify-content: center;">
          <div class="col-lg-8 mb-5">
            <div class="card">
              <div class="card-header bg-dark text-white">
                <h6 class="text-uppercase mb-0">Create new Brand</h6>
              </div>
              <div class="card-body">
                  @if(Session::has('flash_message'))
                    <div class="alert alert-{!! Session::get('flash_level') !!}">
                    {!!Session::get('flash_message')!!}
                    </div>
                  @endif 
                  <form action="{{url("admin/brands/postBrands")}}" method="POST" enctype="multipart/form-data">
                      {{ csrf_field() }}
                      <div class="form-group">
                        <label class="form-control-label text-uppercase">Brand Title <span class="required">*</span></label>
                        <input type="text" class="form-control" name="brandTitle" value="{{old('brandTitle')}}">
                        @if($errors->has('brandTitle'))
                           <small style="color:red;font-size:14px;">{{$errors->first('brandTitle')}}</small>
                        @endif
                      </div>
                      <div class="form-group">
                        <label class="form-control-label text-uppercase">Description <span class="required">*</span></label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="brandDescription"rows="3">{{old('brandDescription')}}</textarea>
                        @if($errors->has('brandDescription'))
                           <small style="color:red;font-size:14px;">{{$errors->first('brandDescription')}}</small>
                        @endif
                      </div>
                      <div class="form-group">
                        <label class="form-control-label text-uppercase">Upload Brand Image <span class="required">*</span></label><br>
                        <input type="file" name="brandimg"><br>
                        @if($errors->has('brandimg'))
                           <small style="color:red;font-size:14px;">{{$errors->first('brandimg')}}</small>
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
      </div>
    </section>
  </div>
</div>
@endsection
