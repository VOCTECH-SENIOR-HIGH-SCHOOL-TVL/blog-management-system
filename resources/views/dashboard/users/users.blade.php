@extends('pages.profile_page')

<x-titles.users_title></x-titles.users_title>
@section('content')
    @if (Auth::check())
        @if (auth()->user()->admin == 'true')
            <div class="dashboard-div-form container">
                @if(session()->has('success-user-deleted'))
                    <div class="alert alert-success">
                        {{ session()->get('success-user-deleted') }}
                    </div>
                @endif
        <!-- @if (auth()->user()->admin == 'true' || auth()->user()->admin == 'TRUE')
            <a class="" href="{{route('register')}}">Create Users</a>
        @endif -->
                <table>
                    <thead>
                        <tr>
                            @if (auth()->user()->admin == 'true' || auth()->user()->admin == 'TRUE')
                                <th class="text-center">ID</th>
                            @endif
                            <th class="text-center">Name</th>
                            <th class="text-center">Email</th>
                            @if (auth()->user()->admin == 'true' || auth()->user()->admin == 'TRUE')
                                <th class="text-center">Action</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td class="text-center">{{ $user->id }}</td>
                                <td class="text-center"><a class="text-capitalize" href="{{ route('custom.show', $user) }}">{{ Str::before($user->first_name, ' ' , $user->last_name) }}</a></td>
                                <td class="text-center">{{ $user->email }}</td>
                                @if (auth()->user()->admin == 'true' || auth()->user()->admin == 'TRUE')
                                    @if ($user->id !== 15)
                                        <td class="text-center">
                                            <form method="POST" action="{{ route('users.destroy', $user->id) }}" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <input class="btn btn-danger" type="submit" value="Delete" onclick="return confirm('Are you sure you want to delete this user?');"/>
                                            </form>
                                        </td>
                                    @else
                                        <td class="text-center">
                                            <button class="btn btn-danger" onclick="alert('This User Cannot Be Deleted')">Delete</button>
                                        </td>
                                    @endif
                                @endif
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <br>
                </form>   
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
                </script>
            </div>
        @else 

        <!-- 404 Error Text -->
        <style>
            .noselect {
                user-select: none;
            }

            .margin {
                margin-top: 8rem
            }
        </style>
        <div class="text-center noselect margin">
            <div class="error mx-auto" data-text="404">404 error</div>
            <p class="lead  mb-5 text-gray-800">
                <img 
                height="150"
                src="assets/img/locked.gif" 
                alt="Locked access"
                title="Locked access">
            </p>
            <p class="text-gray-500 mb-0">You do not have permission to see this page...</p>
            <a href="{{route('profile-index')}}">&larr; Back</a>
        </div>    
        @endif
    @endif
@endsection

















