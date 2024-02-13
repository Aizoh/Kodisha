@extends('layouts.admin')
@section('content')
    <?php
    
    use App\Http\Controllers\Controller;
    
    $controller = new Controller(); ?>

    <!-- END PAGE BAR -->
    <!-- BEGIN PAGE TITLE-->
    <h1 class="page-title"> User Settings
    </h1>
    <!-- END PAGE TITLE-->
    <!-- END PAGE HEADER-->
    <div class="row">
        <div class="col-md-12">
            <!-- Begin: life time stats -->
            <div class="portlet light portlet-fit portlet-datatable bordered">

                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-settings font-green"></i>
                        <span class="caption-subject font-green sbold uppercase">Users List</span>
                        
                    </div>
                    <div class="actions">

                        <a href="{{ Route('users.create') }}" class="btn btn sbold green btn-sm active">Add New User<i
                                class="fa fa-plus"></i></a>
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>

                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach

                                </ul>

                            </div>
                        @endif
                        @if (Session::has('alert-danger'))
                            <div class="alert alert-danger">
                                {{ Session::get('alert-danger') }}
                            </div>
                        @endif
                        @if (Session::has('success'))
                            <div class="alert alert-success">
                                {{ Session('success') }}
                            </div>
                        @endif
                        <!-- <a href="{{ url('settings/users/blocked') }}" class="btn btn sbold red btn-sm active">Blocked</a> -->

                    </div><!--actions-->

                </div><!--portlet-title-->

                <div class="portlet-title">

                    {!! Form::open(['url' => 'users-filter', 'method' => 'POST']) !!}
                    <div class="form-body row">

                        <div class="col-md-3">

                            <div class="form-group form-md-line-input">
                                <select name="userspace" class="form-control" id="form_control_1">
                                    <option value="">Select space ..</option>

                                    @foreach ($spaces as $space)
                                        <option value="{{ $space->id }}">{{ $space->title }}</option>
                                    @endforeach
                                </select>
                                <div class="form-control-focus"> </div>

                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group form-md-line-input">

                                <select name="active" class="form-control" id="form_control_1">
                                    <option value="">Active?</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>

                                </select>
                                <div class="form-control-focus"> </div>

                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-actions">
                                <button type="submit" class="btn blue">Filter</button>
                            </div>
                        </div>
                        {!! Form::close() !!}

                    </div>
                </div>

                <div class="portlet-body">
                    <div class="table-container">
                        <table class="table table-striped table-bordered table-hover" id="users">
                            <thead>
                                <tr bgcolor="#E9E9E9">

                                    <th>USER ID</th>
                                    {{-- <th>FULL NAMES</th> --}}
                                    <th>NAMES</th>
                                    <th>EMAIL</th>
                                    <th>USER SPACE</th>

                                    {{-- <th>SUPERVISOR</th> --}}
                                    <th>ACTIVE</th>
                                    <th>ACTIONS&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>


                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        {{-- <td>{{$user->first_name}} {{$user->last_name}}</td> --}}
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ Controller::role_title($user->id) }}</td>

                                        {{-- <td>{{$controller->user_name($user->supervisor)}}</td> --}}
                                        <td>{{ $user->status }}</td>
                                        <td>
                                            <a href="{{ route('users.edit', $user->id) }}"><button
                                                    class="btn sbold blue btn-xs"><i class="fa fa-pencil"
                                                        aria-hidden="true"></i></button></a>

                                            <a href="{{ url('users/password-reset/' . $user->email . '/' . $user->id) }}"
                                                onClick='return ConfirmReset()'><button class="btn sbold green btn-xs"><i
                                                        class="fa fa-unlock" aria-hidden="true"></i></button></a>

                                            {!! Form::open([
                                                'method' => 'DELETE',
                                                'route' => ['users.destroy', $user->id],
                                                'style' => 'display:inline',
                                                'onsubmit' => 'return ConfirmDelete()',
                                            ]) !!}
                                            <button type="submit" class="btn btn-xs sbold red"><i class="fa fa-trash"
                                                    aria-hidden="true"></i></button>
                                            {!! Form::close() !!}

                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End: life time stats -->
@endsection
