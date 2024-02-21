@extends('layouts.account-layout')

@section('content')

  <div class="account-content container-fluid">
    <div class="jumbotron">
      <h2 class="page-header">Rental Resume</h2>
      <hr>
      <div class="row">
        <div class="col-md-4 col-sm-12">
          <h6>{{strtoupper($user->name)}}</h6>
          <p>Renter in {{$user->userInfo->location}}</p>
          <p>{{$user->email}}</p>
          <br>
          <a class="text-success cursor-pointer" role="button" href="{{route('page','user-profile')}}">Edit profile settings</a>
          <hr>
          <h6 class="text-muted">Share Settings</h6>
          <label for="SendMyRentalResume">
            <input type="checkbox" id="SendMyRentalResume" {{$user->userInfo->rental_inquiries ? 'checked':''}}> 
            Always send my rental resume
            <p class="text-muted px-3">
              When checked, the information here will be included with all future rental inquires. It will not
              be
              public
            </p>
          </label>
        </div>
        <div class="col-md-8 col-sm-12">
          <div class="form">
            <form action="{{route('resume.store')}}" method="POST">
              @csrf
              <div class="form-group">
                <label for="move_in" class="">MOVE-IN-DATE</label>
                <select name="move_in" id="" class="form-control">
                  <option value="not sure" {{ $user_resume->move_in === 'not sure' ? 'selected' : '' }}>Unspecified</option>
                  <option value="next month" {{ $user_resume->move_in === 'next month' ? 'selected' : '' }}>Within next month</option>
                  <option value="negotiable" {{ $user_resume->move_in === 'negotiable' ? 'selected' : '' }}>Let's talk about it</option>
                  <option value="immediately" {{ $user_resume->move_in === 'immediately' ? 'selected' : '' }}>Immediately</option>
              </select>
              
              </div>
              <div class="form-group">
                <label for="move_from">MOVING FROM</label>
                <input type="text" class="form-control" placeholder="Your current zip code" name="move_from" value="{{$user_resume->move_from}}">
              </div>
              <div class="form-group">
                <label for="">TENANTS</label>
                <select name="tenants" id="" class="form-control">
                  <option value="unspecified" {{ $user_resume->tenants === 'unspecified' ? 'selected' : '' }}>Unspecified</option>
                  <option value="1 Adult" {{ $user_resume->tenants === '1 Adult' ? 'selected' : '' }}>1 Adult</option>
                  <option value="2 Adults" {{ $user_resume->tenants === '2 Adults' ? 'selected' : '' }}>2 Adults</option>
                  <option value="3+ Adults" {{ $user_resume->tenants === '3+ Adults' ? 'selected' : '' }}>3+ Adults</option>
              </select>
              
              </div>
              <div class="form-group">
                <label for="pets">PETS</label>
                <select name="pets" id="" class="form-control">
                  <option value="dog" {{ $user_resume->pets === 'dog' ? 'selected' : '' }}>Dog(s)</option>
                  <option value="none" {{ $user_resume->pets === 'none' ? 'selected' : '' }}>I don't have any pets.</option>                 
                  <option value="cat" {{ $user_resume->pets === 'cat' ? 'selected' : '' }}>Cat(s)</option>
                  <option value="other" {{ $user_resume->pets === 'other' ? 'selected' : '' }}>Other(s)</option>
                  <option value="unspecified" {{ $user_resume->pets === 'unspecified' ? 'selected' : '' }}>Unspecified</option>
              </select>
              </div>
              <div class="form-group">
                <label for="drugs">SMOKING</label>
                <select name="drugs" id="" class="form-control">
                  <option value="yes smoke" {{ $user_resume->drugs === 'yes smoke' ? 'selected' : '' }}>Yes, I smoke</option>
                  <option value="no smoke" {{ $user_resume->drugs === 'no smoke' ? 'selected' : '' }}>No, I don't smoke</option>
                  <option value="unspecified" {{ $user_resume->drugs === 'unspecified' ? 'selected' : '' }}>Unspecified</option>
                </select>
              </div>
              <div class="form-group">
                <label for="profession">Profession</label>
                <input type="text" name="profession" class="form-control" value="{{$user_resume->profession}}">
              </div>
              <hr>
              <div class="d-flex justify-content-end">
                <button class="btn btn-outline-dark mr-2">Cancel</button>
                <button class="btn btn-danger" type="submit">Save Profile</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div><!-- jumbotron -->
    @include('inc.account-footer')
  </div><!--account-content -->
@endsection


@push('js')
@endpush


@push('css')
<style>

</style>
@endpush