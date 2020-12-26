@extends('admin.layout.base')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Add Product</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Add Product</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
         <div class="card">
            <div class="card-header">
              <a href="{{route('admin.product-list')}}" class="btn btn-primary"><li class="fa fa-arrow-left"></li>&nbsp;Product List</a>
              <!-- <h3 class="card-title">DataTable with default features</h3> -->
            </div>

            <div class="card-body">

               @if ($message = Session::get('success'))
 
                <div class="alert alert-success alert-block">
 
                    <button type="button" class="close" data-dismiss="alert">×</button>
 
                    <strong>{{ $message }}</strong>
 
                </div>
            @endif
 
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif


              <form method="post" action="{{route('admin.add-product-save')}}" enctype="multipart/form-data">
                @csrf
          <div class="col-sm-6">
            <div class="card card-outline card-outline-tabs">
              <div class="card-header p-0 border-bottom-0">
                <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-three-english-tab" data-toggle="pill" href="#custom-tabs-three-english" role="tab" aria-controls="custom-tabs-three-english" aria-selected="true">English</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-three-arabic-tab" data-toggle="pill" href="#custom-tabs-three-arabic" role="tab" aria-controls="custom-tabs-three-arabic" aria-selected="false">Arabic</a>
                  </li>
                  
                  
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content" id="custom-tabs-three-tabContent">
                  <div class="tab-pane fade active show" id="custom-tabs-three-english" role="tabpanel" aria-labelledby="custom-tabs-three-english-tab">
                     <div class="form-group">
                       <label>Region</label>
                       <select class="form-control" required name="region_code">
                         <option value="ae">United Arab Emirates</option>
                         <option value="sa">Saudi Arabia</option>
                       </select>
                     </div> 
                     <div class="form-group">
                       <label>Title</label>
                       <input value="{{old('title[en]')}}" required type="text" class="form-control" name="title[en]">
                     </div> 
                     <div class="form-group">
                       <label>Slug</label>
                       <input required value="{{old('slug')}}" type="text" class="form-control" name="slug">
                     </div> 
                     <div class="form-group">
                       <label>Price</label>
                       <input required value="{{old('price')}}" type="text" class="form-control" name="price">
                     </div> 
                     <div class="form-group">
                       <label>Stock</label>
                       <input required type="text" value="{{old('stock')}}" class="form-control" name="stock">
                     </div> 
                     <div class="form-group">
                       <label>Choose Image</label>
                          <input class="form-control-file" required type="file" name="image">
                          
                     </div> 
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-three-arabic" role="tabpanel" aria-labelledby="custom-tabs-three-arabic-tab">
                     <div class="form-group">
                       <label>Title</label>
                       <input type="text" class="form-control" name="title[ar]">
                     </div> 
                  </div>
                  
                 
                </div><br>
                 <div class="form-group" align="center">
                       <input type="submit" class="btn btn-success" name="submit" value="Save" class="form-control">
                  </div> 
                
              </div>
              <!-- /.card -->
            </div>
          </div>
          </form>

             </div>
            <!-- /.card-header -->
           
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
</div>
  @endsection


