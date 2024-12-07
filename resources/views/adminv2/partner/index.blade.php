@extends('adminv2.layouts.main')

@section('container')

@include('adminv2.partner.title')

<nav>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
    <li class="breadcrumb-item active">Partners</li>
  </ol>
</nav>

@if (session()->has('success'))
<div class="alert alert-success" role="alert">
  {{ session('success') }}
</div>    
@endif
                
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header" style="display: flex; align-items: center; justify-content: space-between;">
      <a href="/admin/partner/create" class="btn btn-success"><i class="bi bi-plus"></i>Create New</a>
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
                    @foreach ($partner as $item)
                     <tr>
                       <th scope="row">{{ $loop->iteration }}</th>
                       <td> {{ $item->name }} </td>
                       <td> <img style="width: 70px" src="{{ asset('storage/'. $item->image) }}" alt="{{ $item->title }}" class="img-fluid mt-3"> </td>
                       <td> 
                           <a href="/admin/partner/{{ $item->name }}" class="btn btn-primary"><i class="bi bi-eye"></i></a>
                           <a href="/admin/partner/{{ $item->name }}/edit" class="btn btn-primary"><i class="bi bi-pencil-square"></i></a>
               
                           <form action="/admin/partner/{{ $item->name }}" method="POST" class="d-inline">
                             @method('delete') 
                             @csrf           
                             <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="bi bi-trash"></i></button>
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