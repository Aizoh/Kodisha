@extends('layouts.admin')
@section('content')

    <h1 class="page-title">team Details</h1>

    <div class="row">
        <div class="col-md-12">
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption font-red-sunglo">
                        <i class="icon-settings font-red-sunglo"></i>
                        <span class="caption-subject font-green bold uppercase">team Details</span>
                    </div>
                    <div class="actions">
                        <a href="{{ Route('team.index') }}" class="btn btn sbold red btn-circle btn-sm active">back</a>
                        <a href="{{ Route('team.edit', $team->id) }}" class="btn btn sbold green btn-circle btn-sm active">Edit</a>

                    </div>
                </div>
                <div class="portlet-body form">
                    <div class="form-body">
                        <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Name:</label>
                                <p>{{ $team->names }}</p>
                            </div>
                            <div class="form-group">
                                <label>Phone:</label>
                                <p>{{ $team->phone }}</p>
                            </div>
                            <div class="form-group">
                                <label>Email:</label>
                                <p>{{ $team->email }}</p>
                            </div>
                            <div class="form-group">
                                <label>Designation:</label>
                                <p>{{ $team->designation }}</p>
                            </div>
                            <div class="form-group">
                                <label>Department:</label>
                                <p>{{ $team->department }}</p>
                            </div>
                            <div class="form-group">
                                <label>Byte:</label>
                                <p>{{ $team->mybyte }}</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {{-- <label>Image:</label> --}}
                                <img src="{{ asset($team->image_path) }}" alt="team Image" class="img-fluid rounded" style="max-width: 400px; height: auto;">
                            </div>
                        </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
