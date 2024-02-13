@extends('layouts.admin')
@section('content')
    <!-- END PAGE BAR -->
    <!-- BEGIN PAGE TITLE-->
    <h1 class="page-title"> Register New Space
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
                                placeholder="Enter the Space name">
                            <div class="form-control-focus"> </div>
                        </div>
                    </div>

                    <div class="col-md-4" style="padding-top:20px;">
                        <a href="{{ Route('roles.index') }}" class="btn btn sbold red  btn-sm active">back</a>
                        <button type="submit" class="btn btn sbold green btn-sm active">Submit</button>
                    </div><!--actions-->
                </div><!--portlet-title-->

                {!! Form::close() !!}

            </div>
        </div>
    </div>
    <!-- End: life time stats -->
@endsection
