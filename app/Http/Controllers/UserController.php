<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    function create(){
        return view('users.create');
    }

    function store(UserRequest $request)  {
        $file = $request->file('image');
        $filename = time() . '.' . $file->extension();
        Storage::disk('public')->putFileAs('images', $file, $filename);
        $data = [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'image' => $filename,
            'password' => bcrypt('adimn1234')
        ];
        User::create($data);
        return redirect()->route('users.create');
    }
}
