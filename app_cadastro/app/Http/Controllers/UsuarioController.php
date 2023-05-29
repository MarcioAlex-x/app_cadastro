<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuario = Usuario::all();
        return view('usuarios.index')->with('usuario',$usuario);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $usuario = new Usuario;
        
        $usuario->nome = $request->nome;
        $usuario->data_nasc = $request->data_nasc;
        $usuario->cpf_cnpj = $request->cpf_cnpj;
        

        if($request->hasFile('foto')&& $request->file('foto')->isValid()){
            //variável cujo o nome da imagem será armazenada
            $requestImg = $request->foto;
            //variável para a extensão da imagem receber tratamento
            $extension = $requestImg->extension();
            //tratamento para o nome da imagem, evitar que nomes sejam repqetidos, pois serão salvas na mesma pasta
            $nome_imagem = md5($requestImg->getClientOriginalName() . strtotime('now')) . $extension;
            //salvar a imagem na pasta apropriada para imagens de usuários somente
            $requestImg->move(public_path('imgs/usuarios'), $nome_imagem);

            $usuario->foto = $nome_imagem;

        }

        $usuario->nome_social = $request->nome_social;

        $usuario->save();
        // $input = $request->all();
        // Usuario::create($input);
        return redirect('usuario')->with('mensagem','Usuário adicionado com sucesso!');
    }

    /**
     * Display the specified resource.     
    * @param int $id
    * @return \Illuminate\Http\Response
    */
    public function show($id)
    {
        $usuario = Usuario::find($id);
        return view('usuarios.show')->with('usuario', $usuario);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $usuario = Usuario::find($id);
        return view('usuarios.edit')->with('usuario',$usuario);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $usuario = Usuario::find($id);        
        $input = $request->all();
        $usuario->update($input);
        return redirect('usuario')->with('mensagem','Usuário atualizado com sucesso!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Usuario::destroy($id);
        return redirect('usuario')->with('mensagem','Usuário excluido com sucesso!');
    }
}
