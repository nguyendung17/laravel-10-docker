@extends('layouts.default')

@section('title', __('Not Found'))
@section('code', '404')
@section('main')
<div class="page-wrapper mini-sidebar" id="main-wrapper" data-layout="vertical" data-sidebartype="mini-sidebar" data-sidebar-position="fixed" data-header-position="fixed">
      <div class="position-relative overflow-hidden min-vh-100 d-flex align-items-center justify-content-center">
        <div class="d-flex align-items-center justify-content-center w-100">
          <div class="row justify-content-center w-100">
            <div class="col-lg-4">
              <div class="text-center">
                <img src="{{asset('assets/images/backgrounds/404.png')}}" alt="" class="img-fluid">
                <h1 class="fw-semibold mb-7 fs-9">Opps!!!</h1>
                <h4 class="fw-semibold mb-7">This page you are looking for could not be found.</h4>
                <a class="btn btn-primary" href="/" role="button">Go Back to Home</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
