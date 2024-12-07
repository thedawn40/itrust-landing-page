@extends('adminv2.layouts.main')

@section('container')

<div class="pagetitle">
  <h1 class="h3 mb-2 text-gray-800">Company Profile</h1>
  <p class="mb-3">Showcase Your Organization’s Identity and Values. for help please refer to read <a target="_blank"
  href="https://datatables.net">documentation</a>.</p>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item active">Company Profile</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

@if (session()->has('success'))
<div class="alert alert-success" role="alert">
  {{ session('success') }}
</div>    
@endif

<form method="POST" action="/admin/company/{{ $company->id }}" enctype="multipart/form-data">
    @method('put')
  @csrf
  <div style="background: none;" class="row">
    <div class="col-sm-12 col-md-12 col-lg-6">
      <div style="background: white" class="card shadow">
        <div class="card-body">
          <h5 class="card-title">Detail Information</h5>
          <div style="display: flex; margin-top: 20px;">
            <div class="col-sm-3" style="float: left">
              <label for="info" style="font-weight: bold">Information</label>
            </div>
            <div class="col-sm-9">
              <div class="mb-3">
                <label for="name" class="col-sm-12 col-form-label">Name</label>
                <div class="col-sm-12">
                  <input type="text" class="form-control @error('name') is-invalid @enderror"  name="name" id="name" required autofocus value="{{ old('name', $company->name) }}">
                  @error('name')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                  @enderror
                </div>
              </div>
              <div class="mb-3">
                <label for="email" class="col-sm-12 col-form-label">Email</label>
                <div class="col-sm-12">
                  <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email"  value="{{ old('email', $company->email) }}">
                  @error('email')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                  @enderror
                </div>
              </div>    
              <div>
                <label for="customersupport" class="col-sm-12 col-form-label">Customer Support</label>
                <div class="col-sm-12">
                  <input type="text" class="form-control @error('customer_support') is-invalid @enderror" id="customer_support" name="customer_support"  value="{{ old('customer_support', $company->customer_support) }}">
                  @error('customer_support')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                  @enderror
                </div>
              </div>        
            </div>
          </div>
          <hr>
          <div style="display: flex">
            <div class="col-sm-3" style="float: left">
              <label for="info" style="font-weight: bold">Address</label>
            </div>
            <div class="col-sm-9">
              <div class="">
                {{-- <label for="address" class="col-sm-12 col-form-label">Address</label> --}}
                <div class="col-sm-12">
                  <textarea rows="3" class="form-control @error('address') is-invalid @enderror" id="address" name="address"  >{{ old('address', $company->address) }}</textarea>
                  @error('address')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                  @enderror
                </div>
              </div>
            </div>
          </div>
          <hr>
          <div style="display: flex">
          <div class="mb-3" style="float: right">
            <label class="col-sm-12 col-form-label"></label>
            <div class="col-sm-12">
              <button type="submit" class="btn btn-primary">Update Company</button>
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-md-12 col-lg-6" style="background: none;">
      <div style="background: white" class="card shadow">
        <div class="card-body">
          <h5 class="card-title">Social Media</h5>
          <div style="display: flex">          
            <div class="col-sm-12">
              <div class="mb-3 row">
                <div class="col-sm-1">
                  <i class="bx bxl-linkedin-square" style="font-size: 30px"></i>
                </div>
                <div class="col-sm-11">
                  <input type="text" class="form-control @error('twitter') is-invalid @enderror" id="twitter" name="twitter"  value="{{ old('twitter', $company->twitter) }}">
                  @error('twitter')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                  @enderror
                </div>
              </div>
              <div class="mb-3 row">
                <div class="col-sm-1">
                  <i class="bx bxl-facebook-square" style="font-size: 30px"></i>
                </div>
                <div class="col-sm-11">
                  <input type="text" class="form-control @error('facebook') is-invalid @enderror" id="facebook" name="facebook"  value="{{ old('facebook', $company->facebook) }}">
                  @error('facebook')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                  @enderror
                </div>
              </div>
              <div class="mb-3 row">
                <div class="col-sm-1">
                  <i class="bx bxl-instagram-alt" style="font-size: 30px"></i>
                </div>
                <div class="col-sm-11">
                  <input type="text" class="form-control @error('instagram') is-invalid @enderror" id="instagram" name="instagram"  value="{{ old('instagram', $company->instagram) }}">
                  @error('instagram')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                  @enderror
                </div>
              </div>
              <div class="mb-3 row">
                <div class="col-sm-1">
                  <i class="bx bxl-whatsapp-square" style="font-size: 30px"></i>
                </div>
                <div class="col-sm-11">
                  <input type="text" class="form-control @error('whatsapp') is-invalid @enderror" id="whatsapp" name="whatsapp"  value="{{ old('whatsapp', $company->whatsapp) }}">
                  @error('whatsapp')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                  @enderror
                </div>
              </div>
              <div class="mb-3 row">
                <div class="col-sm-1">
                  <i class="bx bxl-telegram" style="font-size: 30px"></i>
                </div>
                <div class="col-sm-11">
                  <input type="text" class="form-control @error('telegram') is-invalid @enderror" id="telegram" name="telegram"  value="{{ old('telegram', $company->telegram) }}">
                  @error('telegram')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                  @enderror
                </div>
              </div>
            </div>
          </div>
          <hr>
          <div class="mb-3" style="float: right">
            <label class="col-sm-12 col-form-label"></label>
            <div class="col-sm-12">
              <button type="submit" class="btn btn-primary">Update Company</button>
            </div>
          </div>
        </div>
      </div>
    </div>     
    </div>    
</form>

@endsection