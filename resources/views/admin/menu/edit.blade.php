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
                        <span class="caption-subject font-green bold uppercase"> Edit a Menu</span>
                    </div>

                    <div class="actions">

                        <a href="{{ Route('menu.index') }}" class="btn btn sbold red btn-sm active">back</a>
                        @if (Session::has('alert-danger'))
                        <div class="alert alert-danger">
                            {{ Session::get('alert-danger') }}
                        </div>
                    @endif
                    </div><!--actions-->

                </div>
                <div class="portlet-body form">
                    <form method="POST" action="{{ route('menu.update', $menu->id) }}" enctype="multipart/form-data">
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
                                <label class="col-md-4 control-label" for="form_control_1">Name</label>
                                <div class="col-md-8">
                                    <input type="text" name="name" class="form-control" id="form_control_1" value="{{$menu->name}}">
                                    <div class="form-control-focus"> </div>
                                </div>
                            </div>             

                            <div class="form-group form-md-line-input">
                                <label class="col-md-4 control-label" for="form_control_1">price</label>
                                <div class="col-md-8">
                                    <input type="numeric" name="price" class="form-control" id="form_control_1" value="{{$menu->price}}">
                                    <div class="form-control-focus"> </div>
                                </div>
                            </div>

                            <div class="form-group form-md-line-input">
                                <label class="col-md-4 control-label" for="form_control_1">new_price</label>
                                <div class="col-md-8">
                                    <input type="numeric" name="new_price" class="form-control" id="form_control_1" value="{{$menu->new_price}}">
                                    <div class="form-control-focus"> </div>
                                </div>
                            </div>

                            <div class="form-group form-md-line-input">
                                <label class="col-md-4 control-label" for="form_control_1">Image</label>
                                <div class="col-md-8">
                                    <input type="file" name="image" class="form-control" id="form_control_1">
                                    <div class="form-control-focus"> </div>
                                    <small class="form-text text-muted">Leave this blank to keep the current image.</small>
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
                                        <option value="{{ $type }}" {{ $menu->type === $type ? 'selected' : '' }}>
                                            {{ $type }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>

                            </div>

                            <div class="form-group form-md-line-input">
                                <label class="col-md-4 control-label" for="form_control_1">Description</label>
                                <div class="col-md-8">
                                    <textarea name="description" class="form-control" id="form_control_1">
                                        {{$menu->description}}
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
                    </form>

                </div>
            </div>

        </div>

    </div>
    <!-- End: life time stats -->

@endsection
