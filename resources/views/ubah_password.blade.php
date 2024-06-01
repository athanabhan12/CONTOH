@extends('layouts.main')

@section('content')

<div class="main-panel">
  <div class="content">
    <div class="page-inner">
      <div class="page-header">
        <h4 class="page-title">User</h4>
        <ul class="breadcrumbs">
          <li class="nav-home">
            <a href="{{ route('dashboard') }}">
              <i class="flaticon-home"></i>
            </a>
          </li>
          <li class="separator">
            <i class="flaticon-right-arrow"></i>
          </li>
          <li class="nav-item">
            <a href="#">User</a>
          </li>
          <li class="separator">
            <i class="flaticon-right-arrow"></i>
          </li>
          <li class="nav-item">
            <a href="#">Ubah Password User</a>
          </li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <div class="card-title">Ubah Password User</div>
            </div>
            <div class="card-body">
              <form action="{{ url('panitia/update_password') }}/{{ $panitia->id }}" method="POST">
                @csrf
              <div class="row">
              <div class="form-group col-12">
                <label for="email2">Password</label>
                <input type="password" name="password" class="form-control">
              </div>
              </div>
              <div class="row">
              </div>
              <div class="button mt-3" style="float: ">
                <button class="btn btn-success">Submit</button>
                <a href="{{ route('panitia') }}" class="btn btn-danger">Cancel</a>
              </div>
            </form>
            </div>
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
</div>

@endsection