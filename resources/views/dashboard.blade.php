@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row my-4"></div>
    <div class="row justify-content-center my-4">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-dark">Painel de Controle</div>

                <div class="card-body text-dark">
                    
                    <div class="row mx-auto">
                            <a href="/enderecos/create" class="btn btn-primary mb-3">Cadastrar Endereço</a>
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                        </div>
                        <div class="row mx-auto">
                                @if(count($enderecos) > 0)
                                <table class="text-dark">
                                    
                                    <tr>
                                        <th>Endereço</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                    @foreach($enderecos as $endereco)
                                        <tr>
                                            <td>{{$endereco->endereco}}</td>
                                            <td><a href="/enderecos/{{$endereco->id}}/edit" class="btn btn-warning btn-sm">Editar</a></td>
                                            <td>
                                                {!!Form::open(['action' => ['EnderecosController@destroy', $endereco->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                                    {{Form::hidden('_method', 'DELETE')}}
                                                    {{Form::submit('Delete', ['class' => 'btn btn-danger btn-sm'])}}
                                                {!!Form::close()!!}
                                            </td>
                                        </tr>
                                    @endforeach
                                
                                </table>
                            
                            @else
                                <p>Não há endereços cadastrados</p>
                            @endif
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

