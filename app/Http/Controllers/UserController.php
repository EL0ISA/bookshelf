<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function show(User $user) {
        $response = Gate::inspect('ver-user', $user);
        if($response->allowed()){
            return view('usuarios.profile', ['user'=>$user]);
        }else{
            return redirect()->to(route('user.show', [$user = Auth::user()]));
        }
    }

    public function edit (Request $request, User $user) {
        $response = Gate::inspect('ver-user', $user);
        if($response->allowed()){
            return view('usuarios.edit', ['user'=>$user]);
        }else{
            return redirect()->to(route('user.edit', [$user = Auth::user()]));
        }
    }

    public function  update (Request $request, User $user) {
        Gate::authorize('ver-user', $user);

        $name = $request->post('name');
        $user->name= $name;
        $email = $request->post('email');
        $user->email= $email;
        $aniversario = $request->post('aniversario');
        $user->aniversario= $aniversario;

        $user->save();
        
        return redirect()->to(route('user.show', ['user'=>$user]));

    }

}