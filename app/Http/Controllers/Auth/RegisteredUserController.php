<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\ImageManager;
use Illuminate\Http\RedirectResponse;
use Illuminate\Auth\Events\Registered;
use Intervention\Image\Drivers\Gd\Driver;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('backends.auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::min(5)],
        ]);

        if($request->hasFile('thumbnail')) {
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$request->file('thumbnail')->getClientOriginalExtension();
            $img = $manager->read($request->file('thumbnail'));
            $img = $img->resize(300, 300);
            $img->toJpeg(80)->save(base_path('public/uploads/users/'.$name_gen));
            $save_url = 'uploads/users/'.$name_gen;
        } // endif ==========
        
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'image' => $save_url,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('dashboard', absolute: false));
    }
}
