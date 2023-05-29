@extends('usuarios.layout')
@section('conteudo')
    <div class="card" style="margin:20px;">
        <div class="card-header">
            Página do usuário
            
        </div>
        <div class="card-body">
            <h3 class="text-center display-3">{{ $usuario->nome_social }}</h3>
            <img src="/imgs/usuarios/{{ $usuario->foto }}" class="card-img-top mb-3" alt="Foto de {{ $usuario->nome_social }}"
                style="width:200px;">
            {{-- <h5 class="card-title">Nome social: </h5> --}}
            <p class="fs-4 card-text">CPF/CNPJ: <span class="border px-3 py-1 rounded">{{ $usuario->cpf_cnpj }}</span></p>
            <p class="fs-4 card-text">Data de nascimento: <span class="border rounded px-3 py-1">{{ date('d/m/Y', strtotime($usuario->data_nasc)) }}</span></p>
            <p class="fs-4 card-text">Nome completo: <span class="border rounded px-3 py-1">{{ $usuario->nome }}</span></p>
            <p class="fs-4 card-text">Cadastro criado em: <span class="border rounded px-3 py-1">{{ date('d/m/Y' , strtotime($usuario->created_at)) }}</span></p>
        </div>

    </div>
    <a class="btn btn-primary me-3" href="{{ url('/') }}" class="link">Home</a>
        <a class="btn btn-info" href="{{ url('/usuario') }}" class="link">Usuários cadastrados</a>
@endsection
