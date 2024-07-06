@extends('admin/layouts.main')

@section('container')
    
<h1>Partner</h1>

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
        <th scope="row">2</th>
        <td>HSM Software Development Kit</td>
        <td>Active</td>
        <td> 
            <button class="btn btn-primary"><i class="fa fa-pencil"></i></button>
            <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
        </td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>nShield HSM Management and Monitoring</td>
        <td>Active</td>
        <td> 
            <button class="btn btn-primary"><i class="fa fa-pencil"></i></button>
            <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
        </td>
      </tr>
      <tr>
        <th scope="row">4</th>
        <td>Cloud security encryption</td>
        <td>Active</td>
        <td> 
            <button class="btn btn-primary"><i class="fa fa-pencil"></i></button>
            <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
        </td>
      </tr>
    </tbody>
  </table>

@endsection