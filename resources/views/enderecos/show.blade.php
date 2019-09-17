@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row"></div>
    <div class="row justify-content-center my-5">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-dark mt-2"><h1>{{$endereco->user->nome}}</h1></div>

                <div class="card-body text-dark">
                    <div class="row">
                        <div class="col-md-4">
                                <label><b>Endereço:<b></label> <h6>{{$endereco->endereco}}, {{$endereco->nro_endereco}}</h6>
                                <label><b>Complemento:</b></label> <h6>{{ $endereco->complemento}}</h6>
                                <label><b>Bairro:</b></label> <h6>{{ $endereco->bairro}}</h6>
                            </div>
                            <div class="col-md-8">
                                <label><b>Cidade:</b></label> <h6>{{ $endereco->cidade}}</h6>
                                <label><b>UF:</b></label> <h6>{{ $endereco->uf}}</h6>
                                <small>Adicionado em: {{ $endereco->created_at}}</small><br />
                                <small>Modificado em: {{ $endereco->updated_at}}</small> 
                            </div>
                    </div>
                        <hr>
                        <div class="row mb-3">
                                <a href="/enderecos" class="btn btn-primary mr-2 mb-resp">Voltar</a>
                
                                @if(!Auth::guest())
                                @if(Auth::user()->id == $endereco->cod_pessoa)
                                <a href="/enderecos/{{$endereco->id}}/edit" class="btn btn-warning mr-2 mb-resp">Editar Endereço</a>
                                                
                                {!!Form::open(['action' => ['EnderecosController@destroy', $endereco->id], 'method' => 'POST', 'class' => 'pull-right delete'])!!}
                                {{Form::hidden('_method', 'DELETE')}}
                                {{Form::submit('Apagar Endereço', ['class' => 'btn btn-danger delete'])}}
                                {!!Form::close()!!}
                                @endif
                                @endif
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

