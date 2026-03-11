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

        // Membuat data user baru menggunakan Eloquent
        // $user = UserModel::create([
        //     'username' => 'manager11',
        //     'nama'     => 'Manager11',
        //     'password' => Hash::make('12345'),
        //     'level_id' => 2,
        // ]);

        // $user->username = 'manager12';

        // $user->save();

        // $user->wasChanged(); // true
        // $user->wasChanged('username'); // true
        // $user->wasChanged(['username', 'level_id']); // true
        // $user->wasChanged('nama'); // false
        // dd($user->wasChanged(['nama', 'username'])); // true


        $user = UserModel::all();
        return view('user', ['data' => $user]);
    }
    public function tambah()
    {
        return view('user_tambah');
    }
    public function tambah_simpan(Request $request)
    {
        UserModel::create([
            'username' => $request->username,
            'nama'     => $request->nama,
            'password' => Hash::make($request->password),
            'level_id' => $request->level_id
        ]);

        return redirect('/user');
    }
    public function ubah($id)
    {
        $user = UserModel::find($id);
        return view('user_ubah', ['data' => $user]);
    }
}
