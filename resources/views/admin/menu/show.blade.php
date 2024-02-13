@extends('layouts.admin')
@section('content')

    <h1 class="page-title">Menu Details</h1>

    <div class="row">
        <div class="col-md-12">
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption font-red-sunglo">
                        <i class="icon-settings font-red-sunglo"></i>
                        <span class="caption-subject font-green bold uppercase">Menu Details</span>
                    </div>
                    <div class="actions">
                        <a href="{{ Route('menu.index') }}" class="btn btn sbold red btn-circle btn-sm active">back</a>
                        <a href="{{ Route('menu.edit', $menu->id) }}" class="btn btn sbold green btn-circle btn-sm active">Edit</a>

                    </div>
                </div>
                <div class="portlet-body form">
                    <div class="form-body">
                        <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Name:</label>
                                <p>{{ $menu->name }}</p>
                            </div>
                            <div class="form-group">
                                <label>Price:</label>
                                <p>{{ $menu->price }}</p>
                            </div>
                            <div class="form-group">
                                <label>New Price:</label>
                                <p>{{ $menu->new_price }}</p>
                            </div>
                            <div class="form-group">
                                <label>Type:</label>
                                <p>{{ $menu->type }}</p>
                            </div>
                            <div class="form-group">
                                <label>Description:</label>
                                <p>{{ $menu->description }}</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {{-- <label>Image:</label> --}}
                                <img src="{{ asset($menu->image_path) }}" alt="Menu Image" class="img-fluid rounded" style="max-width: 400px; height: auto;">
                            </div>
                        </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
