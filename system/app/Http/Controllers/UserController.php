<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserStoreRequest;
use App\Models\User;
use App\Models\UserDetail;

class UserController extends Controller{
    function index(){
        $data['list_user'] = User::withcount('produk')->get();
        return view('user.index', $data);
    }
    function create(){
        return view('user.create');
    }
    function store(UserStoreRequest $request){
        $user = new User;
        $user->nama = request('nama');
        $user->username = request('username');
        $user->email = request('email');
        $user->password = request('password');
        $user->jenis_kelamin = 2;
        if(request('level') == 'admin'){
            $user->level = 1; 
        } else{
            $user->level = 2; 
        }
        $user->save();

        $userdetail = new UserDetail;
        $userdetail->id_user = $user->id;
        $userdetail->no_handphone = request('no_handphone');
        $userdetail->save();

        return redirect('admin/user')->with('success', 'Data berhasil ditambahkan');
    }
    function show(User $user){

        $loggedUser = request()->user();
        
        if($loggedUser->id != $user->id) return abort(404);

        $data['user'] = $user;
        return view('user.show', $data);
    }
    function edit(User $user){
        $data['user'] = $user;
        return view('user.edit', $data);
    }
    function update(User $user){
        $user->nama = request('nama');
        $user->username = request('username');
        $user->email = request('email');
        if(request('password')) $user->password = request('password');
        $user->save();

        return redirect('admin/user')->with('success', 'Data berhasil diedit');
    }
    function destroy(User $user){
        $user->delete();

        return redirect('admin/user')->with('danger', 'Data berhasil dihapus');
    }
}