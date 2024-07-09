<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function FormAdd(RegisterRequest $req)
    {
        $fullName = $req->fullName;
        $typeClient = $req->typeClient;
        $date = $req->date;
        $dataFile = $req->dataFile;
        $type = 0;
        
        if($fullName == '') {
            $error = 1;
        } else {
            $error = 0;
        }
        if($dataFile== null) {
            $error = 1;
        } else {
            $error = 0;
        }

        $path = $dataFile->store('files');
 
        DB::table('data_file')->insert(['fullName' => $fullName, 'typeClient' => $typeClient, 'date' => $date, 'dataFile' => $path]);

        $data_file = DB::table('data_file')->get();

        return view('pages.addData.index', compact('data_file', 'error'));
    }

    public function info()
    {
        $data_file = DB::table('data_file')->get();
        return view('pages.info.index', compact('data_file'));
    }

    public function addData()
    {
        $data_file = DB::table('data_file')->get();
        $error = 1;
        return view('pages.addData.index', compact('data_file', 'error'));
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
