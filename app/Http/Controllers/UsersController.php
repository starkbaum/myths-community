<?php

namespace Myths\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class UsersController extends Controller
{

    public function settings()
    {
        $user = Auth::user();

        return view('settings.userSettings', compact('user'));
    }

    public function storeAvatar(Request $request)
    {
        $user = Auth::user();

        if ($request->hasFile('avatar')) {
            File::delete(public_path('/uploads/avatars/' . $user->avatar));
            $avatar = $request->file('avatar');
            $fileName = str_slug($user->name) . '-' . time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(150, 150)->save(public_path('/uploads/avatars/' . $fileName));
            $user->avatar = $fileName;
            $user->save();
        }
        return view('settings.userSettings', compact('user'));
    }

}
