<?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;

// class UserController extends Controller
// {
//     public function profile($id, $name)
//     {
//         return view('user.profile', compact('id', 'name'));
//     }
// }


// namespace App\Http\Controllers;

// use App\Models\UserModel;
// use Illuminate\Http\Request;

// class UserController extends Controller
// {
//     public function index()
//     {
//         // Ambil semua data dari tabel m_user menggunakan Eloquent Model
//         $user = UserModel::all();

//         return view('user', ['data' => $user]);
//     }
// }


namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        // $user = UserModel::findOr(20, ['username', 'nama'], function (){
        //     abort(404);
        // });
        // $data = [
        //     'level_id' => 2,
        //     'username' => 'manager_Tiga',
        //     'nama' => 'Manager 3',
        //     'password' => Hash::make('12345')
        // ];

        // UserModel::create($data);

        // $user = UserModel::where('level_id', 2)->count();
        // // dd($user);
        // return view('user', ['data' => $user]);

        $user = UserModel::firstOrNew(
            [
                'username' => 'manager33',
                'nama' => 'Manager Tiga Tiga',
                'password' => hash::make('12345'),
                'level_id' => 2
            ]
        );
        $user->save();
        
        return view('user', ['data' => $user]);
    }
}
