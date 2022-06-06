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
            <h1 class="m-0">News Settings</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin_dashboard') }}">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="{{ route('admin_users') }}">Modules</a></li>
              <li class="breadcrumb-item">News</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
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
                        <th>Title</th>
                        <th>Content</th>
                        <th>Released</th>
                        <th>Settings</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($news as $news)
                        <tr>
                            <td>{{ $news->id }}</td>
                            <td>{{ $news->title }}</td>
                            <td>{{ $news->content }}</td>
                            <td>Today</td>
                            <td>
                            <a class="btn btn-app bg-success" href="https://warriorcms.test/admin/users/2">
                                <svg class="svg-inline--fa fa-gear" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="gear" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M495.9 166.6C499.2 175.2 496.4 184.9 489.6 191.2L446.3 230.6C447.4 238.9 448 247.4 448 256C448 264.6 447.4 273.1 446.3 281.4L489.6 320.8C496.4 327.1 499.2 336.8 495.9 345.4C491.5 357.3 486.2 368.8 480.2 379.7L475.5 387.8C468.9 398.8 461.5 409.2 453.4 419.1C447.4 426.2 437.7 428.7 428.9 425.9L373.2 408.1C359.8 418.4 344.1 427 329.2 433.6L316.7 490.7C314.7 499.7 307.7 506.1 298.5 508.5C284.7 510.8 270.5 512 255.1 512C241.5 512 227.3 510.8 213.5 508.5C204.3 506.1 197.3 499.7 195.3 490.7L182.8 433.6C167 427 152.2 418.4 138.8 408.1L83.14 425.9C74.3 428.7 64.55 426.2 58.63 419.1C50.52 409.2 43.12 398.8 36.52 387.8L31.84 379.7C25.77 368.8 20.49 357.3 16.06 345.4C12.82 336.8 15.55 327.1 22.41 320.8L65.67 281.4C64.57 273.1 64 264.6 64 256C64 247.4 64.57 238.9 65.67 230.6L22.41 191.2C15.55 184.9 12.82 175.3 16.06 166.6C20.49 154.7 25.78 143.2 31.84 132.3L36.51 124.2C43.12 113.2 50.52 102.8 58.63 92.95C64.55 85.8 74.3 83.32 83.14 86.14L138.8 103.9C152.2 93.56 167 84.96 182.8 78.43L195.3 21.33C197.3 12.25 204.3 5.04 213.5 3.51C227.3 1.201 241.5 0 256 0C270.5 0 284.7 1.201 298.5 3.51C307.7 5.04 314.7 12.25 316.7 21.33L329.2 78.43C344.1 84.96 359.8 93.56 373.2 103.9L428.9 86.14C437.7 83.32 447.4 85.8 453.4 92.95C461.5 102.8 468.9 113.2 475.5 124.2L480.2 132.3C486.2 143.2 491.5 154.7 495.9 166.6V166.6zM256 336C300.2 336 336 300.2 336 255.1C336 211.8 300.2 175.1 256 175.1C211.8 175.1 176 211.8 176 255.1C176 300.2 211.8 336 256 336z"></path></svg><!-- <i class="fas fa-cog"></i> Font Awesome fontawesome.com --> Edit
                            </a>
                            <a class="btn btn-app bg-danger">
                            <svg class="svg-inline--fa fa-hammer" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="hammer" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M568.1 196.3l-22.62-22.62c-4.533-4.533-10.56-7.029-16.97-7.029s-12.44 2.496-16.97 7.029l-5.654 5.656l-20.12-20.12c4.596-23.46-2.652-47.9-19.47-64.73l-45.25-45.25C390.2 17.47 347.1 0 303.1 0C258.2 0 216 17.47 184.3 49.21L176.5 57.05L272.5 105.1v13.81c0 18.95 7.688 37.5 21.09 50.91l49.16 49.14c13.44 13.45 31.39 20.86 50.54 20.86c4.758 0 9.512-.4648 14.18-1.387l20.12 20.12l-5.654 5.654c-9.357 9.357-9.357 24.58-.002 33.94l22.62 22.62c4.535 4.533 10.56 7.031 16.97 7.031s12.44-2.498 16.97-7.031l90.53-90.5C578.3 220.8 578.3 205.6 568.1 196.3zM270.9 192.4c-3.846-3.846-7.197-8.113-10.37-12.49l-239.5 209.2c-28.12 28.12-28.16 73.72-.0371 101.8C35.12 505 53.56 512 71.1 512s36.84-7.031 50.91-21.09l209.1-239.4c-4.141-3.061-8.184-6.289-11.89-9.996L270.9 192.4z"></path></svg><!-- <i class="fas fa-hammer"></i> Font Awesome fontawesome.com --> Ban
                            </a>
                            <a class="btn btn-app bg-danger">
                                <svg class="svg-inline--fa fa-trash" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="trash" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M135.2 17.69C140.6 6.848 151.7 0 163.8 0H284.2C296.3 0 307.4 6.848 312.8 17.69L320 32H416C433.7 32 448 46.33 448 64C448 81.67 433.7 96 416 96H32C14.33 96 0 81.67 0 64C0 46.33 14.33 32 32 32H128L135.2 17.69zM394.8 466.1C393.2 492.3 372.3 512 346.9 512H101.1C75.75 512 54.77 492.3 53.19 466.1L31.1 128H416L394.8 466.1z"></path></svg><!-- <i class="fas fa-trash"></i> Font Awesome fontawesome.com --> Delete
                            </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                  </table>
                </div>
                <div class="card-footer clearfix">
                  <div class="pagination pagination-sm m-0 float-right">
                    <a type="button" class="btn btn-block btn-primary" href="#">Create news</a>
                  </div>
                </div>
                <!-- /.card-body -->
              </div>
        </div>
    </section>
  </div>
  
  <!-- /.content-wrapper -->

  

@endsection
