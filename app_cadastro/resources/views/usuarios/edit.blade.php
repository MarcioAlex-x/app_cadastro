
@extends('usuarios.layout')
@section('conteudo')
    <div class="card" style="margin:20px;">
        <div class="card-header">
            Adicionar novo usuário
        </div>
        <div class="card-body">
            <form action="{{ url('usuario/' .$usuario->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <label>Nome</label>
            <input type="hidden" name="id" id="id" value="{{ $usuario->id }}">
            <input type="text" name="nome" id="nome" class="form-control" value="{{ $usuario->nome }}">
            <label>Data de nascimento</label>
            <input type="date" name="data_nasc" id="data_nasc" class="form-control" value="{{ $usuario->data_nasc }}">
            <label>CPF/CNPJ</label>
            <input type="text" name="cpf_cnpj" id="cpf_cnpj" class="form-control" value="{{ $usuario->cpf_cnpj }}">
            <label>Nome social</label>
            <input type="text" name="nome_social" id="nome_social" class="form-control" value="{{ $usuario->nome_social }}">
            <input type="submit" value="Editar" class="btn btn-success mt-2">
            </form>
        </div>
        
    </div><a class="btn btn-primary me-3" href="{{ url('/') }}" class="link">Home</a>
        <a class="btn btn-info" href="{{ url('/usuario') }}" class="link">Usuários cadastrados</a>
@endsection
