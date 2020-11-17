@extends('admin::layouts.master')
@section('title') Respond Enquiry @endsection
@section('content')
<div class="row">
    @include('ui::admin.flash-msg')
    <div class="col-md-5">
        <div class="card">
            <div class="card-header">
              <div class="row">
                <div class="col-md-5">
                  <h3 class="card-title">Enquiry Details</h3>
                </div>
                <div class="col-md-7 text-right">
                  <div class="btn-group-sm">
                    <a href="{{route('enquiry-lists-admin')}}" class="btn btn-primary">Enquiries</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                Name: {{$enquiry->name}} <br>
                Email: {{$enquiry->email}} <br>
                Phone: {{$enquiry->phone}} <br>
                Enq. Type: {{$enquiry->category}} <br>
                Message: {{$enquiry->message}} <br>
                Messaged At: {{$enquiry->created_at->diffForHumans()}}
            </div>
        </div>
    </div>
    <div class="col-md-7">
        <div class="card">
            <div class="card-header">
                Respond 
            </div>
            <div class="card-body">
                <form method="POST" action="{{route('respond-enquiry-post', $enquiry->id)}}" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="form-group">
                        <label for="respond_email">Respond To Email</label>
                        <small>Use comma (,) to seperate more emails</small>
                        <textarea name="respond_email" class="form-control" id="respond_email" placeholder="john@doe.com,name@gmail.com" cols="30" rows="2"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="respond_msg">Message</label>
                        <textarea name="respond_msg" id="respond_msg" placeholder="Message" class="form-control" cols="30" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="attched_image">Attach Image</label>
                        <input type="file" name="attached_image[]" id="attached_image" class="form-control" multiple>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Send" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection