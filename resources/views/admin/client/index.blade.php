@extends('admin.layouts.main')

@section('container')

@include('admin.client.title')


@if (session()->has('success'))
<div class="alert alert-success" role="alert">
  {{ session('success') }}
</div>    
@endif
                
<a href="/admin/client/create" class="btn btn-primary mb-3"><i class="fa fa-plus"></i> Create New</a>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Client List</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Title</th>
                      <th scope="col">Logo</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($client as $item)
                      <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td> {{ $item->name }} </td>
                        <td> <img style="width: 70px" src="{{ asset('storage/'. $item->image) }}" alt="{{ $item->title }}" class="img-fluid mt-3"> </td>
                        <td> 
                            <a href="/admin/client/{{ $item->name }}" class="btn btn-success"><i class="fa fa-eye"></i></a>
                            <a href="/admin/client/{{ $item->name }}/edit" class="btn btn-primary"><i class="fa fa-edit"></i></a>

                            <form action="/admin/client/{{ $item->name }}" method="POST" class="d-inline">
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