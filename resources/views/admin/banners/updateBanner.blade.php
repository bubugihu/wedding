@extends('admin.layout.layout')
@section('title', 'Update Banner - Admin')
@section('content')
<div class="page-holder w-100 d-flex flex-wrap">
    <div class="container-fluid px-xl-5">
      <section class="py-5">
        <div class="row" style="justify-content: center;">
          <div class="col-lg-8 mb-5">
            <div class="card">
              <div class="card-header bg-dark text-white">
                <h6 class="text-uppercase mb-0">Update Banner</h6>
              </div>
              <div class="card-body">
                    
                    <form role="form" action="{{url('admin/banners/postUpdateBanners')}}" method="POST" enctype="multipart/form-data">
                      {{ csrf_field() }}
                      <div class="form-group">
                        <label class="form-control-label text-uppercase">Banner Title</label>
                      <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{$b->ban_title}}">
                        @error('title')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label class="form-control-label text-uppercase">Banner Content</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" name="content" value="{{$b->ban_content}}">
                        @error('content')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label for="">Old Banner</label><br>
                        <img class="img-fluid" src="{{url("img/banner/".$b->ban_image)}}" alt="" width="100">
                      </div>
                      <div class="form-group">
                        <label class="form-control-label text-uppercase">Upload Feature Image:</label><br>
                        <input type="file" name="files">
                        @error('files')                   
                            <strong style="color:red;font-size:14px;">{{$message}}</strong>
                        @enderror
                      </div>
                      <div class="form-group">
                      <input type="number" style="display: none" name="id" value="{{$b->id}}">
                        <button type="submit" class="btn btn-dark" onclick="return confirm('Do you want update?');">Update</button>
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
