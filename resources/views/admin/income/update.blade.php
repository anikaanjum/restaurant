@extends('admin-master')
@section('content')
<h1 class="h3 mb-4 text-gray-800">Update</h1>
<section class="content">
    <div class="container-fluid">
      <!-- /.row -->
      <div class="row mt-3">
          {{-- Form --}}
          <div class="col-3"></div>
          <div class="col-6" id="addForm">
            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title col-12">Update</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" method="POST" action="{{action('IncomeController@update')}}">
                  @csrf
                  <input type="hidden" name="id" value="{{$table->id}}">
                    <div class="card-body">
                    <div class="form-group">
                      <label for="">Income Type</label>
                      <input type="text" class="form-control" id="" value="{{$table->type}}" placeholder="Enter type" name="type">
                    </div>
                    <div class="form-group">
                        <label for="">Source</label>
                        <input type="text" class="form-control" id="" value="{{$table->source}}" placeholder="Enter source" name="source">
                      </div>
                      <div class="form-group">
                        <label for="">Amount</label>
                        <input type="number" class="form-control" id="" value="{{$table->amount}}" placeholder="Enter amount" name="amount">
                      </div>
                      <div class="form-group">
                        <label for="">dscription</label>
                        <input type="text" class="form-control" id="" value="{{$table->description}}" placeholder="description" name="description">
                      </div>
                      
                  </div>
                  <!-- /.card-body -->
        
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-sm "> <i class="fa fa-plus-circle"></i> Save Changes</button>
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