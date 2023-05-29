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
                <input type="text" name="nome" id="nome" class="form-control required">
                
                <label>Data de nascimento</label>
                <input type="date" name="data_nasc" id="data_nasc" class="form-control required">
                
                <label>CPF/CNPJ</label>
                <input type="text" name="cpf_cnpj" id="cpf_cnpj" class="form-control required">
              
                <label>Foto</label>
                <input type="file" name="foto" id="foto" class="form-control required">
               
                <label>Nome social</label>
                <input type="text" name="nome_social" id="nome_social" class="form-control required">
               
                <input type="submit" value="Salvar" class="submeter btn btn-success mt-2">
            </form>
        </div>
        
    </div>
@endsection