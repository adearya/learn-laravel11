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
      return view('users.form', [
        'user' => new User(),
        'meta_page' => [
          'title' => 'Create user:',
          'method' => 'POST',
          'url' => '/users',
          'submit_text' => 'Create'
        ]
      ]);
    }

    public function store(Request $request) {
      // dd($request->all());
      // User::create($request->only('name', 'email', 'password'));

      // User::create($request->validate([
      //   'name' => ['required', 'min:3', 'max:255', 'string'],
      //   'email' => ['required', 'email'],
      //   'password' => ['required', 'min:8'],
      // ]));
      User::create($request->validate($this->requestValidated()));

      return redirect('/users');
    }

    public function show(User $user) {
      return view('users.show', [
        'user' => $user,
      ]);
    }

    public function edit(User $user) {
      return view('users.form', [
        'user' => $user,
        'meta_page' => [
          'title' => 'Edit user:' . $user->name,
          'method' => 'PUT',
          'url' => '/users/' . $user->id,
          'submit_text' => 'Update'
        ]
      ]);
    }

    public function update(Request $request, User $user) {
      $user->update($request->validate($this->requestValidated()));

      return redirect('users');
    }

    protected function requestValidated() {
      return [
        'name' => ['required', 'min:3', 'max:255', 'string'],
        'email' => ['required', 'email'],
        'password' => ['required', 'min:8'],
      ];
    }
}
