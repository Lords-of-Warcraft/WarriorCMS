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
                        <h1 class="m-0">Profile</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin_dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin_users') }}">Accounts</a></li>
                            <li class="breadcrumb-item">{{ $username }}</li>
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
                    <div class="col-md-3">

                        <div class="card card-primary card-outline">
                            <div class="card-body box-profile">
                                <div class="text-center">
                                    <img class="profile-user-img img-fluid img-circle"
                                        src="{{ getUserDataByID('profile_image', $id) }}" alt="User profile picture">
                                </div>
                                <h3 class="profile-username text-center">{{ $username }}</h3>
                                <p class="text-muted text-center">
                                    @if ($gmlevel == 0)
                                        User
                                    @elseif ($gmlevel == 1)
                                        Moderator
                                    @elseif ($gmlevel == 2)
                                        Gamemaster
                                    @elseif ($gmlevel == 3)
                                        Administrator
                                    @endif
                                </p>
                                <ul class="list-group list-group-unbordered mb-3">
                                    <li class="list-group-item">
                                        <b>Characters</b> <a class="float-right">1,322</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Posts</b> <a class="float-right">543</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Friends</b> <a class="float-right">13,287</a>
                                    </li>
                                </ul>
                            </div>

                        </div>

                    </div>

                    <div class="col-md-9">
                        <div class="card">
                            <div class="card-header p-2">
                                <ul class="nav nav-pills">
                                    <li class="nav-item"><a class="nav-link active" href="#activity"
                                            data-toggle="tab">Activity</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#characters"
                                            data-toggle="tab">Characters</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="active tab-pane" id="activity">

                                        <div class="post">
                                            <div class="user-block">
                                                <img class="img-circle img-bordered-sm"
                                                    src="../../dist/img/user1-128x128.jpg" alt="user image">
                                                <span class="username">
                                                    <a href="#">Jonathan Burke Jr.</a>
                                                    <a href="#" class="float-right btn-tool"><i
                                                            class="fas fa-times"></i></a>
                                                </span>
                                                <span class="description">Shared publicly - 7:30 PM today</span>
                                            </div>

                                            <p>
                                                Lorem ipsum represents a long-held tradition for designers,
                                                typographers and the like. Some people hate it and argue for
                                                its demise, but others ignore the hate as they create awesome
                                                tools to help create filler text for everyone from bacon lovers
                                                to Charlie Sheen fans.
                                            </p>
                                            <p>
                                                <a href="#" class="link-black text-sm mr-2"><i
                                                        class="fas fa-share mr-1"></i> Share</a>
                                                <a href="#" class="link-black text-sm"><i
                                                        class="far fa-thumbs-up mr-1"></i> Like</a>
                                                <span class="float-right">
                                                    <a href="#" class="link-black text-sm">
                                                        <i class="far fa-comments mr-1"></i> Comments (5)
                                                    </a>
                                                </span>
                                            </p>
                                            <input class="form-control form-control-sm" type="text"
                                                placeholder="Type a comment">
                                        </div>


                                        <div class="post clearfix">
                                            <div class="user-block">
                                                <img class="img-circle img-bordered-sm"
                                                    src="../../dist/img/user7-128x128.jpg" alt="User Image">
                                                <span class="username">
                                                    <a href="#">Sarah Ross</a>
                                                    <a href="#" class="float-right btn-tool"><i
                                                            class="fas fa-times"></i></a>
                                                </span>
                                                <span class="description">Sent you a message - 3 days ago</span>
                                            </div>

                                            <p>
                                                Lorem ipsum represents a long-held tradition for designers,
                                                typographers and the like. Some people hate it and argue for
                                                its demise, but others ignore the hate as they create awesome
                                                tools to help create filler text for everyone from bacon lovers
                                                to Charlie Sheen fans.
                                            </p>
                                            <form class="form-horizontal">
                                                <div class="input-group input-group-sm mb-0">
                                                    <input class="form-control form-control-sm" placeholder="Response">
                                                    <div class="input-group-append">
                                                        <button type="submit" class="btn btn-danger">Send</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>


                                        <div class="post">
                                            <div class="user-block">
                                                <img class="img-circle img-bordered-sm"
                                                    src="../../dist/img/user6-128x128.jpg" alt="User Image">
                                                <span class="username">
                                                    <a href="#">Adam Jones</a>
                                                    <a href="#" class="float-right btn-tool"><i
                                                            class="fas fa-times"></i></a>
                                                </span>
                                                <span class="description">Posted 5 photos - 5 days ago</span>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-sm-6">
                                                    <img class="img-fluid" src="../../dist/img/photo1.png"
                                                        alt="Photo">
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <img class="img-fluid mb-3" src="../../dist/img/photo2.png"
                                                                alt="Photo">
                                                            <img class="img-fluid" src="../../dist/img/photo3.jpg"
                                                                alt="Photo">
                                                        </div>

                                                        <div class="col-sm-6">
                                                            <img class="img-fluid mb-3" src="../../dist/img/photo4.jpg"
                                                                alt="Photo">
                                                            <img class="img-fluid" src="../../dist/img/photo1.png"
                                                                alt="Photo">
                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                            <p>
                                                <a href="#" class="link-black text-sm mr-2"><i
                                                        class="fas fa-share mr-1"></i> Share</a>
                                                <a href="#" class="link-black text-sm"><i
                                                        class="far fa-thumbs-up mr-1"></i> Like</a>
                                                <span class="float-right">
                                                    <a href="#" class="link-black text-sm">
                                                        <i class="far fa-comments mr-1"></i> Comments (5)
                                                    </a>
                                                </span>
                                            </p>
                                            <input class="form-control form-control-sm" type="text"
                                                placeholder="Type a comment">
                                        </div>

                                    </div>

                                    <div class="tab-pane" id="characters">

                                        <div class="card">
                                            <div class="card-header">
                                                <h3 class="card-title">Chracters</h3>
                                                <div class="card-tools">
                                                    {{-- Add pagination here if needed --}}
                                                </div>
                                            </div>

                                            <div class="card-body p-0">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Race</th>
                                                            <th>Class</th>
                                                            <th>Level</th>
                                                            <th>Money</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach (getAllRealms()->get() as $realm)
                                                            @isset ($realm)
                                                                @foreach (getCharactersByRealmID($realm->id)->where('account', $id)->get() as $char)
                                                                    <tr>
                                                                        @isset ($char)
                                                                            <td>{{ $char->name }}</td>
                                                                            <td>{{ $char->race }}</td>
                                                                            <td>{{ $char->class }}</td>
                                                                            <td>{{ $char->level }}</td>
                                                                            <td>60 Gold</td>
                                                                        @endisset
                                                                        @empty ($char)
                                                                            <td>No char on {{ $realm->realmname }}</td>
                                                                            <td>1</td>
                                                                            <td>1</td>
                                                                            <td>1</td>
                                                                            <td>1</td>
                                                                        @endempty
                                                                    </tr>
                                                                @endforeach
                                                            @endisset
                                                            @empty ($realm)
                                                                No realm found
                                                            @endempty
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="tab-pane" id="settings">
                                        <form class="form-horizontal">
                                            <div class="form-group row">
                                                <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                                                <div class="col-sm-10">
                                                    <input type="email" class="form-control" id="inputName"
                                                        placeholder="Name">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                                <div class="col-sm-10">
                                                    <input type="email" class="form-control" id="inputEmail"
                                                        placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputName2" class="col-sm-2 col-form-label">Name</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="inputName2"
                                                        placeholder="Name">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputExperience"
                                                    class="col-sm-2 col-form-label">Experience</label>
                                                <div class="col-sm-10">
                                                    <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputSkills" class="col-sm-2 col-form-label">Skills</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="inputSkills"
                                                        placeholder="Skills">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="offset-sm-2 col-sm-10">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox"> I agree to the <a href="#">terms
                                                                and conditions</a>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="offset-sm-2 col-sm-10">
                                                    <button type="submit" class="btn btn-danger">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </section>
    </div>

    <!-- /.content-wrapper -->



@endsection
