<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function SigneUP(RegisterRequest $req)
    {
        $login = $req->login;
        $email = $req->email;
        $password = $req->password;
        $doublePassword = $req->doublePassword;
        $checkYes = $req->checkYes;
        $type = 0;

        if ($password != $doublePassword) {
            $error = 1;
            return view('pages.signeup.index', compact('error'));
        }

        if ($checkYes === null) {
            $error = 2;
            return view('pages.signeup.index', compact('error'));
        }

        $users = DB::table('users')->get();
        foreach ($users as $user) {
            if ($login === $user->login) {
                $error = 3;
                return view('pages.signeup.index', compact('error'));
            }
            if ($email === $user->email) {
                $error = 4;
                return view('pages.signeup.index', compact('error'));
            }
        }

        session(['id' => $user->id]);
        DB::table('users')->insert(['login' => $login, 'email' => $email, 'password' => Hash::make($password), 'type' => $type]);

        $users = DB::table('users')->where(['id' => session('id')])->get();
        return view('pages.profile.index', compact('users'));
    }

    public function SigneIN(RegisterRequest $req)
    {
        $login = $req->login;
        $password = $req->password;
        $type = 0;

        $users = DB::table('users')->get();
        foreach ($users as $user) {
            if ($login === $user->login) {
                if (Hash::check($password, $user->password)) {
                    session(['id' => $user->id]);

                    $users = DB::table('users')->where(['id' => session('id')])->get();
                    return view('pages.profile.index', compact('users'));
                }
            }
        }


        $error = 1;
        return view('pages.signein.index', compact('error'));
    }

    public function deleteSession()
    {
        session()->flush();
        return view('pages.main.index');
    }
}
