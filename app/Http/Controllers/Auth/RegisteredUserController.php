<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Spatie\Permission\Models\Role;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $roles = Role::all();
        return view('auth.register', compact('roles'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|same:password_confirmation',
            'role' => 'required'
        ]);
        $role = Role::findById($request->role);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $role->name,
            'password' => Hash::make($request->password),

        ]);
        $user->assignRole($request->role);
        event(new Registered($user));

        Auth::login($user);

        return redirect(Auth::user()->hasRole('admin') ? RouteServiceProvider::ADMIN_HOME :  RouteServiceProvider::USER_HOME);
    }
}
