@extends('layouts.master')

@section('title', 'Admin Settings')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Accounts</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin_dashboard') }}">Dashboard</a></li>
              <li class="breadcrumb-item">Accounts</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-header">

                      <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                          <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                          <div class="input-group-append">
                            <button type="submit" class="btn btn-default">
                              <i class="fas fa-search"></i>
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                      <table class="table table-hover text-nowrap">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Username</th>
                            <th>E-Mail</th>
                            <th>Status</th>
                            <th>Settings</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach (getAllUser()->paginate(6) as $user)
                          <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->mail }}</td>
                            <td><span class="badge badge-@if ($user->status == 'pending')warning @elseif ($user->status == 'active')success @elseif ($user->status == 'banned')danger @endif">{{ $user->status }}</span></td>
                            <td>
                              <a class="btn btn-app bg-success" href="{{ url('/admin/users')}}/{{ $user->id }}">
                                <i class="fas fa-binoculars"></i> View
                             </a>
                             <a class="btn btn-app bg-danger">
                              <i class="fas fa-hammer"></i> Ban
                           </a>
                              <a class="btn btn-app bg-danger">
                                 <i class="fas fa-trash"></i> Delete
                              </a>
                            </td>
                          </tr>
                        @endforeach
                        </tbody>
                      </table>
                    </div>
                    <div class="card-footer clearfix">
                      <div class="pagination pagination-sm m-0 float-right">
                        {!! getAllUser()->paginate(6)->links('vendor.pagination.bootstrap-4') !!}
                      </div>
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                </div>
              </div>
        </div>
    </section>
  </div>

  <!-- /.content-wrapper -->



@endsection
