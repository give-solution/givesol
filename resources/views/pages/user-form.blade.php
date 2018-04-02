 @extends('templates.default')   
 @section('content')   
<div class="">
            <div class="page-title">
              <div class="title_left">
                <h3></h3>
              </div>

              </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Add Post </h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form action="{{ route('store') }}" method="post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                      {{ csrf_field() }}

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Title <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required" placeholder="Post Title" name="title" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Category <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="category_id" class="form-control col-md-7 col-xs-12" >
                          @foreach ($categories as $category)
                            <option value="{{ $category->id }}"> {{ $category->name }} </option>
                          @endforeach
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Content</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea name="content" rows="5" required="required" class="form-control col-md-7 col-xs-12" placeholder="Post Content" ></textarea>
                        </div>
                      </div>
                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <a class="btn btn-primary" href="{{ route('home') }}" role="button">Cancel</a>
						  <button class="btn btn-primary" type="reset">Reset</button>
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>


            </div>
          </div>
 @endsection