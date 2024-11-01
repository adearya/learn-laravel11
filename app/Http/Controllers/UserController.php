<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index() {
      $users = User::query()->latest()->get();

      return view('users.index', [
        "users" => $users,
      ]);
      // $user = DB::table('users')->get();

      // return $user;
    }

    public function create() {
      return view('users.create');
    }

    public function store(Request $request) {
      // dd($request->all());
      User::create($request->only('name', 'email', 'password'));

      return redirect('/users');
    }
}
