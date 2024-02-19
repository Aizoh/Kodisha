@extends('layouts.account-layout')

@section('content')
  <div class="account-content container-fluid">
    <div class="jumbotron">
      <h2 class="page-header">Saved Homes</h2>
      <hr>
      <div class="row">
        <div class="col-lg-5 col-sm-6 mx-auto">
          
            {{-- <p class="lead">You haven't added any homes yet.</p>
            <p class="lead">Start Searching for property to add now.</p>
            <br>
          <a href="{{route('property.index')}}" class="btn danger-btn">Search homes</a> --}}

          <div class="property-list">
            <div class="row">
              @foreach ($saved_homes as $property)
              <div class="col-md-6 col-sm-6">
                <div class="property-card" >
                  <img src="{{asset($property->img_url)}}" alt="" class="img-fluid">
                  <div class="property-card-body border">
                    <a href="{{$property->path()}}">
                      <h5 class="property-price badge badge-info">${{number_format($property->price)}}</h5>
                      <div class="d-flex my-2">
                        <div class="badge badge-secondary"><i class="fas fa-bed"></i> {{$property->bed}} beds</div>
                        <div class="badge badge-secondary mx-2"><i class="fas fa-bath"></i> {{$property->bath}} baths</div>
                        <div class="badge badge-secondary"><i class="fas fa-mountain"></i> {{$property->area}} sqft</div>
                      </div>
                      <p class="property-name">{{$property->name}}</p>
                      <p class="text-muted property-address">{{$property->address}}</p>
                    </a>
                    <a href="{{$property->path()}}" class="btn btn-block primary-btn">Check Availability</a>
                  </div>
                </div>
              </div>
              @endforeach 
            </div>
          </div>
          
        </div>
      </div>
    </div>
    @include('inc.account-footer')
  </div><!--account-content-->
@endsection


@push('js')
@endpush


@push('css')
<style>
.jumbotron{
  min-height:80vh;
}
</style>
@endpush