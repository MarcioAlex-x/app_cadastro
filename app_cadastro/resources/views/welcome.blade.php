@extends('usuarios.layout')
@section('conteudo')
    <div class="card" style="margin:20px;">
        <div class="card-header">
            Home
            
        </div>
        <div class="card-body">
            <h1 class="text-center">App-Cadastro</h1>
            
            <p class="fs-5 mb-4 text-center">
                Neste app, você pode <a href="{{ url('/usuario') }}">consultar</a> os nossos usuários cadastrados, <a href="{{ url('/usuario/create') }}">cadastrar</a> um novo usuário ou atualizar as suas informações.
            </p>
            <img src="{{url('/imgs-sis/cadastro.png') }}" alt="">
        </div>

    </div>
@endsection
