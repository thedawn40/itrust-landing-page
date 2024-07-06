@extends('admin/layouts.main')

@section('container')
    Welcom back, {{  auth()->user()->name }}

    

@endsection
