<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
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
          'url' => route('users.store'),
          'submit_text' => 'Create'
        ]
      ]);
    }

    public function store(UserRequest $request) {
      // dd($request->all());
      // User::create($request->only('name', 'email', 'password'));

      // User::create($request->validate([
      //   'name' => ['required', 'min:3', 'max:255', 'string'],
      //   'email' => ['required', 'email'],
      //   'password' => ['required', 'min:8'],
      // ]));
      // User::create($request->validate($this->requestValidated()));
      User::create($request->validated());

      // return redirect('/users');
      return to_route('users.index');
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
          'url' => route('users.update' , $user->id),
          'submit_text' => 'Update'
        ]
      ]);
    }

    public function update(UserRequest $request, User $user) {
      $user->update($request->validated());

      // return redirect('users');
      return to_route('users.index');
    }

    public function destroy(User $user) {
      $user->delete();

      // return redirect('users');
      return to_route('users.index');
    }
    // protected function requestValidated() {
    //   return [
    //     'name' => ['required', 'min:3', 'max:255', 'string'],
    //     'email' => ['required', 'email'],
    //     'password' => ['required', 'min:8'],
    //   ];
    // }
    
}
