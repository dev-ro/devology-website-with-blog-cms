<form  method="POST" enctype="multipart/form-data" action="{{route('company-settings-post-method-update')}}" >
  @csrf
  @method('PUT')
  <div class="card-body">
    <div class="row">
      <div class="col-md-4">
        <p class="text-muted">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus quaerat ad tenetur accusantium magni. Fuga quos, assumenda provident rem qui quae harum magni ducimus, soluta quia ullam praesentium ipsum earum.</p>
      </div>
      <div class="col-md-8">
      @include('ui::admin.flash-msg')
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="company_name">Company Name</label>
            <input name="company_name" type="text" class="form-control" id="company_name" placeholder="Company Name" value="{{$company_settings->company_name}}">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="company_tagline">Company Tagline</label>
            <input name="company_tagline" type="email" class="form-control" id="company_tagline" placeholder="Company Tagline" value="{{$company_settings->company_tagline}}">
          </div>
        </div>
      </div>
       <div class="row">
         <div class="col-md-6">
          <div class="form-group">
            <label for="company_logo">Company Logo</label>
            <input type="file" name="company_logo" class="form-control-file form-control" id="company_logo">
          </div>
         </div>
         <div class="col-md-6">
          <div class="form-group">
            <label for="company_favicon">Company Favicon</label>
            <input type="file" 
            name="company_favicon" class="form-control-file form-control" id="company_favicon" >
            <small class="text-muted">Size should be 60 x 60</small>
          </div>
         </div>
       </div>
       <div class="form-group">
        <label for="company_email">Company Email</label>
        <input type="email" name="company_email" id="company_email" value="{{$company_settings->company_email}}" placeholder="company@email.com" class="form-control">
       </div>
       <div class="form-group">
        <label for="company_contact">Company Contact</label>
        <input type="text" name="company_contact" id="company_contact" value="{{$company_settings->company_contact}}" placeholder="1237894646" class="form-control">
       </div>
       <div class="form-group">
         <label for="company_description">Company Description</label>
         <textarea name="company_description" id="company_description" cols="30" rows="4" class="form-control" placeholder="Company Description">{{$company_settings->company_description}}</textarea>
       </div>
       <div class="form-group">
         <label for="company_address">Company Address</label>
         <textarea name="company_address" id="company_address" cols="30" rows="4" class="form-control" placeholder="Company Address">{{$company_settings->company_address}}</textarea>
       </div>
       <div class="form-group">
         <label for="company_social">Company Social</label>
         <textarea name="company_social" id="company_social" hidden  cols="30" rows="4" class="form-control" placeholder="Company Social" >{!! json_encode($company_settings->company_social) !!}</textarea>
         <div id="company_social_json" style="height:400px;width:auto;"></div>
       </div>
       <div class="form-group">
         <label for="copyright">Copyright Text</label>
         <textarea name="copyright" id="copyright" cols="30" rows="4" class="form-control" placeholder="Copyright Text">{!!$company_settings->copyright!!}</textarea>
       </div>
       <div class="form-group">
         <button type="submit" class="btn btn-primary csocbtn">Submit</button>
       </div>
      </div>
    </div>
  </div>
</form>