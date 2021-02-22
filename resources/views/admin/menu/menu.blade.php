@extends('admin-master')
@section('content')
<h1 class="h3 mb-4 text-gray-800">Menu</h1>
<div class="row mt-3">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h5 class="card-title"><a href="{{action('MenuController@create')}}" class="btn btn-primary btn-sm ediBtn">Create</a>
          </h5>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
          <table class="table table-hover text-nowrap">
            <thead>
              <tr>
                <th>S/N</th>
                <th>Menu Type</th>
                <th>Name</th>
                <th>Price</th>
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
                <td>{{$item->category->name}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->price}}</td>
                <td class="text-right">
                    <a href="{{action('MenuController@update_page',['id' =>$item->id])}}" class="btn btn-primary btn-sm ediBtn">Edit</a>
                    <a onclick="return confirm('Are you sure to delete?')" href="{{action('MenuController@del',['id'=>$item->id])}}" class="btn btn-danger btn-sm">Del</a>
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