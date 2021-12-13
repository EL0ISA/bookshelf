<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Resenha;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class ResenhaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $lista =Auth::user()->resenhas;

        return view('dashboard',['resenhas'=>$lista]);
    }
    public function create()
    {
        return view('resenhas.create');
    }
    public function store(Request $request)
    {
        $resenha = new Resenha;
        $resenha->livro= $request->post('livro');
        $resenha->nota= $request->post('nota');
        $resenha->resenhafinal= $request->post('resenhafinal');
        $resenha->user_id = Auth::user()->id;

        $resenha->save();

        return redirect()->to(route('resenhas.index'));
    }
    public function show(Resenha $resenha)
    {
        $response = Gate::inspect('mostrar-resenha', $resenha);
        if($response->allowed()){
            return view('resenhas.show', ['resenha'=>$resenha]);
        }else{
            return redirect()->to(route('resenhas.index'));
        }
    }
    public function edit(Request $request, Resenha $resenha)
    {
        Gate::authorize('mostrar-resenha', $resenha);
        return view('resenhas.edit', ['resenha'=>$resenha]);
    }
    public function update(Request $request, Resenha $resenha)
    {
        Gate::authorize('mostrar-resenha', $resenha);

        $livro = $request->post('livro');
        $resenha->livro= $livro;
        $nota = $request->post('nota');
        $resenha->nota= $nota;
        $resenhafinal = $request->post('resenhafinal');
        $resenha->resenhafinal= $resenhafinal;

        $resenha->save();
        
        return redirect()->to(route('resenhas.show', ['resenha'=>$resenha->id]));
    }
}
