@extends('adminlayout.layout')
@section('content')
<div style="float: right;margin: 1rem;">
    <a href="#" class="btn btn-primary btn-sm " style="padding: 4px 2rem;letter-spacing: 1px;" data-toggle="modal" data-target="#addProfileModalForm">
      Add profile
    </a>
  </div>
  @include('admin.add-document')
  @endsection