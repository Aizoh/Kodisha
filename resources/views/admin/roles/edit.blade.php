@extends('layouts.admin')

@section('content')

    <?php use App\Http\Controllers\Controller; ?>

    <!-- END PAGE BAR -->
    <!-- BEGIN PAGE TITLE-->
    <h1 class="page-title"> Edit User Space
    </h1>
    <!-- END PAGE TITLE-->
    <!-- END PAGE HEADER-->
    <div class="row">
        <div class="col-md-12">
            <!-- Begin: life time stats -->
            <div class="portlet light portlet-fit portlet-datatable bordered">

                @if (count($errors) > 0)
                    <div class="alert alert-danger">

                        <strong>Whoops!</strong> There were some problems with your input.<br><br>

                        <ul>

                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach

                        </ul>

                    </div>
                @endif

                <div class="portlet-title">
                    <div class="form-group form-md-line-input">
                        <label class="col-md-2 control-label" for="form_control_1">Space Name</label>
                        <div class="col-md-10">
                            <input type="text" name="rolename" class="form-control" id="form_control_1"
                                value="{{ $role->name }}" onChange="update_rolename('{{ $role->id }}',this.value)">
                            <div class="form-control-focus"> </div>
                        </div>
                    </div>

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
                                                    onchange="update_role('{{ $role->id }}','{{ $mo->name }}','Create')"
                                                    {{ Controller::can_model($mo->name, 'Create', $role) }}>
                                                <span></span>
                                            </label></td>
                                        <td><label class="mt-checkbox">
                                                <input type="checkbox" name="{{ $mo->name }}[]" value="View"
                                                    onchange="update_role('{{ $role->id }}','{{ $mo->name }}','View')"
                                                    {{ Controller::can_model($mo->name, 'View', $role) }}>
                                                <span></span>
                                            </label></td>
                                        <td><label class="mt-checkbox">
                                                <input type="checkbox" name="{{ $mo->name }}[]" value="Edit"
                                                    onchange="update_role('{{ $role->id }}','{{ $mo->name }}','Edit')"
                                                    {{ Controller::can_model($mo->name, 'Edit', $role) }}>
                                                <span></span>
                                            </label>
                                        </td>
                                        <td><label class="mt-checkbox">
                                                <input type="checkbox" name="{{ $mo->name }}[]" value="Delete"
                                                    onchange="update_role('{{ $role->id }}','{{ $mo->name }}','Delete')"
                                                    {{ Controller::can_model($mo->name, 'Delete', $role) }}>
                                                <span></span>
                                            </label>
                                        </td>

                                    </tr>
                                @endforeach

                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="5">
                                        <!-- <button type="submit" class="btn btn sbold green btn-sm active">UPDATE</button> -->
                                    </td>
                                </tr>
                            </tfoot>
                        </table>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End: life time stats -->

@endsection

@section('scripts')
    <script>
        function update_role(role_id, model, action) {

            $.ajax({

                url: "{{ route('update_permission') }}",
                method: 'POST',
                data: {

                    role_id: role_id,
                    model: model,
                    action: action

                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {


                }
            });

        }

        function update_rolename(role_id, rolename) {

            $.ajax({

                url: "{{ route('update_role') }}",
                method: 'post',
                data: {

                    role_id: role_id,
                    rolename: rolename,


                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {


                }
            });

        }
    </script>
@endsection
