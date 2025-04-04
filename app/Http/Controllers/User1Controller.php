<?php

namespace App\Http\Controllers;

use App\Models\User;

use App\Http\Requests\UserRequest;

use Illuminate\Http\Request;

class User1Controller extends Controller
{
    public function index() {
        $users = User::query()->latest()->get();

        return view('users.index', [
            'users' => $users,
        ]);
    }

    public function create() {
        return view('users.form', [
            'user' => new User(),
            'meta_page' => [
                'title' => 'Create User',
                'url' => route('users.store'),
                'method' => 'POST',
                'submit_text' => 'Create',
            ]
        ]);
    }

    public function store(UserRequest $request) {
        User::create($request->validated());

        return to_route('users.index');
    }

    public function show(User $user) {
        return view('users.show', [
            'user' => $user
        ]);
    }

    public function edit(User $user) {
        return view('users.form', [
            'user' => $user,
            'meta_page' => [
                'title' => 'Edit User' . $user->name,
                'url' => route('users.update' , $user),
                'method' => 'PUT',
                'submit_text' => 'Update',
            ]
        ]);
    }

    public function update(UserRequest $request, User $user) {
        $user->update($request->validated());

        return to_route('users.index');
    }

    public function destroy(User $user) {
        $user->delete();

        return to_route('users.index');
    }

}
