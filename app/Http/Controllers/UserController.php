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
        // Update data user menggunakan Eloquent Model
        $data = [
            'nama' => 'Pelanggan Pertama',
        ];
        UserModel::where('username', 'customer-1')->update($data); // Update berdasarkan username

        // Ambil semua data terbaru untuk ditampilkan di view
        $user = UserModel::all();
        return view('user', ['data' => $user]);
    }
}
