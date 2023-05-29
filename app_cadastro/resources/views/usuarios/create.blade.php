@extends('usuarios.layout')
@section('conteudo')
    <div class="card" style="margin:20px;">
        
        <div class="card-header">
            Adicionar novo usuário
        </div>
        <div class="card-body">
            <div class="d-flex justify-content-end"><a class="btn btn-primary" href="{{ url('/') }}" class="link">Home</a></div>
            <form action="{{ url('usuario') }}" method="post" enctype="multipart/form-data" >
                @csrf
                <label>Nome</label>
                
                @error('nome')
                    <span class="ms-5 text-danger">{{$message}}</span>
                @enderror
                <input type="text" name="nome" id="nome" class="form-control required" value="{{old('nome')}}">
                

                
                <label>Data de nascimento</label>
                @error('data_nasc')
                    <span class="ms-5 text-danger">{{$message}}</span>
                @enderror
                <input type="date" name="data_nasc" id="data_nasc" class="form-control required" value="{{old('data_nasc')}}">
                
                <label>CPF/CNPJ</label>
                @error('cpf_cnpj')
                    <span class="ms-5 text-danger">{{$message}}</span>
                @enderror
                <input type="text" name="cpf_cnpj" id="cpf_cnpj" class="form-control required" value="{{old('cpf_cnpj')}}">
              
                <label>Foto</label>
                @error('foto')
                    <span class="ms-5 text-danger">{{$message}}</span>
                @enderror
                <input type="file" name="foto" id="foto" class="form-control required">
               
                <label>Nome social</label>
                @error('nome_social')
                    <span class="ms-5 text-danger">{{$message}}</span>
                @enderror
                <input type="text" name="nome_social" id="nome_social" class="form-control required" value="{{old('nome_social')}}">
               
                <input type="submit" value="Salvar" class="submeter btn btn-success mt-2">
                
        <a class="btn btn-info me-3 mt-2" href="{{ url('/usuario') }}" class="link">Consultar</a>
            </form>
        </div>
        
    </div>
@endsection 