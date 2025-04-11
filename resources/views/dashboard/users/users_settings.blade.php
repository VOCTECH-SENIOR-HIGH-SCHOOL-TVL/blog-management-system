@extends('pages.profile_page')

<x-titles.profile_settings_title></x-titles.profile_settings_title>

@section('content')
    @if (auth()->user())
        <div class="container">
            <div class="row justify-content-center">
                @if(session()->has('success-profile'))
                    <div class="alert alert-success text-center">
                        {{ session()->get('success-profile') }}
                    </div>
                @endif
                @if(session()->has('failed-profile'))
                    <div class="alert alert-danger">
                        {{ session()->get('failed-profile') }}
                    </div>
                @endif
                <div class="container">
                    <div class="row mt-4">
                        <div class="cardw3" style="text-align: left;">
                            <form method="POST" class="form-group" style="padding: 20px;" action="{{ route('user.update', $user->id) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="form-group">
                                    <img style="border-radius: 5px;" height="150" src="{{$user->picture ? $user->picture : "https://thumbs.dreamstime.com/b/    no-image-available-icon-flat-vector-no-image-available-icon-flat-vector-illustration-132482953.jpg"}}">
                                </div>
                                <div class="form-group">
                                    <label for="first_name" class="text-label mb-2">First Name</label>
                                    <input type="text" name="first_name" class="form-control text-capitalize" value="{{ old('first_name', $user->first_name) }}">
                                </div>
                                <div class="form-group">
                                    <label for="last_name" class="text-label mb-2">Last Name</label>
                                    <input type="text" name="last_name" class="form-control text-capitalize" value="{{ old('last_name', $user->last_name) }}">
                                </div>
                                <div class="form-group">
                                    <label for="email" class="text-label mb-2">Email address</label>
                                    <input type="email" name="email" class="form-control" value="{{ old('email', $user->email) }}">
                                </div>
                                <div class="form-group">
                                    <label for="picture" class="text-label mb-2">Update Profile Picture</label>
                                    <input type="file" name="picture" class="">
                                </div>
                                <div class="form-group">
                                    <label for="about" class="text-label mb-2">About</label>
                                    <textarea name="about" class="form-control" rows="3" id="myeditorinstance">{{ old('about', $user->about) }}</textarea>            
                                </div>
                                <div class="form-group">
                                    <label for="password" class="text-label mb-2">Password</label>
                                    @error('password')
                                        <span style="color: red;  font-size: 12px;">required</span>
                                    @enderror
                                    <input type="password" name="password" class="form-control">
                                </div>
                                <div class="row align-right">
                                    <div class="btn btn-group" style="margin-top: 20px;">
                                        <button type="submit" class="btn btn-primary button-hover">Save</button>
                                    </div>    
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection