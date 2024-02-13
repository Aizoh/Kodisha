@extends('layouts.admin')
@section('content')

    <!-- END PAGE BAR -->
    <!-- BEGIN PAGE TITLE-->
    <h1 class="page-title"> Company Settings
    </h1>
    <!-- END PAGE TITLE-->
    <!-- END PAGE HEADER-->

 <div class="row">

        <div class="col-md-12">

            <div class="portlet light bordered">

                <div class="portlet-title">

                    <div class="caption font-red-sunglo">
                        <i class="icon-settings font-red-sunglo"></i>
                        <span class="caption-subject font-green bold uppercase"> Add A Company Setting</span>
                    </div>

                    <div class="actions">

                        <a href="{{ Route('company.index') }}" class="btn btn sbold red btn-sm active">back</a>
                        @if (Session::has('alert-danger'))
                        <div class="alert alert-danger">
                            {{ Session::get('alert-danger') }}
                        </div>
                    @endif
                    </div><!--actions-->

                </div>
                <div class="portlet-body form">
                    {!! Form::open(['route' => 'company.store', 'method' => 'POST','files' => true]) !!}
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
                            <div class="form-group form-md-line-input">
                                <label class="col-md-4 control-label" for="form_control_1"> company_name</label>
                                <div class="col-md-8">
                                    <input type="text" name="company_name" class="form-control" id="form_control_1">
                                    <div class="form-control-focus"> </div>
                                </div>
                            </div>             

                            <div class="form-group form-md-line-input">
                                <label class="col-md-4 control-label" for="form_control_1"> company_phone</label>
                                <div class="col-md-8">
                                    <input type="text" name="company_phone" class="form-control" id="form_control_1"></textarea>
                                    <div class="form-control-focus"> </div>
                                </div>
                            </div>

                            <div class="form-group form-md-line-input">
                                <label class="col-md-4 control-label" for="form_control_1"> physical_address</label>
                                <div class="col-md-8">
                                    <input type="text" name="physical_address" class="form-control" id="form_control_1"></textarea>
                                    <div class="form-control-focus"> </div>
                                </div>
                            </div>
                            
                        </div>

                        <div class="col-md-6">

                            <div class="form-group form-md-line-input">
                                <label class="col-md-4 control-label" for="form_control_1">company_email </label>
                                <div class="col-md-8">
                                    <input name="company_email" type="email" class="form-control" id="form_control_1">
                                    <div class="form-control-focus"> </div>
                                </div>
                            </div>
                            
                            <div class="form-group form-md-line-input">
                                <label class="col-md-4 control-label" for="form_control_1">zip_code </label>
                                <div class="col-md-8">
                                    <input type="text" name="zip_code" class="form-control" id="form_control_1">
                                    <div class="form-control-focus"> </div>
                                </div>
                            </div>

                            <div class="form-group form-md-line-input">
                                <label class="col-md-4 control-label" for="form_control_1">slang</label>
                                <div class="col-md-8">
                                    <input type="text" name="slang" class="form-control" id="form_control_1">
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
