@extends('templates.default')
@section('content')

<div class="">
	<div class="page-title">
              <div class="title_left">
                <h3>List Category</h3>
              </div>

              </div>
              <div class="clearfix"></div>
              @foreach($category as $Category)
              <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
              	
                <div class="x_panel">
                  <div class="x_title">
                    <h2>{{ $Category->name }} </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li>
                      	<form action="{{ route('category.edit',$Category) }}" method="get">
              					
                        	<button type="submit" class="btn btn-success">Edit</button>
                        </form>
                      </li>
                      <li>
                        <form action="{{ route('category.destroy',$Category) }}" method="post">
                        	{{ csrf_field() }}
                        	{{ method_field('DELETE') }}
                        	<button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                      </li>
                      
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                 
                </div>
              </div>
            </div>
              @endforeach
              	
              
</div>

@endsection