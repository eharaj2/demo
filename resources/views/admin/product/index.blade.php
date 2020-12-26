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
              <li class="breadcrumb-item active">Product List</li>
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
              <a href="{{route('admin.add-product')}}" class="btn btn-primary"><li class="fa fa-plus"></li>&nbsp;Add Product</a>
              <!-- <h3 class="card-title">DataTable with default features</h3> -->
            </div>

            <div class="card-body">

           <div class="table-responsive">
                <table id="tbl1" class="table table-bordered dataTable" role="grid">
                  <thead>
                    <tr><th>ID</th><th>Title</th><th>Price</th><th>Stock</th><th>Image</th></tr>
                  </thead>
                  <tbody>
                    @foreach($products as $item)
                    @php
                      $title = json_decode($item->title, true);
                     @endphp
                      <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$title['en']}}</td>
                        <td>{{$item->price}}</td>
                        <td>{{$item->stock}}</td>
                        <td><img width="50" src="{{asset('public/images/').'/'.$item->image}}"></td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              
              </div>
             </div>
            <!-- /.card-header -->
           
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
</div>
  @endsection
  @section('scripts')
  <script type="text/javascript">
    $("#tbl1").DataTable();
  </script>
  @endsection


