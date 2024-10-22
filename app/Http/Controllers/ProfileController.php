<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class ProfileController extends Controller {
    public function index(): View {
        return view('admin.profile');
    }

    public function update(Request $request): RedirectResponse {
        $request->user()->fill($request->validated());

        if($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();
        return redirect()->back();
    }

    public function changePass(Request $request): RedirectResponse {
        $user = auth()->user();
        try {
            if($request->password !== null) {
                if(!Hash::check($request->current_password, $user->password)) {
                    return redirect()->back()->withError('Köhnə şifrə yanlışdır.');
                }
                if(Hash::check($request->password, $user->password)) {
                    return redirect()->back()->withError('Köhnə şifrə və yeni şifrə eyni ola bilməz.');
                }
                if($request->password === $request->password_confirmation) {
                    $user->password = Hash::make($request->password);
                    $user->save();
                } else {
                    return redirect()->back()->withError('Şifrələr uyğun gəlmir.');
                }
            } else {
                return redirect()->back()->withError('Yeni şifrə daxil edin.');
            }
            return redirect()->back()->withSuccess('Şifrə dəyişdirildi.');
        } catch(Exception) {
            return redirect()->back()->withError('Şifrə dəyişdirilərkən xəta baş verdi.');
        }
    }

    public function delete(): RedirectResponse {
        auth()->user()->delete();
        return redirect()->route('home');
    }
}
