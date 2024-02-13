@extends('layouts.admin')

@section('content')

    <?php use App\Http\Controllers\Controller;
    $controller = new Controller(); ?>

    <!-- END PAGE BAR -->
    <!-- BEGIN PAGE TITLE-->
    <h1 class="page-title"> User Settings
    </h1>
    <!-- END PAGE TITLE-->
    <!-- END PAGE HEADER-->

    <div class="row">

        <div class="col-md-12">


            <div class="portlet light bordered">

                <div class="portlet-title">

                    <div class="caption font-red-sunglo">
                        <i class="icon-settings font-red-sunglo"></i>
                        <span class="caption-subject font-green bold uppercase"> Edit User</span>
                    </div>

                    <div class="actions">

                        <a href="{{ Route('users.index') }}" class="btn btn sbold red btn-circle btn-sm active">back</a>

                    </div><!--actions-->

                </div>
                <div class="portlet-body form">

                    {!! Form::model($user, ['method' => 'PATCH', 'route' => ['users.update', $user->id]]) !!}
                    <div class="form-body row">

                        @if (count($errors) > 0)
                            <div class="alert alert-danger">


                                <ul>

                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach

                                </ul>

                            </div>
                        @endif

                        <div class="col-md-6">
                            {{-- <div class="form-group form-md-line-input">
                                <label class="col-md-4 control-label" for="form_control_1">First Name</label>
                                <div class="col-md-8">
                                    <input type="text" name="first_name" class="form-control" id="form_control_1"
                                        value="{{ $user->first_name }}">
                                    <div class="form-control-focus"> </div>
                                </div>
                            </div> --}}

                            {{-- <div class="form-group form-md-line-input">
                                <label class="col-md-4 control-label" for="form_control_1">Last Name</label>
                                <div class="col-md-8">
                                    <input type="text" name="last_name" class="form-control" id="form_control_1"
                                        value="{{ $user->last_name }}">
                                    <div class="form-control-focus"> </div>
                                </div>
                            </div> --}}

                            <div class="form-group form-md-line-input">
                                <label class="col-md-4 control-label" for="form_control_1">Username</label>
                                <div class="col-md-8">
                                    <input type="text" name="name" class="form-control" id="form_control_1"
                                        value="{{ $user->name }}">
                                    <div class="form-control-focus"> </div>
                                </div>
                            </div>

                            <div class="form-group form-md-line-input">
                                <label class="col-md-4 control-label" for="form_control_1">Email</label>
                                <div class="col-md-8">
                                    <input type="text" name="email" class="form-control"
                                        id="form_control_1"value="{{ $user->email }}">
                                    <div class="form-control-focus"> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">

                            {{-- <div class="form-group form-md-line-input">

                                <label class="col-md-4  control-label">Supervisor</label>
                                 <div class="col-md-8">
                                    <select name="supervisor" class="form-control form-md-line-input">
                                        <option value="{{ $user->supervisor }}">
                                            {{ $controller->user_name($user->supervisor) }}</option>
                                        @foreach ($users as $u)
                                            <option value="{{ $u->id }}">{{ $u->first_name }} {{ $u->last_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div> 

                            </div> --}}

                            <div class="form-group form-md-line-input">
                                <label class="col-md-4 control-label" for="form_control_1">User Space</label>
                                <div class="col-md-8">
                                    <select name="userspace" class="form-control">


                                        <option value="{{ $user->role_id }}">{{ Controller::role_title($user->id) }}
                                        </option>

                                        @foreach ($spaces as $space)
                                            <option value="{{ $space->id }}">{{ $space->title }}</option>
                                        @endforeach
                                    </select>
                                    <div class="form-control-focus"> </div>
                                </div>
                            </div>
                            <div class="form-group form-md-line-input">
                                <label class="col-md-4 control-label" for="form_control_1">Active</label>
                                <div class="col-md-8">
                                    <select name="active" class="form-control" id="form_control_1">
                                        <option value="{{ $user->status }}">{{ $user->status }}</option>
                                        <option value="Yes">YES</option>
                                        <option value="No">No</option>

                                    </select>
                                    <div class="form-control-focus"> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn blue">Submit</button>
                        <button type="button" class="btn default">Cancel</button>
                    </div>
                    {!! Form::close() !!}

                </div>
            </div>

        </div>

    </div>
    <!-- End: life time stats -->

@endsection
