@extends('layouts.admin')
@section('content')

    <!-- END PAGE BAR -->
    <!-- BEGIN PAGE TITLE-->
    <h1 class="page-title"> Facts Settings
    </h1>
    <!-- END PAGE TITLE-->
    <!-- END PAGE HEADER-->

 <div class="row">

        <div class="col-md-12">

            <div class="portlet light bordered">

                <div class="portlet-title">

                    <div class="caption font-red-sunglo">
                        <i class="icon-settings font-red-sunglo"></i>
                        <span class="caption-subject font-green bold uppercase"> Add A Fact</span>
                    </div>

                    <div class="actions">

                        <a href="{{ Route('fact.index') }}" class="btn btn sbold red btn-sm active">back</a>
                        @if (Session::has('alert-danger'))
                        <div class="alert alert-danger">
                            {{ Session::get('alert-danger') }}
                        </div>
                    @endif
                    </div><!--actions-->

                </div>
                <div class="portlet-body form">
                    <form action="{{route('fact.update', $fact->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
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
                                <label class="col-md-4 control-label" for="form_control_1"> No. of Happy Customers</label>
                                <div class="col-md-8">
                                    <input type="number" name="happy_customers" class="form-control" id="form_control_1" value="{{$fact->happy_customers}}">
                                    <div class="form-control-focus"> </div>
                                </div>
                            </div>             

                            <div class="form-group form-md-line-input">
                                <label class="col-md-4 control-label" for="form_control_1"> No. of Experts</label>
                                <div class="col-md-8">
                                    <input type="number" name="experts" class="form-control" id="form_control_1" value="{{$fact->experts}}">
                                    <div class="form-control-focus"> </div>
                                </div>
                            </div>
                            
                            
                        </div>

                        <div class="col-md-6">

                            <div class="form-group form-md-line-input">
                                <label class="col-md-2 control-label" for="form_control_1">Ranking </label>
                                <div class="col-md-10">
                                    <input name="ranking" type="number" class="form-control" id="form_control_1" value="{{$fact->ranking}}">
                                    <div class="form-control-focus"> </div>
                                </div>
                            </div>
                            
                            <div class="form-group form-md-line-input">
                                <label class="col-md-4 control-label" for="form_control_1">No. of Complete Events </label>
                                <div class="col-md-8">
                                    <input type="number" name="complete_events" class="form-control" id="form_control_1" value="{{$fact->complete_events}}">
                                    <div class="form-control-focus"> </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn blue">Submit</button>
                        <button type="button" class="btn default">Cancel</button>
                    </div>
                    <form>

                </div>
            </div>

        </div>

    </div>
    <!-- End: life time stats -->

@endsection
