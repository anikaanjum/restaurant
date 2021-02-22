@extends('admin-master')
@section('content')
<div class="row">
  <div class="col-md-12">
    <h1 class="h3 mb-4 text-gray-800">Total <span class="pull-left">Income: {{$table->sum('amount')}} Tk</span></h1> 
  </div>
</div> 
<div class="row mt-3">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h5 class="card-title"><a href="{{action('IncomeController@create')}}" class="btn btn-primary btn-sm ediBtn">Create</a>
          </h5>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
          <table class="table table-hover text-nowrap">
            <thead>
              <tr>
                <th>S/N</th>
                <th>Income Type</th>
                <th>Source</th>
                <th>Amount</th>
                <th>Description</th>
                <th class="text-right">Action</th>
              </tr>
            </thead>
            <tbody>
            @php
                $i = 1;
            @endphp 
            @foreach ($table as $item)
              <tr> 
                <td>{{$i++}}</td>
                <td>{{$item->type}}</td>
                <td>{{$item->source}}</td>
                <td>{{$item->amount}}</td>
                <td>{{$item->description}}</td>
                <td class="text-right">
                    <a href="{{action('IncomeController@update_page',['id' =>$item->id])}}" class="btn btn-primary btn-sm ediBtn">Edit</a>
                    <a onclick="return confirm('Are you sure to delete?')" href="{{action('IncomeController@del',['id'=>$item->id])}}" class="btn btn-danger btn-sm">Del</a>
                </td>
              </tr>
            @endforeach  
              
              
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>
@endsection

