<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{

    public function index()
    {

        $users = User::paginate(10);

        $user = auth()->user();
        
        return view('dashboard.users.users', compact(
            'users',
            'user',
        ));

    }

    public function create()
    {
        return view('register');
    }

    public function show($id)
    {
        
        $user = User::findOrFail($id);
        
        return view('dashboard.users.users_card', compact(
            'user',
        ));

    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $id,
            'password' => 'required|string',
        ]);

        $user = User::findOrFail($id);

        if (!Hash::check($request->password, $user->password)) {
            return redirect()->back()->withErrors(['password' => 'The provided password does not match your current password.']);
        }

        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->about = $request->about;

        if ($request->hasFile('picture')) {
            $file = $request->file('picture');
            $name = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('storage/images'), $name);
            $user->picture = $name;
        }

        if ($request->filled('password')) {
            $user->password = bcrypt($request->password);
        }

        $user->save();

        return redirect()->back()->with('success-profile', 'Profile updated successfully!');
    }   

    public function destroy($id)
    {
        
        try {
        
            $users = User::findOrFail($id);
            $users->delete();
    
            return redirect()->back()->with('success-user-deleted', 'User Successfully Deleted!');
        
          }catch(\Exception $e){
          
            return redirect()->back()->with('Error:'.$e->getMessage());
        
        }	

    }

    public function settings() {

        $user = auth()->user();

        return view('dashboard.users.users_settings', compact(
            'user',
        ));

    }
    
}
