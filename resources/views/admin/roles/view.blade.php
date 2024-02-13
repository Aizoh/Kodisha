@extends('layouts.admin')

@section('content')
    <?php use App\Http\Controllers\Controller; ?>

    <!-- END PAGE BAR -->
    <!-- BEGIN PAGE TITLE-->
    <h1 class="page-title"> User Role Access
    </h1>
    <!-- END PAGE TITLE-->
    <!-- END PAGE HEADER-->
    <div class="row">
        <div class="col-md-12">
            <!-- Begin: life time stats -->
            <div class="portlet light portlet-fit portlet-datatable bordered">

                {!! Form::open(['route' => 'roles.store', 'method' => 'POST']) !!}
                <div class="portlet-title">


                    <div class="form-group form-md-line-input col-md-8">
                        <label class="col-md-2 control-label" for="form_control_1">Space Name</label>
                        <div class="col-md-10">
                            <input type="text" name="rolename" class="form-control" id="form_control_1"
                                value="{{ $role->name }}" disabled>
                            <div class="form-control-focus"> </div>
                        </div>
                    </div>

                    <div class="col-md-4" style="padding-top:20px;">
                        <a href="{{ Route('roles.index') }}" class="btn btn sbold red  btn-sm active">back</a>

                    </div><!--actions-->

                </div><!--portlet-title-->

                <div class="portlet-body">
                    <div class="table-container">
                        <table class="table table-striped table-bordered table-hover mini">
                            <thead>
                                <tr>
                                    <th class="all">Model</th>
                                    <th class="all">Create</th>
                                    <th class="all">View</th>
                                    <th class="all">Edit</th>
                                    <th class="all">Delete</th>

                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($models as $mo)
                                    <tr>
                                        <td>
                                            <label>{{ $mo->friendly }}</label>
                                            <input type="hidden" name="mo[]" value="{{ $mo->name }}">
                                        </td>
                                        <td><label class="mt-checkbox">
                                                <input type="checkbox" name="{{ $mo->name }}[]" value="Create"
                                                    {{ Controller::can_model($mo->name, 'Create', $role) }}
                                                    disabled>
                                                <span></span>
                                            </label></td>
                                        <td><label class="mt-checkbox">
                                                <input type="checkbox" name="{{ $mo->name }}[]" value="View"
                                                    {{ Controller::can_model($mo->name, 'View', $role) }} disabled>
                                                <span></span>
                                            </label></td>
                                        <td><label class="mt-checkbox">
                                                <input type="checkbox" name="{{ $mo->name }}[]" value="Edit"
                                                    {{ Controller::can_model($mo->name, 'Edit', $role) }} disabled>
                                                <span></span>
                                            </label>
                                        </td>
                                        <td><label class="mt-checkbox">
                                                <input type="checkbox" name="{{ $mo->name }}[]" value="Delete"
                                                    {{ Controller::can_model($mo->name, 'Delete', $role) }} disabled>
                                                <span></span>
                                            </label>
                                        </td>

                                    </tr>
                                @endforeach

                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="5">

                                    </td>
                                </tr>
                            </tfoot>
                        </table>

                        {!! Form::close() !!}

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End: life time stats -->
@endsection
