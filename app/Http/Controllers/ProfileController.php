<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function EditProfile(ProfileRequest $req)
    {
        $name = $req->name;
        $surname = $req->surname;
        $patronymic = $req->patronymic;
        $email = $req->email;
        $age = $req->age;
        $info = $req->info;
        $addres = $req->addres;


        $users = DB::table('users')->where(['id' => session('id')])->get();
        $avatar = $users[0]->avatar;

        if ($req->file('avatar'))
            $avatar = $req->file('avatar')->store('avatars');



        DB::table('users')->where(['id' => session('id')])->update([
            'age' => $age,
            'name' => $name,
            'surname' => $surname,
            'patronymic' => $patronymic,
            'email' => $email,
            'info' => $info,
            'addres' => $addres,
            'avatar' => $avatar,
        ]);

        $users = DB::table('users')->where(['id' => session('id')])->get();
        return view('pages.profile.index', compact('users'));
    }

    public function DataProfile()
    {
        $users = DB::table('users')->where(['id' => session('id')])->get();
        return view('pages.profile.edit', compact('users'));
    }

    public function Profile()
    {
        $users = DB::table('users')->where(['id' => session('id')])->get();
        return view('pages.profile.index', compact('users'));
    }
}
