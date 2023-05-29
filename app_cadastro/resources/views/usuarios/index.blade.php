@extends('usuarios.layout')
@section('conteudo')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                @if (session('mensagem'))
                    <p class="text-center session-msg border rounded ">{{ session('mensagem') }} </p> 
                @endif
                
                <div class="card">
                    <div class="card-header">
                        <h2>App-Cadastro</h2>
                    </div>
                    <div class="card-body">
                        <button class="btn btn-success btn-sm">
                            <a href="{{ url('/usuario/create') }}" class="align-items-center text-light"
                                title="Add Usuario" style="text-decoration: none">
                                <ion-icon name="person-add-outline"></ion-icon>
                                Adicionar
                            </a>
                        </button>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nome</th>
                                        <th>Data de nascimento</th>
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  
                                    @foreach ($usuario as $item)
                                        <tr>    
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $item->nome_social }}</td>
                                            <td>{{ date('d/m/Y', strtotime($item->data_nasc)) }}</td>
                                            <td>
                                                <a href="{{ url('/usuario/' . $item->id) }}" title="Ver usuário"
                                                    class="btn btn-info btn-sm ms-2">
                                                    <ion-icon name="search-outline">
                                                    </ion-icon>Consultar
                                                </a>
                                                <a href="{{ url('/usuario/' . $item->id .'/edit') }}" title="Editar usuário"
                                                    class="btn btn-primary btn-sm ms-2">
                                                    <ion-icon name="pencil-outline">
                                                    </ion-icon>Editar
                                                </a>

                                                <form action="{{ url('/usuario/' .$item->id) }}" method="post" accept-charset="UTF-8" style="display:inline;">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit" href="" title="Deletar usuário"
                                                        class="btn btn-danger btn-sm ms-2" onclick="return confirm('Deseja deletar este usuário?')">
                                                        <ion-icon name="trash-outline">
                                                        </ion-icon>Deletar
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                   

                                </tbody>
                            </table>
                        </div>
                    </div>
                    @if (count($usuario)==0)
                    <p class="text-center">Nenhum usuário cadastrado. <a href="{{ url('/usuario/create') }}">Adicionar</a> novo usuário!</p>
                @endif
                </div>
            </div>
        </div>
        <a class="btn btn-primary me-3" href="{{ url('/') }}" class="link">Home</a>
        
    </div>
@endsection
