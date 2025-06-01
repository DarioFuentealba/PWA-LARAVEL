<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    public function rules(): array{
        return [
            'name' => ['string', 'max:255'],
            'email' => ['email', 'max:255'],
            'borde_decorativo' => ['nullable', 'in:borde1.png,borde2.png,borde3.png,borde4.png,borde5.png,borde6.png'],
            'avatar' => ['nullable', 'in:avatar1.png,avatar2.png,avatar3.png,avatar4.png,avatar5.png,avatar6.png,avatar7.png,avatar8.png,avatar9.png,avatar10.png,avatar11.png'],
        ];
    }

    //Ver datos del perfil
    public function show(Request $request){
        $user = $request->user();
        return view('profile.show', compact('user'));
    }

    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View{
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse{
        $user = $request->user();
        $user->fill($request->validated());

        //Si se cambia el email, reseteo verificación
        if ($user->isDirty('email')) {
            $user->email_verified_at = null;
        }

        $user->borde_decorativo = $request->borde_decorativo;

        $user->save();

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse{
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
