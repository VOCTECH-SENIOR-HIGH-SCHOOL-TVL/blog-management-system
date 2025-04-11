@extends('pages.profile_page')

@section('content')
  @if (Auth::check())
    <div class="container my-5">
      <div class="profile-card2">
        <div class="profile-header2">
          <h3 class="text-capitalize">{{ $user->first_name . ' ' . $user->last_name }}</h3>
        </div>
        <hr class="hr">
        <div class="profile-body2">
          <img src="{{ $user->picture }}" alt="User  Picture" class="profile-picture2">
          <h5><u>{{ $user->email }}</u></h5>
          <div class="card2">
            <div class="card-body2">
              <p class="about2">{{ $user->about ?? 'about me' }}</p>
            </div>
          </div>
        </div>
        <div class="profile-footer2">
        @if (auth()->check() && auth()->user()->id === $user->id)
          <a href="{{route('user.settings')}}" class="edit-prof">Edit Profile</a>
        @endif
      </div>
    </div>
  @endif
@endsection