@extends('admin/layouts.main')

@section('container')
    
<h1>Solutions</h1>

<br>
<button class="btn btn-primary"><i class="fa fa-plus"></i> Add New</button>
<br>
<br>

<table class="table table-hover table-bordered">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Title</th>
        <th scope="col">Status</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Hardware Security Module (HSM)</td>
        <td>Active</td>
        <td> 
            <button class="btn btn-primary"><i class="fa fa-pencil"></i></button>
            <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
        </td>
      </tr>
      <tr>
      </tr>
    </tbody>
  </table>

@endsection