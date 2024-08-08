@extends('admin.layouts.main')

@section('container')

@include('admin.solution.title')

@if (session()->has('success'))
<div class="alert alert-success" role="alert">
    {{ session('success') }}
</div>    
@endif
                
<a href="/admin/solution/create" class="btn btn-primary mb-3"><i class="fa fa-plus"></i> Create New</a>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Solution List</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Title</th>
                      <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($solutions as $item)
                     <tr>
                       <th scope="row">{{ $loop->iteration }}</th>
                       <td> {{ $item->name }} </td>
                       <td> 
                           <a href="/admin/solution/{{ $item->name }}" class="btn btn-success"><i class="fa fa-eye"></i></a>
                           <a href="/admin/solution/{{ $item->name }}/edit" class="btn btn-primary"><i class="fa fa-edit"></i></a>
               
                           <form action="/admin/solution/{{ $item->name }}" method="POST" class="d-inline">
                             @method('delete') 
                             @csrf           
                             <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i></button>
                           </form>
                       </td>
                     </tr>          
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection