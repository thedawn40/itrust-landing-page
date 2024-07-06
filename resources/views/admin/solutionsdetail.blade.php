@extends('admin/layouts.main')

@section('container')
    
<h1>Solutions - New</h1>

<br>
<br>

<form>
  <div class="form-group">
    <label for="exampleFormControlInput1">Title</label>
    <br>
    <input type="email" class="form-control" id="exampleFormControlInput1">
  </div>
  <br>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Description</label>
    <br>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <br>
  <label class="form-check-label" >Active</label>
  <div class="form-check form-switch">
      <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
    </div>
</form>
<br>

<h4>Detail</h4>
<br>
<button class="btn btn-primary"><i class="fa fa-plus"></i> Add Detail</button>
<br>
<br>
<table class="table table-hover table-bordered">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Title</th>
        <th scope="col">Descriptionn</th>
        <th scope="col">Status</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>nShield Connect</td>
        <td>nShield Connect</td>
        <td>Active</td>
        <td> 
            <button class="btn btn-primary"><i class="fa fa-pencil"></i></button>
            <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
        </td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>nShield Solo</td>
        <td>nShield Solo hardware security modules (HSMs) are FIPS-certified, PCI-Express card-based solutions.</td>
        <td>Active</td>
        <td> 
            <button class="btn btn-primary"><i class="fa fa-pencil"></i></button>
            <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
        </td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>nShield Edge</td>
        <td>nShield Edge hardware security modules (HSMs) are portable USB-connected HSMs that provide cryptographic.</td>
        <td>Active</td>
        <td> 
            <button class="btn btn-primary"><i class="fa fa-pencil"></i></button>
            <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
        </td>
      </tr>
    </tbody>
  </table>

@endsection