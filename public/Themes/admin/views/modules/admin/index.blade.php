@extends('layouts.master')

@section('title', 'Admin Dashboard')

@section('content')

  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total Accounts</span>
                <span class="info-box-number">
                  {{ getAllUser()->count() }}
                </span>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-user-slash"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Banned Accounts</span>
                <span class="info-box-number">{{ getAllUser()->where('status', 'banned')->count() }}</span>
              </div>
            </div>
          </div>

          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-stream"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Realms</span>
                <span class="info-box-number">{{ getAllRealms()->count() }}</span>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fa-solid fa-bars-progress"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Auth</span>
                <span class="info-box-number">{{ getAllAuth()->count() }}</span>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          @foreach (getAllRealms()->paginate(6) as $realm)
          <div class="col-md-4">
            <div class="card card-widget widget-user shadow">
              <div class="widget-user-header" style="background-image: url({{ url('/img/exp/'.$realm->exp.'.jpg') }}); background-size: cover;">
                <h3 class="widget-user-username">Realm - {{ $realm->realmname }}</h3>
              </div>
              <div class="widget-user-image">
                {{-- <img class="img-circle elevation-2" src="/img/profile_icons/elf.jpg" alt="User Avatar"> --}}
              </div>
              <div class="card-footer">
                <div class="row">
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <h5 class="description-header">{{ getCharactersByRealmID($realm->id)->count() }}</h5>
                      <span class="description-text">Horde</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <h5 class="description-header">{{ getCharactersByRealmID($realm->id)->where('online', 1)->count() }}</h5>
                      <span class="description-text">Online</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4">
                    <div class="description-block">
                      <h5 class="description-header">{{ getCharactersByRealmID($realm->id)->count() }}</h5>
                      <span class="description-text">Alliance</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
            </div>
            <!-- /.widget-user -->
          </div>
          @endforeach
        </div>
        <div class="pagination pagination-sm m-0 float-right">
          {!! getAllRealms()->paginate(6)->links('vendor.pagination.bootstrap-4') !!}
        </div>
    </section>
  </div>

@endsection
