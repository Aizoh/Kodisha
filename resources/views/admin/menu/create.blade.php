@extends('layouts.admin')
@section('content')

    <!-- END PAGE BAR -->
    <!-- BEGIN PAGE TITLE-->
    <h1 class="page-title"> Menu Settings
    </h1>
    <!-- END PAGE TITLE-->
    <!-- END PAGE HEADER-->

 <div class="row">

        <div class="col-md-12">

            <div class="portlet light bordered">

                <div class="portlet-title">

                    <div class="caption font-red-sunglo">
                        <i class="icon-settings font-red-sunglo"></i>
                        <span class="caption-subject font-green bold uppercase"> Add A menu</span>
                    </div>

                    <div class="actions">

                        <a href="{{ Route('admin') }}" class="btn btn sbold red btn-sm active">back</a>
                        @if (Session::has('alert-danger'))
                        <div class="alert alert-danger">
                            {{ Session::get('alert-danger') }}
                        </div>
                    @endif
                    </div><!--actions-->

                </div>
                <div class="portlet-body form">
                    {!! Form::open(['route' => 'menu.store', 'method' => 'POST','files' => true]) !!}
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
                                <label class="col-md-4 control-label" for="form_control_1">Name</label>
                                <div class="col-md-8">
                                    <input type="text" name="name" class="form-control" id="form_control_1">
                                    <div class="form-control-focus"> </div>
                                </div>
                            </div>             

                            <div class="form-group form-md-line-input">
                                <label class="col-md-4 control-label" for="form_control_1">price</label>
                                <div class="col-md-8">
                                    <input type="numeric" name="price" class="form-control" id="form_control_1">
                                    <div class="form-control-focus"> </div>
                                </div>
                            </div>

                            <div class="form-group form-md-line-input">
                                <label class="col-md-4 control-label" for="form_control_1">new_price</label>
                                <div class="col-md-8">
                                    <input type="numeric" name="new_price" class="form-control" id="form_control_1">
                                    <div class="form-control-focus"> </div>
                                </div>
                            </div>

                            <div class="form-group form-md-line-input">
                                <label class="col-md-4 control-label" for="form_control_1">Image</label>
                                <div class="col-md-8">
                                    <input type="file" name="image" class="form-control" id="form_control_1">
                                    <div class="form-control-focus"> </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">

                            <div class="form-group form-md-line-input">

                                <label class="col-md-4  control-label">Type</label>
                                <div class="col-md-8">
                                    <select name="type" class="form-control form-md-line-input">
                                        <option value=""> Type..</option>
                                        @foreach ($types as $type)
                                            <option value="{{ $type }}">{{ $type }}</option>
                                        @endforeach
                                    </select>
                                </div>

                            </div>

                            <div class="form-group form-md-line-input">
                                <label class="col-md-4 control-label" for="form_control_1">Description</label>
                                <div class="col-md-8">
                                    <textarea name="description" class="form-control" id="form_control_1">
                                        
                                    </textarea>
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
