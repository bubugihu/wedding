@extends('admin.layout.layout')
@section('title', 'Comments List - Admin')
@section('content')
<div class="page-holder w-100 d-flex flex-wrap">
  <div class="container-fluid px-xl-5">
    <section class="py-5">
      <div class="row">
        <div class="col-lg-12 mb-5">
          <div class="card">
            <div class="card-header bg-dark text-white">
              <h6 class="text-uppercase mb-0">Comment List</h6>
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
                    <th>User Name</th>
                    <th>Product Name</th>
                    <th>Content</th>
                    <th>Status</th>
                    <th>Details</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($comments as $comment)
                  <tr>
                    <td>{{++$no}}</td>
                    <td class="align-middle">{{$comment->name}}</td>
                    <td class="align-middle">{{$comment->product_title}}</td>
                    <td class="align-middle">
                      <a href="#Modal-Comment-Details{{$comment->id}}" class="badge badge-info p-2" data-toggle="modal"><i class="fas fa-eye" style="font-size: 16px; font-weight:100;"></i></a>
                        <!-- Modal Details Customer -->
                        <div id="Modal-Comment-Details{{$comment->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade bd-example-modal-lg text-left">
                          <div role="document" class="modal-dialog modal-lg">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4 id="exampleModalLabel" class="modal-title">Details Comment</h4>
                                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                              </div>
                              <div class="modal-body">
                                <div class="container">
                                  <div class="row">
                                    <div class="col-md-6">
                                      <div class="row">
                                        <div class="col-md-12">
                                          <div class="form-group">
                                            <label class="form-control-label text-uppercase">User Name</label>
                                            <input type="text" class="form-control" value="{{$comment->name}}" readonly>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="col-md-6">
                                          <div class="form-group">
                                            <label class="form-control-label text-uppercase">Create At</label>
                                            <input type="text" class="form-control" value="{{$comment->created_at}}" readonly>
                                          </div>
                                        </div>
                                        <div class="col-md-6">
                                          <div class="form-group">
                                            <label class="form-control-label text-uppercase">Status</label>
                                            <input type="text" class="form-control" 
                                            @if($comment->cmt_status == 0)
                                            value="OFF"
                                            @else
                                            value="ON"
                                            @endif
                                             readonly>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="row">
                                        <div class="col-md-12">
                                          <div class="form-group">
                                            <label class="form-control-label text-uppercase">Product Name</label>
                                            <input type="text" class="form-control" value="{{$comment->product_title}}" readonly>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="col-md-6">
                                          <div class="form-group">
                                            <label class="form-control-label text-uppercase">Category</label>
                                            <input type="text" class="form-control" value="{{$comment->category_name}}" readonly>
                                          </div>
                                        </div>
                                        <div class="col-md-6">
                                          <div class="form-group">
                                            <label class="form-control-label text-uppercase">Brand</label>
                                            <input type="text" class="form-control" value="{{$comment->brand_name}}" readonly>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-12">
                                      <div class="form-group">
                                        <label class="form-control-label text-uppercase">Contents</label>
                                        <textarea name="" id="" class="form-control" value="" readonly rows="9">{{$comment->cmt_content}}</textarea>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>
                    </td>
                    {{-- End modal --}}
                    <td class="align-middle">
                      @if($comment->cmt_status == 0)
                      <a href="{{url('admin/comment/onCommentStatus/'.$comment->id)}}"><span class="badge badge-pill badge-danger">OFF</span></a>
                      @else
                      <a href="{{url('admin/comment/offCommentStatus/'.$comment->id)}}"><span class="badge badge-pill badge-success">ON</span></a>
                      @endif
                    </td>
                    <td class="align-middle">
                      <a href="{{ url('product-detail/'.$comment->product_id)}}" class="badge badge-info p-2"><i class="fas fa-eye" style="font-size: 16px; font-weight:100;"></i></a>
                      <a href="{{url('admin/comment/deleteComment/'.$comment->id)}}" class="badge badge-danger p-2" onclick="return confirm('Are you sure you want to delete?')"><i class="fas fa-trash-alt" style="font-size: 16px; font-weight:100;"></i></a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              <br>
              <nav aria-label="Page navigation">
                {{ $comments->links() }}
              </nav>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  @endsection