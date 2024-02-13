@extends('layouts.admin')
@section('content')

    <h1 class="page-title">Service Details</h1>

    <div class="row">
        <div class="col-md-12">
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption font-red-sunglo">
                        <i class="icon-settings font-red-sunglo"></i>
                        <span class="caption-subject font-green bold uppercase">Service Details</span>
                    </div>
                    <div class="actions">
                        <a href="{{ Route('service.index') }}" class="btn btn sbold red btn-circle btn-sm active">back</a>
                        <a href="{{ Route('service.edit', $service->id) }}" class="btn btn sbold green btn-circle btn-sm active">Edit</a>

                    </div>
                </div>
                <div class="portlet-body form">
                    <div class="form-body">
                        <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Name:</label>
                                <p>{{ $service->name }}</p>
                            </div>
                            <div class="form-group">
                                <label>Description:</label>
                                <p>{{ $service->description }}</p>
                            </div>
                            <div class="form-group">
                                <label>Full Description:</label>
                                <p>{{ $service->full_description }}</p>
                            </div>
                            
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {{-- <label>Image:</label> --}}
                                <img src="{{ asset($service->image_path) }}" alt="Menu Image" class="img-fluid " style="max-width: 500px; height: auto;">
                            </div>
                        </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
