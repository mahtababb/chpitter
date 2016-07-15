<div class="col-md-6">
  <form method="POST" action="/settings">

    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="changeacc">Account
    <h6>Change your basic account and language settings.</h6></div>
    <div class="username">
      <div class="row">
        <div class="col-md-offset-1 col-md-2">
          <h5>Name</h5>
        </div>
        <div class="col-md-8">
          <input type="text" name="name" value="{{ Auth::user()->name }}">
          <h6><a href="#">https://twitter.com/isco</a></h6>
        </div>
      </div>
      <div class="row">
        <div class="col-md-offset-1 col-md-2">
          <h5>Surname</h5>
        </div>
        <div class="col-md-8">
          <input type="text" name="surname" value="{{ Auth::user()->surname }}">
          <h6><a href="#">https://twitter.com/isco</a></h6>
        </div>
      </div>
      
      <div class="row">
        <div class="col-md-offset-1 col-md-2">
          <h5>Username</h5>
        </div>
        <div class="col-md-8">
          <input type="text" name="username" value="{{ Auth::user()->username }}">
          <h6><a href="#">https://twitter.com/isco</a></h6>
        </div>
      </div>
      <div class="row">
        <div class="col-md-offset-1 col-md-2">
          <h5>Email</h5>
        </div>
        <div class="col-md-8">
          <input type="text" name="email" value="{{ Auth::user()->email }}">
          <h6>Email will not be publicly displayed. <a href="#">Learn more</a></h6>
          <h6>Check your email (isco@) to confirm. <br><a href="#">Resend information</a></h6>
        </div>
      </div>
      <div class="row">
        <div class="col-md-offset-1 col-md-2">
          <h5>Password</h5>
        </div>
        <div class="col-md-8">
          <input type="text" name="password" value="">
          <h6><a href="#">https://twitter.com/isco</a></h6>
        </div>
      </div>
      
    </div>
    
    
    <div class="form-group">
      <button type="submit"  style="float:right; margin-top:10px" class="btn btn-primary">Update profile</button>
    </div>

  </form>
  <!-- <div class="content">Content
    <div class="row">
      <div class="col-md-offset-1 col-md-2">
        <h5>Country</h5>
      </div>
      <div class="col-md-8">
        <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Worldwide
        <span class="caret"></span></button>
        <h6>Select your country. This setting is saved to this browser.</h6>
      </div>
    </div>
    <div class="row">
      <div class="col-md-offset-1 col-md-2">
        <h5>Tweet Media</h5>
      </div>
      <div class="col-md-8">
        <h5><input type="checkbox" value=""> Do not inform me before showing media that may be sensitive</h5>
        <h6>You will see all photos or videos even if the contain sensitive media.</h6>
        <h5><input type="checkbox" value=""> Mark media I tweet as containing material that may be sensitive</h5>
        <h6>Please check this box if your Tweets contain sensitive media so that users can be informed prior to viewing.</h6>
      </div>
    </div>
    <div class="row">
      <div class="col-md-offset-1 col-md-2">
        <h5>Video Tweets</h5>
      </div>
      <div class="col-md-8">
        <h5><input type="checkbox" value=""> Video autoplay</h5>
      </div>
    </div>
  </div> -->
</div>
</div>