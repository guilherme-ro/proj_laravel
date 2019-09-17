@extends('layouts.app')

@section('content')
    <h3>Endereços Cadastrados</h3>

    <form action="search" method="POST" class="form form-inline">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="text" name="nome" class="form-control" placeholder="Nome">
        <input type="text" name="telefone" class="form-control mx-2" placeholder="Telefone">
        <button type="submit" class="btn btn-primary">Pesquisar</button>
    </form>


        @if(count($enderecos) > 0) 
            <div class="container pt-3">
                <table class="table-responsive">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Endereço</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">Opções</th>
                        </tr>
                    </thead>
                    @foreach($enderecos as $endereco)
                        <tbody>
                            <tr>
                            <th scope="row"></th>
                            <td>{{ $endereco->user->nome}}</td>
                            <td>{{ $endereco->endereco}}</td>
                            <td>{{ $endereco->user->telefone}}</td>
                            <td>
                                <div class="d-flex d-inline-flex">
                                <a  href="/enderecos/{{$endereco->id}}" class="btn btn-primary btn-sm mr-2 view_data">Mostrar</a>

                                @if(!Auth::guest())
                                    <a  href="/enderecos/{{$endereco->id}}/edit" class="btn btn-warning btn-sm mr-2">Editar</a>
                                    {!!Form::open(['action' => ['EnderecosController@destroy', $endereco->id], 'method' => 'POST'])!!}
                                    {{Form::hidden('_method', 'DELETE')}}
                                    {{Form::submit('Apagar', ['class' => 'btn btn-danger btn-sm'])}}
                                    {!!Form::close()!!}
                                @endif
                                </div>
                            </td>
                            </tr>
                            <tr>
                        </tbody>
                    @endforeach
                </table>
            </div>
            <br>
        @if(isset($dataForm))
            {{ $enderecos->appends($dataForm)->links() }}
        @else
            {{ $enderecos->links() }}
        @endif
    @else
        <div class="mt-3">
            <p>Nenhum endereço Encontrado</p>
        </div>
    @endif
@endsection


