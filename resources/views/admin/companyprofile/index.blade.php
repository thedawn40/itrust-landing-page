@extends('admin.layouts.main')

@section('container')

<h1 class="h3 mb-2 text-gray-800">Company Profile</h1>
<p class="mb-3">Showcase Your Organization’s Identity and Values. for help please refer to read <a target="_blank"
  href="https://datatables.net">documentation</a>.</p>

@if (session()->has('success'))
<div class="alert alert-success" role="alert">
  {{ session('success') }}
</div>    
@endif

<form method="POST" action="/admin/company/{{ $company->id }}" enctype="multipart/form-data">
    @method('put')
  @csrf
  <div class="card shadow">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Details</h6>
    </div>
    <div class="card-body">
      <div class="row mb-3">
        <label for="name" class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-10">
          <input type="text" class="form-control @error('name') is-invalid @enderror"  name="name" id="name" required autofocus value="{{ old('name', $company->name) }}">
          @error('name')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>
      </div>
      <div class="row mb-3">
        <label for="email" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
          <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email"  value="{{ old('email', $company->email) }}">
          @error('email')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>
      </div>
      <div class="row mb-3">
        <label for="address" class="col-sm-2 col-form-label">Address</label>
        <div class="col-sm-10">
          <textarea rows="3" class="form-control @error('address') is-invalid @enderror" id="address" name="address"  >{{ old('address', $company->address) }}</textarea>
          @error('address')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>
      </div>
      <div class="row mb-3">
        <label for="customersupport" class="col-sm-2 col-form-label">Customer Support</label>
        <div class="col-sm-10">
          <input type="text" class="form-control @error('customersupport') is-invalid @enderror" id="customersupport" name="customersupport"  value="{{ old('customersupport', $company->customer_support) }}">
          @error('customersupport')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>
      </div>
      <div class="row mb-3">
        <label for="twitter" class="col-sm-2 col-form-label">Twitter</label>
        <div class="col-sm-10">
          <input type="text" class="form-control @error('twitter') is-invalid @enderror" id="twitter" name="twitter"  value="{{ old('twitter', $company->twitter) }}">
          @error('twitter')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>
      </div>
      <div class="row mb-3">
        <label for="facebook" class="col-sm-2 col-form-label">Facebook</label>
        <div class="col-sm-10">
          <input type="text" class="form-control @error('facebook') is-invalid @enderror" id="facebook" name="facebook"  value="{{ old('facebook', $company->facebook) }}">
          @error('facebook')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>
      </div>
      <div class="row mb-3">
        <label for="instagram" class="col-sm-2 col-form-label">Instagram</label>
        <div class="col-sm-10">
          <input type="text" class="form-control @error('instagram') is-invalid @enderror" id="instagram" name="instagram"  value="{{ old('instagram', $company->instagram) }}">
          @error('instagram')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>
      </div>
      <div class="row mb-3">
        <label for="whatsapp" class="col-sm-2 col-form-label">Whatsapp</label>
        <div class="col-sm-10">
          <input type="text" class="form-control @error('whatsapp') is-invalid @enderror" id="whatsapp" name="whatsapp"  value="{{ old('whatsapp', $company->whatsapp) }}">
          @error('whatsapp')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>
      </div>
      <div class="row mb-3">
        <label for="telegram" class="col-sm-2 col-form-label">Telegram</label>
        <div class="col-sm-10">
          <input type="text" class="form-control @error('telegram') is-invalid @enderror" id="telegram" name="telegram"  value="{{ old('telegram', $company->telegram) }}">
          @error('telegram')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>
      </div>
      <div class="row mb-3">
        <label class="col-sm-2 col-form-label"></label>
        <div class="col-sm-10">
          <button type="submit" class="btn btn-primary">Update Company</button>
        </div>
      </div>
    </div>  
    </div>    
</form>

@endsection