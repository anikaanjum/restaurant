@extends('admin-master')
@section('content')
<h1 class="h3 mb-4 text-gray-800">Create</h1>
<section class="content">
    <div class="container-fluid">
      <!-- /.row -->
      <div class="row mt-3">
          {{-- Form --}}
          <div class="col-3"></div>
          <div class="col-6" id="addForm">
            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title col-12">Add Employee</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" method="POST" action="{{action('EmployeesController@store')}}">
                  @csrf
                    <div class="card-body">
                    <div class="form-group">
                      <label for="">Name</label>
                      <input type="text" class="form-control" id="" placeholder="Enter name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="">Code</label>
                        <input type="text" class="form-control" id="" placeholder="Enter code" name="code">
                      </div>
                      <div class="form-group">
                        <label for="">NID</label>
                        <input type="text" class="form-control" id="" placeholder="Enter number" name="nid">
                      </div>
                      <div class="form-group">
                        <label for="">Mobile Number</label>
                        <input type="text" class="form-control" id="" placeholder="Enter number" name="phone">
                      </div>
                      <div class="form-group">
                        <label for="">Address</label>
                        <input type="text" class="form-control" id="" placeholder="Enter address" name="address">
                      </div>
                  </div>
                  <!-- /.card-body -->
        
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-sm "> <i class="fa fa-plus-circle"></i> Save </button>
                  </div>
                </form>
              </div>
          </div>
          {{-- Form --}}
        
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
@endsection