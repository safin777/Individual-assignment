@extends('admin.home')

@section('updateTag')

	<div class="container">.

    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">

   
        <form  method="post" action="{{URL::to('update/tag/'.$tag->tid)}}" enctype="multipart/form-data" name="postform" id="contactForm" novalidate>
        	@csrf
          
             <div class="control-group">


             	<div class="form-group floating-label-form-group controls">
              <label>Catagory</label>
        <input type="text" class="form-control"  readonly name="tid" value={{$tag->tid}} id="email"  >
              <p class="help-block text-danger"></p>
            </div>
           
             <div class="form-group floating-label-form-group controls">
              <label>Catagory</label>
              <input type="text" class="form-control" name="tname" id="email" value={{$tag->tname}} >
              <p class="help-block text-danger"></p>
            </div>

            <div class="form-group floating-label-form-group controls">
              <label>Catagory</label>
              <input type="text" class="form-control" name="tslug" id="email" value={{$tag->tslug}} data-validation-required-message="Please enter your email address." >
              <p class="help-block text-danger"></p>
            </div>

           
          </div>
          <br>
          <div id="success"></div>
          <div class="form-group">
            <button type="submit" class="btn btn-success" id="sendMessageButton">Update</button>
          </div>
         </form>
      </div>
    </div>
  </div>

@endsection