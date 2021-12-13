<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Resenha;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class ResenhaPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    public function mostrar(User $user, Resenha $resenha)
    {
        return $user->id === $resenha->user_id
            ? Response::allow()
            : Response::deny('Não autorizado');
    }
    public function atualizar(User $user, Resenha $resenha)
    {
        return $user->id === $resenha->user_id
            ? Response::allow()
            : Response::deny('Não autorizado');
    }
}
