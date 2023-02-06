<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function index(User $user) {
        $user = $user::firstWhere('id', auth()->user()->id);
        return view('home.profile', [
            "title" => "Profile",
            "header" => "Your Profile",
            "user" => $user
        ]);
    }

    public function update(Request $request) {
        $rules = [
            'image' => 'required|image|file|dimensions:ratio=1/1|max:2048',
        ];

        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('profile-image');
        }

        User::where('id', auth()->user()->id)
            ->update($validatedData);

        return redirect()->back()->with('success', 'Foto Diupdate!');
    }

    public function delete(Request $request) {

        if ($request->oldImage) {
            Storage::delete($request->oldImage);
        }
        $validatedData['image'] = null;
        

        User::where('id', auth()->user()->id)
            ->update($validatedData);

        return redirect()->back()->with('success', 'Foto Dihapus!');
    }
}
