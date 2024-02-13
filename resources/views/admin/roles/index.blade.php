@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-md-12">
        <!-- Begin: life time stats -->
        <div class="portlet light portlet-fit portlet-datatable bordered">

        <div class="portlet-title">
                <div class="caption">
                    <i class="icon-settings font-green"></i>
                    <span class="caption-subject font-green sbold uppercase">User Roles</span>
                </div>

                <div class="actions">
                    @if (Session::has('success'))
                            <div class="alert alert-success">
                                {{ Session('success') }}
                            </div>
                        @endif

                    <a href="{{Route('roles.create')}}" class="btn btn sbold green  btn-sm active">Add New Role<i class="fa fa-plus"></i></a>

                    <div class="btn-group">
                        <a class="btn red btn-outline" href="javascript:;" data-toggle="dropdown">
                            <i class="icon-layers"></i>
                            <span class="hidden-xs"> Data Tools </span>
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu pull-right" id="sample_3_tools">
                            <li>
                                <a href="javascript:;" data-action="0" class="tool-action">
                                    <i class="icon-printer"></i> Print</a>
                            </li>
                            <li>
                                <a href="javascript:;" data-action="1" class="tool-action">
                                    <i class="icon-check"></i> Copy</a>
                            </li>
                            <li>
                                <a href="javascript:;" data-action="2" class="tool-action">
                                    <i class="icon-doc"></i> PDF</a>
                            </li>
                            <li>
                                <a href="javascript:;" data-action="3" class="tool-action">
                                    <i class="icon-paper-clip"></i> Excel</a>
                            </li>
                            <li>
                                <a href="javascript:;" data-action="4" class="tool-action">
                                    <i class="icon-cloud-upload"></i> CSV</a>
                            </li>
                            <li class="divider"> </li>
                            <li>
                                <a href="javascript:;" data-action="5" class="tool-action">
                                    <i class="icon-refresh"></i> Reload</a>
                            </li>
                            </li>
                        </ul>
                    </div>
                </div><!--actions-->

            </div><!--portlet-title-->
            <div class="portlet-body">
                <div class="table-container">
                    <table class="table table-striped table-bordered table-hover" id="sample_3">
                        <thead>
                            <tr>
                                <th class="all">Space name</th>
                                <th class="min-tablet">Last Updated at</th>
                                <th class="min-tablet" width="12%">Actions</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($roles as $role)
                            <tr>
                                <td>{{$role->title}}</td>
                                <td>{{$role->updated_at}}</td>

                                <td>
                                    <a href="{{route('roles.edit',$role->id)}}"><button class="btn btn sbold green  btn-xs active"><i class="fa fa-pencil" aria-hidden="true"></i></button></a>

                                    <a href="{{route('roles.show',$role->id)}}"><button class="btn btn sbold blue  btn-xs active"><i class="fa fa-eye" aria-hidden="true"></i></button></a>


                                    {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline', 'onsubmit' => 'return ConfirmDelete()']) !!}
                                    <button type="submit" class="btn btn-xs btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                    <!-- {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs active']) !!} -->
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