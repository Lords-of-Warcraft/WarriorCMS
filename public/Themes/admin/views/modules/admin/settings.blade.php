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
            <h1 class="m-0">Settings</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="#">System</a></li>
              <li class="breadcrumb-item">Settings</li>
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
            <div class="col-sm-3">
              <div class="card card-outline card-primary">
                <div class="card-header">
                  <h3 class="card-title">Update</h3>
                  <div class="card-tools">
                    <!-- Buttons, labels, and many other things can be placed here! -->
                    <!-- Here is a label for example -->
                  </div>
                  <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  Your current version is <span class="badge badge-primary">{{ config('self-update.version_installed', 'Unknown Version') }}</span>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <form method="POST" action="{{ route('admin_updater') }}">
                    @csrf
                    <button type="submit" class="btn btn-block btn-primary">Check for Updates</button>
                  </form>
                </div>
                <!-- /.card-footer -->
              </div>
              <!-- /.card -->
            </div>
            <div class="col-sm-6">
              <div class="card card-outline card-primary">
                <div class="card-header">
                  <h3 class="card-title">Settings</h3>
                  <div class="card-tools">
                  </div>
                  <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <form>
                    <div class="form-group">
                      <label for="websitename">Website name</label>
                      <input name="websitename" type="text" class="form-control form-control-border" id="websitename" value="{{ Config('warriorcms.website_name') }}" placeholder="{{ Config('warriorcms.website_name') }}">
                    </div>
                    <div class="form-group">
                      <label for="discordserver">Discord Server</label>
                      <input name="discordserver" type="text" class="form-control form-control-border" id="discordserver" value="{{ Config('warriorcms.discord_server') }}" placeholder="{{ Config('warriorcms.discord_server') }}">
                    </div>
                    <div class="form-group">
                      <label for="discordchannel">Discord Channel</label>
                      <input name="discordchannel" type="text" class="form-control form-control-border" id="discordchannel" value="{{ Config('warriorcms.discord_channel') }}" placeholder="{{ Config('warriorcms.discord_channel') }}">
                    </div>
                    <div class="form-group">
                      <label for="videourl">Frontpage Video URL</label>
                      <input name="videourl" type="text" class="form-control form-control-border" id="videourl" value="{{ Config('warriorcms.video_url') }}" placeholder="{{ Config('warriorcms.video_url') }}">
                    </div>
                    <div class="form-group">
                      <label for="exampleSelectBorder">Account activation</label>
                      <select class="custom-select form-control-border" id="exampleSelectBorder">
                        <option @if (getDBSettings('user_activation') == 'TRUE') selected @endif disabled>On</option>
                        <option @if (getDBSettings('user_activation') == 'FALSE') selected @endif>Off</option>
                      </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                  </form>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <div class="col-sm-3">
              <div class="card card-outline card-primary">
                <div class="card-header">
                  <h3 class="card-title">E-Mail</h3>
                  <div class="card-tools">

                  </div>
                  <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <form>
                    <div class="form-group">
                      <label for="mail_from">Mail from</label>
                      <input name="mail_from" type="text" class="form-control form-control-border" id="mail_from" value="{{ getDBSettings('mail_from') }}" placeholder="{{ getDBSettings('mail_from') }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                  </form>
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
