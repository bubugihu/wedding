@extends('admin.layout.layout')
@section('title', 'Create New Banner - Admin')
@section('content')
<div class="page-holder w-100 d-flex flex-wrap">
    <div class="container-fluid px-xl-5">
      <section class="py-5">
        <div class="row" style="justify-content: center;">
          <div class="col-lg-8 mb-5">
            <div class="card">
              <div class="card-header bg-dark text-white">
                <h6 class="text-uppercase mb-0">Create new Banner</h6>
              </div>
              <div class="card-body">
                    <form action="{{url('admin/banners/postCreateBanners')}}" method="post" enctype="multipart/form-data">
                      {{ csrf_field() }}
                      <div class="form-group">
                        <label class="form-control-label text-uppercase">Banner Title <span class="required">*</span></label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{old('title')}}">
                        @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label class="form-control-label text-uppercase">Banner Content <span class="required">*</span></label>
                        <input type="text" class="form-control @error('content') is-invalid @enderror" name="content" value="{{old('content')}}">
                        @error('content')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label class="form-control-label text-uppercase">Upload Feature Image: <span class="required">*</span></label><br>
                        <input type="file" name="files" value="{{old('files')}}"><br>
                          @error('files')
                            <strong style="color:red;font-size:14px;">{{$message}}</strong>
                          @enderror
                      </div>
                      <div class="form-group">
                        <button type="submit" class="btn btn-dark">Create</button>
                        <button type="reset" class="btn btn-warning">Reset</button>
                      </div>
                    </form>
              </div>
            </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>
@endsection

