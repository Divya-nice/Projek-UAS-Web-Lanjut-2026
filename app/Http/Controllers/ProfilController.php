<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class ProfilController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        if($user->role == 'admin'){
            return view('admin.profil.index', compact('user'));
        }

        return view('relawan.profil.index', compact('user'));
    }

    public function update(Request $request)
    {
        /** @var User $user */
        $user = Auth::user();
        
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'password' => 'nullable|min:8|confirmed',
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
        ];

        if($request->filled('password'))
        {
            $data['password'] = $request->password;
        }

        $user->update($data);

        return redirect()
            ->route('profil.index')
            ->with('success','Profil berhasil diperbarui!');
    }
}