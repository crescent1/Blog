<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BUsercontroller extends Controller
{
    /**
     * Undocumented function
     *
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function index()
    {
        $user = Auth::user();

        $userList = User::where('status', '1')->orderBy('id')->paginate(10);

        return view('dashboard.user.index', [
            'user' => $user,
            'userList' => $userList,
        ]);
    }

    public function create()
    {
        $user = Auth::user();

        return view('dashboard.user.create', [
            'user' => $user
        ]);

    }

    public function store(UserCreateRequest $request)
    {
        $validate = $request->validated();

        $validate['status'] = '1';

        User::create($validate);

        return redirect()->route('user.index')->with([
            'status' => 'user berhasil ditambah!'
        ]);
    }

    public function destroy(User $user)
    {
        $user->update(['status' => '0']);
        $user->delete();

        return redirect()->route('user.index')->with([
            'statusDel' => 'User berhasil dihapus!'
        ]);
    }

    public function edit(User $admin)
    {
        $user = Auth::user();

        return view('dashboard.user.edit', [
            'user' => $user,
            'admin' => $admin,
        ]);
    }

    public function update(UserEditRequest $request, User $user)
    {

        $validData = $request->validated();

        if(($validData['password'] !== null) && ($validData['password_confirmation'] !== null)) {

            $request->validate([
                'password' => 'required|confirmed'
            ]);

            $user->where('id', $validData['id'])->update([
                'name' => $validData['name'],
                'email' => $validData['email'],
                'type' => $validData['type'],
                'password' => Hash::make($validData['password']),
            ]);

        } else if(($validData['password'] !== null) || ($validData['password_confirmation'] !== null)) {

            $request->validate([
                'password' => 'required|confirmed',
                'password_confirmation' => 'required',
            ]);

        } else {

            $user->where('id', $validData['id'])->update([
                'name' => $validData['name'],
                'email' => $validData['email'],
                'type' => $validData['type'],
            ]);

        }

        return redirect()->route('user.index')->with([
            'status' => 'User berhasil diupdate!'
        ]);

    }
}
